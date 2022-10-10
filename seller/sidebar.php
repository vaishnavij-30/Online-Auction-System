<?php

session_start();
if(isset($_SESSION['user']))
{

}
else
{
    echo'
    <script>
     window.location.href="../index.php";
    </script>
    ';
}
?>
<?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");

    $name=mysqli_fetch_row(mysqli_query($a,"SELECT * FROM seller WHERE ID='".$_SESSION['user']."'"));

?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../logout.php" class="nav-link">Logout</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <!-- <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul> -->
  </nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="logo.jpg" alt="Bid Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Auction System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../admin/<?php echo $name[9]?>" class="img-circle elevation-2" alt="Seller Image" style="width: 40px; height: 40px; border-radius: 40px">
        </div>
        <div class="info">
          
          <a href="#" class="d-block">Seller - [ <?php echo $name[1]?> ]</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
                <i class="right fas "></i>
              </p>
            </a>
              
          </li>
          
          
        
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Sub Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_subcategory.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sub-category</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="view_subcategory.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Sub-category</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                New Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_newproduct.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add Product</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="view_newproduct.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Product</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Old Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_oldproduct.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add Product</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="view_oldproduct.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Product</p>
                </a>
              </li>
              
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Bidding Details
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="New_Biddingdetails.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Product</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Old_Biddingdetails.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Old Product</p>
                </a>
              </li>
              
            </ul>
          </li>
          
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  