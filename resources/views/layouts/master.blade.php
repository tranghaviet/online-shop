<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Online Clothing Store</title>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('/css/jquery-ui.css')}}" rel="stylesheet">
    <!--[if lt IE         9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('/images/ico/favicon.ico')}}">
    <script src="{{asset('/js/jquery-1.12.4.js')}}"></script>
    <script src="{{asset('/js/jquery-ui.js')}}"></script>

    <style>
        .brandLi {
            padding: 10px;
        }

        .brandLi b {
            font-size: 16px;
            color: #FE980F
        }
    </style>
</head><!--/head-->

<body>
<header id="header"><!--header-->
    @include('includes.top_header')
    @include('includes.menu')
</header><!--/header-->
@yield('content')

<footer id="footer"><!--Footer-->
    @include('includes.footer')
</footer><!--/Footer-->

<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;"><i class="fa fa-angle-up"></i></a>
</body>
</html>
