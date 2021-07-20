<?php

    $conn = mysqli_connect("localhost","root","","rentmitro") or die(mysqli_error($con));
    session_start();

    // echo $_POST['title'];
    // echo $_POST['html-output'];

    $title = $_POST["title"];
    $author = 'SomeName';
    $body = $_POST['html-output'];
    

    $query = "INSERT into blog 
    (author, title, body, date_of_publish) 
    values
    ('$author', '$title', '$body', now());";

    $result = mysqli_query($conn, $query);

    $select_query = "SELECT * from blog where title='$title';";
    $result = mysqli_query($conn, $select_query);

    $row_details = mysqli_fetch_assoc($result);

    echo "<b>Title: </b>",$row_details['title'];
    echo '<br>';
    echo "<b>Body: </b>",$row_details['body'];
    echo '<br>';
    echo "<b>Author: </b>",$row_details['author'];
    echo '<br>';
    echo "<b>Date Of Publish: </b>",$row_details['date_of_publish'];

  

?>

<html>
    <body>
        <div>
            <form action="adminindex.php">
            <input type="submit" value="BACK" />
            </form>
        </div>  
    </body>
</html>