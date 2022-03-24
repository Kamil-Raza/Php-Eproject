<?php

include("../config/db.php");


if(isset($_POST['edit_cat'])){






  $productname = $_POST['productname'];
  $categoryid = $_POST['categoryid'];
  $mediaid = $_POST['mediaid'];
  $productquantity = $_POST['productquantity'];
  $buyingprice = $_POST['buyingprice'];
  $sellingprice = $_POST['sellingprice'];
    

    $insert = $con->query("UPDATE `categories` SET `name`='$categoryname' WHERE `id`='$id' ");

        if($insert){
            header("location:../categories.php");
        }





}


?>