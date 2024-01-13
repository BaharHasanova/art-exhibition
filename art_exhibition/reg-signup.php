<?php
$conn = mysqli_connect("localhost", "root", "","ArtExhibitionEvent");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  // Get user inputs from the sign-up form
  $username = $_POST['signup-username'];
  $password = $_POST['signup-password'];

  // Insert new user account into the database
  $sql = "INSERT INTO Logins VALUES ('$username', '$password')";

  if (mysqli_query($conn, $sql)) {
    echo "New account created successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
?>