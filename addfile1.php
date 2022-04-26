<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2getherWITH | Profile</title>
    <link rel="icon" href="img/web-icon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<div class="loader">

</div>
<body>
<?php
session_start();
require_once "connection.php";

$querly = "SELECT * FROM users where `Id`='{$_SESSION["code"]}'";
if ($result = $db->query($querly)) {
    while ($row = $result->fetch_assoc()) {
?>
        <div id="header">
        <div class="web-icon">
            <center><img src="img/icons/web-icon1.png" alt="web-icon"></center>
        </div>
        <div class="account">
            <div class="pp">
            <?php
          if ($row['photo'] === 'no photo yet') {
            ?>
            <a href="profile1.php"><img class="avatar1" src="img/avatar (1).svg"></a>
            <?php
          }else{
          ?>
           <a href="profile1.php"><img class="avatar1" src="upload/<?php echo $row['photo'] ?>"></a>
           <?php
          }?>
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
    <style>
#header{
   position: fixed; 
   width: 100%;
   height: 100px;
   border-bottom: 2px solid #e25e5e; 
}
.web-icon{
    margin-top: 10px;
}
.account{
    float: right;
    margin-top: -60px;
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

    </style>
    <div class="menu">
    <ul>
      <li class="home"><a href="index1.php">HOME</a></li>
      <li class="profile"><a href="profile1.php">PROFILES</a></li>
      <li class="project"><a href="plan1.php">PROJECTS</a></li>
      <li class="course"><a href="course1.php">COURSES</a></li>
      <li class="notification"><a href="popup1.php">NOTIFICATIONS</a></li>
    </ul>
</div>
<style>
    .menu{
        float: left;
        height: 100%;
        position: fixed;
        margin-top: 85px;
        background-image: linear-gradient(45deg, #e25e5e, transparent);
        width: 10%;
        bottom: 0;
        left: 0; 
    }
    .img2{
        margin-top: 50px;
        margin-left: 40px; 
        visibility: hidden;
    }
    .menu ul{
        margin-left: 15px;
        margin: 150% 10%;
    }
    .menu li{
        list-style: none;
        margin-top: 50px;
    }
    .menu li a{
        display: block;
    text-align: left;
    text-decoration: none;
    color: #fff;
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
        width: 90%;
        margin-top: 100px;
    }
    .content form{
        margin-bottom: 80px;
    }
    .news{
        width: 100%;
        height: auto;
        padding: 10px 0;
    }
    @media screen and (max-width: 815px) {
        .menu ul{
            visibility: hidden;
        }
        .img2{
            visibility: visible;
        }
    }
    .footer{
        width: 90%;
        bottom: 0;
        height: 10%;
        background-image: linear-gradient(45deg, #e25e5e, transparent);
        position: fixed;

    }
</style>
    <div class="content">
    <form method="post" action="after-upload.php" enctype="multipart/form-data">
         <h2>Upload Your Video Here</h2>
         <div class="form1">
         <div class="input-div ">
             <input type="text" name="Content" id="input" placeholder="Title" >
         </div>
        </div>
        <div class="form2">
        <div class="input-div ">
            <label for="photo">Profile Picture</label>
             <input type="file" name="thumbnail" accept="image/*" id="photo" value="<?php echo $row['photo'] ?>">
         </div>
         <div class="input-div ">
            <label for="file">Add Your file Here</label>
             <input type="file" name="file" id="file">
         </div>
        </div>
        <div class="subm">
        <input type="submit" class="btn" value="Upload" name="upload">
        </div>
    </form>
   

    <a href="profile1.php">Go Back to Profile</a>

   <?php }
      } ?> 
   <div class="footer">
   <p><center>&copy; 2getherWITH.com 2022</center></p>
</div>
</body>
<script src="script/main.js"></script>
</html>

