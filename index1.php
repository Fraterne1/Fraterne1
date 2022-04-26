<?php
session_start();
require_once "connection.php";

if (isset($_SESSION["code"])) {

$sql="SELECT * from users where `Id`='{$_SESSION["code"]}'";
$sql2 = "SELECT * FROM `videos` ORDER BY `videos`.`video` ASC";

$result=$db->query($sql);
$result2=$db->query($sql2);


if (mysqli_num_rows($result) > 0) {
    while ($row=$result->fetch_assoc()) {
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2getherWITH | Homepage</title>
    <link rel="icon" href="img/web-icon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<div class="loader">

</div>
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
        width: 30%;
        float: left;
        margin-left: 30px;
        margin-bottom: 50px;
    }
    .news-content video{
        width: 100%;
        height: 200px;
        background-color: #e25e5e;
    }
    .news-content video:hover{
        background: none;
    }
    .aploader{
        width: 100%;
        float: left;
        height: 20%;
    }
    .aploader img{
        border-radius: 50%;
        width: 15%;
        height: 40px;
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
    .aploader p{
        margin-left: 80px;
        font-size: 40px;
        color: #e25e5e;
        float: right;
    }
    #video-container p{
        font-size: 1.3rem;
        margin-left: 20%;
        float: left;
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
    <div class="content">
        <?php if($row['song']!=='no song'){
            ?>
           <audio id="song" src="songs/<?php echo $row['song'] ?>" visibility="hidden"   type="audio/mp3"></audio>
           <div id="video-controls1">
           <input type="range" id="seek-bar1" value="0">
           <button type="button" id="play-pause1"><img src="img/icons/play.png" alt=""></button>
           <input type="range" id="volume-bar1" min="0" max="1" step="0.1" value="1">
           </div> 
           <?php
        }else {
            ?>
            <div class="content1">
                There is no any audio yet to your profile
                <a href="profile_edit.php">click to edit your profile</a>
            </div>
            <?php
        } ?>    
             <div class="news">
                 <div class="news-content">
                    <?php
                    if (mysqli_num_rows($result2) >= 1 ) {
                      while ($row2=$result2->fetch_assoc()) {
                          $photooo = $row2['user profile'];
                          $username = $row2['username'];
                          $content = $row2['Content'];
                          $video = $row2['video'];
                          $time = $row2['Time'];
                          ?>
                          <div id='video-container'>
                          <div class='aploader'>
                              <img src='upload/<?php echo $photooo ?>'>
                              <p><?php echo $username ?></p>
                              <p><?php echo $time ?></p>
                          </div>
                          <video id='video' controls>
                            <source src='uploaded_video/<?php echo $video ?>'>
                          <p>Your browser doesn't support HTML5 video. <a href='uploaded_video/$video'>Download</a> the video instead.</p>
                          </video>
                          <p><?php echo $content ?></p>
                          </div> 
                             <?php
                             } }else{
                             ?>
                          </div>
                          </div>
            <div class="news">
            <center><p>There is no any news uploaded yet</p></center>
            </div>
                 </div>   
             </div>
        </div>
            <?php
        
    }}?>   

    
<?php
} else {?>
    </body>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2getherWITH | Homepage</title>
    <link rel="icon" href="img/web-icon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<div class="loader">

</div>
<body>
    <div id="header">
        <div class="web-icon">
            <img src="img/web-icon.png" alt="web-icon">
        </div>
        <div class="account">
          
        </div>
    </div>
    <div class="content">
    
    </div>
    
    <div class="menu">
    
            <ul>
              <li class="home"><a href="index1.php">HOME</a></li>
              <li class="profile1"><a href="profile1.php">PROFILES</a></li>
              <li class="project"><a href="plan1.php">PROJECTS</a></li>
              <li class="course"><a href="course1.php">COURSES</a></li>
              <li class="notification"><a href="popup1.php">NOTIFICATIONS</a></li>
            </ul>
    </div>
   
   
</body>
<?php
} } ?>
<div class="footer">
<p><center>&copy; 2getherWITH.com 2022</center></p>
    </div>
<script src="script/main.js"></script>
<script>
                               var song = document.getElementById("song");
                               var playpausebut = document.getElementById("play-pause1");
                               var seekBar1 = document.getElementById("seek-bar1");
                               var VolumeBar1 = document.getElementById("volume-bar1");
                               var video = document.getElementById("video");

                               playpausebut.addEventListener("click", function(){
                               if (song.paused == true) {
                                  song.play();
                                  playpausebut.innerHTML="<img src='img/icons/pause.png'>";
                                }else{
                                  song.pause();
                                  playpausebut.innerHTML="<img src='img/icons/play.png'>";
                                }});
                                seekBar1.addEventListener("change", function () {
                                   var time= song.duration * (seekBar1.value / 100);
                                   song.currentTime = time;
                                });
                                song.addEventListener("timeupdate" , function (){
                                   var value = (100/ song.duration) * song.currentTime;
                                   seekBar.value =value;
                                });
                                VolumeBar1.addEventListener("change", function (){
                                    song.volume = VolumeBar1.value;
                                });
                                
                                

                                var video = document.getElementById('video');
                                var video_section = document.getElementById('video-container');
                                var playButton = document.getElementById('play-pause');
                                var muteButton = document.getElementById('mute');
                                var fullScreenButton = document.getElementById('full-screen');
                                var seekBar = document.getElementById('seek-bar');
                                var volumeBar = document.getElementById('volume-bar');
                                var controls = document.getElementById('video-controls');

                                controls.style.visibility='hidden';
                                video_section.addEventListener('mouseover' , function (){
                                    controls.style.visibility='visible';
                                });
                                video_section.addEventListener('mouseleave' , function (){
                                    controls.style.visibility='hidden';
                                });
                                video.addEventListener('mouseover' , function (){
                                   video.play();
                                });
                                video.addEventListener('mouseleave', function (){
                                    video.pause();
                                });
                                
                            </script>
</html>

