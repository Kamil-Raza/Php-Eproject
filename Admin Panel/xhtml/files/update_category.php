<?php

include("../config/db.php");


if(isset($_POST['edit_cat'])){






    $categoryname = $_POST['categoryname'];
    

    $insert = $con->query("UPDATE `categories` SET `name`='$categoryname' WHERE `id`='$id' ");

        if($insert){
            header("location:../categories.php");
        }





}


?>