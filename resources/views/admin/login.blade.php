<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập vào trang quản lý</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="http://localhost/laradmin1/public/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .example {
            margin: 20px;
        }

        body {
           
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center; 

        }

    </style>
</head>
<body>
    <div class="example">
        <div class="container">
            <div class="row">
                <h2>Đăng nhập</h2>
                <form class="form-horizontal" action="{{url('admin/login')}}" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <div class="form-group">
                        <label class="control-label col-xs-2">Email</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" placeholder="Tên đăng nhập" name="username" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Mật Khẩu</label>
                        <div class="col-xs-10">
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>