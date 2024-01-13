<html>
    <head>
        <style>
            body{
            background-color: #fff;
            }
        </style>
    </head>
<body>
    <h3 style="font-size: 30px; font-family:cooper black;">ATTENDEES DETAILS</h3>
    <?php
        echo "<table border='1'><tr>
                <td><b>Username</b></td>
                <td><b>Date</b></td>
                <td><b>Event Name</b></td>
                </tr>";
        $con=mysqli_connect("localhost", "root", "","ArtExhibitionEvent") or die("Cannot connect to
            server.".mysqli_error($con));
        $sql="SELECT * FROM Attendees";
        $result=mysqli_query($con,$sql) or die("Cannot execute sql.");
        while($ww=mysqli_fetch_array($result,MYSQLI_BOTH))
        {
        $userName=$ww[0];
        $date=$ww[1];
        $eventName=$ww[2];

        echo "<tr>
        <td>$userName</td>
        <td>$date</td>
        <td>$eventName</td>
        </tr>";
        }
        echo "</table>";
    ?>
    <a href="adminPage.html">Admin Page</a>
</body>
</html> 