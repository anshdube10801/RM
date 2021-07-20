<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "rentmitro";


    $conn = mysqli_connect($host, $user, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "No connection";
    }

    $id = $_GET['id'];
    echo "id: ", $id;

    $query="SELECT * FROM fiction_ads WHERE id='" .$id. "'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $id=NULL;
        $category = $_POST['category'];
        echo $category;
        $ad_title = $_REQUEST['ad_title'];
        $book_title = $_REQUEST['book_title'];
        $author_name = $_REQUEST['author_name'];
        $ISBN_number = $_REQUEST['ISBN_number'];
        $date_purchase = $_REQUEST['date_purchase'];
        $condition_book = $_REQUEST['condition_book'];
        $price = $_REQUEST['price'];
        $quantity = $_REQUEST['quantity'];
        $email = $_REQUEST['email'];
        $contact= $_REQUEST['contact'];
        $zip_code = $_REQUEST['zip_code'];

        $sql="INSERT INTO approved_books  VALUES ('$id','$category', '$ad_title', '$book_title','$author_name','$ISBN_number', '$date_purchase', '$condition_book','$price', '$quantity', '$email','$contact', '$zip_code')";
        
        if (mysqli_query($conn, $sql)) {
            echo '<script type="text/javascript">
            
            alert("New record added successfully !");
            window.location.href = "ads.php";
            </script>';
        
        }
        else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        
        $conn->close();
    }
?>