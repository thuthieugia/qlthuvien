<div class="border-bottom ">
	<ul class="list-inline nav navbar-nav">
		<?php
		if ($_SESSION['quyenHan'] == "admin") {
			?>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i><a href="index.php?page=dashboard" class=" text-decoration-none text-dark">Trang chủ</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=list-powers" class=" text-decoration-none text-dark">Quản lý phân quyền</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=list-accounts" class=" text-decoration-none text-dark">Quản lý tài khoản</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=list-members" class=" text-decoration-none text-dark">Quản lý nhân viên</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item " >
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=list-readers" class=" text-decoration-none text-dark">Quản lý độc giả</a>
			</li>
			<!-- <li class="list-inline-item col-form-label list-group-item " >
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=list-books" class=" text-decoration-none text-dark">Quản lý sách</a>
			</li> -->
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i><a class=" dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý sách</a>
				<div class="dropdown-menu text-decoration-none text-dark" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-books">Sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-nxb">Nhà xuất bản</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-categorys">Thể loại</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-storages">Kho sách</a>
				</div>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i><a class=" dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý mượn trả</a>
				<div class="dropdown-menu text-decoration-none text-dark" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-borrow-cards">Thẻ mượn</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-borrow-books">Mượn sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-return-books">Trả sách</a>
				</div>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i><a class="dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Thống kê
				</a>
				<div class="dropdown-menu text-decoration-none text-dark" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=op-book">Thống kê số lượng sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=op-reader">Thống kê số lượng độc giả</a>
				</div>
			</li>
			<?php
		}
		elseif ($_SESSION['quyenHan'] == "manager") {
			?>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i><a href="index.php?page=dashboard" class=" text-decoration-none text-dark">Trang chủ</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=list-members" class=" text-decoration-none text-dark">Quản lý nhân viên</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item " >
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=listStudent" class=" text-decoration-none text-dark">Quản lý độc giả</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i><a class=" dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý sách</a>
				<div class="dropdown-menu text-decoration-none text-dark" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-books">Sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-NXB">Nhà xuất bản</a>
					<a class="dropdown-item text-decoration-none text-dark" href=".index.php?page=list-categorys">Thể loại</a>
					<a class="dropdown-item text-decoration-none text-dark" href=".index.php?page=list-stores">Kho sách</a>
				</div>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=listBBook" class=" text-decoration-none text-dark" >Quản lý mượn sách</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=listReturnBook" class=" text-decoration-none text-dark">Quản lý trả sách</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=listBCard" class=" text-decoration-none text-dark">Thẻ mượn</a>
			</li>                       
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i><a class="dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Thống kê
				</a>
				<div class="dropdown-menu text-decoration-none text-dark" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=opstatisBook">Thống kê số lượng sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href=".index.php?page=statisticalStudent">Thống kê số lượng độc giả</a>
				</div>
			</li>
			<?php
		}
		else{
			?>
			<li class="list-inline-item col-form-label list-group-item " >
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=list-readers" class=" text-decoration-none text-dark">Quản lý độc giả</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i> <a href="index.php?page=list-books" class=" text-decoration-none text-dark">Quản lý sách</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-table text-success mr-sm-4"></i><a class=" dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý mượn trả</a>
				<div class="dropdown-menu text-decoration-none text-dark" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-borrow-cards">Thẻ mượn</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-borrow-books">Mượn sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-return-books">Trả sách</a>
				</div>
			</li>
			<?php
		}
		?>
	</ul>
</div>