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
<?php
session_start();

require_once "connection.php";


$sql = "SELECT * from users where `Id`='{$_SESSION["code"]}'";
$result = $db->query($sql);
if (mysqli_num_rows($result) > 0) {
    while ($row=$result->fetch_assoc()) {
        ?>
        <body>
        <section>
    <div id="container">
        <p>2getherWITH Create Account</p>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-cont">
        <input type="text" name="Fullname" placeholder="Surname..." required value="<?php echo $row['Fullname'] ?>">
        </div>
        <div class="form-cont">
        <input type="text" name="Username" placeholder="Username..." required value="<?php echo $row['Username'] ?>">
        </div>
        <div class="form-cont">
        <input type="email" name="email" placeholder="Email..." required disabled value="<?php echo $row['e-mail'] ?>">
        </div>
        <div class="form-cont">
        <input type="password" name="Password" id="password" placeholder="Password..." required onkeyup="validatePassword(this.value);"  >
        <div id="msg"></div>
        </div>
        <div class="form-cont">
        <input type="password" name="rePassword" id="retype_password" placeholder="Password..." required >
        <div id="msg"></div>
        </div>
        <div>
            <label for="photo">Photo</label>
        <input type="file" name="photo" id="photo" >
        </div>
        <div class="subm">
        <input type="submit" value="submite" name="save">
        </div>
    </form>
    </div>
    </section>
    </body>
        <?php
    }
}else {
    echo "<script>alert('there is no data to edit')";
}


if(isset($_POST['save'])){
    $Fullname = mysqli_real_escape_string($db, $_POST['Surname']);
    $Username = mysqli_real_escape_string($db, $_POST['Username']);
    $email = mysqli_real_escape_string($db, $_POST['e-mail']);
    $password = mysqli_real_escape_string($db, md5($_POST['Password']));
    $repassword = mysqli_real_escape_string($db, md5($_POST['rePassword']));

    if ($password === $repassword) {
            $photo_name = $_FILES['photo']['name'];
            $photo_tmp_name = $_FILES['photo']['tmp_name'];
            $photo_type = $_FILES['photo']['type'];
            $photo_size = $_FILES['photo']['size'];
            $photo_new_name = rand() . $photo_name;

            if ($photo_size >10000000) {
                echo "<script>alert('file size is too big, maximum size is 10MB')";
            }else{
                $sql ="UPDATE `users` SET `Id`=Id,`photo`='$photo_new_name',`Surname`='$Surname',`Firstname`='$Lastname',`Username`='$Username',`e-mail`='$email',`password`='$password' WHERE `Id` = 56";
                mysqli_query($db, $sql);
                move_uploaded_file($photo_tmp_name, "upload/" . $photo_new_name);
            }
        }
    }else {
        echo "<script>alert('Password does not match, please try again')</script> ";
    }

?>  
    
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
<script>
            function validatePassword(password) {
                
                // Do not show anything when the length of password is zero.
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "Very Weak";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium";
                        color = "orange";




                        break;
                    case 4:
                        strength = "Strong";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
            }

            
        </script>

</html>