<?php
include 'mysql.php';
error_reporting(0);

if(isset($_POST['sav']))
{
 $a=$_POST['name'];
 $b=$_POST['no'];
 $c=$_POST['course'];
 $d=$_POST['email'];
 $sql="INSERT  INTO register1 (name,no,course,email) VALUES('$a','$b','$c','$d')";
 if (mysqli_query($con, $sql)) {
    echo "New record created successfully !";
 } else {
    echo "Error: " . $sql . "" . mysqli_error($con);
 }
 mysqli_close($con);
}
 ?>

