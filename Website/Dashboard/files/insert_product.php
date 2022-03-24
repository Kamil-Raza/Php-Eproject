<?php

include("../config/db.php");


if(isset($_POST['add_product'])){





  $picture_name=$_FILES['image']['name'];
  $picture=$_FILES['image']['tmp_name'];
  $targetfile="../uploads/$picture_name";
  move_uploaded_file($picture,$targetfile);

  $productname = $_POST['productname'];
  $categoryid = $_POST['categoryid'];
  
  $productquantity = $_POST['productquantity'];
  $buyingprice = $_POST['buyingprice'];
  $sellingprice = $_POST['sellingprice'];
  

  $insert = $con->query("INSERT INTO `products`( `productname`, `categoryid`, `mediaid`, `quantity`, `buyingprice`, `sellingprice`) VALUES ('[$productname','$categoryid','$picture_name','$productquantity','$buyingprice','$sellingprice')");

  if($insert){
    header("location:../product.php");
   
  }
         







}


?>