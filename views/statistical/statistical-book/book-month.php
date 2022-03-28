
<!-- breadcrumb -->
<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
    <div class="card-title">
        <span class="text-success" style="font-size: 28px;">THỐNG KÊ SỐ LƯỢNG SÁCH</span>
    </div>
    <div class="justify-content-end">
        <ol class="d-flex col py-1 my-0 bg-transparent">
            <li class="breadcrumb-item"><a href="../logout.php">Đăng Xuất</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thống kê</li>
        </ol>
    </div>
</div>
<!-- breadcrumb -->
<div class="my-sm-4">
    <div class="row">
        <div class="col-md-12 ">
            <div class="p-sm-4 bg-white rounded-sm shadow-sm">         
                <div class="my-md-4 table-responsive">  
                    <form action="index.php?page=book-month&method=book-month" method="POST">
                       <table class="table table-hover">
                        <tr>
                           <td>Từ tháng</td>
                           <td><input type="month" name="startMonth" value="<?php if(isset($_POST['btnBookMonth'])){echo $_POST['startMonth'];}?>" /></td>
                       </tr>
                       
                       <tr>
                           <td>đến tháng</td>
                           <td><input type="month" name="finishMonth" value="<?php if(isset($_POST['btnBookMonth'])){echo $_POST['finishMonth'];}?>" /></td>
                       </tr>
                       <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnBookMonth">Thống kê</button>
                        </td>
                    </tr>
                </table>   
            </form>
            <table class="table table-hover" id="example" class="display">
                <thead>
                  <tr>
                      <th>Tháng</th>
                      <th>Số lượng sách được mượn</th>
                  </tr>
              </thead>
              <tbody id="myTable">
                 <?php
                    if (isset($resultBMonth)) {
                        foreach ($resultBMonth as $key => $value) {
                    ?>
                    <tr>
                      <td><?php echo $value['thangMuon']."-".$value['namMuon'];?></td>
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
                  <th>Tháng</th>
                  <th>Số lượng sách được trả</th>
              </tr>
          </thead>
          <tbody id="myTable">
           <?php
                    if (isset($resultRMonth)) {
                        foreach ($resultRMonth as $key => $value) {
                    ?>
                    <tr>
                      <td><?php echo $value['thangTra']."-".$value['namTra'];?></td>
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
