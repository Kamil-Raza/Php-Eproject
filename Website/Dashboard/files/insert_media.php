<?php

include("../config/db.php");


if(isset($_POST['media'])){






   $picture_name=$_FILES['image']['name'];
    $picture=$_FILES['image']['tmp_name'];
    $targetfile="../uploads/$picture_name";
    move_uploaded_file($picture,$targetfile);


  

  $insert = $con->query("INSERT INTO `media`( `file_name`) VALUES ('$picture_name')");

  if($insert){
    header("location:../media.php");
   
  }
         







}


?>