<?php

$host = "localhost";
$user = "root";
$password = "christina@@";
$dbname = "rentmitro";


$connect = mysqli_connect($host, $user, $password, $dbname);
if (mysqli_connect_errno()) {
    echo "No connection";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = NULL;
    $fullname = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $password1 = $_REQUEST['password1'];
    $password2 = $_REQUEST['password2'];
    $mob = $_REQUEST['mob'];
    $gender = $_REQUEST['gender'];
    $occup = $_REQUEST['occup'];
    $address = $_REQUEST['address'];




    require_once 'VerifyEmail.class.php';

    // Initialize library class
    $mail = new VerifyEmail();

    // Set the timeout value on stream
    $mail->setStreamTimeoutWait(20);

    // Set debug output mode
    $mail->Debug = FALSE;
    $mail->Debugoutput = 'html';

    // Set email address for SMTP request
    $mail->setEmailFrom('gankita163@email.com');

    // Email to check
    $email = $_REQUEST['email'];

    // Check if email is valid and exist
    if ($mail->check($email)) {
       

        $sql = "SELECT * from customers WHERE email='$email'";

        $res = mysqli_query($connect, $sql);


        if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);

            if ($email == $row['email']) {
                echo '<script type="text/javascript">
                        
                            alert("EMAIL already exist !");
                            window.location.href = "../index.html";
                            </script>';
            }
        } elseif ($password1 != $password2) {
            echo '<script type="text/javascript">
                        
                        alert("Password does not match !");
                        window.location.href = "../index.html";
                        </script>';
        } else { // if condition ends here if it is new entry, echo will work

            // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $password1);
            $lowercase = preg_match('@[a-z]@', $password1);
            $number    = preg_match('@[0-9]@', $password1);
            $specialChars = preg_match('@[^\w]@', $password1);

            if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password1) < 8) {
                echo '<script type="text/javascript">
                        
                        alert("Please select valid password!");
                        window.location.href = "../index.html";
                        </script>';
            } else {

                $sql = "INSERT INTO customers  VALUES ('$id','$fullname', '$email', '$password1','$password2','$mob', '$gender', '$occup','$address')";
                if (mysqli_query($connect, $sql)) {

                    echo '<script type="text/javascript">
                            
                            alert(" You are successfully registered now , You can login !");
                            window.location.href = "../index.html";
                            </script>';
                }
            }
        }
    } elseif (verifyEmail::validate($email)) {
        echo '<script type="text/javascript">
            
                alert("EMAIL valid but not exist !");
                window.location.href = "../index.html";
                </script>';
    } else {
        echo '<script type="text/javascript">
            
                alert("EMAIL not valid not exist !");
                window.location.href = "../index.html";
                </script>';
    }
}
echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);

$connect->close();
