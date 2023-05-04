<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Project</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/bannerImages.css" rel="stylesheet">
    <link href="../css/popUp.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    
    <script src="js/mainCode.js"></script>
    <script src ="js/popUp.js"></script> 

    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>
    
    <?php include '../topMenu.php'; ?>
    <?php include '../start_session.php'; ?>


</head>

<body>
    
    <div class="profileCard">
    <button id ="pictureButton" class ="setting fas fa-cog setting-icon"></button>
    <div id="picturePopup" class="popup">
        <form action="upload_picture.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="profile_picture">
            <button type="submit" class="btn">Upload</button>
        </form>
  <button class="closePopup" onclick="closePopup()">X</button>
</div>

        <div>
            <div>
			<img src="<?php echo $row['profile_picture']; ?>" alt="Profile Picture" style="width: 200px; height: 200px;border-radius:50%;">
            
			</div>
            <h1>User Profile</h1>
            <h4 align="justify">ID: <input type="text" class = "infoProfile" name="id" value="<?php echo $row['ID_user']; ?>" readonly/></h4>
            <h4 align="justify">Name:</h4>  <input type="text" class = "infoProfile" name="id" value="<?php echo $row['name_user']; ?>" readonly/> 
            <h4 align="justify">Last Name:</h4> <input type="text" class = "infoProfile" name="id" value="<?php echo $row['lastname_user']; ?>"readonly />
            <h4 align="justify">Email:</h4> <input type="text" class = "infoProfile" name="id" value="<?php echo $row['email_user']; ?>" readonly/>            
            <form action = "close_session.php" method ="POST" enctype="multipart/form-data">
            <button type="submit" class ="btn"> Log Out</button> 
            </form>
            <br></br>
        </div>
 
    </div>
    <div class="favoriteWorkouts">
    <h1 align="center">Favorite Workouts</h1>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div>
            <h4><?php echo $row['video_name']; ?></h4>
            <p><?php echo $row['video_description']; ?></p>
            <video width="400" controls>
                <source src="<?php echo $row['video_location']; ?>" type="video/mp4">
            </video>
            <form method="post" action ="delete_video_Process.php">
                <input type="hidden" name="video_ID" value="<?php echo $row['video_ID']; ?>">
                <button type="submit" name="delete_video" class="btn">Delete</button>
            </form>
        </div>
    <?php endwhile; ?>
</div>

<script src = "../js/popUp.js"></script> 

</body>
</html>
