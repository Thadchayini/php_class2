<?php

/*$edit_id=$_GET["id"];*/

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$color=$_POST["color"];


$id=$_POST["id"];


$con=mysqli_connect("localhost","root","","test_db");

mysqli_query($con, "UPDATE `students` SET `first_name`='$fname',`last_name`='$lname',`gender`='$gender',`address`='$address',`color`=`$color`, WHERE id=$id") or die(mysqli_error($con));

header("location:my2-ii.php");
?>