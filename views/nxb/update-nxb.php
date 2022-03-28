<!-- breadcrumb -->
	<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
		<div class="card-title">
			<i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Cập nhật nhà xuất bản</span> </a>
		</div>
		<div class="justify-content-end">
			<ol class="d-flex col py-1 my-0 bg-transparent">
				<li class="breadcrumb-item active" aria-current="page">Cập nhật nhà xuất bản</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=list-nxb">Quản lý nhà xuất bản</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="index.php">Trang chủ</a></li>
			</ol>
		</div>
	</div>
	<!-- breadcrumb -->
	<div class="my-sm-4">
		<div class="row">
			<div class="col-md-12 ">
				<div class="p-sm-4 bg-white rounded-sm shadow-sm">
					<div class="my-md-4 table-responsive">  
						<form name="" action="index.php?page=list-nxb&method=update" method="POST">
							<center>
								<h2>CẬP NHẬT THÔNG TIN NHÀ XUẤT BẢN</h2>
								<table border="1" class="table table-hover">
									<tr>
										<td>Mã số<span style="color: red;">*</span></td>
										<td><input type="text" name="id" size="20" value="<?php echo $result['0']['maNXB'] ?>" readonly /></td>
									</tr>
									<tr>
										<td>Tên nhà xuất bản<span style="color: red;">*</span></td>
										<td><input type="text" name="name" size="20" value="<?php echo $result['0']['tenNXB'] ?>" required /></td>
									</tr>
									<tr>
										<td>Số điện thoại</td>
										<td><input type="text" name="phone" size="20" value="<?php echo $result['0']['dienthoai'] ?>" /></td>
									</tr>
									<tr>
										<td>Email</td>
										<td><input type="text" name="email" size="20" value="<?php echo $result['0']['email'] ?>" /></td>
									</tr>
									
									<tr>
										<td>Địa chỉ</td>
										<td>
											<textarea name="address">
												<?php echo $result['0']['diachi'] ?>
											</textarea>
										</td>
									</tr>	
									<tr>
										<td>Ghi chú</td>
										<td><input type="text" name="note" size="20" value="<?php echo $result['0']['ghiChu'] ?>"  /></td>
									</tr>
									<td rowspan="1" colspan="2">
										<center>
											<button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnUpdate">
												Thêm
											</button>&nbsp&nbsp&nbsp&nbsp <button type="reset" class="btn btn-warning">Nhập lại</button>
										</center>
									</td>
								</table>
							</center>
						</form>
						<div>
							<a href="index.php?page=list-nxb"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Trở về</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
