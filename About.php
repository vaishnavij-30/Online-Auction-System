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
<br><br><br>
<!-- About Session Start -->
<!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              
              
              <h3 style="font-family: Bahnschrift"><u>A Few Words About Us</u></h3>
              <p>
                Online Auction is where everyone goes to shop, sell, and give, while discovering variety and affordability.
              </p>
              <br>
              <p>Online Auction has been recognized as the go-to online auction marketplace for new, overstock, closeout and recertified products.
              </p>
              <p>
              We specialize in offering the best deals on popular, everyday items from watches to laptops, and sports memorabilia from trusted and certified vendors and merchants, directly to our customers in auction, fixed-price and "Deals of the Day" formats.</p>
              <!-- <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a> -->
              <br><br>
              <p>An auction is usually a process of buying and selling goods or services by offering them up for bids, taking bids, and then selling the item to the highest bidder or buying the item from the lowest bidder. </p>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <!-- <i class="bx bx-receipt"></i> -->
                  <img class="" src="about/assets\img\logo.jpg">
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <!-- <i class="bx bx-cube-alt"></i> -->
                  
                  <img src="about\assets\img\team\team-2.jpg">
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <!-- <i class="bx bx-images"></i> -->
                  
                  <img src="about\assets\img\team\team-3.jpg">
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <!-- <i class="bx bx-shield"></i> -->
                  <!-- <h4>Beatae veritatis</h4> -->
                  <img class="" src="about\assets\img\online.jpg">
                  <!-- <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p> -->
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


<!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2><b>Services</b></h2>

        </div>

        <div class="row">
          <div class="col-md-3 col-lg-1 "></div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <h4 class="title"><a href="">Step - 1</a></h4>
              <p class="description">First of all...! Confirm Your Registration.</p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">Step - 2</a></h4>
              <p class="description">Then....! &nbsp; Login into your account.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <h4 class="title"><a href="">Step - 3</a></h4>
              <p class="description">Select the product that you want from POST BID and start your bidding.</p>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Services Section -->


<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg" style="background: linear-gradient(57deg, lightpink,lightskyblue,pink)">
      <div class="container" data-aos="fade-up">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2><b>Contact</b></h2>
          
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Maharashtra</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+91 ***** *****</p>
            </div>
          </div>

        </div>

        <!-- <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="about\assets\img\contact.jpg" frameborder="0" style="border:0; width: 100%; height: 384px; border-radius: 30px" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="About.php" method="POST" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input name="n" type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input name="e" type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input name="s" type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea name="m" class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
              <button class="btn btn-primary" name="save" type="submit">Send Message</button>
            </form>
          </div>
        </div> -->

      </div>
    </section><!-- End Contact Section -->

<br><br>
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
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->