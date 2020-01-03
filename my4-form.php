<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$color=$_POST["color"];


$con=mysqli_connect("localhost","root","","test_db");

mysqli_query($con,"INSERT INTO `students`(`first_name`, `last_name`, `gender`, `address`, `color`) VALUES ('$fname','$lname','$gender','$address','$color')") or die(mysqli_error($con));

header("location:my2-ii.php");

?>