<?php
include("config/db.php") ;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $delete = $con->query("DELETE FROM `products` WHERE `id`='$id'");
    
    if($delete){
        header("location:product.php");
    }
}


?>