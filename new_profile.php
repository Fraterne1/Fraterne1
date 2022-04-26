<?php

$db= mysqli_connect('127.0.0.1', 'root', '', '2getherWITH');

        if(isset($_POST['save'])){

            $upload = mysqli_real_escape_string($db, $_POST['Surname']);
        
            
           
        
            $query = "INSERT INTO `uploads`(`Id`, `upload`, `date`) VALUES (Id,'$upload',date)";

             mysqli_query($db, $query);
        }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2getherWITH | Profile</title>
    <link rel="icon" href="img/web-icon.png">
</head>
<div class="loader">

</div>
<body>
    <div id="header">
        <div class="web-icon">
            <img src="img/web-icon.png" alt="web-icon">
        </div>
            <div class='account'>
            <div class='account1'>
                <a href='reg.php'>Sign Up</a>
            </div>
            <div class='account2'>
                <a href='log.php'>Login</a>
            </div>
            </div>";

    </div>
    <div class="menu">
    
    <ul>
              <li class="home"><a href="index.php">HOME</a></li>
              <li class="profile"><a href="profile.php">PROFILES</a></li>
              <li class="project"><a href="plan.php">PROJECTS</a></li>
              <li class="course"><a href="course.php">COURSES</a></li>
              <li class="notification"><a href="popup.php">NOTIFICATIONS</a></li>
            </ul>
</div>
    <div class='content'>
    <div class='signin>
        <center><p>Sign in to your account to view your profile</p></center>
        <a href='log.php'><button id='butto'>Sign in</button></a>
    </div>
    <div class='create'>
        <center><p>Create a new account to make your profile</p></center>
        <a href='reg.php'><button id='butto'>Create Account</button></a>
    </div>
</div>
</div>
    <div class="footer">
<p><center>&copy; 2getherWITH.com 2022</center></p>
    </div>
</body>
<style>
     body{
        font-family: monospace;
        background-size: cover;
        }
       
        #myAudio{
        visibility: hidden;
    }
    .menu{
        float: left;
        height: 530px;
        width:200px;
        border-right: 1px solid black;
        position: fixed;
    }
    .menu h3{
        font-size: 20px;
        text-decoration: underline;
        margin-top: 10px;
    }
    .menu ul{
        font-family: monospace;
        float: left;
        margin-right: 60px;
    }
    .menu li{
        float: bottom;
        margin-top: 60px;
        list-style:disc;
        color: black;
    }
    .menu li:hover{
        text-decoration: underline;
    }
    .menu a{
        text-decoration: none;
        font-size: 15px;
        color : black;
    }
    .profile{
        text-decoration: underline;
        font-weight: 700;
    }
    .content{
        width: 1150px;
        float: right;
        margin-left: 200px;
        text-align: center;
        font-size: 15px;

    }
    .signin {
        color: black;
        margin-top: 10px;
        border: 1px solid black;
        width: 1000px;
    }
    .signin p{
        font-weight: 700;
        font-family: monospace;
    }
    .create {
        margin-top: 300px;
        margin-left: 700px;
        color: black;
        width: 400px;
    }
    .create p{
        font-weight: 700;
        font-family: monospace;
    }
    #butto{
        margin-top: 30px;
        padding: 5px;
        width: 50%;
        border: none;
        border-radius: 10px;
        background-image: linear-gradient(to right, black, white);
    }
    #butto:hover{
        background-image: linear-gradient(to left, black, white);
    }
    .news{
        margin-top: 100px;
    }
    .news img{
        width: 100%;
    }
    .footer p{
        margin-top: 10px;
        font-size: 20px;
    }
    .footer{
        width: 100%;
        margin-top: 540px;
        height: 60px;
        background-color: white;
        position: fixed;
    }
    
    .audio{
        width: 1300px;
        border: 1px solid red;
        margin-top: 200px;
    }
    .audio audio{
        margin-top: 100px;
        background: none;
        visibility: visible;
        animation: music 5s alternate infinite;
    }
   
    #header{
        height: 50px;
        border-bottom: 1px solid black;
    }
    .account{
        float: right;
        height: 12px;
        margin-top: -20px;
        position: fixed;
        margin-left: 1150px;
    }
    .account1{
        float: left;
        padding: 5px;
        border: 1px solid black;
        border-radius: 10px;
        position: relative;
        margin-right: 40px;
        margin-bottom: 100px;
    }
    
    .loader{
        width: 75px;
        height: 75px;
        border-bottom: 1px solid black;
        border-radius: 50%;
        margin-top: 400px;
        margin: auto;
        animation: load 2s infinite;
    }
    @keyframes load {
        0%{transform: rotate(0deg);}
        100%{transform: rotate(360deg);}
    }
    .account2{
        float: left;
        padding: 5px;
        border: 1px solid black;
        border-radius: 10px;
        position: relative;
        margin-right: 40px;
       
    }
    .account1:hover{
        font-size: 15px;
    }
    .account2:hover{
        font-size: 15px;
    }
    .account a{
        text-decoration: none;
        color: black;
    }
</style>
<script>
    document.onreadystatechange = function() {
	if (document.readyState !== "complete") {
		document.querySelector("body").style.visibility = "hidden";
		document.querySelector(".loader").style.visibility = "visible";
	} else {
		document.querySelector(".loader").style.display = "none";
		document.querySelector("body").style.visibility = "visible";
	}
};
</script>
</html>