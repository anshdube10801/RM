<?php

    $conn = mysqli_connect("localhost","root","","rentmitro");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }
    session_start();

    // $category = '<script>document.write(localStorage.getItem("category"))</script>';
    // $category = $_POST["category"];
    // $cat = $category;
    $category = $_COOKIE["Category"];
    echo "Category ",$category;
    echo "<br>";
    $ad_title = $_POST["ad_title"];
    echo "Ad Title ",$ad_title;
    echo "<br>";
    $book_title = $_POST["book_title"];
    echo "Book title ",$book_title;
    echo "<br>";
    $author_name = $_POST["author_name"];
    echo "Author name ",$author_name;
    echo "<br>";
    $ISBN_number = $_POST["ISBN_number"];
    echo "ISBN no ",$ISBN_number;
    echo "<br>";
    $date_purchase = $_POST["date_purchase"];
    // $date_purchase = '2021-06-17';
    echo "Date ",$date_purchase;
    echo "<br>";
    $condition_book = $_POST["condition_book"];
    echo "Condition ",$condition_book;
    echo "<br>";
    $price = $_POST["price"];
    echo "Price ",$price;
    echo "<br>";
    $quantity = $_POST["quantity"];
    echo "Quantity ",$quantity;
    echo "<br>";
    $email = $_SESSION["email"];
    echo "Email ",$email;
    echo "<br>";
    $contact = $_POST["contact"];
    echo "Contact ",$contact;
    echo "<br>";
    $zip_code = $_POST["zip_code"];
    echo "Zip code ",$zip_code;
    echo "<br>";

    $query = "INSERT into fiction_ads (category, ad_title, book_title, author_name, ISBN_number, date_purchase, condition_book, price, quantity, email, contact, zip_code) 
    values
    ('$category', '$ad_title', '$book_title', '$author_name', '$ISBN_number', '$date_purchase', '$condition_book', '$price', '$quantity', '$email', '$contact', '$zip_code')";
   
    
   if (!mysqli_query($conn, $query)) {
    echo("Error description: " . mysqli_error($conn));
  }

  
?>

<html>
    <body>
        <form action='view_bookdetails.php'>
            <input type='submit' value='VIEW/EDIT DETAILS'>
        </form>
    </body>
</html>


