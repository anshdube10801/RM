<?php
    $servername = "localhost";
    $username = "root";
    $password = "christina@@";
    $dbname = "rentmitro";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];
    echo $id;

    $query= "SELECT * from fiction_ads where id=$id;";
    $result = mysqli_query($conn, $query);
    $row_count=mysqli_num_rows($result);

    $row_details = mysqli_fetch_assoc($result);

    $category = $row_details['category'];
    $ad_title = $row_details['ad_title'];
    $book_title = $row_details['book_title'];
    $author_name = $row_details['author_name'];
    $isbn_no = $row_details['ISBN_number'];
    $date_purchase = $row_details['date_purchase'];
    $condition_book = $row_details['condition_book'];
    $price = $row_details['price'];
    $quantity = $row_details['quantity'];
    $email = $row_details['email'];
    $contact = $row_details['contact'];
    $zip_code = $row_details['zip_code'];

    echo $category;
    $insert_query = "INSERT into denied_books 
    values 
    ('$id', '$category', '$ad_title', '$book_title', '$author_name', '$isbn_no', '$date_purchase', '$condition_book', '$price', '$quantity', '$email', '$contact', '$zip_code');";

    // $insert_result = mysqli_query($conn, $insert_query);

    if (mysqli_query($conn, $insert_query)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
    }
    
?>