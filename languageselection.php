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
$language = $_POST['language'];

// Select all the rows from the tour_guides table where the language column matches the language entered by the user
$sql = "SELECT * FROM tour_guid WHERE language='$language'";
$result = $conn->query($sql);

// If there are any rows in the result set, show them to the user
if ($result->num_rows > 0) {
  echo "<h1 align='center'>Guides for You</h1><table border='1' width='50%'align='center' type='solid'>";
  echo "<tr height='30'><th>Reg_no</th><th>Name</th><th>Tel_no</th><th>Language</th><th>Email</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr height='30'><td>" . $row['Reg_no'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['Tel_no'] . "</td><td>" . $row['Language'] . "</td><td>" . $row['Email'] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "<script type='text/javascript'>alert('Language not Found !!');
  document.location='services.php'</script>" ;
}

// Close the connection to the database
$conn->close();
?>
