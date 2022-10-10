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
     <script type="text/javascript">
        function get_pdata(val)
        {
            $.ajax({
              data: "cat1_id="+val,
              type: "POST",
              url: "oldproduct_ajax.php",
              success: function(data)
              {
                $("#prdata").html(data);
                // document.getElementById('scat').value=data;
              }

            });
        }
    </script>
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
     window.location.href="index.php";
    </script>
    ';
}
?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
   <?php
   include("menu.php");
   ?>
  

<br><br>
<!-- Discount Section Begin -->
<section class="discount">
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3">
            <h3>
                Old Product
            </h3>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-4">
            <select name="pro_name" class="form-control" onchange="get_pdata(this.value)">
                <option>Sort By</option>
                <?php
                $res=mysqli_query($a,"SELECT * FROM category");
                while($pname=mysqli_fetch_row($res))
                {
                    echo "<option value='".$pname[0]."'>$pname[1]</option>";
                }
                ?>
            </select>
        </div>
    </div>
</div>
<br>
<div id="prdata">
<?php
    $name=mysqli_query($a,"SELECT * FROM old_product");
while($bdata=mysqli_fetch_row($name))
{
    date_default_timezone_set('Asia/Kolkata'); 

    $cname=mysqli_query($a,"SELECT * FROM category WHERE ID='".$bdata[1]."'");
    $cn=mysqli_fetch_row($cname);

    $scat=mysqli_query($a,"SELECT * FROM sub_category WHERE ID='".$bdata[7]."'");
    $sc=mysqli_fetch_row($scat);
    
    $sname=mysqli_query($a,"SELECT * FROM seller WHERE ID='".$bdata[6]."'");
    $sn=mysqli_fetch_row($sname);

$new_date_format =date('d-m-Y h:i a', strtotime($bdata[5]));

$cdate=date("d-m-Y h:i a"); // time in India

$format = "d-m-Y h:i a";
$date1  = \DateTime::createFromFormat($format, $cdate);
$date2  = \DateTime::createFromFormat($format, $new_date_format);


    echo "<br>";

    echo'
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="discount__pic">
                                <img src="seller/'.$bdata[8].'" style="height:370px;width:280px;" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="discount__text">
                                <div class="discount__text__title" style="margin-top:-50px">
                                    <span>'.$cn[1].'</span><br>
                                    <span>'.$sc[2].'</span><br>
                                    <br>
                                    <h2 style="color: purple">
                                     '.$bdata[2].'
                                    </h2>
                                    <br>
                                    <h5><span>Original Price</span> &#8377;'.$bdata[3].'</h5>
                                    <h5><span>Selling Price</span> &#8377;'.$bdata[4].'</h5>
                                </div>';
    if($date1>=$date2) 
    {
        
            echo'<div class="discount__countdown" id="" style="margin-top: -40px">
                    <div class="">
                        <span>Ends On: &nbsp;<b style="color:red">'.$new_date_format.'</b></span><br>
                        <span>Current Date & Time: &nbsp;<b style="color:purple">'.$cdate.'</b></span>
                        <p>Seller: <b style="color: blue">'.$sn[1].'</b><b style="color: black">&nbsp;('.$sn[2].')</b></p>
                    </div>
                   
                </div>';
    }
    else
    {
            echo'<div class="discount__countdown" id="" style="margin-top: -40px">
                    <div class="">
                        <span>Ends On: &nbsp;<b style="color:blue">'.$new_date_format.'</b></span><br>
                        <span>Current Date & Time: &nbsp;<b style="color:purple">'.$cdate.'</b></span>
                        <p>Seller: <b style="color: blue">'.$sn[1].'</b><b style="color: black">&nbsp;('.$sn[2].')</b></p>
                    </div>
                   
                </div>';
                                
    }

    echo '<a href="oldproductbid.php?id='.$bdata[0].' ">Bid now</a>
                            </div>
                        </div>
                    </div>
                </div>';

}
?>
</div>
</section>';

<br>



<!-- Discount Section End -->


<?php
include('footer.php');
?>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

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
</body>

</html>