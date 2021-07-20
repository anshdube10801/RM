<?php
    $conn = mysqli_connect("localhost","root","","rentmitro") or die(mysqli_error($con));
    session_start();
    $mail = $_SESSION["email"];
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $dob = $_POST["dob"];
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];
    $gender = $_POST["gender"];
    $mobile_no = $_POST["mobile"];
    



    if(($_POST['newPassword']) != ($_POST['confirmPassword'])) {
        echo '<script>alert("New Password and Confirm Password must be same")
                window.location = "edit_form.php";
            </script>';
       
        
    } else {
        $query = "UPDATE customers
        SET 
        fullname = '$fullname', 
        username = '$username', 
        dob = '$dob', 
        password1 = '$newPassword', 
        password2 = '$confirmPassword',
        gender = '$gender',
        mob = '$mobile_no'
        WHERE email = '$mail';";

        $result = mysqli_query($conn, $query);

        header("Location: account.php");
    }

?>