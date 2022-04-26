
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2getherWITH | Edit profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
session_start();

require_once "connection.php";

if (isset($_POST['edit'])) {
    $Fullname = mysqli_real_escape_string($db, $_POST['Fullname']);
    $email = mysqli_real_escape_string($db, $_POST['e-mail']);
    $Username = mysqli_real_escape_string($db, $_POST['Username']);
    $password = mysqli_real_escape_string($db, $_POST['Password']);
    $repassword = mysqli_real_escape_string($db, $_POST['re-Password']);

    if ($password === $repassword) {
        $photo_name = $_FILES["photo"]["name"];
        $photo_tmp_name = $_FILES["photo"]["tmp_name"];
        $photo_type = $_FILES["photo"]["type"];
        $photo_size = $_FILES["photo"]["size"];
        $photo_new_name = rand() . $photo_name;

        if ($photo_size > 104857600) {
            echo "<script>alert('photo size is large');</script>"; 
        }else {
            $song_name = $_FILES["song"]["name"];
            $song_tmp_name = $_FILES["song"]["tmp_name"];
            $song_type = $_FILES["song"]["type"];
            $song_size = $_FILES["song"]["size"];
            $song_new_name = rand() . $song_name;

            
            $sql1 = "UPDATE `users` SET `photo`='$photo_new_name',`Fullname`='$Fullname',`Username`='$Username',`e-mail`='$email',`password`='$password',`song`='$song_new_name',`notifications`='updated' WHERE Id='{$_SESSION["code"]}'";
            $result2=mysqli_query($db, $sql1);
            if ($result2) {
                echo "<script>alert('Your profile is updated rightly');</script>";
                move_uploaded_file($photo_tmp_name, "upload/" . $photo_new_name);
                move_uploaded_file($song_tmp_name, "songs/" . $song_new_name);
            }else {
                echo "<script>alert('something went wrong while updating your profile');</script>";
            }
        }
    }else {
        echo "<script>alert('Password does not match');</script>"; 
    }
}


$sql = "SELECT * from `users` where `Id`='{$_SESSION["code"]}'";
$result=$db->query($sql);
if (mysqli_num_rows($result)>0) {
    while ($row=$result->fetch_assoc()) {
        ?>
        <div id="header">
        <div class="web-icon">
            <img src="img/icons/web-icon.png" alt="web-icon"></div>
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
        </div>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index1.php">HOME</a></li>
            <li><a href="profile1.php">PROFILE</a></li>
            <li><a href="plan1.php">PROJECTS</a></li>
            <li><a href="course1.php">COURSES</a></li>
            <li><a href="popup1.php">NOTIFICATIONS</a></li>
        </ul>
    </div>
    <div id="container-for-update">
    <div class="login-container-update">
        <form action="" method="post" enctype="multipart/form-data">
         <h2>Edit Your Profile</h2>
         <div class="form1">
         <div class="input-div ">
             <input type="text" name="Fullname" id="input" value="<?php echo $row['Fullname'] ?>" placeholder="Fullname" >
         </div>
         <div class="input-div">
             <input type="text" name="Username" id="input" value="<?php echo $row['Username'] ?>" placeholder="Username">
         </div>
         <div class="input-div">
             <input type="text" name="e-mail" id="input" value="<?php echo $row['e-mail'] ?>" placeholder="example@gmail.com" >
         </div>
         <div class="input-div">
             <input type="password" name="Password" id="input" value="<?php echo $row['password'] ?>"placeholder="Password">
         </div>
         <div class="input-div ">
             <input type="password" name="re-Password" id="input" value="<?php echo $row['password'] ?>" placeholder="Confirm Password">
         </div>
        </div>
        <div class="form2">
        <div class="input-div ">
            <label for="photo">Profile Picture</label>
             <input type="file" name="photo" accept="image/*" id="photo" value="<?php echo $row['photo'] ?>">
         </div>
         <div class="canvas">
                 <?php
                 if ($row['photo'] === 'no photo yet') {
                     ?>
                     <img src="img/avatar (1).svg" alt="profile photo" width="150px" >
                     <?php
                 }else{
                 ?>
                 <img src="upload/<?php echo $row['photo'] ?>" width="150px" alt="profile photo">
                 <?php } ?>
         </div>
         <div class="input-div ">
            <label for="song">Your lovely song please</label>
             <input type="file" name="song" accept="audio/*" id="song">
         </div>
        </div>
        <div class="subm">
        <input type="submit" class="btn" value="Confirm Updates" name="edit">
        </div>
    </form>
   
        </div>
    </div>
        </div>
        <?php
    }
}
?>
</body>
</html>
<style>
#header{
   position: fixed; 
   width: 100%;
   height: 100px;

}
.web-icon{
    margin-top: 10px;
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
        margin-top: 15%;
        width: 20%px; 
    }
    .img2{
        margin-top: 50px;
        margin-left: 40px; 
        visibility: hidden;
    }
    .menu ul{
        margin-left: 40px;
    }
    .menu li{
        list-style: none;
        margin-top: 50px;
        transform: Uppercase;
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
    #container-for-update{
        float: right;
        width: 80%;
        text-align: center;
        align-items: center;
    }
    .login-container-update{
        width: 100%;
    }
    form {
    width: 80%;
    margin-left: 55px;
    margin-top: 13%;
    }
    .form1{
        width: 300px;
        position: absolute;
    }
    .form2{
        width: 300px;
        float: right;
        margin-left: 80px;
    }
    label{
        color: #999;
        font-size: 20px;
    }

    .content{
        float: right;
        width: 80%;
        margin-top: 100px;
        text-align: center;
        align-items: center;
    }
    .news{
        width: 100%;
        height: auto;
        padding: 10px 0;
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
    @media screen and (max-width: 815px) {
        .menu ul{
            visibility: hidden;
        }
        .img2{
            visibility: visible;
        }
    }
    @media screen and (max-width: 911px) {
        .form1{
          width: 300px;
          position: relative;
       }
       .form2{
          width: 300px;
          
       }
       form {
        width: 60%;
        margin-left: 55px;
        margin-top: 70px;
       }
    }
    @media screen and (max-width: 300px) {
        .form2{
            margin-left: 300px;
            
        }
    }
    .footer{}

    </style>
<script src="script/main"></script>