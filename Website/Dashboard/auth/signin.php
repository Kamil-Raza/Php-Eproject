<?php

include("../config/db.php");
session_start();


if(isset($_POST['submit'])){

	$username=$_POST['user_name'];
	$password=sha1($_POST['password']); 

    $user = $con->query("SELECT * FROM `user` WHERE `user_name`='$username'");

    $checkemail = mysqli_num_rows($user);

    if($checkemail > 0)
    {
    
        $userdata = mysqli_fetch_array($user);

        if($pass===$userdata['pass']){

            $_SESSION['username'] = $userdata['user_name'];
            $_SESSION['userid'] = $userdata['id'];

            header("location:../index.php");

        }
        
        else{

           header("location:../login.php?");
        }
        


    }
    else{
        
        header("location:../login.php?msg=invalidemail");
    }
        



}



?>