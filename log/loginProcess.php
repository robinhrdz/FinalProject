<?php
session_set_cookie_params(3600);

// Start a PHP session
session_start(); 
include_once '../db_connection.php'; 

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users_table WHERE email_user='$email' AND password='$password'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // Email and password are correct, set the session variable and display message
    $_SESSION['email'] = $email;
    echo "<script>alert('Login successful!'); window.location.href='../index.php';</script>";
    exit();
} else {
    // Email or password is incorrect, show an error message
    echo "<script>alert('Invalid email or password'); window.location.href='login.php';</script>";
    exit();
}

$connect->close();

?>
