<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'register';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname); 
if(!$conn){
    die('connection failed'.mysql_error());
}

?>