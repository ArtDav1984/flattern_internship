<?php

require_once 'db.php';

$result = [];

$sql = mysqli_query($conn, "SELECT name, rate, message FROM users");

$i = 0;
while ($row = mysqli_fetch_array($sql)) {
    $result[$i]['name'] = $row['name'];
    $result[$i]['rate'] = $row['rate'];
    $result[$i]['message'] = $row['message'];
    $i ++;
}

