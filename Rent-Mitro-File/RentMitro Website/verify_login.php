<?php
    $conn = mysqli_connect("localhost","root","","rentmitro") or die(mysqli_error($con));
    session_start();
    
    if(isset($_POST["verify_email"]) && isset($_POST["verify_password"])) {
        if(($_POST["verify_email"] == $_SESSION["email"]) && ($_POST["verify_password"] == $_SESSION["password"])) {
            header("Location: edit_form.php");
        } else {
            echo '<script>alert("Invalid Username or Password")
                window.location = "account.php";
            </script>';
        }
    } else {
        echo '<script>alert("Invalid Username or Password")
                window.location = "account.php";
            </script>';
    }
?>




