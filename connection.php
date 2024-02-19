<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'laptops';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

//проверява връзка
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>