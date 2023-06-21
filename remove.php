<?php
// Get the name of the data that you want to remove
header("Access-Control-Allow-Origin: *");
$host="localhost";
$username="root";
$password="";
$database="product";
$name = $_POST['name'];
// Connect to the database
$conn = mysqli_connect($host, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Delete the data from the database
$sql = "DELETE FROM list WHERE name = '$name'";
$result = $conn->query($sql);
// Check if the data was deleted successfully
if ($result) {
  echo "Data removed successfully!";
} else {
  echo "Error removing data!";
}
// Close the connection
$conn->close();
?>
