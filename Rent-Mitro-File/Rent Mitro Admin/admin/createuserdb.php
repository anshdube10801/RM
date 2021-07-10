

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
$id =NULL;
$email = $_REQUEST['email'];

$password = $_REQUEST['password'];

$role = $_REQUEST['role'];

// Attempt insert query execution
$sql = "INSERT INTO admin  VALUES ('$id','$email', '$password', '$role')";
if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">
    
    alert("New record added successfully !");
    window.location.href = "createuser.php";
    </script>';

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
$conn->close();
?>
