<html>
<head>
    <title>Trang quản lý sản phẩm</title>
    <meta charset="UTF-8">
    <title>Bootstrap 3 Simple Tables</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
       .example {
        margin: 20px;
    }

    .table {
        font-size: 14px;
        page-break-after : always;
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
                     <h1 style="color: orange" style="margin: 100px"  >Trang quản lý sản phẩm</h1>
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
                        <li><a href="{{url('admin/productAdd')}}">Thêm sản phẩm</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->

<div class="container">
    <div class="row">
        <div class="example">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th width="200">MoTa</th>
                    <th>Đơn giá</th>
                    <th>Hình</th>
                    <th>Nhóm sản phẩm</th>
                    <th>Ngày cập nhập</th>
                    <th>Số lượng còn lại</th>
                    <th>Chỉnh sửa</th>
                </tr>

                @foreach ($products as $product)
                <tr>

                    <td>{{$product->ID}}</td>
                    <td>{{$product->ProductName}}</td>
                    <td width="200">{{$product->Describe}}</td>
                    <td>{{$product->Price}}</td>
                    <td><img src="{{asset('/images/products/'.$product->Picture)}}" + alt={{$product->Picture}} height="100" width="100"></td>
                    <td>{{$product->Name}}</td>
                    <td>{{$product->UpdateDay}}</td>
                    <td>{{$product->Ceasefire}}</td>
                    <td>
                        <form method="post" action="{{url('admin/productEdit')}}"">
                            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                            <input type="hidden" name="id" value={{$product->ID}}></input>
                            <input type="submit" class="btn btn-success" value="Sửa"></input>
                        </form>
                    <form method="get" action="{{url('admin/productDelete')}}" onSubmit="if(!confirm('Bạn chắc là muốn xóa chứ?')){return false;}">
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <input type="hidden" name="id" value={{$product->ID}}></input>
                        <input type="submit" class="btn btn-danger" value="Xóa"></input>
                    </form>
                </td>
            </tr>
            @endforeach
            <?php
            echo $products->appends($_POST)->render();
            ?>
        </table>
    </div>
</div>
</div>
</body>
</html>