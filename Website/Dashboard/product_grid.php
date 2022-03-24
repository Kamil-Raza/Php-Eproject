<?php
session_start();
if(isset($_SESSION['userid'])){





?>

<?php  include("partials/header.php") ?>
<?php 
include("config/db.php"); 

$products = $con->query("SELECT * FROM `products`");
foreach($products as $prod){
?>
<div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-arrival-product">
                                    <div class="new-arrivals-img-contnent">
                                        <a href="ecom-product-detail.html"><img class="img-fluid" src="uploads/<?php  echo $prod['mediaid'] ?>" alt=""></a>
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4><a href="ecom-product-detail.html" class="text-black"><?php echo $prod['productname'] ?></a></h4>
                                        <ul class="star-rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                        </ul>
                                        <span class="price"><?php echo $prod['sellingprice'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
 <?php } ?>
<?php  include("partials/footer.php") ?>
<?php

}
else{
    header("location:login.php");
}

?>