<?php
header("Access-Control-Allow-Origin: *");
$host="localhost";
$username="root";
$password="";
$database="product";
$connect=mysqli_connect($host,$username,$password,$database);
$sql="SELECT * FROM list";
$results=mysqli_query($connect,$sql);
$json_array=array();
while($data=mysqli_fetch_assoc($results)){
    $json_array[]=$data;
}
echo json_encode($json_array);
?>