<?php
// Include database connection file
include "../start_session.php";

// Get user information from database
$email_user = $_SESSION['email'];
$query = "SELECT * FROM users_table WHERE email_user = '$email_user'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

// Get user progress information from database
$query = "SELECT * FROM progress WHERE email_user = '$email_user' ORDER BY week_no ASC";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fitness Tracker Progress</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/bannerImages.css" rel="stylesheet">
    <link href="../css/personalized_workouts.css" rel="stylesheet">
    <script src ="../js/personalized_workouts.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>

    <?php include '../topMenu.php'; ?>
</head>
<body>

<div class="container">
  <div class="row">
    <?php while ($row_progress = mysqli_fetch_assoc($result)) { ?>
      <div class="col-md-4">
        <div class="card text-white" style="width: 20rem;">
          <h1 class="card-title">Week <?php echo $row_progress['week_no']?></h1>
          <div class="card-body">
            <h4 class="card-title">Weekly Summary</h4>
            <h5 class="steps"><i class="fas fa-walking"></i> Steps: <?php echo $row_progress['steps']; ?></h5>
            <h5 class="calories"><i class="fas fa-fire"></i> Calories: <?php echo $row_progress['calories']; ?></h5>
            <h5 class="exercise"><i class="fas fa-dumbbell"></i> Exercise: <?php echo $row_progress['exercise']; ?></h5>
            <h5 class="move"><i class="fas fa-running"></i> Move: <?php echo $row_progress['move']; ?></h5>
            <h5 class="stand"><i class="fas fa-chair"></i> Stand: <?php echo $row_progress['stand']; ?></h5>
          </div>
        </div>
      </div>
    <?php }?>

    <div class="col-md-4">
      <div class="card text-white" style="width: 20rem;">
        <div class="card-body">
          <h1 class="card-title">Add week</h1>
          <div class="card-body text-center">

          <a href="progressInput.php"><button class="btn"><i class="fas fa-plus"></i></button></a>
        </div>
    
      </div>
    </div>
  </div>
</div>
<?php include '../footer.php'; ?>


</body>
</html>

