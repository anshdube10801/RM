<?php

    $conn = mysqli_connect("localhost","root","christina@@","rentmitro");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }
    session_start();

    $email = $_SESSION["email"];
    echo '<table border="2">';
    echo '<tr>';
    echo '<th>category</th>';
    echo '<th>ad_title</th>';
    echo '<th>book title</th>';
    echo '<th>author name</th>';
    echo '<th>isbn number</th>';
    echo '<th>purchase date</th>';
    echo '<th>book condition</th>';
    echo '<th>price</th>';
    echo '<th>quantity</th>';
    echo '<th>email</th>';
    echo '<th>contact</th>';
    echo '<th>zip code</th>';
    echo '</tr>';

    $query= "SELECT * from fiction_ads where email='$email';";
    $result = mysqli_query($conn, $query);
    $row_count=mysqli_num_rows($result);

    for ($y = 0; $y < $row_count; $y++) {
      $row_details= mysqli_fetch_assoc($result);
    
    echo '<tr>';
    echo '<td>'.$row_details['category'].'</td>';
    echo '<td>'.$row_details['ad_title'].'</td>';
    echo '<td>'.$row_details['book_title'].'</td>';
    echo '<td>'.$row_details['author_name'].'</td>';
    echo '<td>'.$row_details['ISBN_number'].'</td>';
    echo '<td>'.$row_details['date_purchase'].'</td>';
    echo '<td>'.$row_details['condition_book'].'</td>';
    echo '<td>'.$row_details['price'].'</td>';
    echo '<td>'.$row_details['quantity'].'</td>';
    echo '<td>'.$row_details['email'].'</td>';
    echo '<td>'.$row_details['contact'].'</td>';
    echo '<td>'.$row_details['zip_code'].'</td>';
    // echo '<td><a href="edit_bookdetails.php">edit</a></td>'; 
    echo '<td><a href="edit_bookdetails.php?id='.$row_details['id'].'">Edit</a></td>';
    echo '</tr>';
    
    }
    echo '</table>';
    
?>

<html>
    <body>
        <form action='account.php'>
            <input type='submit' value='BACK'>
        </form>
    </body>
</html>