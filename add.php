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

$sql = "INSERT INTO styles (cat_id,style_name)
        VALUES(11,'Lager')";

if($conn->query($sql) === TRUE){
    echo "Successfully Added a new style";
} else {
    echo "error: " .$sql. "<br>" . $conn->error;
}

$conn->close();

?>