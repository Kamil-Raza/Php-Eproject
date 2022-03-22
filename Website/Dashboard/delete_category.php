<?php
include("config/db.php") ;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $delete = $con->query("DELETE FROM `categories` WHERE `id`='$id'");
    
    if($delete){
        header("location:categories.php");
    }
}


?>