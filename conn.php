<?php

$db= mysqli_connect('127.0.0.1', 'root', '', '2getherWITH');

if(isset($_POST['upload'])){
    $Upload = mysqli_real_escape_string($db, $_FILES['upload']);
   

    $query = "INSERT INTO `uploads`(`Id`, `upload`, `date`) VALUES ('Id','$Upload','date')";
     
    mysqli_query($db, $query);
}
