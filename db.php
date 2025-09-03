<?php

$conn= new mysqli("localhost", "root", "","unicross_db");

if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
?>
