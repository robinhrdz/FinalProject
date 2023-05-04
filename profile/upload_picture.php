

<?php
    session_start(); // Start the session
    require_once('../db_connection.php');

    $email = $_SESSION['email']; // Replace with the user's email from session or form input
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);

    if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
        $sql = "UPDATE users_table SET profile_picture = '$target_file' WHERE email_user = '$email'";
        $result = $connect->query($sql);
        if ($result) {
            echo "<script>alert('Profile Picture updated!!!.')</script>";
            header("Location: profile.php");
            exit();
        } else {
            echo "<script>alert('Profile picture upload Failed.'); window.location.href = 'profile.php';</script>";

        }
    } else {
        echo "<script>alert('ERROR: File could not be uploaded.');window.location.href = 'profile.php';</script>";
    
    }
?>
