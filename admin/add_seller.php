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
  <?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");
  ?>
              <form action="add_seller.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                   <div class="form-group">
                    <legend>Seller Information</legend><hr>
                   </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                       <label>Name</label>
                       <input type="text" class="form-control"  placeholder="Enter full name" name="sname"
                       style=" border-top: 1px solid #0000; border-left: 1px solid #0000; border-right: 1px solid #0000">
                    </div>

                    <div class="col-md-6">
                       <label>Mobile number</label>
                        <input type="number" class="form-control"  placeholder="Enter mobile number" name="mobile"
                        style=" border-top: 1px solid #0000; border-left: 1px solid #0000; border-right: 1px solid #0000">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                       <label>Email</label>
                       <input type="email" class="form-control"  placeholder="Enter your email" name="email"
                       style=" border-top: 1px solid #0000; border-left: 1px solid #0000; border-right: 1px solid #0000">
                    </div>

                    <div class="col-md-6">
                       <label>Address</label>
                        <textarea name="address" class="form-control" placeholder="Enter your address"
                        style=" border-top: 1px solid #0000; border-left: 1px solid #0000;">
                          
                        </textarea>
                    </div>
                  </div>
                  <br>                
                  <div class="row">
                    <div class="col-md-6">
                      <label>Aadhar number</label>
                      <input type="number" class="form-control"  placeholder="Your Aadhar Nnumber" name="aadhar"
                      style=" border-top: 1px solid #0000; border-left: 1px solid #0000; border-right: 1px solid 
                      #0000">
                    </div>

                    <div class="col-md-6">
                        <label>Photo</label>
                      <input type="file" class="form-control" name="Photo"
                      style="border-bottom: 1px solid #0000; border-top: 1px solid #0000; border-left: 1px solid #0000;     
                      border-right: 1px solid #0000">
                    </div>
                  </div>
                  <br>
                   <div class="row">
                    <div class="col-md-6">
                      <label>Username</label>
                      <input type="text" class="form-control"  placeholder="Username" name="uname"
                      style=" border-top: 1px solid #0000; border-left: 1px solid #0000; border-right: 1px solid #0000">
                    </div>

                    <div class="col-md-6">
                         <label>Password</label>
                         <input type="password" class="form-control"  placeholder="Passward" name="password"
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
  $id=$_POST['aadhar'];
  $user=$_POST['uname'];
  $pass=$_POST['password'];


$max1=mysqli_query($a,"SELECT MAX(ID) FROM seller");
$max=mysqli_fetch_row($max1);
      if($max[0])
      {
        $max=$max[0];
        $max_id=$max+1;
      }
      else 
      {
       $max_id=1;
      } 


  $file_exists=array("jpg","jpeg","png","gif","bmp","pdf");//file extenssions supported for upload 

        
        $upload_exists = end (explode('.', $_FILES["Photo"]["name"]));//find extension of file 
        if(($upload_exists==null )||($upload_exists==""))//file is none or of 0kb
        {
            
            echo"<script>alert('File Not Select Or uncompatible file'); </script>";
        }
        else
        {
            if((($_FILES['Photo']['size']<2000000) || in_array($upload_exists,$file_exists)))//file size & file extension support
            {
             $newname="$max_id"."_seller.png"; 
          $targetfile='upload/'.$newname;//location of folder with target file name 

                if($_FILES['Photo']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');</script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['Photo']['tmp_name'],$targetfile);//end img code



  

  if(mysqli_query($a,"INSERT INTO seller VALUES('','".$name."','".$mob."','".$e."','".$add."','".$id."','".$user."','".$pass."','dis',
    '".$targetfile."')"))
  {
    echo'<script>
    alert("Seller Added");
    window.location.href="add_seller.php";
    </script>';
  }
  else
  {
    echo'<script>
    alert("Seller Added");
    window.location.href="add_seller.php";
    </script>';
  }

}
}
}
}

?>