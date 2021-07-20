<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "rentmitro";


	$conn = mysqli_connect($host, $user, $password, $dbname);
	if (mysqli_connect_errno()) {
	echo "No connection";
	}

	session_start();
	$id=$_GET['id'];
	$query="SELECT * from fiction_ads where id='$id';";
	$result = mysqli_query($conn, $query);
	$row_details = mysqli_fetch_assoc($result);

	// echo $query;
	$_SESSION['id'] = $id;
	echo $_SESSION['id'];

?>

<html>
	<body>
		<form action='update_book.php' method='POST'>
			Category: <input type='text' name='category' value='<?php echo $row_details['category']?>'>
			<br>
			Ad Title: <input type='text' name='ad_title' value='<?php echo $row_details['ad_title']?>'>
			<br>
			Book Title: <input type='text' name='book_title' value='<?php echo $row_details['book_title']?>'>
			<br>
			Author Name: <input type='text' name='author_name' value='<?php echo $row_details['author_name']?>'>
			<br>
			ISBN Number: <input type='text' name='isbn_no' value='<?php echo $row_details['ISBN_number']?>'>
			<br>
			Condition of Book: <input type='text' name='condititon_book' value='<?php echo $row_details['condition_book']?>'>
			<br>
			Expected Price: <input type='text' name='price' value='<?php echo $row_details['price']?>'>
			<br>
			Quantity: <input type='text' name='quantity' value='<?php echo $row_details['quantity']?>'>
			<br>
			<input type='submit' value='SUBMIT'>
		</form>
	</body>
</html>
