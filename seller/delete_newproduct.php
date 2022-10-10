<?php
$a = mysqli_connect("localhost","root","","Auction_system")or die("database error");
$sid=$_GET['id_c'];
    if (mysqli_query($a,"DELETE FROM new_product WHERE ID='".$sid."'")) 
    {
      
      echo "<script>
      alert('Data Deleted');
      window.location.href='view_newproduct.php';
      </script>";
    }
    else
    {
        echo "<script>
      alert('Data Inserted');
      window.location.href='view_newproduct.php';
      </script>"; 
    }
?>