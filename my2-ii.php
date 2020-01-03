
        <?php
            $con=mysqli_connect("localhost","root","","test_db");

            $result=mysqli_query($con,"select * from students");

            $grade_id=$_GET["id"];
            $grad=mysqli_query($con,"SELECT * FROM `grades` WHERE id=$grade_id");
            $gra=mysqli_fetch_assoc($grad);

        ?>
<html>
    <head>
    </head>
    <body>
    <table border="1" style="width:75%; height:50px;">
        <tr>
             <th>ID</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Gender</th>
             <th>Address</th>
             <th>Grade</th>
             <th>Delete</th>
             <th>Edit</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
        ?>
            <tr style = "background-color:<?php echo $row["last_name"];?>">
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["first_name"];?></td>
                <td><?php echo $row["last_name"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td><?php echo $row["address"];?></td>
                
                <td><?php echo $gra["grade"];?></td>
                
                <td><a href="my5-url-delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Do You Want to Delete?')">Delete</a></td>
                <td><a href="my5-url-edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
            </tr>

        <?php
        }
        ?>
    </table>
    </br>
    <button><a href="my4.php">Add New</a></button>

    </body>
</html>