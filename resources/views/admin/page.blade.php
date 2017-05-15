<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bootstrap 3 List</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		.example{
			margin: 20px;
		}

		.list-group-item:hover {
			color: blue;

		}

		.list-group-item{
			size: 50px;
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
						<h1 style="color: orange" style="margin: 100px">Trang quản lý đơn đặt hàng</h1>
						<ul class="nav navbar-nav collapse navbar-collapse">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->

	<div class="example">
		<div class="container">
			<div class="col-sm-3" style="font-size: 20px">
				<div class="panel-more1">
					<a class="panel-more1" href="{{url('admin/memberPage')}}" style="text-indent:20px"><br><i class="fa fa-users fa-5x" style="color:orange;"></i></a>
					<br>
					<a class="panel-more1" href="{{url('admin/memberPage')}}" style="text-align: center;">Quản lý thành viên</a>
					</div
				</div>
			</div>

			<div class="col-sm-3" style="font-size: 20px">
				<div class="panel-more1">
					<a class="panel-more1" href="{{url('admin/productPage')}}" style="text-indent:27px"><br><i class="fa fa-product-hunt fa-5x" style="color:orange;"></i></a>
					<br>
					<a class="panel-more1" href="{{url('admin/productPage')}}" style="text-align: center;">Quản lý sản phẩm</a>
					</div
				</div>
			</div>

			<div class="col-sm-3" style="font-size: 20px">
				<div class="panel-more1">
					<a class="panel-more1" href="{{url('admin/orderPage')}}" style="text-indent:20px"><br><i class="fa fa-cart-plus fa-5x" style="color:orange;"></i></a>
					<br>
					<a class="panel-more1" href="{{url('admin/orderPage')}}" style="text-align: center;">Quản lý đơn hàng</a>
					</div
				</div>
			</div>

			<div class="col-sm-3" style="font-size: 20px">
				<div class="panel-more1">
					<a class="panel-more1" href="{{url('admin/articlePage')}}"style="text-indent:10px"><br><i class="fa fa-file-o fa-5x" style="color:orange;"></i></a>
					<br>
					<a class="panel-more1" href="{{url('admin/articlePage')}}" style="text-align: center;">Quản lý blog</a>
					</div
				</div>
			</div>

		</div>
		</html>

