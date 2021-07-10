<?php
    $conn = mysqli_connect("localhost","root","christina@@","rentmitro") or die(mysqli_error($con));
    session_start();

    // $mail = $_SESSION["email"];
    // $query = "SELECT * from customers where email='$mail';";
    // $result = mysqli_query($conn, $query);
    // $row_details = mysqli_fetch_assoc($result);

    // // printf ("%s %s\n", $row_details["email"], $row_details["fullname"]);
    // echo '<h2>'.$row_details['email'].'</h2>';
    // echo '<h2>'.$row_details['fullname'].'</h2>';
    
   echo '<h1>HI</h1>';
//    $myvar = "<script> localStorage.getItem('category')</script>";
   
    // $myvar = "<script>document.write(localStorage.getItem('category'))</script>";
    // echo $myvar;
?>
    

<!-- <script> 
    var x = localStorage.getItem("category");
    console.log("CATEGORY",x);
</script>
      -->
         
          
      INSERT into fiction_ads (category, ad_title, book_title, author_name, ISBN_number, date_purchase, condition_book, price, quantity, email, contact, zip_code) values ('category', 'Test', 'test', 'test_name', '1234', '2021-06-12', 'Good', '1000', '1', 'christina.ncp@gmail.com', '08555045656', '530004')
      INSERT into fiction_ads (category, ad_title, book_title, author_name, ISBN_number, date_purchase, condition_book, price, quantity, email, contact, zip_code) values ('Horror', 'Test', 'test', 'test_name', '1234', '2021-06-12', 'Good', '1000', '1', 'christina.ncp@gmail.com', '08555045656', '530004')
<!-- ?> -->
