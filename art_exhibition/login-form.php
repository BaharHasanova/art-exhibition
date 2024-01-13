<html>
<head>
<title>Login form</title>
</head>
<body>
    <?php
        session_start();
        $con=mysqli_connect("localhost", "root", "","ArtExhibitionEvent") or die("Cannot connect to server");
        if (isset($_SESSION['username'])) {
             echo "You are logged in as ". $_SESSION['username'];
             exit;
         }
         // Check if the login form has been submitted
        if (isset($_POST['username']) && isset($_POST['password'])) {
        $username=@$_POST['username'];
        $password=@$_POST['password'];

        $sql = "SELECT * FROM Logins WHERE username='$username' AND password='$password'";
        $result=mysqli_query($con,$sql);
        if (mysqli_num_rows($result) == 1) {
            // The login credentials are valid
            $_SESSION['username'] = $username;
            echo "Login successful!";
            echo "<br>";
            echo "<a href='index.html'>Home page</a>";
        } else {
            // The login credentials are invalid
            echo "Invalid username or password";
        }
    }
    // Close the database connection
    mysqli_close($con);
?>
</body>
</html>