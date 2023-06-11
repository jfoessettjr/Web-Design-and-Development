<?php
    $dsn = 'mysql:host=localhost;port=3306;dbname=beer_shop';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('C:\xampp\htdocs\CMPS\CMPS 261\Module 6\errors\database_error.php');
        exit();
    }
?>