<html>
	<head>
	<style>
			td {
				font-family:'Comic Sans MS';
			}
        </style>
	</head>
<body>
<?php
$conn=mysqli_connect("localhost", "root","","ArtExhibitionEvent") or die("Cannot connect toserver.".mysqli_error($con));


$username = $_POST["username"];
$password = $_POST["password"];

$update_sql = "UPDATE Logins SET password='$password' WHERE username='$username'";
$sql_result = mysqli_query($conn, $update_sql);

if($sql_result)
    echo "Succesfully update the data.";
else
    echo "Error in updating the data";
?>
	<table>
        <h1>User Profile</h1>
            <tr>
            <td>Username:</td>
            <td><?php echo "$username"; ?></td>
            </tr>
            <tr>
            <td>Password:</td>
            <td><?php echo "$password"; ?></td>
            </tr>
            <tr>
            <td><br><a href="index.html">Home page</td>
            </tr>
        </table>
</body>
</html>
