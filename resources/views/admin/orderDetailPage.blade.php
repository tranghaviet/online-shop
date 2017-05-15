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
						<h1 style="color: orange" style="margin: 100px"  >Đơn hàng chi tiết với mã đơn là {{$orderID}}</h1>
						<ul class="nav navbar-nav collapse navbar-collapse">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->

	<div class="container">
		<div class="row">
			<div class="example">
				<table class="table">
					<tr>

						<th>ID sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Đơn giá</th>
						<th>Số lượng</th>
						<th>Nhóm sản phẩm</th>
						<th>Thành tiền</th>

					</tr>
					@foreach ($orders as $order)

					<tr>
						<td>{{$order->ProductID}}</td>
						<td>{{$order->ProductName}}</td>
						<td>{{$order->Quantity}}</td>
						<td>{{$order->Price}}</td>
						<td>{{$order->Sum}}</td>
						<td>
							<form method="post" action="{{url('admin/orderDetailDelete')}}" onSubmit="if(!confirm('Bạn chắc là muốn xóa chứ?')){return false;}">
								<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
								<input type="hidden" name="id" value={{$order->ProductID}}></input>
								<input type="hidden" name="idOrder" value={{$orderID}}></input>

								<input type="submit" value="Xóa"></input>
							</form>
						</td>
					</tr>
					@endforeach
				</table>
				<form method="post" action="{{url('admin/orderDetailAdd')}}">
					<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
					<input type="hidden" name="idOrder" value={{$orderID}}></input>
					<input type="submit" value="Thêm sản phẩm"></input>
				</form>
			</div>
		</div>
	</div>
</body>
</html>