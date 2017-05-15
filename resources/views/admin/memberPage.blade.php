<html>
<head>
    <title>Đây là trang quản lý thành viên</title>
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

        .table {
            font-size: 14px;
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
                    <h1 style="color: orange" style="margin: 100px"  >Trang quản lý thành viên</h1>
                    <ul class="nav navbar-nav collapse navbar-collapse">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->
<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="{{url('admin/customerAdd')}}">Thêm khách hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->


<div class="example" style="overflow-x:auto;">
    <div class="container">
        <div class="row">
            <table class="table">
                <tr bgcolor="orange">
                    <th>ID</th>
                    <th width="300px">Họ tên</th>
                    <th width="200px">Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th width="150px">Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Email</th>
                    <th>Ghi chú</th>
                    <th>Chỉnh sửa</th>
                </tr>
                @foreach ($customers as $customer)
                <tr>

                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td width="500">ddaay la dia chi</td>
                    {{-- {{$customer->Address}} --}}
                    <td>dien thoai</td>
                    {{-- {{$customer->Phone}} --}}
                    <td>{{$customer->Birthday}}</td>
                    <?php if($customer->Gender == 1){?>
                    <td>Nam</td>
                    <?php } else{ ?>
                    <td>Nữ</td>
                    <?php } ?>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->note}}</td>
                    <td>
                        <form method="post" action="{{url('admin/customerEdit')}}">
                            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                            <input type="hidden" name="id" value={{$customer->id}}></input>
                            <input type="submit" class="btn btn-success" value="Sửa"></input>
                        </form>
                <form method="post" action="{{url('admin/customerDelete')}}">
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <input type="hidden" name="id" value={{$customer->id}}></input>
                    <input type="submit" class="btn btn-danger" value="Xóa"></input>
                </form>

                <div class="modal fade" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body&hellip;</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </td>
</tr>
@endforeach
</table>
</div>
</div>
</div>
</body>
</html>