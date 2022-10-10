<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Auction System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");
?>
<div class="register-box">
  <div class="card card-outline card-warning">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Auction</b>System</a>
    </div>
    <div class="card-body" style="border-top: 1px solid black; box-shadow: 0px 2px">
      <p class="login-box-msg" style="font-size: 30px">Register</p>

      <form action="register_user.php" method="POST" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="rname" 
          style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
          <div class="input-group-append">
            <div class="input-group-text" style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="col-md-12">
            Photo
            <input type="file" class="form-control" name="Photo"
            style="border-bottom: 1px solid #0000; border-top: 1px solid #0000; border-left: 1px solid #0000;     border-right: 1px solid #0000">
        </div>
       <br>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" 
           style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
          <div class="input-group-append">
            <div class="input-group-text" style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

         <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Mobile" name="mobile" 
           style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
          <div class="input-group-append">
            <div class="input-group-text" style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" 
          style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
          <div class="input-group-append">
            <div class="input-group-text" style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" 
          style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
          <div class="input-group-append">
            <div class="input-group-text" style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <br>
       
        <br>
        <div class="row">
          <div class="col-12">
            <!-- /.col -->
          
            <button type="submit" class="btn btn-warning btn-block" name="save">Register</button>
          
          <!-- /.col -->
          </div>
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->
      <br>
      <a href="login2.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['save']))
{
  $rname=$_POST['rname'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $username=$_POST['username'];
  $password=$_POST['password'];

  $max1=mysqli_query($a,"SELECT MAX(ID) FROM User_login");
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
             $newname="$max_id"."_user.png"; 
          $targetfile='upload/'.$newname;//location of folder with target file name 

                if($_FILES['Photo']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');</script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['Photo']['tmp_name'],$targetfile);//end img code





  if(mysqli_query($a,"INSERT INTO User_login VALUES('','".$rname."','".$email."','".$mobile."',
    '".$username."','".$password."','".$targetfile."')"))
  {
    echo'<script>
    alert("Registeration Done");
    window.location.href="register_user.php";
    </script>';
  }
  else
  {
    echo'<script>
    alert("Registration Done");
    window.location.href="register_user.php";
    </script>';
  }

}
}
}
}

?>