<?php

include("../config/db.php");


if(isset($_POST['cat'])){






    $categoryname = $_POST['categoryname'];
    

    $insert = $con->query("INSERT INTO `categories`(`name`) VALUES ('$categoryname')");

if($insert){
    header("location:../categories.php");
}





}


?>