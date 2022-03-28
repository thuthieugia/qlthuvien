<!-- breadcrumb -->
<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
    <div class="card-title">
        <span class="text-success" style="font-size: 28px;">THỐNG KÊ SỐ LƯỢNG ĐỘC GIẢ</span>
    </div>
    <div class="justify-content-end">
        <ol class="d-flex col py-1 my-0 bg-transparent">
            <li class="breadcrumb-item"><a href="../logout.php">Đăng Nhập</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thống kê độc giả</li>
        </ol>
    </div>
</div>
<!-- breadcrumb -->
<div class="my-sm-4">
    <div class="row">
        <div class="col-md-12 ">
            <div class="p-sm-4 bg-white rounded-sm shadow-sm">              
                <div class="my-md-4 table-responsive">  
                    <form action="index.php?page=reader-date&method=reader-date" method="POST">
                       <table>
                        <tr>
                           <td> Từ ngày</td>
                           <td><input type="date" name="startDate" value="<?php if(isset($_POST['btnReaderDate'])){echo $_POST['startDate'];}?>" /></td>
                       </tr>
                       
                       <tr>
                           <td> đến ngày</td>
                           <td><input type="date" name="finishDate" value="<?php if(isset($_POST['btnReaderDate'])){echo $_POST['finishDate'];}?>" /></td>
                       </tr>
                       <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnReaderDate">Thống kê</button>
                        </td>
                    </tr>
                </table>   
            </form>
            <table class="table table-hover" id="example" class="display">
                <thead>
                  <tr>
                      <th>Ngày</th>
                      <th>Số lượng độc giả mượn sách</th>
                  </tr>
              </thead>
              <tbody id="myTable">
                    <?php
                    if (isset($resultBDate)) {
                        foreach ($resultBDate as $key => $value) {
                    ?>
                    <tr>
                      <td><?php echo $value['ngayMuon'];?></td>
                      <td><?php echo $value['soLuong'];?></td>
                    </tr>
                    
                    <?php
                        }
                    }
                ?>
            </tbody>
        </table>
        <table class="table table-hover" id="example" class="display">
            <thead>
              <tr>
                  <!-- <th>STT</th> -->
                  <th>Ngày</th>
                  <th>Số lượng độc giả trả sách</th>
              </tr>
          </thead>
          <tbody id="myTable">
            
            <?php
                    if (isset($resultRDate)) {
                        foreach ($resultRDate as $key => $value) {
                    ?>
                    <tr>
                      <td><?php echo $value['ngayTra'];?></td>
                      <td><?php echo $value['soLuong'];?></td>
                    </tr>
                    
                    <?php
                        }
                    }
                ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
