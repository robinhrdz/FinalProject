<?php
// Establish a database connection
include '../db_connection.php';

// Retrieve the form data via POST
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$default_image_path = "../img/user.png";
$profile_picture = isset($_POST['profile_picture']) ? $_POST['profile_picture'] : $default_image_path;

// Generate a unique ID_user
$id_user = "User" . rand(1000,9999);

$email_check_query = "SELECT * FROM users_table WHERE email_user='$email' LIMIT 1";
$result = $connect->query($email_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { 
    echo "<script>alert('Email is already associated with an account'); window.location.href='login.php';</script>"; 
} else { 
    $sql = "INSERT INTO users_table (ID_user, name_user, lastname_user, LOWER(email_user), password, profile_picture) VALUES ('$id_user', '$name', '$lastname', '$email', '$password','$profile_picture')";
    if ($connect->query($sql) === TRUE) {
        
        header("Location: ../index.php");
        exit();
    } else {
      
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
?>
