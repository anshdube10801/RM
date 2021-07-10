<?php

$servername = "localhost";
$username = "root";
$password = "christina@@";
$dbname = "rentmitro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$id=$_REQUEST['id'];
$query = "DELETE FROM customers WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
header("Location: totalcustomers.php"); 
?>