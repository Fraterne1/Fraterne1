
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
<?php
session_start();
$db= mysqli_connect('127.0.0.1', 'root', '', '2getherWITH'); 


$querly = "SELECT * FROM users where `Id`='{$_SESSION["code"]}'";

if ($result = $db->query($querly)) {    
    while ($row = $result->fetch_assoc()) {
?>
<body>
<div id="header">
        <div class="web-icon">
            <img src="img/icons/web-icon1.png" alt="web-icon">
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
                 <img src="img/icons/s_desc.png" alt="log out">
                 <ul>
                 <li><a href="logout.php"><span> <img src="img/icons/s_cog.png" alt="settings"> </span>Settings</a></li>
                 <li><a href="logout.php">log out</a></li>
                 </ul>
            </div>
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
    <div class='content'>
        <div id="user-profiles">
            <div class="user_img">
            <?php
              if ($row['photo'] === 'no photo yet') {
            ?>
            <img src="img/avatar (1).svg">
            <?php
            }else{
            ?>
           <img src="upload/<?php echo $row['photo']?>">
           <?php
          }?>
            </div>
            <div class="info">
            <div class="user_name">
                <p><?php echo $row['Username'] ?></p>
            </div>
            <div class="user_email">
                <p><?php echo $row['e-mail'] ?></p>
            </div>
        </div>
        </div>
        <a href="addfile1.php">
        <div class="upload">
            +
        </div>
        </a>
        <div class="edit">
            <a href="profile_edit.php">Edit your profile</a>
        </div>
        <div class="posts">
                <?php
                $sql="SELECT * FROM videos where `user's code`='{$_SESSION["code"]}'";
                $result1 = $db->query($sql);
                if (mysqli_num_rows($result1) > 0) {
                    while ($row1 = $result1->fetch_assoc()) {
                        $photooo = $row1['user profile'];
                          $username = $row1['username'];
                          $content = $row1['Content'];
                          $video = $row1['video'];
                          $time = $row1['Time'];
                          ?>
                          <div id='video-container'>
                          <div class='aploader'>
                              <img src='upload/<?php echo $photooo ?>'>
                              <i><?php echo $username ?></i>
                              <i><?php echo $time ?></i>
                          </div>
                          <video id='video' controls>
                            <source src='uploaded_video/<?php echo $video ?>'>
                          <p>Your browser doesn't support HTML5 video. <a href='uploaded_video/$video'>Download</a> the video instead.</p>
                          </video>
                          <p><?php echo $content ?></p>
                          <button type="button">Comments</button>
                          </div> 
                             <?php
                    }
                }else {
                    ?>
                    <h3>Why haven't I uploaded anything here, let me <a href="addfile1.php">clich here</a> to upload something</h3>
                    <?php
                }
                ?>
            </div>
       
    </div>
    
    </div>
   
</body>
<?php
            }
        }else{
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
                <div class="account1">
                <a href="reg.php">Sign up</a>
                </div>
                <div class="account2">
                <a href="log.php">Login</a>
                </div>
            </div>
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
        <div class="user-profiles">
        <img src="upload/<?php echo $row['photo'] ?>">
        <p><?php echo $row['Username'] ?></p>
        </div>
    </div>
    <center><div class="upload">
        <form method="post" action="profile.php">
            <h4>You need to upload something here</h4>
            <input type="file" name="photo" id="uupload">
            <input type="submit" value="Upload">
       </form>
    </div></center>
    </div>
    <div class="footer">
       <p><center>&copy; 2getherWITH.com 2022</center></p>
    </div>
<?php
}
?>
</body>
</html>
<script src="script/main.js"></script>
<style>
#header{
   position: fixed;
   background-color: #fff; 
   width: 100%;
   height: 85px;
   border-bottom: 2px solid #e25e5e;

}
.web-icon{
    margin-top: 10px;
    width: 42%;
    margin: auto;
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
    margin-top: 5px;
    font-size: 1rem;
}
.logg li a{
    text-decoration: none;
    color: #999;
    border-radius: 20px;
    transition: .5s;
}
.logg li a:hover{
    color: #e25e5e;
    background-color: #999;
}
.logg1{
    visibility: hidden;
}
#outt img{
    margin-left: 20px;
}
#outt ul{
    width: 100%;
    background-color: #fff;
    border: 1px solid #e25e5e;
    border-top-width: 10%;
}
#outt ul li{
    width: 100%;
}
#user-profiles{
    width: 30%;
}
#user-profiles img{
    width: 30%;
    border-radius: 50%;
    float: left;
}
#user-profiles p{
    
}
.info{
    margin-bottom: 50px;
    width: 70%;
    float: right;
    margin-top: 20px;
}
.info p{
    float: left;
}
.upload{
    width: 20px;
    height: 20px;
    background-color: #e25e5e;
    margin-top: 200px; 
}
.upload a{
    text-decoration: none;
}
.menu{
        float: left;
        height: 100%;
        position: fixed;
        margin-top: 85px;
        background-image: linear-gradient(45deg, #e25e5e, transparent);
        width: 15%;
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
        width: 85%;
        margin-top: 100px;
        text-align: center;
        align-items: center;
    }
    .news{
        width: 100%;
        float: left;
        height: auto;
        padding: 10px 0;
    }
    .news-content{
        width: 100%;
        margin: auto;
    }
    .news-content img{
        width: 100%;

    }
    #video-container{
        width: 60%;
        margin: auto;
        margin-top: 200px;
    }
    #video-container video{
        background-color: #e25e5e;
        width: 100%;
        margin: auto;
        border-radius: 5%;
    }
    #video-container p{
        float: left;
        color: black;
        font-size: 150%;
    }
    .news-content video:hover{
        background: none;
    }
    .aploader{
        width: 100%;
        float: left;
    }
    .aploader img{
        border-radius: 50%;
        width: 5%;
        height: 10%;
        border-top: 3px solid #e25e5e;
        border-right: 3px solid #e25e5e;
        border-left: 3px dashed #e25e5e;
        border-bottom: 3px dashed #e25e5e;
        animation:  2s linear infinite;
        float: left;
    }
    @keyframes photo {
        20%{border-top: 3px dashed #e25e5e;
        border-right: 3px solid #e25e5e;
        border-left: 3px dashed #e25e5e;
        border-bottom: 3px dashed #e25e5e;}

        40%{border-top: 3px dashed #e25e5e;
        border-right: 3px dashed #e25e5e;
        border-left: 3px dashed #e25e5e;
        border-bottom: 3px dashed #e25e5e;}

        60%{border-top: 3px dashed #e25e5e;
        border-right: 3px dashed #e25e5e;
        border-left: 3px dashed #e25e5e;
        border-bottom: 3px solid #e25e5e;}

        80%{border-top: 3px dashed #e25e5e;
        border-right: 3px dashed #e25e5e;
        border-left: 3px solid #e25e5e;
        border-bottom: 3px solid #e25e5e;}

        100%{border-top: 3px dashed #e25e5e;
        border-right: 3px solid #e25e5e;
        border-left: 3px solid #e25e5e;
        border-bottom: 3px solid #e25e5e;}
    }
    .aploader i{
        margin-left: 80px;
        font-size: 90%;
        float: left;
        color: #e25e5e;
    }
    #video-container p{
        
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
        right: 0;
        height: 5%;
        background-image: linear-gradient(45deg, #e25e5e, transparent);
        position: fixed;

    }
    .footer p{
        margin-top: 10px;
    }
    </style>