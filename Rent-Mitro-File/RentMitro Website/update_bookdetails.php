<?php
$host = "localhost";
	$user = "root";
	$password = "christina@@";
	$dbname = "rentmitro";

    session_start();

	$conn = mysqli_connect($host, $user, $password, $dbname);
	if (mysqli_connect_errno()) {
	echo "No connection";
	}

    $id = $_SESSION['id'];
    // echo $id;
    $category = $_POST['category'];
    $ad_title = $_POST['ad_title'];
    $book_title = $_POST['book_title'];
    $author_name = $_POST['author_name'];
    $isbn_no = $_POST['isbn_no'];
    $book_condition = $_POST['condititon_book'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $query = "UPDATE fiction_ads 
    SET
    category = '$category',
    ad_title = '$ad_title',
    book_title = '$book_title',
    author_name = '$author_name',
    ISBN_number = '$isbn_no',
    condition_book = '$book_condition',
    price = '$price',
    quantity = '$quantity'
    where id='$id';";

    $result = mysqli_query($conn, $query);
    header("Location: view_bookdetails.php");
    // echo 'Successfully edited';
?>