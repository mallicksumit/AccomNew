<?php

$db_host = "localhost";
$db_name = "accom";
$db_user = "root";
$db_pass = "";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    echo " nono ";
    die("Connection failed: " . $conn->connect_error);
}
