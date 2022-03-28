<?php
// if (isset($_POST['btnAdd'])) {
// 	$reader = new ReaderController();
// 	$reader->reader();
// }

?>
<!-- breadcrumb -->
	<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
		<div class="card-title">
			<i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Cập nhật thông tin nhân viên</span> </a>
		</div>
		<div class="justify-content-end">
			<ol class="d-flex col py-1 my-0 bg-transparent">
				<li class="breadcrumb-item active" aria-current="page">Cập nhật thông tin nhân viên</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=list-members">Quản lý nhân viên</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="index.php">Trang chủ</a></li>
			</ol>
		</div>
	</div>
	<!-- breadcrumb -->
	<div class="my-sm-4">
		<div class="row">
			<div class="col-md-12 ">
				<div class="p-sm-4 bg-white rounded-sm shadow-sm">
					<div class="my-sm-4">   
						
					</div>
					
					<div class="my-md-4 table-responsive">
						<?php
						foreach ($result as $key => $value) {
							?>
							<form name="" action="index.php?page=list-members&method=update" method="POST" enctype="multipart/form-data">
								<center>
									<h2>CẬP NHẬP THÔNG TIN NHÂN VIÊN</h2>
									<table border="1" class="table table-hover">
										<tr>
											<td>Mã nhân viên<span style="color: red;">*</span></td>
											<td><input type="text" name="id" size="20" required value="<?php echo $value['maCanBo'] ?>" readonly/></td>
										</tr>
										<tr>
											<td>Họ và tên <span style="color: red;">*</span></td>
											<td><input type="text" name="name" size="20" required value="<?php echo $value['tenCanBo'] ?>" /></td>
										</tr>
										<tr>
											<td>Giới tính</td>
											<td><input type="radio" name="gender" size="20"  value="nam" <?php if($value['gioiTinh'] == 'nam'){ echo 'checked="checked"';}?>/>Nam&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gender" size="20"  value="nữ" <?php if($value['gioiTinh'] == 'nữ'){ echo 'checked="checked"';}?>/>Nữ</td>
										</tr>
										<tr>
											<td>Ngày sinh</td>
											<td><input type="date" name="dOB" size="20" value="<?php echo $value['ngaySinh'] ?>" ></td>
										</tr>
										<tr>
											<td>Địa chỉ</td>
											<td>
												<textarea name="address" size="20" >
													<?php echo $value['diaChi'];?>
												</textarea>
											</td>
										</tr>
										<tr>
											<td>Ảnh</td>
											<td><input type="file" name="avatar" size="20" /><?php $anh="assets/img/readers/".$value['anh'];
											$anh="<img src='$anh' width='50px'>";echo $anh;?></td>
										</tr>
										<tr>
											<td>Số điện thoại <span style="color: red;">*</span></td>
											<td><input type="text" name="phone" size="20"  value="<?php echo $value['SDT'] ?>" /></td>
										</tr>
										<tr>
											<td>Email <span style="color: red;">*</span></td>
											<td><input type="text" name="email" size="20" required value="<?php echo $value['email'];?>" /></td>
										</tr>
								<td rowspan="1" colspan="2">
									<center>
										<button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnUpdate">
											Cập nhật
										</button>&nbsp&nbsp&nbsp&nbsp <button type="reset" class="btn btn-warning">Nhập lại</button> 
									</center>
								</td>
							</table>
						</center>
					</form>
					<?php
				}
				?>
				<div>
					<a href="index.php?page=list-members"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Trở về</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
