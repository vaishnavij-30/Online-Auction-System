<?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");


    $name=mysqli_query($a,"SELECT * FROM old_product WHERE category_id='".$_POST['cat1_id']."'");
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
    if($date1>=$date2) 
    {
        
            echo'<section class="discount">
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
                                </div>
                                <div class="discount__countdown" id="" style="margin-top: -40px">
                                    <div class="">
                                        <span>Ends On: &nbsp;<b style="color:red">'.$new_date_format.'</b></span><br>
                                        <span>Current Date & Time: &nbsp;<b style="color:purple">'.$cdate.'</b></span>
                                        <p>Seller: <b style="color: blue">'.$sn[1].'</b><b style="color: black">&nbsp;('.$sn[2].')</b></p>
                                    </div>
                                   
                                </div>
                                <a href="oldproductbid.php?id='.$bdata[0].' ">Bid now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>';
            echo '<br>';    
    }
    else
    {
            echo'<section class="discount">
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
                                </div>
                                <div class="discount__countdown" id="" style="margin-top: -40px">
                                    <div class="">
                                        <span>Ends On: &nbsp;<b style="color:blue">'.$new_date_format.'</b></span><br>
                                        <span>Current Date & Time: &nbsp;<b style="color:purple">'.$cdate.'</b></span>
                                        <p>Seller: <b style="color: blue">'.$sn[1].'</b><b style="color: black">&nbsp;('.$sn[2].')</b></p>
                                    </div>
                                   
                                </div>
                                <a href="oldproductbid.php?id='.$bdata[0].' ">Bid now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>';
            echo '<br>';

    }

}
?>