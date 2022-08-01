<?php
     include 'config/config.php';
?>
<!doctype html>
<html lang="zxx">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Gaming</title>
     <link rel="icon" href="asset/img/favicon.png">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="asset/css/bootstrap.min.css">
     <!-- animate CSS -->
     <link rel="stylesheet" href="asset/css/animate.css">
     <!-- owl carousel CSS -->
     <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
     <!-- font awesome CSS -->
     <link rel="stylesheet" href="asset/css/all.css">
     <!-- flaticon CSS -->
     <link rel="stylesheet" href="asset/css/flaticon.css">
     <link rel="stylesheet" href="asset/css/themify-icons.css">
     <!-- font awesome CSS -->
     <link rel="stylesheet" href="asset/css/magnific-popup.css">
     <!-- swiper CSS -->
     <link rel="stylesheet" href="asset/css/slick.css">
     <!-- style CSS -->
     <link rel="stylesheet" href="asset/css/style.css">
     <link rel="stylesheet" href="login/css/login.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
     <div class="body_bg">
          <!--::header part start::-->
          <header class="main_menu single_page_menu">
               <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-12">
                              <nav class="navbar navbar-expand-lg navbar-light">
                                   <a class="navbar-brand" href="index.html"> <img src="asset/img/logo.png" alt="logo">
                                   </a>
                                   <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                                   </button>

                                   <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                        <ul class="navbar-nav">
                                             <li class="nav-item">
                                                  <a class="nav-link" href="index.php">Home</a>
                                             </li>
                                             <li class="nav-item">
                                                  <a class="nav-link" href="?page=voucher-game">Voucher Game</a>
                                             </li>
                                             <?php if( !empty( $_SESSION['login'] ) ) : ?>
                                             <li class="nav-item">
                                                  <a class="nav-link align-middle" href="?page=dashboard-user">
                                                       <?= $_SESSION['user']['nama_lengkap']; ?>
                                                  </a>
                                             </li>
                                             <li class="nav-item">
                                                  <a class="nav-link align-middle" href="logout.php">Logout</a>
                                             </li>
                                             <?php else : ?>
                                             <li class="nav-item">
                                                  <a class="nav-link align-middle" href="?page=login-register">Login</a>
                                             </li>
                                             <?php endif ?>
                                        </ul>
                                   </div>
                              </nav>
                         </div>
                    </div>
               </div>
          </header>
          <!-- Header part end-->

          <?php 

               if( !empty($_GET['page']) ) {
                    $page = $_GET['page'];
                    switch ($page) {
                         case 'voucher-game':
                              include 'partials/voucher-game.php';
                              break; 
                         case 'login-register':
                              include 'login/index.php';
                              break;
                         case 'order':
                              include 'partials/order.php';
                              break;
                         case 'dashboard-user':
                              include 'partials/dashboard-user.php';
                              break;
                         default:
                              include 'partials/home.php';
                              break;
                    }
               } else {
                    include 'partials/home.php';
               }

              
          
          ?>

          <!--::footer_part start::-->
          <footer class="footer_part">
               <div class="footer_top">
                    <div class="container">
                         <div class="row">
                              <div class="col-sm-6 col-lg-3">
                                   <div class="single_footer_part">
                                        <a href="index.html" class="footer_logo_iner"> <img src="asset/img/logo.png"
                                                  alt="#">
                                        </a>
                                        <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold
                                             bearing
                                             days
                                             open
                                        </p>
                                   </div>
                              </div>
                              <div class="col-sm-6 col-lg-3">
                                   <div class="single_footer_part">
                                        <h4>Contact Info</h4>
                                        <p>Address : CNBD.JAKARTA PUSAT</p>
                                        <p>Phone : 02195124567</p>
                                        <p>Email : beko@colorlib.com</p>
                                   </div>
                              </div>
                              <div class="col-sm-6 col-lg-3">
                                   <div class="single_footer_part">
                                        <h4>Tentang Kami</h4>
                                        <ul class="list-unstyled">
                                             <li><a href=""> Tentang beko</a></li>
                                             <li><a href="">Aturan Pengguna</a></li>
                                             <li><a href="">Kebijakan Privasi</a></li>
                                             <li><a href="">Hubungi beko</a></li>
                                        </ul>
                                   </div>
                              </div>
                              <div class="col-sm-6 col-lg-3">
                                   <div class="single_footer_part">
                                        <h4>Newsletter</h4>
                                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve
                                             behold
                                             bearing
                                             days
                                             open
                                        </p>
                                        <div id="mc_embed_signup">
                                             <form target="_blank"
                                                  action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                                  method="get" class="subscribe_form relative mail_part">
                                                  <input type="email" name="email" id="newsletter-form-email"
                                                       placeholder="Email Address" class="placeholder hide-on-focus"
                                                       onfocus="this.placeholder = ''"
                                                       onblur="this.placeholder = ' Email Address '">
                                                  <button type="submit" name="submit" id="newsletter-submit"
                                                       class="email_icon newsletter-submit button-contactForm"><i
                                                            class="far fa-paper-plane"></i></button>
                                                  <div class="mt-10 info"></div>
                                             </form>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
                              <div class="col-lg-4">
                                   <div class="footer_icon social_icon">
                                        <ul class="list-unstyled">
                                             <li><a href="#" class="single_social_icon"><i
                                                            class="fab fa-facebook-f"></i></a>
                                             </li>
                                             <li><a href="#" class="single_social_icon"><i
                                                            class="fab fa-twitter"></i></a></li>
                                             <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a>
                                             </li>
                                             <li><a href="#" class="single_social_icon"><i
                                                            class="fab fa-behance"></i></a></li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </footer>
          <!--::footer_part end::-->
     </div>

     <!-- jquery plugins here-->
     <script src="asset/js/jquery-1.12.1.min.js"></script>
     <!-- popper js -->
     <script src="asset/js/popper.min.js"></script>
     <!-- bootstrap js -->
     <script src="asset/js/bootstrap.min.js"></script>
     <!-- easing js -->
     <script src="asset/js/jquery.magnific-popup.js"></script>
     <!-- swiper js -->
     <script src="asset/js/swiper.min.js"></script>
     <!-- swiper js -->
     <script src="asset/js/masonry.pkgd.js"></script>
     <!-- particles js -->
     <script src="asset/js/owl.carousel.min.js"></script>
     <script src="asset/js/jquery.nice-select.min.js"></script>
     <!-- slick js -->
     <script src="asset/js/slick.min.js"></script>
     <script src="asset/js/jquery.counterup.min.js"></script>
     <script src="asset/js/waypoints.min.js"></script>
     <script src="asset/js/jquery.ajaxchimp.min.js"></script>
     <script src="asset/js/jquery.form.js"></script>
     <script src="asset/js/jquery.validate.min.js"></script>
     <script src="asset/js/mail-script.js"></script>
     <!-- custom js -->
     <script src="asset/js/custom.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
     <script src="login/js/main.js"></script>
     <script>
     $(document).ready(function() {
          $('.di-slick').slick({
               infinite: true,
               slidesToShow: 4,
               slidesToScroll: 1
          });

          // order 
          let harga_game = $('input#harga_game').val();
          let jmlh_topup = $('input#jmlh_topup');
          let total_harga = $('input#totalharga');
          jmlh_topup.keyup(function() {
               hrga = (jmlh_topup.val() * harga_game.split('.')[1].replace(',', '')) / 10
               total_harga.val(hrga);
          })

          // alert sukses daftar
          let result = $('.hasil').data('hasil');
          if (result) {
               Swal.fire({
                    icon: "success",
                    title: "Registrasi Berhasil Silahkan Login",
                    timer: 2000,
                    showConfirmButton: false,
               });
          }

          // alert email error
          let email_error = $('.hasil').data('emailerror');
          if (email_error) {
               Swal.fire({
                    icon: "error",
                    title: "Email Sudah Terdaftar",
                    timer: 2000,
                    showConfirmButton: false,
               });
          }

          // alert login berhasil
          let login_berhasil = $('.hasil').data('loginberhasil');
          if (login_berhasil) {
               Swal.fire({
                    icon: "success",
                    title: "Login Berhasil",
                    timer: 2000,
                    showConfirmButton: false,
               });

               setTimeout(function() {
                    window.location.href = 'dashboard/';
               }, 3000)
          }

          // alert login error
          let login_gagal = $('.hasil').data('logingagal');
          if (login_gagal) {
               Swal.fire({
                    icon: "error",
                    title: "Email dan Password salah",
                    timer: 2000,
                    showConfirmButton: false,
               });
          }

          // alert not order
          let not_order = $('.myalert').data('notorder');
          if (not_order) {
               Swal.fire({
                    icon: "error",
                    title: "Anda tidak mempunyai orderan, silahkan order terlebih dahulu",
                    timer: 2500,
                    showConfirmButton: false,
               });

               setTimeout(function() {
                    window.location.href = '?page=voucher-game'
               }, 2500)
          }

          // alert not order
          let order_sukses = $('.myalert').data('ordersukses');
          if (order_sukses) {
               Swal.fire({
                    icon: "success",
                    title: "Orderan berhasil, silahkan upload bukti transaksi untuk melanjutkan pembelian",
                    timer: 2500,
                    showConfirmButton: false,
               });

               setTimeout(function() {
                    window.location.href = '?page=dashboard-user'
               }, 2500)
          }

          // alert upload sukses
          let upload_sukses = $('.myalert').data('uploadsukses');
          if (upload_sukses) {
               Swal.fire({
                    icon: "success",
                    title: "Bukti pembayaran berhasil di upload, silahkan tunggu proses dari admin",
                    timer: 3500,
                    showConfirmButton: false,
               });

               setTimeout(function() {
                    window.location.href = '?page=dashboard-user'
               }, 3500)
          }
     })
     </script>
</body>

</html>