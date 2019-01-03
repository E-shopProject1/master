<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
/**
 * Created by PhpStorm.
 * User: Phantom
 * Date: 02/Ιαν/2019
 * Time: 01:03
 */