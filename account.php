<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Auction System</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link href="about/assets/img/favicon.png" rel="icon">
  <link href="about/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="about/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="about/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="about/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="about/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="about/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="about/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="about/assets/css/style.css" rel="stylesheet">


</head>
<body>
<?php

session_start();
if(isset($_SESSION['customer']))
{

}
else
{
    echo'
    <script>
     window.location.href="index2.php";
    </script>
    ';
}
?>
<?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");

 
$User=mysqli_fetch_row(mysqli_query($a,"SELECT * FROM User_login WHERE ID='".$_SESSION['customer']."'"));

?>

<!-- Page Preloder -->
   

<!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        
    </div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<?php
include('menu.php');
?>
<!-- Header Section End -->

<section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="contact__content">
                        <div class="contact__address">
                            <h5>User Info</h5>
                            <ul>
                                <li>
                                    <h6><i class="fa fa-user"></i>Name</h6>
                                    <p><?php echo $name[1] ?></p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone"></i> Phone</h6>
                                    <p><span><?php echo $name[3] ?></span></p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-envelope"></i>Email</h6>
                                    <p><?php echo $name[2] ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                            <div class="section-title">
                                <h3><u>Your Bid For New Products</u></h3>
                            </div>
                       
                             <?php
                              $nbid1=mysqli_query($a,"SELECT * FROM newbid WHERE UID='".$_SESSION['customer']."'");
                                 while($nbid=mysqli_fetch_row($nbid1))
                                 {
                                    $pname=mysqli_fetch_row(mysqli_query($a,"SELECT * FROM new_product WHERE ID='".$nbid[1]."'"));

                                echo'<div class="trend__item">
                                    <div class="trend__item__pic">
                                        <img src=seller/'.$pname[7].' style="width:100px; height:100px" alt="">
                                    </div>
                                    <div class="trend__item__text">
                                        <h6>'.$pname[2].'</h6>
                                       
                                        <div class="product__price">&#8377; '.$nbid[4].'</div>
                                    </div>
                                </div>';
                            }
                                ?>


                    </div>
                 </div>






                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                            <div class="section-title">
                                <h3><u>Your Bid For Old Products</u></h3>
                            </div>
                       
                             <?php
                              $nbid1=mysqli_query($a,"SELECT * FROM oldbid WHERE UID='".$_SESSION['customer']."'");
                                 while($nbid=mysqli_fetch_row($nbid1))
                                 {
                                    $pname=mysqli_fetch_row(mysqli_query($a,"SELECT * FROM old_product WHERE ID='".$nbid[1]."'"));

                                echo'<div class="trend__item">
                                    <div class="trend__item__pic">
                                        <img src=seller/'.$pname[8].' style="width:100px; height:100px" alt="">
                                    </div>
                                    <div class="trend__item__text">
                                        <h6>'.$pname[2].'</h6>
                                       
                                        <div class="product__price">&#8377; '.$nbid[4].'</div>
                                    </div>
                                </div>';
                            }
                                ?>


                    </div>
                 </div>

            </div>
        </div>
 </section>  

<!-- Footer Section Begin -->
<?php
include('footer.php');
?>

<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>

<!-- Vendor JS Files -->
  <script src="about/assets/vendor/purecounter/purecounter.js"></script>
  <script src="about/assets/vendor/aos/aos.js"></script>
  <script src="about/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="about/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="about/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="about/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="about/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="about/assets/js/main.js"></script>
</body>

</html>
              