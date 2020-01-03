<?php
    $con=mysqli_connect("localhost","root","","test_db");

    $grad=mysqli_query($con,"select * from grades");
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
            <form action="my4-form.php" method="post">
                <tr>
                    <th><label for="fname">First Name</label></th>
                    <td><input type="text" name="fname" id="fname"></td>
                </tr>
                <tr>
                    <th><label for="lname">Last Name</label></th>
                    <td><input type="text" name="lname" id="lname"></td>
                </tr>
                <tr>
                    <th><label for="gender">Gender</label></th>
                    <td><label><input type="radio" name="gender" id="gender" value="Male">Male <input type="radio" name="gender" id="gender" value="Female">Female</label></td>
                </tr>
                <tr>
                    <th><label for="address">Address</label></th>
                    <td><textarea name="address" id="address" rows="2"></textarea></td>
                </tr>
                <tr>
                    <th><label for="lname">Color</label></th>
                    <td><input type="color" name="color" id="color"></td>
                </tr>
                <tr>
                <th><label for="lname">Grade</label></th>
                <td>
                <select>
                <?php foreach($grad as $grade) { echo "<option value =$grade[id]>$grade[grade]</option>";}?>
                </select>
                </td>
                </tr>
            
                <tr>
                <th><input type="submit" value="Submit"> <input type="reset" value="Clear"><button><a href="my2-ii.php">View Table</a></button></th>
                </tr>
                <tr>
                <th></th>
                </tr>

                
            </form>
        </table>
    </body>
</html>