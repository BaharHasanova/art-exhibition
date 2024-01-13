<html>
<body>
<?php
    $conn=mysqli_connect("localhost", "root", "","ArtExhibitionEvent") or die("Cannot connect to server.".mysqli_error($conn));

    $username=@$_POST["username"];
    $date=@$_POST["date"];
    $event=@$_POST["event"];

    $insert_sql="INSERT INTO Attendees VALUES('$username','$date','$event')";
    $sql_result =mysqli_query($conn,$insert_sql) or die("Error in inserting data due to ".mysqli_error($conn));
    if($sql_result)
    echo "Event Registration Successful";
    else
    echo "Event Registration Unsuccessful";
?>
</body>
</html>