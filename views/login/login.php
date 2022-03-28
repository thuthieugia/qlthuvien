<?php
if (isset($result)) {
    $_SESSION['account'] = $result['0']['maCanBo'];
    $_SESSION['quyenHan'] = $result['0']['quyenHan'];
    $_SESSION['avatar'] = $result['0']['anh'];
    header('location:index.php');
}   
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng nhập</title>
    <!-- icon -->
    <link rel="stylesheet" href="assets/node_modules/@fortawesome/fontawesome-free/css/all.css">
    <!-- bootrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <header class="navbar-dark bg-success fixed-top">
        <nav class="navbar navbar-expand-sm justify-content-betwwen px-0 ">
            <button class="navbar-toggler border-0 pl-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="px-sm-4 d-flex justify-content-betwwen " >
                <div class="d-flex col-md-4 "> 
                    <a href="#" class="navbar-brand font-weight-bolder">
                        TRUNG TÂM THƯ VIỆN TRƯƠNG ĐẠI HỌC TÀI NGUYÊN VÀ MÔI TRƯỜNG HÀ NỘI
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <style>
        .navbar {
            position: relative;
            display: block; 
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 1rem;
        }
    </style>
    <div class="img-background">
        <div class="owl-carousel-banner owl-carousel">
            <div class="item">
                <img data-src="../img/download.png" height="50px" class="owl-lazy" alt="">
            </div>
            <div class="item">
                <img data-src="../img/download.png" height="50px" class="owl-lazy" alt="">
            </div>
            <div class="item">
                <img data-src="../img/download.png" height="50px" class="owl-lazy" alt="">
            </div>
        </div>
    </div>
    <div class="main-content">
     <div class=" mt-sm-4">
        <div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
        </div>
        <center>
            <div class="my-sm-4">
                <div class="row">

                    <div class="col-md-12 ">
                        
                        <form name="" action="index.php?method=login" method="POST" id="" style="padding: 80px;" >
                            <center>
                                <div border="0" id="" class="rounded-sm shadow-lg bg-white"  style="width: 500px; padding:2rem;">
                                    <div class="row mb-4 justify-content-center">
                                        <h2 class="text-success " style="font-family:'Times New Roman', Times, serif;">ĐĂNG NHẬP HỆ THỐNG</h2>
                                    </div>
                                    <div style="color: red">
                                        <?php
                                        if (isset($_SESSION['error'])) {
                                            echo $_SESSION['error'];
                                        }
                                        ?>
                                    </div>
                                    <div class="row my-4">
                                        <label class="col-form-label col-sm-4 col-md-4">Tài khoản: </label>
                                        <div class="col-md-8 col-sm-8"><input type="text" name="account" id="" class="form-control" value="<?php if(isset($_POST['login'])){echo $_POST['account'];}?>"></div>
                                    </div>
                                    <div class="row my-4">
                                        <label class="col-md-4 col-sm-4 col-form-label">Mật khẩu: </label>
                                        <div class="col-md-8 col-sm-8"><input type="password" name="pass" id="" class="form-control" value="<?php if(isset($_POST['login'])){echo $_POST['pass'];}?>"></div>
                                    </div>
                                    <div class="row justify-content-center my-4">
                                        <input type="submit" name="login" id="" class="ml-4 btn btn-success text-white" value="Đăng nhập">
                                    </div>
                                </div>
                            </center>
                        </form>

                    </div>

                </div>

            </div>


        </div>
    </div>
</center>
</div>
</div>
</div>
</div>
</div>

<script>

    jQuery(".owl-carousel-banner").owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        margin: 50,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,

        dots: false,
        responsive: {
            0: {
                items: 1,

            },

        }
    });
</script>
<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>



<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
</body>
</html>