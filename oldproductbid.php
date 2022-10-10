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
  

<form action="oldproductbid.php" method="POST">
<!-- Discount Section Begin -->
&nbsp;<h3><b>&nbsp;&nbsp;&nbsp;&nbsp;<u>Old Product</u></b></h3>
<br>
<?php
    $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");
    $res = mysqli_query($a,"SELECT * FROM old_product WHERE ID='".$_GET['id']."'");
    $bdata = mysqli_fetch_row($res);


    $cname=mysqli_query($a,"SELECT * FROM category WHERE ID='".$bdata[1]."'");
    $cn=mysqli_fetch_row($cname);

    $scat=mysqli_query($a,"SELECT * FROM sub_category WHERE ID='".$bdata[7]."'");
    $sc=mysqli_fetch_row($scat);
    
    $sname=mysqli_query($a,"SELECT * FROM seller WHERE ID='".$bdata[6]."'");
    $sn=mysqli_fetch_row($sname);

    $bname=mysqli_query($a,"SELECT * FROM oldbid WHERE UID = '".$bdata[0]."'");
    $bn=mysqli_fetch_row($bname);

  // echo $str = '2013-02-10';
$new_date_format =date('d-m-Y H:i', strtotime($bdata[5]));

echo'
<section class="discount">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 p-0">
            <input type="hidden" value='.$bdata[0].' name="pid">
            <input type="hidden" value='.$sn[0].' name="sid">
                <div class="discount__pic">
                    <img src="seller/'.$bdata[8].'" style="height:290px;width:220px;" alt="">
                </div>
            </div>
            <div class="col-lg-5 p-0">
                <div class="discount__text">
                    <div class="discount__text__title" style="margin-top: -60px">
                        <span>'.$cn[1].'</span><br>
                        <span>'.$sc[2].'</span><br>
                        <br>
                        <h2 style="color: purple" style="margin-top: 30px">
                         '.$bdata[2].'
                        </h2>
                        <br>
                        <p style="margin-top: -5px"><h5><span>Original Price</span>&#8377;'.$bdata[3].'</h5></p>
                        <p style="margin-top: -10px"><h5><span>Selling Price</span>&#8377;'.$bdata[4].'</h5></p>
                        
                    </div>
                    <div  id="" style="margin-top: -60px">
                        <div class="">
                            <span>Ends On: &nbsp;<b style="color:red">'.$new_date_format.'</b></span><br>
                            <span>Seller: </span><b style="color: blue">'.$sn[1].'</b><b style="color: black">&nbsp;('.$sn[2].')</b>
                        </div>
                        <div style="margin-top: 20px">
                           
                            <input class="form-control" type="number" placeholder="Your Bid Amount" name="amt">
                        </div>
                        <br>
                        <button style="margin-top: -20px" class="btn btn-primary" href="oldproductbid.php?id='.$bdata[0].'"
                        name="save">
                        Bid now</button>

                        <br><br><br> 
                    </div>
                    
                </div>
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-6" >
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Bidding/User</h4>
                    </div>';
                     $obid1=mysqli_query($a,"SELECT * FROM oldbid WHERE PID='".$_GET['id']."' ORDER BY bid_amt DESC");
                     while($obid=mysqli_fetch_row($obid1))
                     {
                        $user_name1=mysqli_fetch_row(mysqli_query($a,"SELECT * FROM user_login WHERE ID='".$obid[3]."'"));
                    echo'<div class="trend__item">
                        <div class="trend__item__pic">
                            <img src='.$user_name1[6].' style="height:100px;width:100px;border-radius:100px" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6 style="color:blue"><b>'.$user_name1[1].'</b></h6>
                           
                            <div class="product__price">&#8377;'.$obid[4].'</div>
                        </div>
                    </div>';


                    }
                echo'</div>
            </div>
        
        </div>
    </div>
</section>';
echo '<br>';

?>
</form>
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
<?php
if(isset($_POST['save']))
{
  $pid=$_POST['pid'];
  $sid=$_POST['sid'];
  $amt=$_POST['amt'];
  $chid=mysqli_query($a,"SELECT * FROM oldbid WHERE UID='".$_SESSION['customer']."' && PID='".$pid."'");

  if($ch_id1=mysqli_num_rows($chid)>0)
  {
         if(mysqli_query($a,"UPDATE oldbid SET bid_amt='".$amt."' WHERE UID='".$_SESSION['customer']."'"))
        {
            echo'<script>
            alert("Your Bid Updated Successfully...!");
            window.location.href="oldproductbid.php?id='.$pid.'";
            </script>';
          }
  }
  else
  {
        if(mysqli_query($a,"INSERT INTO oldbid VALUES('','".$pid."','".$sid."','".$_SESSION['customer']."','".$amt."')"))
          {
            echo'<script>
            alert("Old Product Bid Added");
            window.location.href="oldproductbid.php?id='.$pid.'";
            </script>';
          }
          else
          {
            echo'<script>
            alert("Old Product Bid Added");
            window.location.href="oldproductbid.php?id='.$pid.'";
            </script>';
          }

  }

}

?>