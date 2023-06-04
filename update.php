<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "jbrewerylist";

//Create Connection
$conn = new mysqli($servername, $username, $password, $database);

//Validate Connection
if ($conn->connect_error) {
    die("Connection Invalid: " . $conn->connect_error);
}

$sql = "UPDATE styles SET style_name='BlackBerry Kolsch' WHERE id=12";

if($conn->query($sql) === TRUE){
    echo "Successfully updated style";
} else {
    echo "error: " .$sql. "<br>" . $conn->error;
}

$conn->close();

?>