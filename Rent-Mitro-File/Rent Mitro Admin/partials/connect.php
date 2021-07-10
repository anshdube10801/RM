<?php
$host="localhost";
$user="root";
$password="christina@@";
$dbname="rentmitro";


$connect=mysqli_connect($host,$user,$password,$dbname);
if($connect->connect_error){
    echo "No connection";
}




?>