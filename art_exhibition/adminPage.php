<?php
// Connect to MySQL database
$conn = mysqli_connect("localhost", "root", "","ArtExhibitionEvent");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create default admin account
$username = "admin";
$password = "admin123";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO Admins (username, password, role) VALUES ('$username', '$hashed_password', 'admin')";
if (mysqli_query($conn, $sql)) {
    echo "Default admin account created successfully";
} else {
    echo "Error creating default admin account: " . mysqli_error($conn);
}

// Start session
session_start();

// Login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate form fields
    if (empty($username) || empty($password)) {
        echo "<script>alert('Please enter all fields');</script>";
    } else {
        // Check if user exists in database
        $sql = "SELECT * FROM Admins WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row["password"];

            // Verify password
            if (password_verify($password, $hashed_password)) {
                $_SESSION["username"] = $username;
                $_SESSION["role"] = $row["role"];
                header("Location: dashboard.php");
            } else {
                echo "<script>alert('Invalid password');</script>";
            }
        } else {
            echo "<script>alert('User not found');</script>";
        }
    }
}
?>
<!-- Login form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label>Username</label>
    <input type="text" name="username" required>
    <label>Password</label>
    <input type="password" name="password" required>
    <button type="submit" name="login">Login</button>
</form>
<head>
   <style>
    form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }
  
  button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  button[type="submit"]:hover {
    background-color: #3e8e41;
  }
  
  a {
    display: inline-block;
    margin-top: 20px;
    color: #000;
    text-decoration: none;
  }
  
  a:hover {
    text-decoration: underline;
  }
  
   </style> 
</head>


