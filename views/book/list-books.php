  <!-- breadcrumb -->
  <div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
    <div class="card-title">
      <i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Bảng sách</span> </a>
    </div>
    <div class="justify-content-end">
      <ol class="d-flex col py-1 my-0 bg-transparent">
        <li class="breadcrumb-item active" aria-current="page">Quản lý sách</li>
        <li class="breadcrumb-item active" aria-current="page"><a href="index.php">Trang chủ</a></li>
      </ol>
    </div>
  </div>
  <!-- breadcrumb -->
  <div class="my-sm-4">
    <div class="row">
      <div class="col-md-12 ">
        <div class="p-sm-4 bg-white rounded-sm shadow-sm">
          <div>
            <div>
              <?php
              if ($_SESSION['quyenHan'] == 'admin' || $_SESSION['quyenHan'] == 'manager') {
                ?>
                <a href="index.php?page=add-book&method=add-book"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Thêm sách</button></a>
                <?php
              }
              else{
              }
              ?>
            </div>
          </div>
          <div class="my-md-4 table-responsive">  
            <table class="table table-hover" id="example" class="display">
              <thead>
               <th>Mã sách</th>
               <th>Tên</th>
               <th>Ảnh</th>
               <th>Tác giả</th>
               <th>Thể loại sách</th>
               <th>Nhà xuất bản</th>
               <th>Số lượng</th>
               <th>Kho sách</th>
               <th>Giá tiền</th>
               <th></th>

             </thead>
             <tbody id="myTable">
              <?php

              foreach ($result as $key => $value) {
                ?>
                <tr>
                  <td><?php echo $value['maSach']?></td>
                  <td><?php echo $value['tenSach']?></td>
                  <td><?php 
                  $anh="assets/img/books/".$value['anh'];
                  $anh="<img src='$anh' width='50px'>";
                  echo $anh;?>
                </td>
                <td><?php echo $value['tenTacGia']?></td>
                <td><?php echo $value['tenTheLoai']?></td>
                <td><?php echo $value['tenNXB']?></td>
                <td><?php echo $value['soluong']?></td>
                <td><?php echo $value['tenKho']?></td>
                <td><?php echo $value['giaTien']?></td>
                <td>
                  <?php
                  if ($_SESSION['quyenHan'] == 'admin' || $_SESSION['quyenHan'] == 'manager') {
                    ?>
                    <a href="index.php?page=update-book&method=edit&id=<?php echo $value['maSach'];?>">Sửa</a>|
                    <a href="index.php?page=list-books&method=destroy&id=<?php echo $value['maSach'];?>" onclick ="return confirm('Bạn có chắc chắn muốn xóa thông tin độc giả?')">Xóa</a>
                    <?php
                  }
                  else{
                  }
                  ?>

                </td>
              </tr>
              <?php
            }
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
