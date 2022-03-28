
	<!-- breadcrumb -->
	<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
		<div class="card-title">
			<i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Thêm sách</span> </a>
		</div>
		<div class="justify-content-end">
			<ol class="d-flex col py-1 my-0 bg-transparent">
				<li class="breadcrumb-item active" aria-current="page">Thêm sách</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=list-books">Quản lý sách</a></li>
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
						<form name="" action="index.php?page=list-books&method=add" method="POST" enctype="multipart/form-data">
							<center>
								<h2>NHẬP THÔNG TIN SÁCH</h2>
								<table border="1" class="table table-hover">
									<tr>
										<td>Tên sách<span style="color: red;">*</span></td>
										<td><input type="text" name="name" size="20" required /></td>
									</tr>
									<tr>
										<td>Ảnh</td>
										<td><input type="file" name="avatar" size="20" /></td>
									</tr>
									<tr>
										<td>Tác giả</td>
										<td><input type="text" name="author" size="20" /></td>
									</tr>
									<tr>
										<td>Thể loại sách</td>
										<td>
											<select name="category">
												<option value="GT">Chọn thể loại sách</option>
												<?php 
												foreach ($resultCategory as $key => $value) {
												?>
												<option value="<?php echo $value['maTheLoai'] ?>"><?php echo $value['tenTheLoai'] ?></option>
												<?php
													}
												?>									
											</select>
										</td>
									</tr>
									
									<tr>
										<td>Nhà xuất bản <span style="color: red;">*</span></td>
										<td>
											<select name="NXB">
												<option value="DHQG">Chọn nhà xuất bản</option>
												<?php
													foreach ($resultNXB as $key => $value) {
												?>
												<option value="<?php echo $value['maNXB'] ?>"><?php echo $value['tenNXB'] ?></option>
												<?php
													}
												?>
											</select>
										</td>
									</tr>
									<tr>
										<td>Kho sách <span style="color: red;">*</span></td>
										<td>
											<select name="store">
												<option value="CNTT">Chọn kho lưu trữ</option>
												<?php
													foreach ($resultStore as $key => $value) {
												?>
												<option value="<?php echo $value['maKho'] ?>"><?php echo $value['tenKho'] ?></option>
												<?php
													}
												?>
											</select>
										</td>
									</tr>
									<tr>
										<td>Số lượng</td>
										<td><input type="number" name="number" size="20" /></td>
									</tr>
									
									<tr>
										<td>Giá tiền</td>
										<td><input type="text" name="price" size="20"  /></td>
									</tr>
									
									<td rowspan="1" colspan="2">
										<center>
											<button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnAdd">
												Thêm
											</button>&nbsp&nbsp&nbsp&nbsp <button type="reset" class="btn btn-warning">Nhập lại</button>
										</center>
									</td>
								</table>
							</center>
						</form>
						<div>
							<a href="index.php?page=list-books"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Trở về</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
