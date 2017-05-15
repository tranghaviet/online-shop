

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="D://font-awesome-4.7.0//font-awesome-4.7.0//css//font-awesome.min.css" rel="stylesheet">
    <link href="{{url('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{url('css/price-range.css')}}" rel="stylesheet">
    <link href="{{url('css/animate.css')}}" rel="stylesheet">
    <link href="{{url('css/main.css')}}" rel="stylesheet">
    <link href="{{url('css/responsive.css')}}" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="http://localhost/larashop/public/js/html5shiv.js"></script>
        <script src="http://localhost/larashop/public/js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="http://localhost/larashop/public/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost/larashop/public/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://localhost/larashop/public/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://localhost/larashop/public/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="http://localhost/larashop/public/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i>+2 95 01 88 821</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="{{url('admin')}}"><img src="{{url('images/home/logo.png')}}" alt="" /></a>
                            </div>
                        </div>
                        {{-- <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                                    <li><a href="http://localhost/larashop/public/checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                    <li><a href="http://localhost/larashop/public/cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <li><a href="http://localhost/larashop/public/login"><i class="fa fa-lock"></i> Login</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="{{url('admin')}}">Trang chủ</a></li>
                                    <li><a href="{{url('admin/memberPage')}}">Quản lý thành viên</a></li>
                                    <li><a href="{{url('admin/productPage')}}">Quản lý hàng hóa</a></li>
                                    <li><a href="{{url('admin/orderPage')}}">Xem đơn đặt hàng</a></li>
                                    <li><a href="{{url('admin/articlePage')}}">Quản lý bài viết</a></li>
                                    <li><a href="{{url('admin/logout')}}">Thoát đăng nhập</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->

        <script src="http://localhost/larashop/public/js/jquery.js"></script>
        <script src="http://localhost/larashop/public/js/bootstrap.min.js"></script>
        <script src="http://localhost/larashop/public/js/jquery.scrollUp.min.js"></script>
        <script src="http://localhost/larashop/public/js/price-range.js"></script>
        <script src="http://localhost/larashop/public/js/jquery.prettyPhoto.js"></script>
        <script src="http://localhost/larashop/public/js/main.js"></script>
    </body>
    </html>
