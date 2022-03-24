<?php

include("../config/db.php");


if(isset($_POST['edit_prod'])){






    $productname = $_POST['productname'];
    $categoryid = $_POST['categoryid'];
    $mediaid = $_POST['mediaid'];
    $productquantity = $_POST['productquantity'];
    $buyingprice = $_POST['buyingprice'];
    $sellingprice = $_POST['sellingprice'];
    

    $insert = $con->query("UPDATE `products` SET `productname`='$productname',`categoryid`='$categoryid',
    `mediaid`='$mediaid',`quantity`='$productquantity',`buyingprice`='$buyingprice',`sellingprice`='$sellingprice' WHERE `id` = '$id'");

        if($insert){
            header("location:../product.php");
        }





}


?>