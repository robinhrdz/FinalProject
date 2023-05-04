<!DOCTYPE html>
<html>
<head>
	<title>Fitness Quiz</title>
	<meta charset="UTF-8">
    <title>Fitness Project</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/bannerImages.css" rel="stylesheet">
    <link href="../css/personalized_workouts.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    
    <?php include '../topMenu.php'; ?>
</head>
<body>
<div id="carouselExample" class="carousel slide" >
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img class = "quizImage" src="https://health.clevelandclinic.org/wp-content/uploads/sites/3/2022/04/exerciseHowOften-944015592-770x533-1-650x428.jpg" class="d-block w-100" alt="...">
      <div >
        <label> Question 1: How often do you exercise>?</label>
        <input type="radio" id = "q1" name="q1" value="0"> Never<br>
				<input type="radio" id = "q1" name="q1" value="1"> Rarely (1-2 times a month)<br>
				<input type="radio" id = "q1" name="q1" value="2"> Occasionally (1-2 times a week)<br>
				<input type="radio" id = "q1" name="q1" value="3"> Regularly (3-4 times a week)<br>
				<input type="radio" id = "q1" name="q1" value="4"> Very regularly (5 or more times a week)<br>
      </div>
    </div>
    <div class="carousel-item">
      <img class ="quizImage" src="https://images.everydayhealth.com/images/everything-you-need-know-about-fitness-1440x810.jpg" class="d-block w-100" alt="...">
      <div >
        <label> Question 2: How would you describe your current fitness level?</label>
        <input type="radio" id = "q2" name="q2" value="0"> Poor<br>
				<input type="radio" id = "q2" name="q2" value="1"> Below average<br>
				<input type="radio" id = "q2" name="q2" value="2"> Average<br>
				<input type="radio" id = "q2" name="q2" value="3"> Above average<br>
				<input type="radio" id = "q2" name="q2" value="4"> Excellent<br>
      </div>
    </div>
    <div class="carousel-item">
      <img class ="quizImage" src="https://media.defense.gov/2020/Apr/30/2002291608/1920/1080/0/200501-F-PO640-0034.JPG" class="d-block w-100" alt="...">
        <div> 
        <label> Question 3: How would you describe your current diet?</label>
        <input type="radio" id = "q3" name="q3" value="0"> Very unhealthy<br>
				<input type="radio" id = "q3" name="q3" value="1"> Unhealthy<br>
				<input type="radio" id = "q3" name="q3" value="2"> Could be better<br>
				<input type="radio" id = "q3" name="q3" value="3"> Healthy<br>
				<input type="radio" id = "q3" name="q3" value="4"> Very healthy<br>
        </div>
    </div>

    <div class="carousel-item">
      <img class ="quizImage" class ="img" src="https://hips.hearstapps.com/hmg-prod/images/assortment-of-colorful-ripe-tropical-fruits-top-royalty-free-image-995518546-1564092355.jpg?crop=0.982xw:0.736xh;0,0.189xh&resize=1200:*" class="d-block w-100" alt="...">
        <div> 
        <label> Question 4:How many servings of fruits and vegetables do you consume daily?</label>
        <input type="radio" id = "q4" name="q4" value="0"> None<br>
				<input type="radio" id = "q4" name="q4" value="1"> 1-2 Servings<br>
				<input type="radio" id = "q4" name="q4" value="2"> 3-4 Servings<br>
				<input type="radio" id = "q4" name="q4" value="3"> 5-6 Services<br>
				<input type="radio" id = "q4" name="q4" value="4"> 7 or more<br>
			
        </div>
    </div>
    <div class="carousel-item">
      <img class ="quizImage" src="https://sph.umich.edu/pursuit/2020posts/2020images/Sleep101.jpg" class="d-block w-100" alt="...">
        <div> 
        <label> Question 5:How many hours of sleep do you get on average each night?</label>
        <input type="radio" id = "q5" name="q5" value="0"> Less than 4 hours<br>
        <input type="radio" id = "q5" name="q5" value="1"> At least 5 hours<br>
				<input type="radio" id = "q5" name="q5" value="2"> 5-6 hours<br>
				<input type="radio" id = "q5" name="q5" value="3"> 7-8 hours<br>
				<input type="radio" id = "q5" name="q5" value="4"> More than 8 hours<br>	
        </div>
    </div>
    <div class="carousel-item">
      <img class ="quizImage" src="https://domf5oio6qrcr.cloudfront.net/medialibrary/7909/conversions/b8a1309a-ba53-48c7-bca3-9c36aab2338a-thumb.jpg" class="d-block w-100" alt="...">
        <div> 
        <label> Question 6:How many glasses of water do you consume daily?</label>
        <input type="radio" id = "q6" name="q6" value="0"> None<br>
				<input type="radio" id = "q6" name="q6" value="1"> 1-2 glasses<br>
				<input type="radio" id = "q6" name="q6" value="2"> 3-4 glasses<br>
				<input type="radio" id = "q6" name="q6" value="3"> 5 - 6 glasses<br>
				<input type="radio" id = "q6" name="q6" value="4"> More 6 than glasses<br>	
        </div>
    </div>
    <div class="carousel-item">
      <img class ="quizImage" src="https://blogimage.vantagefit.io/vfitimages/2020/09/sedentary-lifestyle.png" class="d-block w-100" alt="...">
        <div> 
        <label> Question 7:How many hours per day do you spend sitting or sedentary (e.g. watching TV, working at a desk, etc.)?</label>
				<input type="radio" id = "q7" name="q7" value="0">  More than 6 hours<br>
				<input type="radio" id = "q7" name="q7" value="1">  5-6 hours<br>	
				<input type="radio" id = "q7" name="q7" value="2">  3-4 hours<br>
        <input type="radio" id = "q7" name="q7" value="3"> 1-2 hours<br>
        <input type="radio" id = "q7" name="q7" value="4">Less than 1 hour<br>
        </div>
    </div>
    <div class="carousel-item">
      <img class ="quizImage" src="https://img.freepik.com/free-vector/weightlifting-animation-character-sport-training-barbell-strength-order-manual_1284-41824.jpg?w=2000" class="d-block w-100" alt="...">
        <div> 
        <label> Question 8:How often do you engage in strength training exercises?</label>
        <input type="radio" id = "q8" name="q8" value="0">Never<br>
				<input type="radio" id = "q8" name="q8" value="1">1-2 times a week<br>
				<input type="radio" id = "q8" name="q8" value="2">3-4 times a week<br>
				<input type="radio" id = "q8" name="q8" value="3">5 times a week<br>	
				<input type="radio" id = "q8" name="q8" value="4">6 or more times a week<br>	
        </div>
    </div>
    <div class="carousel-item">
      <img class ="quizImage" src="https://media.licdn.com/dms/image/C5612AQF6dhxiPK6AtQ/article-cover_image-shrink_600_2000/0/1520137739587?e=2147483647&v=beta&t=FcNNuhU53fqro3jgt2M8ahX0B7setg7Ywu0LA_Ofg9I" class="d-block w-100" alt="...">
        <div> 
        <label> Question 9:How long can you plank?</label>
				<input type="radio" id = "q9" name="q9" value="0">These are death to me<br>	
				<input type="radio" id = "q9" name="q9" value="1">15-60 Seconds<br>
        <input type="radio" id = "q9" name="q9" value="2">over a minute<br>
				<input type="radio" id = "q9" name="q9" value="3">Over 2 minutes<br>
				<input type="radio" id = "q9" name="q9" value="4">It is Easy for me<br>	
        </div>
    </div>

    <div class="carousel-item">
      <img class ="quizImage" src="https://static.vecteezy.com/system/resources/previews/016/181/654/original/woman-stretching-workout-2d-isolated-illustration-flexibility-exercises-fitness-flat-character-on-cartoon-background-colorful-editable-scene-for-mobile-website-presentation-vector.jpg" class="d-block w-100" alt="...">
        <div> 
        <label> Question 10:How flexible are you?</label>
				<input type="radio" id = "q10" name="q10" value="0">I can touch my nose<br>
        <input type="radio" id = "q10" name="q10" value="1">I can touch my knees<br>
				<input type="radio" id = "q10" name="q10" value="2">I can touch my toes<br>
				<input type="radio" id = "q10" name="q10" value="3">I think I am pretty flexible<br>	
				<input type="radio" id = "q10" name="q10" value="4">I am vey flexible<br>	
        </div>
          <div align = "center">
            <button onclick="calculateFitnessLevel()">Submit</button>
          </div>
    </div>
    <div class="carousel-item" id="myCarousel">  
      <div id="result">
      </div>
    </div>
    
  </div>
</div>

<center>
<button class="btn" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button id = "next" class="btn" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

  <script src="../js/mainCode.js"></script>
  
</center><br>
<?php include '../footer.php'; ?>

</body>
</html>
