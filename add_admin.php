<?php

// Create a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travellerlk";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$name = $_POST['name'];
$username = $_POST['un'];
$password = $_POST['pw'];


// Insert the data into the database
$sql = "INSERT INTO admins ( Name, Username, Password) VALUES ('$name', '$username', '$password' )";
if ($conn->query($sql) === TRUE) 
{
  echo "<script type='text/javascript'>alert('New Admin Recorded!!');
  document.location='adminpanel.php'</script>";
} 
else {
  echo "cannot create field" . $conn->error;
}

// Close the connection to the database
$conn->close();
?>