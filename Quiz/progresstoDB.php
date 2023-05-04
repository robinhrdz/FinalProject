<?php
session_start();
include '../db_connection.php';

$steps = $_POST['steps'];
$calories = $_POST['calories'];
$exercise = $_POST['exercise'];
$move = $_POST['move'];
$stand = $_POST['stand'];

// Retrieve email of logged-in user
$email_user = $_SESSION['email'];

// Retrieve the maximum week number for the user
$sql_max_week = "SELECT MAX(week_no) as max_week FROM progress WHERE email_user='$email_user'";
$result_max_week = mysqli_query($connect, $sql_max_week);
$max_week = mysqli_fetch_assoc($result_max_week)['max_week'];

$current_week = $max_week + 1;

// Retrieve the current progressid count for all users
$sql_count = "SELECT COUNT(*) as count FROM progress";
$result_count = mysqli_query($connect, $sql_count);
$count = mysqli_fetch_assoc($result_count)['count'];
$count++;
$progressid = "progress" . $count;

//inserting
$sql = "INSERT INTO progress (progressid, email_user, week_no, steps, calories, exercise, move, stand) VALUES ('$progressid', '$email_user', '$current_week', '$steps', '$calories', '$exercise', '$move', '$stand')";

$result = mysqli_query($connect, $sql);

if ($result) {
  echo "<script>alert('Information submitted successfully!') </script>";
  header("Location: progress.php");
} else {
  echo "<script> alert('Error submitting information:')</script> " . mysqli_error($conn);
  header("Location: progress.php");
}

// Close the database connection
mysqli_close($connect);

?>
