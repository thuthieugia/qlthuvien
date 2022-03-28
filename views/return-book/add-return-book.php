<!-- breadcrumb -->
<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
<div class="card-title">
	<i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Trả sách</span> </a>
</div>
<div class="justify-content-end">
	<ol class="d-flex col py-1 my-0 bg-transparent">
		<li class="breadcrumb-item active" aria-current="page">Trả sách</li>
		<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=list-return-books">Trả sách</a></li>
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
				<form name="" action="index.php?page=list-return-books&method=add" method="POST">
					<center>
						<h2>NHẬP THÔNG TIN TRẢ</h2>
						<table border="1" class="table table-hover">
							<tr>
								<tr>
								<td>ID<span style="color: red;">*</span></td>
								<td><input type="number" name="id" value="<?php echo $result['0']['id']?>" readonly></td>
							</tr>
							<tr>
								<td>Mã thẻ mượn<span style="color: red;">*</span></td>
								<td><input type="number" name="cardID" value="<?php echo $result['0']['muonTraID']?>" readonly></td>
							</tr>
							<tr>
								<td>Độc giả<span style="color: red;">*</span></td>
								<td><input type="text" name="reader" value="<?php echo $result['0']['maDocGia'].'-'.$result['0']['hoTen']?>" readonly></td>
							</tr>
							<tr>
								<td>Sách mượn<span style="color: red;">*</span></td>
								<td>
									<select name="bookID">
										<option value="<?php echo $result['0']['maSach']?>"><?php echo $result['0']['tenSach']; ?></option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Tình trạng trả</td>
								<td><textarea name="status-return">
								</textarea></td>
							</tr>
							<tr>
								<td>Hạn trả sách</td>
								<td><input type="date" name="deadline" size="20" value="<?php echo $result['0']['ngayPhaiTra'];?>" readonly/></td>
							</tr>
							<tr>
								<td>Ngày trả sách</td>
								<td><input type="date" name="dateReturn" size="20" /></td>
							</tr>
							<tr>
								<td>Thanh toán</td>
								<td><input type="text" name="price" size="20" /></td>
							</tr>
							<tr>
								<td>Cán bộ thực hiện<span style="color: red;">*</span></td>
								<td><input type="number" name="memberID" value="<?php echo $_SESSION['account']?>" readonly></td>
							</tr>
							<tr>
								<td>Ghi chú</td>
								<td><textarea name="note">
									<?php echo $result['0']['ghiChu'];?>
								</textarea></td>
							</tr>
							<td rowspan="1" colspan="2">
								<center>
									<button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnAdd">
										Cập nhật
									</button>&nbsp&nbsp&nbsp&nbsp <button type="reset" class="btn btn-warning">Nhập lại</button>
								</center>
							</td>
						</table>
					</center>
				</form>
				<div>
					<a href="index.php?page=list-return-books"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Trở về</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>