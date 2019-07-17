<?php

$servername = "Localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);

if ($conn -> connect_error){
    die("Connection failed: " . $conn -> connect_error);
}

$query = "CREATE DATABASE IF NOT EXISTS flattern";
if ($conn->query($query) === TRUE){
    $query = "USE flattern";
}else{
    echo "Error" . $conn->error;
}

$conn->query($query);

$query = "CREATE TABLE IF NOT EXISTS users (
                id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                rate INT (11) NOT NULL,
                message VARCHAR (2500) NOT NULL 
)";
if ($conn->query($query) != TRUE) {
    echo $conn->error;
}