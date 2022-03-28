<!-- breadcrumb -->
<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
<div class="card-title">
	<i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Mượn sách</span> </a>
</div>
<div class="justify-content-end">
	<ol class="d-flex col py-1 my-0 bg-transparent">
		<li class="breadcrumb-item active" aria-current="page">Thêm sách mượn</li>
		<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=list-borrow-books">Mượn sách</a></li>
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
				<form name="" action="index.php?page=list-borrow-books&method=add" method="POST">
					<center>
						<h2>NHẬP THÔNG TIN MƯỢN</h2>
						<table border="1" class="table table-hover">
							<tr>
								<td>Mã thẻ mượn<span style="color: red;">*</span></td>
								<td>
									<select name="cardID">
										<option>Chọn thẻ mượn</option>
										<?php
											foreach ($resultBorrowCard as $key => $value) {
										?>
										<option value="<?php echo $value['id']?>"><?php echo $value['maDocGia']."-".$value['hoTen']."-".$value['ngayTao'];?></option>
										<?php
											}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Sách mượn<span style="color: red;">*</span></td>
								<td>
									<select name="bookID">
										<option>Chọn sách</option>
										<?php
											foreach ($resultBook as $key => $value) {
										?>
										<option value="<?php echo $value['maSach']?>"><?php echo $value['tenSach']; ?></option>
										<?php
											}
										?>
									</select>
									<span style="color: red">
									<?php 
										if (isset($_SESSION['errorBorrowBook'])) {
											echo $_SESSION['errorBorrowBook'];
										}
									?></span>
								</td>
							</tr>
							<tr>
								<td>Cán bộ thực hiện<span style="color: red;">*</span></td>
								<td><input type="number" name="memberID" value="<?php echo $_SESSION['account']?>" readonly></td>
							</tr>
							<tr>
								<td>Tình trạng mượn</td>
								<td><textarea name="status-borrow">
									
								</textarea></td>
							</tr>
							<tr>
								<td>Ngày mượn</td>
								<td><input type="date" name="dateBorrow" size="20"  /></td>
							</tr>
							<tr>
								<td>Hạn trả sách</td>
								<td><input type="date" name="deadline" size="20"  /></td>
							</tr>
							<tr>
								<td>Ghi chú</td>
								<td><textarea name="note">
									
								</textarea></td>
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
					<a href="index.php?page=list-borrow-books"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Trở về</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>