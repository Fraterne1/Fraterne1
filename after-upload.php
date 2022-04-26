<?php
ini_set('upload_max_filesize', '20971520000');
ini_set('post_max_file', '20971520000');

session_start();
require_once "connection.php";
if ($_FILES['file']['type']=== 'video/mp4' || $_FILES['file']['type']=== 'video/mpg' || $_FILES['file']['type']=== 'video/mkv' || $_FILES['file']['type']=== 'video/mov' || $_FILES['file']['type']=== 'video/aiv') {

    if(isset($_POST['upload'])){
        $content = mysqli_real_escape_string($db, $_POST['Content']);
        
    
         $file_name = $_FILES['file']['name'];
         $file_tmp_name = $_FILES['file']['tmp_name'];
         $file_type = $_FILES['file']['type'];
         $file_size = $_FILES['file']['size'];
         $file = explode('.', $file_name);
         $end = "mp4";
         $file_new_name = $content."." .$end;
         
         
    
         if ($file_size > 209715200) {
             echo "<script>alert('your video is large to go on this website');</script>";
         }else{
            $querly3 = "SELECT * FROM users where `Id`='{$_SESSION["code"]}'";
            $result3 = $db->query($querly3);
            if (mysqli_num_rows($result3) > 0) {
                while ($row3 = $result3->fetch_assoc()) {
                    $file_name = $_FILES['file']['name'];
                    $file_tmp_name = $_FILES['file']['tmp_name'];
                    $file_type = $_FILES['file']['type'];
                    $file_size = $_FILES['file']['size'];
                    $file = explode('.', $file_name);
                    $end = end($file);
                    $file_new_name = $content."." .$end;

                    $sql2 = "INSERT INTO `videos` VALUES (Id,'{$_SESSION["code"]}','{$row3['photo']}','{$row3['Username']}','$content','$file_new_name',Now())";
                    $result = mysqli_query($db, $sql2);
                    if ($result) {
                        move_uploaded_file($file_tmp_name, "uploaded_video/" .$file_new_name);
                        echo "<script>alert('your File uploaded successfylly');</script>";
                        echo "<script>window.location = 'index1.php'</script>";
                    }
                }
            }
            
        }
       
    } 
}elseif ($_FILES['file']['type']=== 'image/jpeg' || $_FILES['file']['type']=== 'image/jpg' || $_FILES['file']['type']=== 'image/png' || $_FILES['file']['type']=== 'image/svg') {
    if(isset($_POST['upload'])){
        $content = mysqli_real_escape_string($db, $_POST['Content']);
        
    
         $file_name = $_FILES['file']['name'];
         $file_tmp_name = $_FILES['file']['tmp_name'];
         $file_type = $_FILES['file']['type'];
         $file_size = $_FILES['file']['size'];
         $file = explode('.', $file_name);
         $end = "png";
         $file_new_name = $content."." .$end;
         
         
    
         if ($file_size > 209715200) {
             echo "<script>alert('your video is large to go on this website');</script>";
         }else{
            $querly3 = "SELECT * FROM users where `Id`='{$_SESSION["code"]}'";
            $result3 = $db->query($querly3);
            if (mysqli_num_rows($result3) > 0) {
                while ($row3 = $result3->fetch_assoc()) {
                    $file_name = $_FILES['file']['name'];
                    $file_tmp_name = $_FILES['file']['tmp_name'];
                    $file_type = $_FILES['file']['type'];
                    $file_size = $_FILES['file']['size'];
                    $file = explode('.', $file_name);
                    $end = end($file);
                    $file_new_name = $content."." .$end;

                    $sql2 = "INSERT INTO `news` VALUES (Id,'{$_SESSION["code"]}','{$row3['photo']}','{$row3['Username']}','$content','$file_new_name',Now())";
                    $result = mysqli_query($db, $sql2);
                    if ($result) {
                        move_uploaded_file($file_tmp_name, "uploaded_photos/" .$file_new_name);
                        echo "<script>alert('your File uploaded successfylly');</script>";
                        echo "<script>window.location = 'index1.php'</script>";
                    }
                }
            }
            
        }
       
    } 
}
?>