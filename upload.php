<?php
// Get the data from the POST request
header("Access-Control-Allow-Origin: *");
$host="localhost";
$username="root";
$password="";
$database="product";
$name = $_POST['data'];
// Connect to the database
$conn = mysqli_connect($host, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Insert the data into the database
$sql = "INSERT INTO list (name) VALUES ('$name')";
$result = $conn->query($sql);
// Check if the data was inserted successfully
if ($result) {
  echo "Data uploaded successfully!";
} else {
  echo "Error uploading data!";
}
// Close the connection
$conn->close();
?>