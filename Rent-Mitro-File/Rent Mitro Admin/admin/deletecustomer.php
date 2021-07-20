<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "rentmitro";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$id=$_REQUEST['id'];
$query = "DELETE FROM customers WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
header("Location: totalcustomers.php"); 
?>