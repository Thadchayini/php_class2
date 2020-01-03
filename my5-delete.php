<?php
    $con=mysqli_connect("localhost","root","","test_db");
    $result=mysqli_query($con,"DELETE FROM `students` WHERE id=9");
?>