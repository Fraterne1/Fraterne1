<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2getherWITH | Welcome</title>
    <link rel="icon" href="img/icons/s_rights.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<div class="loader">

</div>
<body>
<img class="wave1" src="img/undraw_online_wishes_dlmr.jpg.svg" alt="" srcset="">
<?php
session_start();

require_once "connection.php";

    $code = mysqli_real_escape_string($db, $_POST["code"]);

    $_SESSION["code"] = $code;

   $sql="SELECT * from users where `Id`='{$_SESSION["code"]}'";
$result=$db->query($sql);

if (mysqli_num_rows($result) > 0) {
    while ($row=$result->fetch_assoc()) {
        ?>

<div id="container">
       
        <div class="login-container1">
          <?php
          if ($row['photo'] === 'no photo yet') {
            ?>
            <img class="avatar1" src="img/avatar (1).svg">
            <?php
          }else{
          ?>
           <img class="avatar1" src="upload/<?php echo $row['photo'] ?>">
           <?php
          }?>
           <h2>WELCOME</h2>
           <p><?php echo $row['Username'] ?></p>
           <p>you need to note <?php echo $row['Id'] ?> as your code</p>
           <style>
             p{
               margin-bottom: 20px;
             }
           </style>
           <a href="index1.php" class="btn1">Continue to Homepage</a>
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
            <div class="content">
                There is no any audio yet to your profile
                <a href="profile_edit.php">click to edit your profile</a>
            </div>
            <?php
        } ?>    
        </div>
            
      
            <audio id="song" src="songs/<?php echo $row['song'] ?>" visibility="hidden" autoplay  type="audio/mp3"></audio>
            <!-- Video Controls -->
  <?php
  }}else{
    ?>
    <div id="container">
       <p>The code entered is not valid</p>
       <a href="reg.php">click here to create account</a>
    </div>
    <?php
  }
  ?>
                 
</div>
</body>
<script src="script/main.js"></script>
</html>
