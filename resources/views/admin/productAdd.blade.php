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

		<div class="example">
			<div class="container">
				<div class="row">
					<form method="post" action="{{url('admin/SubmitProductAdd')}}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
						<table class="table" width="50%" border="1" cellspacing="0" cellpadding="10">
							<tr>
								<th>Tên sản phẩm</th>
								<td>
									<input type="text" name="name" value=""/>
								</td>
							</tr>
							<tr>
								<th>Mô tả</th>
								<td>
									<input type="text" name="description" value=""/>
								</td>
							</tr>

							<tr>
								<th>Đơn giá</th>
								<td>
									<input type="text" name="price" value=""/>
								</td>
							</tr>

							<tr>
								<th>Nhóm sản phẩm</th>
								<td>
									<select name="category">
										@foreach($categories as $category)
										<option value={{$category->ID}}>{{$category->Name}} </option>				
										@endforeach	
									</select>
								</td>
							</tr>


							<tr>
								<th>Ngày cập nhật</th>
								<td>
									<input type="text" name="date" value=""/>
								</td>
							</tr>

							<tr>
								<th>Số lượng</th>
								<td>
									<input type="text" name="available" value=""/>
								</td>
							</tr>

							<tr>
								<th>Ảnh </th>
								<td>
									<input type="file" name="photo" id="photo" accept=".jpg,.png"/>
								</td>
							</tr>

							<tr>
								<td></td>
								<td>
									<input type="hidden" name="id" value=""></input>
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