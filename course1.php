
<?php
session_start();

require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2getherWITH | Projects</title>
    <link rel="icon" href="img/web-icon.png">
</head>
<div class="loader">

</div>
<?php

$sql = mysqli_query($db, "SELECT * from users where `code`='{$_SESSION["code"]}'");

if (mysqli_num_rows($sql) > 0) {
    while ($row = $sql->fetch_assoc()) {
        ?>
          <body>
    <div id="header">
        <div class="web-icon">
            <img src="img/web-icon.png" alt="web-icon">
        </div>
        <div class="account">
            <div class="pp">
            <a href="profile1.php"><img class="imgg" src="upload/<?php echo $row['photo'] ?>" alt="profile_img"></a>
            </div>
            <div class="logg"> <a href="logout.php"><p id="outt">Log Out</p></a>
            <div id="sele">
            <li ><a href="logout.php">log out</a></li>
            <button id="hide">Hide</button>
            </div>
           </div>
            <div class="logg1"> <a href="logout.php"><img src="img/logout.png" alt="logout"></a></div>
        </div>
    </div>
    <div class="menu">
    
            <ul>
              <li class="home"><a href="index1.php">HOME</a></li>
              <li class="profile"><a href="profile1.php">PROFILES</a></li>
              <li class="project"><a href="plan1.php">PROJECTS</a></li>
              <li class="course"><a href="course1.php">COURSES</a></li>
              <li class="notification"><a href="popup1.php">NOTIFICATIONS</a></li>
            </ul>
    </div>
    <div class="content">
         <div class="content">
    
    <div class="create">
    <center><p>There is no any course yet, Click "Add" to add a course</p></center>
        <a href="log.php"><button id="butto">Add</button></a>
    </div>
</div>
    </div>
    <div class="footer">
<p><center>&copy; 2getherWITH.com 2022</center></p>
    </div>
</body>
        <?php
    }
}else{
?>
<body>
    <div id="header">
        <div class="web-icon">
            <img src="img/web-icon.png" alt="web-icon">
        </div>
        <div class="account">
        <div class="account1">
            <a href="reg.php">Sign Up</a>
        </div>
        <div class="account2">
            <a href="log.php">Login</a>
        </div>
        </div>
    </div>
    <div class="menu">
    
            <ul>
              <li class="home"><a href="index1.php">HOME</a></li>
              <li class="profile"><a href="profile1.php">PROFILES</a></li>
              <li class="project"><a href="plan1.php">PROJECTS</a></li>
              <li class="course"><a href="course1.php">COURSES</a></li>
              <li class="notification"><a href="popup1.php">NOTIFICATIONS</a></li>
            </ul>
    </div>
    <div class="content">
         <div class="content">
    
    <div class="create">
    <center><p>There is no any project yet, Click "Add" to add a project</p></center>
        <a href="log.php"><button id="butto">Add</button></a>
    </div>
</div>
    </div>
    <div class="footer">
<p><center>&copy; 2getherWITH.com 2022</center></p>
    </div>
</body>
<?php
}?>
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
    .project a{
        font-weight: 700;
        
    }
    .project{
        text-decoration: underline;
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
    .content{
        width: 1150px;
        float: right;
        height: 530px;
    }
    .create {
        margin-top: 200px;
        margin-left: 400px;
        color: black;
        text-align: center;
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
        margin
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
        margin-top: 10px;
        position: fixed;
        margin-left: 1140px; 
    }
    .web-icon{
        position: fixed;
        margin-bottom: -10px;
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
<script src="script/main.js"></script>
</html>