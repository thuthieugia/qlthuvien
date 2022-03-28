<?php
	// if (isset($_POST['btnUpdate'])) {
	// 	$account = new AccountController();
 //        $account->account();
	// }
?>
 	<!-- breadcrumb -->
 	<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
 		<div class="card-title">
 			<i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Cập tài khoản</span> </a>
 		</div>
 		<div class="justify-content-end">
 			<ol class="d-flex col py-1 my-0 bg-transparent">
 				<li class="breadcrumb-item active" aria-current="page">Cập nhật tài khoản</li>
 				<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=list-accounts">Quản lý tài khoản</a></li>
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
 						<?php
 							foreach ($result as $key => $value) {
 						?>

 						<form name="" action="index.php?page=list-accounts&method=update" method="POST" name="register" onsubmit="return registerAccount();">
 							<center>
 								<h2>CẬP NHẬP THÔNG TIN TÀI KHOẢN</h2>
 								<table border="1" class="table table-hover">
 									<tr>
 										<td>Mã cán bộ <span style="color: red;">*</span></td>
 										<td><input type="text" name="id" size="20"   value="<?php echo $value['maCanBo']?>" readonly></td>
 									</tr>
 									<tr>
 										<td>Họ và tên <span style="color: red;">*</span></td>
 										<td><input type="text" name="name" size="20" id="name"  value="<?php echo $value['tenCanBo']?>"><p style="color: red;" id="error-name"></p></td>
 									</tr>
 									<tr>
 										<td>Email <span style="color: red;">*</span></td>
 										<td><input type="text" name="email" size="20" id="email" value="<?php echo $value['email']?>" ><p style="color: red;" id="error-email"></p></td>
 									</tr>
 									<tr>
 										<td>Mật khẩu <span style="color: red;">*</span></td>
 										<td><input type="text" name="passwd" size="20" value="<?php echo $value['matKhau']?>" required></td>
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
 							<a href="index.php?page=list-accounts"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Trở về</button></a>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
