<?php
include 'mysql2.php';
error_reporting(0);

if(isset($_POST['sav']))
{
 $a=$_POST['message'];
 $sql="INSERT  INTO register3 (message) VALUES('$a')";
 if (mysqli_query($con, $sql)) {
    echo "New record created successfully !";
 } else {
    echo "Error: " . $sql . "" . mysqli_error($con);
 }
 mysqli_close($con);
}
 ?>