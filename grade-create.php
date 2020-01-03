<?php
$grade=$_POST["grade"];

$con=mysqli_connect("localhost","root","","test_db");

mysqli_query($con,"INSERT INTO `grades`(`grade`) VALUES ('$grade')") or die(mysqli_error($con));

header("location:grade-table.php");

?>