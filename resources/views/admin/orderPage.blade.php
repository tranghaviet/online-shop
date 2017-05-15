<html>
<head>

    <title>Đây là trang quản lý đơn đặt hàng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Bootstrap 3 Simple Tables</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        #menu ul{
            list-style-type:none;
            padding:0px;
            margin:0px;
        }

        #menu ul li{
            display:inline;
        }

        

        #menu ul a{
            text-decoration:none;
            /*width:129px;*/
            float:left;
            background: blue;
            color:#fff;
            font-weight:bold;
            text-align:right;
            line-height:20px;
            border-left:1px solid #fff;
        }
        .example {
            margin: 20px;
        }

        th {
            background-color: orange;
            color: white;
        }

        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>
    @include('admin/header')

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                     <h1 style="color: orange" style="margin: 100px"  >Trang quản lý đơn đặt hàng</h1>
                     <ul class="nav navbar-nav collapse navbar-collapse"></ul>
                 </ul>
             </div>
         </div>
     </div>
 </div><!--/header-bottom-->

<div class="example">
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <th>Mã đặt hàng</th>
                    <th>ID Khách</th>
                    <th>Tên khách hàng</th>
                    <th>Điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Chỉnh sửa</th>
                </tr>
                @foreach ($orders as $order)
                
                <tr>
                    <td>{{$order->ID}}</td>
                    <td>{{$order->UserID}}</td>
                    <td>{{$order->Name}}</td>
                    <td>{{$order->Phone}}</td>
                    <td>{{$order->Address}}</td>
                    <td>
                        <form method="post" action="{{url('admin/OrderDetail')}}" style="height: 20px ">
                            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                            <input type="hidden" name="id" value={{$order->ID}}></input>
                            <input type="submit" class="btn btn-success" value="Xem"></input>
                        </form>
                        
                        <form method="post" action="{{url('admin/OrderDelete')}}">
                            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                            <input type="hidden" name="id" value={{$order->ID}}></input>
                            <input type="submit" class="btn btn-danger" value="Xóa"></input>
                        </form>
                    </td>
                
            </tr>
            
            @endforeach
        </table>
    </div>
</div>
</div>

</body>
</html>