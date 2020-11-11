<?php 
$hostName = 'localhost';
$dbName = 'test';
$password = '';
$userName = 'root';

$conn = mysqli_connect($hostName,$userName,$password,$dbName);
 if($conn){
 	
 }
 else
 	echo "Not connected";
 	
 ?>