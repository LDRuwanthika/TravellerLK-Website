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
$address = $_POST['address'];
$email = $_POST['email'];
$number = $_POST['number'];
$where = $_POST['where'];
$guests = $_POST['guests'];
$from = $_POST['from'];
$to = $_POST['to'];
$massege = $_POST['massege'];


// Insert the data into the database
$sql = "INSERT INTO booking (Name, Address, Email, Tel_no, Where1, No_guests, From1, To1, Message) VALUES ('$name', '$address', '$email', '$number', '$where', '$guests', '$from', '$to', '$massege')";
if ($conn->query($sql) === TRUE) 
{
  echo "<script type='text/javascript'>alert('Your Booking Details Recorded!!');
  document.location='book.php'</script>";
} 
else {
  echo "<script type='text/javascript'>alert('Unsuccessfull!!');
  document.location='book.php'</script>";
}

// Close the connection to the database
$conn->close();
?>
