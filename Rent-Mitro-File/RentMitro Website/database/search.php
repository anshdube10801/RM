
<html>
<body>
<a href="../index.html">Back</a>


</body>
<?php

$con=mysqli_connect("localhost","root","christina@@","rentmitro") or die(mysqli_error($con));


if((isset($_POST['submit'])))
{

$book=mysqli_real_escape_string($con,$_POST['book']);
$sql="SELECT * from books where name like '%$book%' or ISBN like '%$book%' or author like '%$book%'";


$res=mysqli_query($con,$sql);
?>


<table border="1">

<thead>
    <tr>
        <th>Book name</th>
        <th>Book ISBN</th>
        <th>Book author</th>
        <th>Book image</th>
    </tr>
</thead>


<?php

if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){


        ?>

        <tr>

<td>
    <?php   echo $row['name']; ?> </td>
    <td>
    <?php  echo $row['ISBN'];?> </td>
    <td>
    <?php   echo $row['author']; ?> </td>
    <td>
    <?php   echo '<img src="data:image;base64,'.base64_encode( $row['image'] ).'">'; ?> </td>


        </tr>
      
    </table> 
        
  <?php     

    
 } 
   
}
else{
    echo "no";
}
}
    


?>
</html>