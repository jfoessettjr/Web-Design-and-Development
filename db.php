<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "jbrewerylist";

//Create Connection
$conn = new mysqli($servername, $username, $password);

//Validate Connection
if ($conn->connect_error) {
    die("Connection Invalid: " . $conn->connect_error);
}
    echo "Connected Successfully";
?>