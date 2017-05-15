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
						<h1 style="color: orange" style="margin: 100px"  >Thêm hàng vào đơn với mã đơn là {{$idOrder}}</h1>
						<ul class="nav navbar-nav collapse navbar-collapse">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->

	<div class="example">
		<div class="container">
			<div class="row">
				<form method="post" action="{{url('admin/SubmitOrderDetailAdd')}}">
					<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
					<table class="table" width="50%" border="1" cellspacing="0" cellpadding="10">
						<tr>
							<th>Sản phẩm</th>
							<td>
								<select name="id">
									@foreach($products as $product)
									<option value={{$product->ID}}>{{$product->ProductName}} </option>		
									@endforeach
								</select>
							</td>
						</tr>
						<tr>
							<th>Số lượng</th>
							<td>
								<input type="text" name="number" value=""/>
							</td>
						</tr>

						<tr>
							<th>Mã đơn hàng</th>
							<td>
								{{$idOrder}}
							</td>
						</tr>

						<tr>
							<td></td>
							<td>
								<input type="hidden" name="idOrder" value={{$idOrder}}>
								
								<input type="submit" name="edit_product" value="Thêm sản phẩm"/>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>