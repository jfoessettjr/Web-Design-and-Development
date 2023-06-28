<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    
    <p> <a href="http://localhost/CMPS/CMPS%20261/Module%202/main.php" class="btn btn-success">Module 2</a>
    <p> <a href="http://localhost/CMPS/CMPS%20261/Module%203/index.php" class="btn btn-success">Module 3</a>
    <p> <a href="http://localhost/CMPS/CMPS%20261/Module%204/index.php" class="btn btn-success">Module 4</a>
    <p> <a href="http://localhost/CMPS/CMPS%20261/Module%205/view.php" class="btn btn-success">Module 5</a>
    <p> <a href="http://localhost/CMPS/CMPS%20261/Module%206/index.php" class="btn btn-success">Module 6</a>
    <p> <a href="http://localhost/CMPS/CMPS%20261/Module%207/index.php" class="btn btn-success">Module 7</a>
    <p> <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    <p> <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>