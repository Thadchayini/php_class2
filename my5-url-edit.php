
<?php

    $edit_id=$_GET["id"];
    $con=mysqli_connect("localhost","root","","test_db");
    $result=mysqli_query($con,"SELECT * FROM `students` WHERE id=$edit_id");

    $row=mysqli_fetch_assoc($result);

?>
<html>
    <head>
        <style>
            table 
            {
                padding:10px;
            }
            table tr,th,td
            {
                padding:10px;
            }
        </style>
    </head>
    <body>
        <table>
            <form action="my5-update.php" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $row["id"];?>">        <!--Send id as hidden to next file-->
                <tr>
                    <th><label for="fname">First Name</label></th>
                    <td><input type="text" name="fname" id="fname" value="<?php echo $row["first_name"];?>"></td>
                </tr>
                <tr>
                    <th><label for="lname">Last Name</label></th>
                    <td><input type="text" name="lname" id="lname" value="<?php echo $row["last_name"];?>"></td>
                </tr>
                <tr>
                    <th><label for="gender">Gender</label></th>
                    <td><label><input type="radio" name="gender" id="gender" value="Male" <?php echo ($row["gender"]=="Male")?"checked":"";?>>Male <input type="radio" name="gender" id="gender" value="Female" <?php echo ($row["gender"]=="Female")?"checked":"";?>>Female</label></td>
                </tr>
                <tr>
                    <th><label for="address">Address</label></th>
                    <td><textarea name="address" id="address" rows="2"><?php echo $row["address"]; ?></textarea></td>
                </tr>
                <tr>
                    <th><label for="address">Color</label></th>
                    <td><input type = "color" name="color" id="color"/><?php echo $row["color"]; ?></td>
                </tr>
                <tr>
                    <th></th>
                </tr>
                <tr>
                <th><input type="submit" value="Submit"> <input type="reset" value="Clear"></th>
                </tr>
            </form>
        </table>
    </body>
</html>