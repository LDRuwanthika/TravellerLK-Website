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
$regno = $_POST['regno'];
$name = $_POST['name'];
$address = $_POST['address'];
$number = $_POST['number'];
$language = $_POST['language'];
$email = $_POST['email'];


// Insert the data into the database
$sql = "INSERT INTO tour_guid (Reg_no, Name, Address, Tel_no, Language, Email) VALUES ('$regno', '$name', '$address', '$number', '$language', '$email')";
if ($conn->query($sql) === TRUE) 
{
  echo "<script type='text/javascript'>alert('New Tour Guide Recorded!!');
  document.location='adminpanel.php'</script>";
} 
else {
  echo "cannot create field" . $conn->error;
}

// Close the connection to the database
$conn->close();
?>