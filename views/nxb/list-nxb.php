
    <!-- breadcrumb -->
    <div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
        <div class="card-title">
             <i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Danh sách nhà xuất bản</span> </a>
        </div>
        <div class="justify-content-end">
            <ol class="d-flex col py-1 my-0 bg-transparent">
                <li class="breadcrumb-item active" aria-current="page">Quản lý nhà xuất bản</li>
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
                            <a href="index.php?page=add-nxb&method=add-nxb"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Thêm nhà xuất bản</button></a>
                        </div>
                    </div>
                    <div class="my-md-4 table-responsive">  
                        <table class="table table-hover" id="example" class="display">
                            <thead>
                             <th>Mã số</th>
                             <th>Tên</th>
                             <th>Số điện thoại</th>
                             <th>Email</th>
                             <th>Địa chỉ</th>
                             <th>Ghi chú</th>
                             <th></th>

                         </thead>
                         <tbody id="myTable">
                          <?php
                          
                          foreach ($result as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $value['maNXB']?></td>
                                <td><?php echo $value['tenNXB']?></td>
                                <td><?php echo $value['dienthoai']?></td>
                                <td><?php echo $value['email']?></td>
                                <td><?php echo $value['diachi']?></td>
                                <td><?php echo $value['ghiChu']?></td>
                                <td>
                                    <a href="index.php?page=update-nxb&method=edit&id=<?php echo $value['maNXB'];?>">Sửa</a>|
                                    <a href="index.php?page=list-nxb&method=destroy&id=<?php echo $value['maNXB'];?>" onclick ="return confirm('Xóa thông tin nhà xuất bản sẽ ảnh hưởng đến các thông tin khác và không thể khôi phục.Bạn có chắc chắn muốn xóa?')">Xóa</a>
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
