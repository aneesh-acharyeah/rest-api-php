<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="your_db_name";

$conn=new mysqli($serverName,$userName,$password,$dbName);

if($conn->connect_error){
    die("Connection Failed:". $conn->connect_error);
}

?>