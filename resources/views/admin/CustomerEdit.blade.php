
<!DOCTYPE html>
<html>
<head>
    <title>Sửa thông tin khách</title>
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

        .table {
            font-size: 14px;
        }


    </style>
</head>
<body>

    @include('admin/header')
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <h1 style="color: orange" style="margin: 100px"  >Sửa thông tin khách hàng</h1>
                        <ul class="nav navbar-nav collapse navbar-collapse">
                        </ul>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
    
{{dd($customer)}}
    <div class="example">
        <div class="container">
            <div class="row">
                <form method="post" action="{{url('admin/SubmitCustomerEdit')}}" onSubmit="if(!confirm('Is the form filled out correctly?')){return false;}">
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <td>{{$customer->id}}</td>

                        </tr>

                        <tr>
                            <th>Họ tên</th>
                            <td>
                                <input type="text" name="name" value="{{$customer->name}}"/>
                            </td>
                        </tr>

                        <tr>
                            <th>Địa chỉ</th>
                            <td>
                                <input type="text" name="address" value="{{$customer->address}}"/>
                            </td>
                        </tr>

                        <tr>
                            <th>Điện thoại</th>
                            <td>
                                <input type="text" name="phone" value="{{$customer->phone}}"/>
                            </td>
                        </tr>


                        <tr>
                            <th>Gender</th>
                            <td>
                                <select name="sex">
                                    <?php if($customer->Gender == 1){?>
                                        <option value="Nam" selected="selected">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <?php } else {?>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ" selected="selected">Nữ</option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Birthday</th>
                                <td>
                                    <input type="text" name="birthday" value="{{$customer->Birthday}}"/>
                                    <div style="color: red">Nhập ngày theo dạng yyyy-mm-dd</div>
                                </td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td>
                                    <input type="email" name="email" value="{{$customer->Email}}"/>
                                </td>
                            </tr>

                            <tr>
                                <th>Ghi chú</th>
                                <td>
                                    <input type="text" name="note" value="{{$customer->Note}}"/>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <input type="hidden" name="id" value="{{$customer->id}}" onclick="myFunction()"></input>
                                    <input type="submit" name="edit_student" value="Lưu thay đổi"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
    </html>