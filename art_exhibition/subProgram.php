<html>
    <head>
        <style>
            body{
            background-color: #05D9FA;
            }
        </style>
    </head>
<?php

    $con = mysqli_connect("localhost", "root", "","ArtExhibitionEvent") or die("Cannot connect to
            server.".mysqli_error($con));

    $category_name = $_POST['category_name'];
    $event = $_POST['event'];

    $query = "INSERT INTO Subprograms VALUES ('$event','$category_name')";
    if(mysqli_query($con, $query)) {
        // Show success message and redirect to subprogram list page
        echo "New subprogram added successfully!";
    } else {
        echo "Error adding subprogram: ";
    }
?>
<br><br>
<a href="adminPage.html">Admin Page</a>
</body>
</html>