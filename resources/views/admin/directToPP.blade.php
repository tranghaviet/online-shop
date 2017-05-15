<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Bootstrap 3 Simple Tables</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<title>Bootstrap 3 Simple Tables</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<style type="text/css">

			
			.button {background-color: orange;} /* Green */
			.button {font-size: 50px;}
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
<title>Sửa sản phẩm</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	@include('admin/header')
	<div class="header-bottom"><!--header-bottom-->
		<div class="container">
			<div class="row">
				<div class="col-sm-10">
					<div class="mainmenu pull-left">
						<ul class="nav navbar-nav collapse navbar-collapse"
						<li><a style="color: orange;font-size: 30px">Bạn đã thêm sản phẩm vào shop!</a></li>
						</ul>>
						<form method="get" action="{{url('admin/productPage')}}">
							
							<button class="button" type="submit" value="fdffddddddddddddddd">Chuyển hướng tới trang sản phẩm</button>
						</form>
					</div>
				</div>
			</div>
		</body>
		</html>