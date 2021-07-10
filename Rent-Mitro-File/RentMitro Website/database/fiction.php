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
   $id=NULL;
    $category = $_REQUEST['category'];
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




   
     
                $sql = "UPDATE  fiction_ads set  ad_title='$ad_title',book_title= '$book_title', author_name=' $author_name',ISBN_number=' $ISBN_number',date_purchase='$date_purchase', condition_book='$condition_book',price= '$price',quantity='$quantity',email= '$email', contact='$contact',zip_code= '$zip_code' WHERE  category='$category'";
                if (mysqli_query($connect, $sql)) {

        echo '<script type="text/javascript">
    
         alert("Your information send successfully...We will get back to you wihtin 24 hours .Thankyou!");
          window.location.href = "../ad2.html";
          </script>';
                }
            
        
    
}


$connect->close();
