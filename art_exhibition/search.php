<html>
    <head>
        <style>
            body{
            background-color: #05D9FA;
            }
        </style>
    </head>
<body>
    <h3 style="font-size: 30px; font-family:cooper black;">PARTICIPANT DETAILS</h3>
    <?php

        $con=mysqli_connect("localhost", "root", "","ArtExhibitionEvent") or die("Cannot connect to
            server.".mysqli_error($con));

            $userName=@$_POST["userName"];
       
            $sql="SELECT * FROM Logins WHERE userName LIKE '%$userName%'";
        
            $result=mysqli_query($con,$sql) or die("Cannot execute sql.");
        
            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1'><tr>
                        <td><b>Username</b></td>
                        <td><b>Password</b></td>
                        </tr>";
        
                while($ww=mysqli_fetch_array($result,MYSQLI_BOTH))
                {
                    $userName=$ww[0];
                    $password=$ww[1];
        
                    echo "<tr>
                    <td>$userName</td>
                    <td>$password</td>
                    </tr>";
                }
        
                echo "</table>";
            } else {
                echo "User doesn't exist.";
            }
        ?>
        <br><a href="adminPage.html">Admin Page</a>
        