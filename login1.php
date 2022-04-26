<?php
require_once "connection.php";
session_start();

if(isset($_POST['save'])){
    $Fullname = mysqli_real_escape_string($db, $_POST['Fullname']);
    $Username = mysqli_real_escape_string($db, $_POST['Username']);
    $email = mysqli_real_escape_string($db, $_POST['e-mail']);
    $password = mysqli_real_escape_string($db, md5($_POST['Password']));
    $repassword = mysqli_real_escape_string($db, md5($_POST['re-Password']));

    if ($password === $repassword) {
        $sql ="INSERT INTO `users`(`Id`, `photo`, `Fullname`, `Username`, `e-mail`, `password`, `song`, `notifications`) VALUES (Id,'no photo yet','$Fullname','$Username','$email','$password','no song','account created succeccfully')";
        mysqli_query($db, $sql);
        $sql1 = "SELECT `Id` from `users` where `e-mail` = '{$email}'";
        $result = $db->query($sql1);
        if (mysqli_num_rows($result) > 0) {
            while ($row= $result->fetch_assoc()) {
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
             
             <input type="text" name="code" id="input" value="Delete me, you will use <?php echo $row['Id'] ?> as your code" placeholder="Code" required>
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
                                <?php
                            }
                        }
                    
        }else {
            echo "<script>alert('Password do not match');</script>";
        }
        
    }

?>
