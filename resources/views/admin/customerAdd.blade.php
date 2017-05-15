<!DOCTYPE html>
<html>
<head>
	<title>Thêm khách hàng</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	</style>
</head>
<body>
	@include('admin/header')
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<div class="mainmenu pull-left">
					<ul class="nav navbar-nav collapse navbar-collapse">
						<h1 style="color: orange" style="margin: 100px"  >Thêm thành viên</h1>
						<div style="color: red">Các thông tin có dấu * cần phải điền đủ</div>
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
				<form method="post" action="http://localhost/laradmin1/public/admin/SubmitCustomerAdd">
					<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
					<table class="table">
						<tr>
							<th>Tên đăng nhập*</th>
							<td>
								<input type="text" name="username" value=""/>
							</td>
						</tr>
						<tr>
							<th>Mật khẩu*</th>
							<td>
								<input type="password" name="password" value=""/>
							</td>
						</tr>
						<tr>
							<th>Xác nhận mật khẩu*</th>
							<td>
								<input type="password" name="repassword" value=""/>
							</td>
						</tr>
						<tr>
							<th>Họ tên*</th>
							<td>
								<input type="text" name="name" value=""/>
							</td>
						</tr>

						<tr>
							<th>Địa chỉ</th>
							<td>
								<input type="text" name="address" value=""/>
							</td>
						</tr>

						<tr>
							<th>Điện thoại*</th>
							<td>
								<input type="text" name="phone" value=""/>
							</td>
						</tr>


						<tr>
							<th>Giới tính</th>
							<td>
								<select name="sex">
									<option value="Nam" selected="selected">Nam</option>
									<option value="Nữ">Nữ</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Ngày sinh*</th>
							<td>
								<input type="text" name="birthday" value=""/>
								<div style="color: red">Nhập ngày theo dạng yyyy-mm-dd</div>
							</td>
						</tr>

						<tr>
							<th>Email*</th>
							<td>
								<input type="email" name="email" value=""/>
							</td>
						</tr>

						<tr>
							<th>Ghi chú</th>
							<td>
								<input type="text" name="note" value=""/>
							</td>
						</tr>

						<tr>
							<td></td>
							<td>
								<input type="hidden" name="id" value=""></input>
								<input type="submit" name="edit_student" value="Thêm khách hàng"/>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>

</body>
</html>