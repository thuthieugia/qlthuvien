 <div class="col-md-9" >
    <!-- breadcrumb -->
    <div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
        <div class="card-title">
            <span class="text-success" style="font-size: 28px;">DANH SÁCH ACCOUNT NHÂN VIÊN THƯ VIỆN</span>
        </div>
        <div class="justify-content-end">
            <ol class="d-flex col py-1 my-0 bg-transparent">
                <li class="breadcrumb-item"><a href="../logout.php">Đăng xuất</a></li>
                <li class="breadcrumb-item active" aria-current="page">Quản lý account</li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="my-sm-4">
        <div class="row">
            <div class="col-md-12 ">
                <div class="p-sm-4 bg-white rounded-sm shadow-sm">
                    <div class="my-sm-4">   
                        <i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Danh sách account</span> </a>
                    </div>
                    <div>
                        <div class="my-3 d-flex">
                            <span class="mt-sm-2 mr-sm-2">Tìm account:</span> 
                            <input class="form-control" id="myInput" type="text" style="width:80%" placeholder="Search..">
                        </div>
                        
                    </div>
                    <div class="my-md-4 table-responsive">  
                        <table class="table table-hover">
                            <thead>
                              <tr>
                               <th>STT</th>
                               <th>Ma NV</th>
                               <th>Họ và tên</th>
                               <th>Mật khẩu</th>
                           </tr>
                       </thead>
                       <tbody id="myTable">
                          <?php
                                                    //đọc dữ liệu
            //kết nối
                          $db=mysqli_connect('localhost','root','','ql_thuvien');
                          if(!$db)
                          {
                            echo "Lỗi kết nối";
                        }
                        else
                        {
                            $sql_hienThi="select maCanBo, tenCanBo, matKhau from canbothuvien";
                            $kq=mysqli_query($db,$sql_hienThi);
                //trình bày dữ liệu
                            if(mysqli_num_rows($kq)>0)
                            {
                                $i=0;
                                while ($r=mysqli_fetch_array($kq)) 
                                {
                                    $i++;
                                    echo "<tr>"; 
                                    $maCanBo=$r['maCanBo'];
                                    echo "<td>$i</td>";
                                    echo "<td>".$r['maCanBo']."</td>";
                                    echo "<td>".$r['tenCanBo']."</td>";
                                    echo "<td>".$r['matKhau']."</td>";
                                    echo "<td><a href = 'Account.php?maCanBo=$maCanBo'>ADD</td>";
                                    echo "<td><a href = 'editAccount.php?maCanBo=$maCanBo'>Edit</td>";
                                    echo "<td> <a href = 'delAccount.php?maCanBo=$maCanBo'>Delete</a></td>";
                                    echo "</tr>";
                                }
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>