<?php
 require_once "connection.php";
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2getherWITH | Login</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icons/s_rights.png">
</head>
<div class="loader">

</div>
<body>
        <img class="wave" src="img/undraw_online_wishes_dlmr.jpg.svg" alt="" srcset="">
    <div id="container">
        
        <div class="login-container">
        <form action="welcome.php" method="post">
         <img src="img/undraw_male_avatar_323b.svg" alt="" class="avatar" >
         <h2>WELCOME</h2>
         <div class="input-div two"> 
             <input type="text" name="code" id="input" placeholder="Code" required>
         </div>
         <a href="forget-password.php">Forget code?</a>  
        <div class="subm">
        <input type="submit" class="btn" value="Login" name="login">
        </div>
    </form>
    <p>Don't have an account?<a class="signuplink" href="reg.php">Sign up</a></p>
        </div>
    
    </div>
</body>
<script src="script/main.js"></script>
            
</body>
</html>