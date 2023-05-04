<!DOCTYPE html>
<html>
<head>
	<title>Fitness Tracker Progress</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/bannerImages.css" rel="stylesheet">
    <link href="../css/personalized_workouts.css" rel="stylesheet">
    <script src ="../js/personalized_workouts.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>

    <?php include '../topMenu.php'; ?>
    <?php include '../start_session.php';?>
</head>
<body>
  <section>
   

  <form id="inputProgress" class="input-group" method="POST" action="progresstoDB.php">
    
    <div class = "container" style="background: green; width: 500px">
    <div >
			<img class = "miniBanner" src="https://cdn.shopify.com/s/files/1/0580/2865/4785/files/ro-t8-handles-banner_1920x820_crop_right.jpg?v=1626980099" style="width: 500px; padding:10px;  overflow: auto; " alt="Banner Image">
		</div>
    
      <h1>Progress Report </h1><br/>
      
      <div class = "inputInformation">
        <div class ="col">
          
          <div class = "row">
          <label class="label-icon"><i class="fas fa-walking"></i> Steps </label>
            <input type = "int" name = "steps" placeholder="10,000" style = "color: black; width: 200px; border-radius: 20px" required> 
          </div> <br/>
          <div class = "row">
          <label class="label-icon"><i class="fas fa-fire"></i> Calories </label>
            <input type = "int" name = "calories" placeholder="1,200" style = "color: black; width: 200px;border-radius: 20px" required> 
          </div> <br/>
          <div class = "row">
          <label class="label-icon"><i class="fas fa-dumbbell"></i> Exercise </label>

          <input type="text" name= "exercise" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" placeholder="HH:MM:SS" style="color: black; width: 100px; border-radius: 20px;" required>
          </div> <br/>
          <div class = "row">
          <label class="label-icon"><i class="fas fa-running"></i> Move </label>

          <input type="text" name = "move" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" placeholder="HH:MM:SS" style="color: black; width: 100px; border-radius: 20px;" required>
          </div> <br/>
          <div class = "row">
          <label class="label-icon"><i class="fas fa-chair"></i> Stand </label>

            <input type = "type" name = "stand" placeholder="10"style = "color: black; width: 200px;border-radius: 20px " required> 
          </div> <br/>
          
        </div>

          
      </div>

      <button type = "submit" class = "ProgressButton"> Submit Information

        
      </div>
    </div>
</form>

  </section>
<?php include '../footer.php'; ?>

</body>
</html>
