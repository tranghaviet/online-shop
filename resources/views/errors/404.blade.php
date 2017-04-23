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
    <link href="{{asset('/css/main.css')}}" rel="stylesheet">
    <!--[if lt IE         9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('/images/ico/favicon.ico')}}">

</head><!--/head-->

<body>
<div class="container text-center">
    <div class="content-404">
        <h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
        <p>Uh... So it looks like you brock something. The page you are
            looking for has up and Vanished.</p>
        <img src="{{asset('/images/404/404.png')}}" class="img-responsive"
             style="width: 300px; height: 300px;" align="middle"
             alt="Product not found"/>
        <div class="center-block" style="width: 484px">
            <div class="input-group" id="custom-search-input">
                <input type="text" class="search-query form-control" placeholder="Search">
                <span class="input-group-btn">
					<button class="btn btn-danger" type="button">
						<span class="glyphicon glyphicon-search"></span>
					</button>
                </span>
            </div>
            <h2><a href="../">Bring me back Home</a></h2>
        </div>

    </div>
</div>
</body>
</html>