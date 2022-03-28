<!-- breadcrumb -->
    <div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
        <div class="card-title">
            <i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Danh sách mượn sách</span> </a>
        </div>
        <div class="justify-content-end">
            <ol class="d-flex col py-1 my-0 bg-transparent">
                <li class="breadcrumb-item active" aria-current="page">Quản lý mượn sách</li>
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
                        <table class="table table-hover" id="example" class="display">
                            <thead>
                             <th>Mã số</th>
                             <th>Thẻ mượn</th>
                             <th>Độc giả</th>
                             <th>Sách mượn</th>
                             <th>Cán bộ thực hiện</th>
                             <th>Tình trạng mượn</th>
                             <th>Tình trạng trả</th>
                             <th>Hạn trả sách</th>
                             <th>Ngày trả sách</th>
                             <th>Thanh toán</th>
                             <th>Ghi chú</th>
                             <th></th>

                         </thead>
                         <tbody id="myTable">
                          <?php
                          
                          foreach ($result as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $value['id']?></td>
                                <td><?php echo $value['muonTraID']?></td>
                                <td><?php echo $value['maDocGia']."-".$value['hoTen']?></td>
                                <td><?php echo $value['maSach']."-".$value['tenSach']?></td>
                                <td><?php echo $value['tenCanBo']?></td>
                                <td><?php echo $value['tinhTrangMuon']?></td>
                                <td><?php echo $value['tinhTrangTra']?></td>
                                <td><?php echo $value['ngayPhaiTra']?></td>
                                <td><?php echo $value['ngayTra']?></td>
                                <td><?php echo $value['thanhToan']?></td>
                                <td><?php echo $value['ghiChu']?></td>
                                <td>
                                  <?php
                                    if ($value['ngayTra']=='') {
                                    ?>
                                    <a href="index.php?page=add-return-book&method=add-return&id=<?php echo $value['id'];?>">Trả sách</a>&nbsp|&nbsp
                                    <?php
                                    }
                                  ?>
                                    
                                    <a href="index.php?page=update-return-book&method=edit&id=<?php echo $value['id'];?>">Sửa</a>&nbsp|&nbsp
                                    <a href="index.php?page=list-return-books&method=destroy&id=<?php echo $value['id'];?>" onclick ="return confirm('Xóa thông tin sách mượn sẽ ảnh hưởng đến các thông tin khác và không thể khôi phục. Bạn có chắc chắn muốn xóa?')">Xóa</a>
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