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
<body class="hold-transition login-page">
<?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");
?>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-warning">
    <div class="card-header text-center">
      <a href="login2.php" class="h1"><b>Auction</b>System</a>
    </div>
    <div class="card-body" style="border-top: 1px solid black; box-shadow: 0px 2px">
    <div class="card-body login-card-body">
      <p class="login-box-msg" style="font-size: 30px">User Login</p>

      <form action="login2.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="uname" placeholder="Username" 
          style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
          <div class="input-group-append">
            <div class="input-group-text" style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password" 
          style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
          <div class="input-group-append">
            <div class="input-group-text" style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000; ">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <br>
          <div class="col-4">
            <button type="submit" name="save" class="btn btn-warning btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
<!-- 
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <br>
      <p class="mb-0">
        <a href="register_user.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>
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
  
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    
    $res=mysqli_query($a,"select * from User_login where Username='".$uname."' && Password='".$pass."'");
    $row=mysqli_fetch_row($res);


   if($num=mysqli_num_rows($res)>0)
     {
     session_start();
     $_SESSION['customer']=$row[0];
    echo'
    <script>
   window.location.href="index2.php";
    </script>
    ';
    }

   

    else
    {
        echo'
    <script>
    alert("Wrong Username & Password ");
   window.location.href="login2.php";
    </script>
    ';
    }
}
?>