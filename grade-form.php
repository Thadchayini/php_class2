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
            <form action="grade-create.php" method="post">
                <tr>
                    <th><label for="grade">Grade</label></th>
                    <td><input type="text" name="grade" id="grade"></td>
                </tr>
                <tr>
                <th><input type="submit" value="Submit"> <input type="reset" value="Clear"><button><a href="grade-table.php">View Table</a></button></th>
                </tr>
                <tr>
                <th></th>
                </tr>

                
            </form>
        </table>
    </body>
</html>