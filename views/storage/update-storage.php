<!-- breadcrumb -->
	<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
		<div class="card-title">
			<i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Cập nhật thể loại sách</span> </a>
		</div>
		<div class="justify-content-end">
			<ol class="d-flex col py-1 my-0 bg-transparent">
				<li class="breadcrumb-item active" aria-current="page">Cập nhật thể loại sách</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=list-storages">Quản lý kho sách</a></li>
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
						<form name="" action="index.php?page=list-storages&method=update" method="POST">
							<center>
								<h2>NHẬP THÔNG TIN THỂ LOẠI SÁCH</h2>
								<table border="1" class="table table-hover">
									<tr>
										<td>Mã số<span style="color: red;">*</span></td>
										<td><input type="text" name="id" size="20" value="<?php echo $result['0']['maKho']; ?>" readonly/></td>
									</tr>
									<tr>
										<td>Tên thể loại<span style="color: red;">*</span></td>
										<td><input type="text" name="name" size="20" value="<?php echo $result['0']['tenKho']; ?>" required /></td>
									</tr>
									<tr>
										<td>Ghi chú</td>
										<td><input type="text" name="note" size="20" value="<?php echo $result['0']['ghiChu']; ?>"  /></td>
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
						<div>
							<a href="index.php?page=list-nxb"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Trở về</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>