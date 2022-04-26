
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
    <link rel="stylesheet" href="css/style.css">
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
            <img src="img/icons/web-icon.png" alt="web-icon">
        </div>
        <div class="account">
            <div class="pp">
            <a href="profile1.php"><img class="imgg" src="upload/<?php echo $row['photo'] ?>" alt="profile_img"></a>
            </div>
            <div class="logg">
            <div id="outt">
                 <p id="outt">Log Out</p>
                 <li id="sele"><a href="logout.php">log out</a></li>
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
    <?php
    $sql1 = "SELECT * from "
    ?>
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
#header{
   position: fixed; 
   width: 100%;
   height: 100px;

}
.web-icon{
    margin-top: 30px;
}
.account{
    float: right;
    margin-top: -30px;
    margin-right: 20px;
}
.pp{
    width: 50px;
    height: 50px;
    margin-right: 100px;
    position: absolute;
}
.pp img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
}
.logg{
    width: 100px;
    margin-top: 15px;
    margin-left: 40px;
}
.logg p{
    font-size: 1.5rem;
}
.logg p:hover{
    color: #e25e5e;
    cursor: pointer;
}
.logg li{
    list-style: none;
    float: right;
    margin-top: 5px;
    font-size: 1.2rem;
}
.logg li a{
    text-decoration: none;
    color: #999;
    border-radius: 20px;
    padding: 4px;
    background-color: #e25e5e;
    transition: .5s;
}
.logg li a:hover{
    color: #e25e5e;
    background-color: #999;
}
.logg1{
    visibility: hidden;
}
.menu{
        float: left;
        height: 530px;
        position: fixed;
        margin-top: 100px;
        width: 20%px; 
    }
    .menu ul{
        margin-left: 40px;
    }
    .menu li{
        list-style: none;
        margin-top: 50px;
    }
    .menu li a{
        display: block;
    text-align: left;
    text-decoration: none;
    color: #999;
    font-size: 1rem;
    transition: .3s;
    }
    .menu li a:hover{
        color: #e25e5e;
    }
    .menu img{
        width: 50px;
        height: auto;
        border-radius: 50%;
    }
    .content{
        float: right;
        width: 80%;
        margin-top: 100px;
        text-align: center;
        align-items: center;
        margin-left: 200px;
    }
    .news{
        width: 100%;
        height: auto;
    }
    .news-content{
        width: 90%;

    }
    .news-content img{
        width: 100%;
    }
    .news-content video{
        width: 100%;
    }
    </style>
<script src="script/main.js"></script>
</html>