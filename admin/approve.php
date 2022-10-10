<?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");
  $id=$_GET['sid'];  
  if(mysqli_query($a,"UPDATE seller SET status ='appr' WHERE ID = '".$id."'"))
  {
    echo'<script>
    alert("Approved");
    window.location.href="view_seller.php";
    </script>';
  }
  else
  {
    echo'<script>
    alert("Try Again...!");
    window.location.href="view_seller.php";
    </script>';
  }
  ?>