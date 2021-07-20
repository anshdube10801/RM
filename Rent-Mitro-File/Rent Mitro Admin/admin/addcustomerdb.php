

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
$id =NULL;
$fullname = $_REQUEST['fullname'];
$email = $_REQUEST['email'];
$password1 = $_REQUEST['password1'];
$password2 = $_REQUEST['password2'];

$mob = $_REQUEST['mob'];
$gender = $_REQUEST['gender'];
$occup = $_REQUEST['occup'];
$address = $_REQUEST['address'];
// Attempt insert query execution


$sql="SELECT * from customers WHERE email='$email'";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
        
        if($email==$row['email'])
        {
            echo '<script type="text/javascript">
    
    alert("EMAIL already exist !");
    window.location.href = "addcustomer.php";
    </script>';
        }

       } 
       else
       { // if condition ends here if it is new entry, echo will work
        


$sql = "INSERT INTO customers  VALUES ('$id','$fullname', '$email', '$password1','$password2','$mob','$gender', '$occup', '$address')";
if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">
    
    alert("New record added successfully !");
    window.location.href = "addcustomer.php";
    </script>';





} 
}

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

$conn->close();
?>
