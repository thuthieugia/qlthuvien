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
    <script src="assets/js/code.jquery.com/jquery-3.5.1.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );

    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function registerAccount() {
                var  name = document.getElementById('name').value;
                var errorName = document.getElementById('error-name');
                var reGexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;
                var  passwd = document.getElementById('passwd').value;
                var errorPasswd = document.getElementById('error-passwd');
                var reGexSpect = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
                var  email = document.getElementById('email').value;
                var errorEmail = document.getElementById('error-email');
                var reGexEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (name == '') {
                    errorName.innerHTML = 'Vui lòng không bỏ trống tên';
                    return false;
                }
                else{
                    if (!reGexName.test(name)) {
                        errorName.innerHTML = 'Vui lòng nhập đúng định dạng';
                        return false;
                    }
                    else{
                        if (reGexSpect.test(name)) {
                            errorName.innerHTML = 'Vui lòng nhập đúng định dạng';
                            return false;
                        }
                        else{
                         errorName.innerHTML = ''; 
                        }
                    }
               }
            
               if (email == '') {
                    errorEmail.innerHTML = 'Vui lòng không bỏ trống email';
                    return false;
                }
                else{
                    if (!reGexEmail.test(email)) {
                        errorEmail.innerHTML = 'Vui lòng nhập đúng định dạng';
                        return false;
                    }
                    else{
                         errorEmail.innerHTML = ''; 
                    }
               }

               if (passwd == '') {
                    errorPasswd.innerHTML = 'Vui lòng không bỏ trống mật khẩu';
                    return false;
                }
                else{
                    if (reGexSpect.test(passwd)) {
                        errorPasswd.innerHTML = 'Vui lòng nhập đúng định dạng';
                        return false;
                    }
                    else{
                         errorPasswd.innerHTML = '';
                    }
               }
            return true;
       }
       function registerPower() {
            var  name = document.getElementById('name').value;
            var errorName = document.getElementById('error-name');
            var reGexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;
            var reGexSpect = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
            var  email = document.getElementById('email').value;
            var errorEmail = document.getElementById('error-email');
            var reGexEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (name == '') {
                errorName.innerHTML = 'Vui lòng không bỏ trống tên';
                return false;
            }
            else{
                if (!reGexName.test(name) || reGexSpect.test(name)) {
                    errorName.innerHTML = 'Vui lòng nhập đúng định dạng';
                    return false;
                }
                else{
                   
                     errorName.innerHTML = ''; 
                    
                }
           }
           if (email == '') {
                errorEmail.innerHTML = 'Vui lòng không bỏ trống email';
                return false;
            }
            else{
                if (!reGexEmail.test(email)) {
                    errorEmail.innerHTML = 'Vui lòng nhập đúng định dạng';
                    return false;
                }
                else{
                     errorEmail.innerHTML = ''; 
                }
           }
        return true;
       }
    </script>
