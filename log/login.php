<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Project</title>
    <link href="../css/popUp.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    
    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>
  
    <?php include '../topMenu.php'; ?>
</head>
<body> 
    <h1> <center>Sign Up or Log In Form</center></h1> 
    
    <div class="hero">
        <div class="form-box">
            
            <div class="button-box">
                <div id="btn"></div> 
                <button type="button" class="toggle-btn" onclick="login()"> Log In </button> 
                <button type="button" class="toggle-btn" onclick="signup()"> Sign Up </button> 
                
            </div>
            
            <form id="login" class="input-group" action="loginProcess.php" method="post">
                <input type="text" id="email" name="email" class="input-field" placeholder="Email" required> 
                <input type="password" id="password" name="password" class="input-field" placeholder="Password" required> 
                <input type="checkbox" class="check-box"><span> Remember Password</span> 
                <button type="submit" class="submit-btn">Log In</button> 
            </form>
            <form id="signup" class="input-group" action="signupProcess.php" method="post">
                <input type="text" name="name" id="name" class="input-field" placeholder="Name" required> 
                <input type="text" name="lastname" id="lastname" class="input-field" placeholder="Last Name" required> 
                <input type="email" name="email" id="email" class="input-field" placeholder="Email" required> 
                <input type="password" name="password" id="password" class="input-field" placeholder="Password" required> 
                <input type="checkbox" class="check-box" required><span> I agree to terms and Conditions </span> 
                <button type="submit" id="signup" class="submit-btn">Sign Up</button> 
            </form>
        </div>
        
    </div>

    <script>
    var x = document.getElementById("login");
    var y = document.getElementById("signup");
    var z = document.getElementById("btn");

    function signup(){
    x.style.left = "-400px";
    y.style.left = "50px"; 
    z.style.left = "110px"; 
    } 
    function login(){
    x.style.left = "50px";
    y.style.left = "450px"; 
    z.style.left = "0"; 
    }
    </script> 
   

</body> 
</html>
