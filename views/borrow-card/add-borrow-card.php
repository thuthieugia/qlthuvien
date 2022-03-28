<?php
	if (isset($_POST['btnAdd'])) {
		$borrowCard = new BorrowCardController();
        $borrowCard->borrowCard();
	}
?>
<!-- breadcrumb -->
<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
	<div class="card-title">
		<i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Thêm thẻ mượn</span> </a>
	</div>
	<div class="justify-content-end">
		<ol class="d-flex col py-1 my-0 bg-transparent">
			<li class="breadcrumb-item active" aria-current="page">Thêm thẻ mượn</li>
			<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=list-borrow-cards">Quản lý thẻ mượn</a></li>
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
					<form name="" action="index.php?page=list-borrow-cards&method=add" method="POST">
						<center>
							<h2>NHẬP THÔNG TIN THỂ LOẠI SÁCH</h2>
							<table border="1" class="table table-hover">
								<tr>
									<td>Mã độc giả<span style="color: red;">*</span></td>
									<td>
										<select name="name">
											<option>Chọn độc giả</option>
											<?php
												foreach ($result as $key => $value) {
											?>
											<option value="<?php echo $value['maThe']?>"><?php echo $value['maThe']."-".$value['hoTen']; ?></option>
											<?php
												}
											?>
										</select>
									</td>
								</tr>
								<tr>
									<td>Ngày tạo</td>
									<td><input type="date" name="date" size="20"  /></td>
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
						<a href="index.php?page=list-borrow-cards"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Trở về</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
