<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Online Clothing Store</title>
    <link href="{{asset('theme/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/jquery-ui.css')}}" rel="stylesheet">
    <!--[if lt IE         9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('theme/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{url('../')}}/theme/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{url('../')}}/theme/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{url('../')}}/theme/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="{{url('../')}}/theme/images/ico/apple-touch-icon-57-precomposed.png">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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

<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
</body>
</html>
