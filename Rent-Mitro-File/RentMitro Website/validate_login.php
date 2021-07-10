<?php
    $conn = mysqli_connect("localhost","root","christina@@","rentmitro") or die(mysqli_error($con));
    session_start();
    
    if(isset($_POST["email"]) && isset($_POST["password"])) {
        $mail = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT email from customers where email='$mail' and password1='$password';";

        $result = mysqli_query($conn, $query);
        

        if (mysqli_num_rows($result) == 1) {
            $_SESSION["email"] = $mail;
            $_SESSION["password"] = $password;
            header("Location: account.php");
        } else {
            echo '<script>alert("Invalid Username or Password")
                window.location = "index.html";
            </script>';
        }
        
    } else {
        echo '<script>alert("Invalid Username or Password")
            window.location = "index.html";
        </script>';
        
    }
?>




