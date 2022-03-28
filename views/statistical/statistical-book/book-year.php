
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
                    <form action="index.php?page=book-year&method=book-year" method="POST">
                     <table>
                        <tr>
                         <td> Từ năm</td>
                         <td><input type="year" name="startYear" value="<?php if(isset($_POST['btnBookYear'])){echo $_POST['startYear'];}?>" /></td>
                     </tr>
                     <tr>
                         <td> đến năm</td>
                         <td><input type="year" name="finishYear" value="<?php if(isset($_POST['btnBookYear'])){echo $_POST['finishYear'];}?>" /></td>
                     </tr>
                     <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnBookYear">Thống kê</button>
                        </td>
                    </tr>
                </table>   
            </form>
            <table class="table table-hover" id="example" class="display">
                <thead>
                  <tr>
                      <th>Năm</th>
                      <th>Số lượng sách được mượn</th>
                  </tr>
              </thead>
              <tbody id="myTable">
                 <?php
                    if (isset($resultBYear)) {
                        foreach ($resultBYear as $key => $value) {
                    ?>
                    <td><?php echo $value['namMuon'];?></td>
                    <td><?php echo $value['soLuong'];?></td>
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
                  <th>Năm</th>
                  <th>Số lượng sách được trả</th>
              </tr>
          </thead>
          <tbody id="myTable">
            <?php
                    if (isset($resultRYear)) {
                        foreach ($resultRYear as $key => $value) {
                    ?>
                    <td><?php echo $value['namTra'];?></td>
                    <td><?php echo $value['soLuong'];?></td>
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
