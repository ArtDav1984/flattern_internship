<?php

require_once 'db.php';

$name = $_POST['name'];
$email = $_POST['contact-email'];
$rate = $_POST['rate'];
$message = $_POST['message'];
$response = [];

$sql = "INSERT INTO users (name, email, rate, message) 
VALUES ('$name', '$email', $rate, '$message')";

if ($conn->query($sql) === true) {
    $response['success'] = 'Data successfully added';
} else {
    $response['error'] = 'Unknown error, no data added';
}

echo json_encode($response);


