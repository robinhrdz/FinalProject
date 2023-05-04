<?php
// Include database connection file
include_once "../db_connection.php";

if(isset($_POST['delete_video'])){
    // Get the video ID to delete
    $video_id = $_POST['video_ID'];

    // Get the user's email
    session_start();
    $email_user = $_SESSION['email'];

    // Delete the video from the user's favorite workouts
    $query = "DELETE FROM favorite_workouts WHERE video_ID = '$video_id' AND email_user = '$email_user'";
    $result = mysqli_query($connect, $query);

    // Check if the video was deleted successfully
    if($result){
        echo "<script>alert('Video deleted successfully');</script>";
        echo "<script>window.location.href='profile.php';</script>";
    }
    else{
        echo "<script>alert('Error deleting video');</script>";
    }
}
?>
