<?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");
  $res=mysqli_query($a,"SELECT * FROM sub_category WHERE category_id='".$_POST['cid']."'");
   echo"<option>Select Sub Category</option>";

  while($row=mysqli_fetch_row($res))
  {
  echo "<option value=".$row[0].">$row[2]</option>";

  }
?>