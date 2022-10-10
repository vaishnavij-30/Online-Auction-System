               <!-- form start -->
  <?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");
    
  ?>
 <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <img src="img/logo.png" alt="" class="img img-responsive" style="width: 115px;">
                    </div>
                </div>
                <div class="col-xl-6">
                    <nav class="header__menu">
                        <br><br>
                        <ul>
                            <li><a href="index2.php">Home</a></li>
                            <li><a href="account.php">My Profile</a></li>
                            <li><a href="About.php">About Us</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="#about">About</a>
                                        <a href="#services">Services</a>
                                        <a href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="#">Post Bid</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="bid_new.php">New Product</a>
                                        <a href="bid_old.php">Old Product</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <!-- <li><a href="./shop.html">Search</a></li> -->
                            <!-- <li><a href="#">Search for Bid</a>
                                <ul class="dropdown">
                                    <li><a href="./product-details.html">
                                        <?php
                                          // $res=mysqli_query($a,"SELECT * FROM category");
                                          // while($row=mysqli_fetch_row($res))
                                          // {
                                          //   echo "<option value='".$row[0]."'>$row[1]</option>";
                                          // }
                                        ?>
                                    </a></li>
                                    
                                </ul>
                            </li> -->
                            <!-- <li><a href="./blog.html">Blog</a></li> -->
                            <li><a href="logout.php">Sign Out</a></li>
        
                        </ul>
                    </nav>
                </div>
                <br>
        <?php
        $name=mysqli_fetch_row(mysqli_query($a,"SELECT * FROM User_login WHERE ID='".$_SESSION['customer']."'"));
        ?>
        <div class="col-sm-2">
            <img class="img img-responsive" src="<?php echo $name[6]?>" style="width: 100px; height: 100px; margin-top: 30px;border-radius: 30px; ">
        </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>