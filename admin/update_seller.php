<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Auction System - admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");
  $res = mysqli_query($a,"SELECT * FROM seller WHERE ID = '".$_GET['id_b']."'");
  $row = mysqli_fetch_row($res);
?> 
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="logo.jpg" alt="Bid Logo" height="60" width="60">
  </div>

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
include('sidebar.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    


<br>
<br>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Seller Registration</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
  
              <form action="update_seller.php" method="POST">
                <div class="card-body">

                   <div class="form-group">
                    <legend>Seller Information</legend><br>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                       <label>Name</label>
                       <input type="text" class="form-control"  placeholder="Enter full name" name="sname"
                       style=" border-top: 1px solid #0000; border-left: 1px solid #0000; border-right: 1px solid #0000" value="<?php echo $row[1]?>">
                       <input type="hidden" class="form-control"  placeholder="Enter full name" name="id" value="<?php echo $row[0]?>"> -->
                    </div>

                    <div class="col-md-6">
                       <label>Mobile number</label>
                        <input type="number" class="form-control"  placeholder="Enter mobile number" name="mobile" value="<?php echo $row[2]?>"
                        style=" border-top: 1px solid #0000; border-left: 1px solid #0000; border-right: 1px solid #0000">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                       <label>Email</label>
                       <input type="email" class="form-control"  placeholder="Enter your email" name="email" value="<?php echo $row[3]?>"
                       style=" border-top: 1px solid #0000; border-left: 1px solid #0000; border-right: 1px solid #0000">
                    </div>

                    <div class="col-md-6">
                       <label>Address</label>
                        <textarea name="address" class="form-control" placeholder="Enter your address"
                        style=" border-top: 1px solid #0000; border-left: 1px solid #0000;">
                          <?php echo $row[4]?>
                        </textarea>
                    </div>
                  </div>
                  <br>                
                  <div class="row">
                    <div class="col-md-6">
                      <label>Aadhar number</label>
                      <input type="number" class="form-control"  placeholder="Your Aadhar Nnumber" name="aadhar" value="<?php echo $row[5]?>"
                      style=" border-top: 1px solid #0000; border-left: 1px solid #0000; border-right: 1px solid 
                      #0000">
                    </div>

                    <!-- <div class="col-md-6">
                        <label>Photo</label>
                      <input type="file" class="form-control" name="Photo"
                      style="border-bottom: 1px solid #0000; border-top: 1px solid #0000; border-left: 1px solid #0000;     border-right: 1px solid #0000">
                    </div> -->
                  </div>
                  <br>
                   <div class="row">
                    <div class="col-md-6">
                      <label>Username</label>
                      <input type="text" class="form-control"  placeholder="Username" name="uname"
                      style=" border-top: 1px solid #0000; border-left: 1px solid #0000; border-right: 1px solid #0000" value="<?php echo $row[6]?>">
                    </div>

                    <div class="col-md-6">
                         <label>Password</label>
                         <input type="password" class="form-control"  placeholder="Passward" name="password" value="<?php echo $row[7]?>"
                         style=" border-top: 1px solid #0000; border-left: 1px solid #0000; border-right: 1px solid #0000">
                    </div>
                  </div>

                 
                   
                </div>
                  
                <div class="card-footer">
                  <button type="submit" class="btn btn-secondary" name="save">Submit</button>
                  <button type="reset" class="btn btn-danger" name="save">Cancel</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>



   

  </div>
  <!-- /.content-wrapper -->
  <?php
include('footer.php');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
<?php
if(isset($_POST['save']))
{
  $name=$_POST['sname'];
  $mob=$_POST['mobile'];
  $e=$_POST['email'];
  $add=$_POST['address'];
  $Aid=$_POST['aadhar'];
  $user=$_POST['uname'];
  $pass=$_POST['password'];
  $id=$_POST['id'];

  if(mysqli_query($a,"UPDATE seller SET NAME='".$name."',MOBILE='".$mob."',EMAIL='".$e."',ADDRESS='".$add."',AADHARNO='".$Aid."',USERNAME='".$user."',PASSWORD='".$pass."' WHERE ID='".$id."'"))
  {
    echo'<script>
    alert("Seller Updated");
    window.location.href="view_seller.php";
    </script>';
  }
  else
  {
    echo'<script>
    alert("Seller Updated");
    window.location.href="view_seller.php";
    </script>';
  }

}

?>