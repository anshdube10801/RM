<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "rentmitro";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    echo '<table border="2">';
    echo '<tr>';
    echo '<th>id</th>';
    echo '<th>category</th>';
    echo '<th>ad_title</th>';
    echo '<th>book title</th>';
    echo '<th>author name</th>';
    echo '<th>isbn number</th>';
    echo '<th>purchase date</th>';
    echo '<th>book condition</th>';
    echo '<th>expected price</th>';
    echo '<th>quantity</th>';
    echo '<th>EDIT</th>';
    echo '<th>Approve</th>';
    echo '<th>Delete</th>';
    // echo '<th>zip code</th>';
    echo '</tr>';

    $query= "SELECT id,category,ad_title,book_title,author_name,ISBN_number,date_purchase,condition_book,price,quantity 
                from fiction_ads;";
    $result = mysqli_query($conn, $query);
    $row_count=mysqli_num_rows($result);

    for ($y = 0; $y < $row_count; $y++) {
      $row_details= mysqli_fetch_assoc($result);
    
    echo '<tr>';
    echo '<td>'.$row_details['id'].'</td>';
    echo '<td>'.$row_details['category'].'</td>';
    echo '<td>'.$row_details['ad_title'].'</td>';
    echo '<td>'.$row_details['book_title'].'</td>';
    echo '<td>'.$row_details['author_name'].'</td>';
    echo '<td>'.$row_details['ISBN_number'].'</td>';
    echo '<td>'.$row_details['date_purchase'].'</td>';
    echo '<td>'.$row_details['condition_book'].'</td>';
    echo '<td>'.$row_details['price'].'</td>';
    echo '<td>'.$row_details['quantity'].'</td>';
    
    echo '<td><a href="edit_book.php?id='.$row_details['id'].'">Edit</a></td>';
    echo '<td><a href="approve_book.php?id='.$row_details['id'].'">Approve</a></td>';
    echo '<td><a href="deny_book.php?id='.$row_details['id'].'">DENY</a></td>';
    echo '</tr>';
    
    }
    echo '</table>';
    
?>



