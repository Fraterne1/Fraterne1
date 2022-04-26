<?php
$db= mysqli_connect('127.0.0.1', 'root', '', '2getherWITH');

        if(isset($_POST['edit'])){
            $Profile_img = $db->real_escape_string($_POST['row']);
            $Surname = $db->real_escape_string($_POST['Username']);

            $update = "UPDATE `users` SET `Profile_img`='{$Profile_img}', `Username`='{$Surname}' WHERE Id=56";

            $db->query($update);
        }


