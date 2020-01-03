
        <?php
             $con=mysqli_connect("localhost","root","","test_db");

             $result=mysqli_query($con,"select * from grades");
        ?>
<html>
    <head>
    
    </head>
    <body>
    <table border="1" style="width:75%; height:50px;">
        <tr>
             <th>ID</th>
             <th>Grade</th>
             
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
        ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["grade"];?></td>
                <td><a href="grade-delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Do You Want to Delete?')">Delete</a></td>
                <td><a href="grade-edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
            </tr>

        <?php
        }
        ?>
    </table>
    </br>
    <button><a href="grade-form.php">Add New</a></button>

    </body>
</html>