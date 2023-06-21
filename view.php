<?php
header("Access-Control-Allow-Origin: *");
$host="localhost";
$username="root";
$password="";
$database="product";
// Connect to the database
$conn = mysqli_connect($host, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Select data from table
$sql = "SELECT name FROM list";
$result = mysqli_query($conn, $sql);
// Create array to store data
$rows = array();
// Fetch data and add to array
while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
// Output data as JSON
header('Content-Type: application/json');
echo json_encode($rows);
// Close connection
mysqli_close($conn);
?>