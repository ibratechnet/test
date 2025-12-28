<?php
$dbname = 'Motion_db';
$host = 'localhost';
$username = 'root';
$password='';
$conn = mysqli_connect($host,$username,$password,$dbname);
if ($conn){
    // echo"Database connected successfully";
}
else{
    // echo"Connection Failed";
}

?>