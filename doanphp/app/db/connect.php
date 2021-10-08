<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$dbname = "blog";

$conn = new Mysqli($hostname,$user,$pass,$dbname);

if($conn -> connect_error){
	die('Database connection error: '. $conn -> connect_error);
}
else{
	echo 'Ket noi thanh cong';
}


?>