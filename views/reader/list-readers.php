<!-- breadcrumb -->
    <div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
        <div class="card-title">
            <i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Danh sách độc giả</span> </a>
        </div>
        <div class="justify-content-end">
            <ol class="d-flex col py-1 my-0 bg-transparent">
                <li class="breadcrumb-item active" aria-current="page">Quản lý độc giả</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="index.php">Trang chủ</a></li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="my-sm-4">
        <div class="row">
            <div class="col-md-12 ">
                <?php
                                        if ($_SESSION['quyenHan'] == 'admin' || $_SESSION['quyenHan'] == 'manager') {
                                    ?>
                <div class="p-sm-4 bg-white rounded-sm shadow-sm">
                    <div>
                        <div>
                            <a href="index.php?page=add-reader&method=add-reader"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Thêm độc giả</button></a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="my-md-4 table-responsive">  
                        <table class="table table-hover" id="example" class="display">
                            <thead>
                             <th>Mã độc giả</th>
                             <th>Họ và tên</th>
                             <th>Ngày sinh</th>
                             <th>Giới tính</th>
                             <th>Địa chỉ</th>
                             <th>Ảnh</th>
                             <th>Số điện thoại</th>
                             <th>Email</th>
                             <th>Trình độ</th>
                             <th>Lớp</th>
                             <th>Khoa</th>
                             <th>Khóa học</th>
                             <th>Ngày cấp thẻ</th>
                             <th>Hạn dùng thẻ</th>
                             <th></th>

                         </thead>
                         <tbody id="myTable">
                          <?php
                          
                          foreach ($result as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $value['maThe']?></td>
                                <td><?php echo $value['hoTen']?></td>
                                <td><?php echo $value['ngaySinh']?></td>
                                <td><?php echo $value['gioiTinh']?></td>
                                <td><?php echo $value['diaChi']?></td>
                                <td><?php 
                                    $anh="assets/img/readers/".$value['anh'];
                                    $anh="<img src='$anh' width='50px'>";
                                    echo $anh;?>
                                </td>

                                <td><?php echo $value['SDT']?></td>
                                <td><?php echo $value['email']?></td>
                                <td><?php echo $value['trinhDo']?></td>
                                <td><?php echo $value['maLop']?></td>
                                <td><?php echo $value['tenKhoa']?></td>
                                <td><?php echo $value['khoaHoc']?></td>
                                <td><?php echo $value['ngayCapThe']?></td>
                                <td><?php echo $value['hanDungThe']?></td>

                                <td>
                                    <?php
                                        if ($_SESSION['quyenHan'] == 'admin' || $_SESSION['quyenHan'] == 'manager') {
                                    ?>
                                    <a href="index.php?page=update-reader&method=edit&id=<?php echo $value['maThe'];?>">Sửa</a>|
                                    <a href="index.php?page=list-readers&method=destroy&id=<?php echo $value['maThe'];?>" onclick ="return confirm('Bạn có chắc chắn muốn xóa thông tin độc giả?')">Xóa</a>
                                    <?php
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