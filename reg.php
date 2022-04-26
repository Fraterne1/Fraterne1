<?php

session_start();

$db= mysqli_connect('127.0.0.1', 'root', '', '2getherWITH');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2getherWITH | Create Account</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<div class="loader">

</div>
<body>
        <img class="wave" src="img/undraw_online_wishes_dlmr.jpg.svg" alt="" srcset="">
    <div id="container">
        
        <div class="login-container">
        <form action="login1.php" method="post" enctype="mulipart/data-form">
         <img src="img/undraw_male_avatar_323b.svg" alt="" class="avatar" >
         <h2>CREATE ACCOUNT</h2>
         <div class="input-div one focus">
             <input type="text" name="Fullname" id="input" placeholder="Fullname" required>
         </div>
         <div class="input-div two">
             <input type="text" name="Username" id="input" placeholder="Username" required >
         </div>
         <div class="input-div two">
             <input type="text" name="e-mail" id="input" placeholder="example@gmail.com" required>
         </div>
         <div class="input-div two">
             <input type="password" name="Password" id="input" placeholder="Password" required>
         </div>
         <div class="input-div two">
             <input type="password" name="re-Password" id="input" placeholder="Confirm Password" required>
         </div>
         <p>Already have an account?<a class="signuplink" href="login.php">Login</a></p>
        <div class="subm">
        <input type="submit" class="btn" value="Create Account" name="save">
        </div>
    </form>
   
        </div>
    
    </div>
</body>
<script src="script/main.js"></script>
<style>
    .login-container form{
    width: 300px;
    margin-left: 400px;
    margin-top: 0px;
}
.wave{
    position: fixed;
    height: 100%;
    right: 0;
    bottom: 0;
    z-index: -1;
}
</style>            
</body>
</html>