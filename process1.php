<?php
include 'mysql1.php';
error_reporting(0);

if(isset($_POST['sav']))
{
 $a=$_POST['uname'];
 $b=$_POST['pass'];
 $sql="INSERT  INTO register2 (uname,pass) VALUES('$a','$b')";
 if (mysqli_query($con, $sql)) {
    echo "New record created successfully !";
 } else {
    echo "Error: " . $sql . "" . mysqli_error($con);
 }
 mysqli_close($con);
}
 ?>