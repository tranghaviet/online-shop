<!DOCTYPE html>
<html>
<head>
    <title>Sửa sản phẩm</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
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
                        <h1 style="color: orange" style="margin: 100px">Sửa sản phẩm</h1>
                        <ul class="nav navbar-nav collapse navbar-collapse">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="example" style="overflow-x:auto;">
            <div class="container">
                <div class="row">
                    <form method="get" action="{{url('admin/SubmitProductEdit')}}" onSubmit="if(!confirm('Bạn chắc là muốn lưu chứ?')){return false;}">
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <table class="table" width="50%" border="1" cellspacing="0" cellpadding="10">
                            <tr>
                                <th>ID</th>
                                <td>{{$product->ID}}</td>

                            </tr>

                            <tr>
                                <th>Tên sản phẩm</th>
                                <td>
                                    <input type="text" name="name" value="{{$product->ProductName}}"/>
                                </td>
                            </tr>
                            <tr>
                                <th>Mô tả</th>
                                <td>
                                    <input type="text" name="description" value="{{$product->Describe}}"/>
                                </td>
                            </tr>

                            <tr>
                                <th>Đơn giá</th>
                                <td>
                                    <input type="text" name="price" value="{{$product->Price}}"/>
                                </td>
                            </tr>

                            <tr>
                                <th>Nhóm sản phẩm ID</th>
                                <td>
                                    <select name="category">
                                        @foreach($categories as $category)
                                        <option value={{$category->ID}}
                                            @if($category->ID===$product->ID)
                                            selected="selected"
                                            @endif
                                            >{{$category->Name}}</option>

                                            @endforeach 
                                        </select>

                                    </td>
                                </tr>


                                <tr>
                                    <th>Ngày cập nhật</th>
                                    <td>
                                        <input type="text" name="date" value="{{$product->UpdateDay}}"/>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Số lượng còn</th>
                                    <td>
                                        <input type="text" name="available" value="{{$product->Ceasefire}}"/>
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="hidden" name="id" value="{{$product->ID}}"></input>
                                        <input type="submit" name="edit_product" class="btn btn-success" value="Lưu thay đổi"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            
        </body>
        </html>