<?php

    $conn = mysqli_connect("localhost","root","","rentmitro") or die(mysqli_error($conn));
    session_start();

    $query = "SELECT * from blog;";
    $result = mysqli_query($conn, $query);

    $rowcount=mysqli_num_rows($result);

    for ($y = 0; $y < $rowcount ; $y++) {
        $row = mysqli_fetch_assoc($result);

        echo "<b>Blog No: </b>", $y+1;
        echo '<br>';
        echo "<b>Title: </b>", $row['title'];
        echo '<br>';
        echo "<b>Body: </b>",$row['body'];
        echo '<br>';
        echo "<b>Author: </b>",$row['author'];
        echo '<br>';
        echo "<b>Date: </b>",$row['date_of_publish'];
        echo '<br>';
        echo '<br>';
    }
?>

<html>
    <body>
        <div>
            <form action="blog.html">
              <input type="submit" value="BACK" />
            </form>
        </div>  
    </body>
</html>