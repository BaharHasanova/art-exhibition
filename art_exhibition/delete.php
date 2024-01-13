<html>
    <head>
        <style>
            body{
                background-color: #05D9FA;
            }
        </style>
    </head>
    <body>
        <?php
        $con=mysqli_connect("localhost", "root", "","ArtExhibitionEvent") or die("Cannot connect to server.".mysqli_error($con));
        $userName=@$_POST["userName"];
        $sql_select = "SELECT * FROM Logins WHERE userName='$userName'";
        $sql_result = mysqli_query($con, $sql_select) or die("Error in sql due to ".mysqli_error());
        if(mysqli_num_rows($sql_result) == 0) {
            echo "User doesn't exist.";
        } else {
            $sql_delete="DELETE FROM Logins WHERE userName='$userName' ";
            $sql_result=mysqli_query($con,$sql_delete) or die("Error in sql due to ".mysqli_error());
            if($sql_result) {
                echo "Successfully deleted.";
            } else {
                echo "Error in deleting the data.";
            }
        }
        mysqli_close($con);
        ?>
        <br>
        <a href="adminPage.html">Admin Page</a>
    </body>
</html>