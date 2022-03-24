
<?php


session_start();
if(isset($_SESSION['userid'])){





?>
<?php include("config/db.php"); 
$products = $con->query("SELECT * FROM `products`");
$categories = $con->query("SELECT * FROM `categories`");
$media = $con->query("SELECT * FROM `media`");

?>
<?php  include("partials/header.php") ?>


<div class="content-body">        
<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
    
  </div>
</div>
  <div class="row">
  <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Add New Product</span>
         </strong>
        </div>
        <?php foreach($products as $prod){ ?>
        <div class="panel-body">
         <div class="col-md-12">
          <form method="post" action="files/update_product.php?id=<?php echo $prod['id'] ?>" class="clearfix" enctype="multipart/form-data" >
          
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"></i>
                  </span>
                  <input type="text" class="form-control" name="productname" placeholder="Product Title" value="<?php echo $prod['productname'] ?>">
               </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <select class="form-control" name="categoryid">
                    <option value=""> Select a categorie</option>
                   <?php  foreach ($categories as $cat): ?>
                     <option value="<?php echo (int)$cat['id']; ?>" <?php if($prod['categoryid'] === $cat['id']): echo "selected"; endif; ?> >
                       <?php echo ($cat['name']); ?></option>
                   <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-6">
                  <input type="file" class="form-control" name="image" >
                  </div>
                </div>
              </div>

              <div class="form-group">
               <div class="row">
                 <div class="col-md-4">
                   <div class="input-group">
                     <span class="input-group-addon">
                      <i class="glyphicon glyphicon-shopping-cart"></i>
                     </span>
                     <input type="number" class="form-control" name="productquantity"  value="<?php echo $prod['quantity'] ?>">
                  </div>
                 </div>
                 <div class="col-md-4">
                   <div class="input-group">
                     <span class="input-group-addon">
                       <i class="glyphicon glyphicon-usd"></i>
                     </span>
                     <input type="number" class="form-control" name="buyingprice" value="<?php echo $prod['buyingprice'] ?>">
                     <span class="input-group-addon">.00</span>
                  </div>
                 </div>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-usd"></i>
                      </span>
                      <input type="number" class="form-control" name="sellingprice" value="<?php echo $prod['sellingprice'] ?>">
                      <span class="input-group-addon">.00</span>
                   </div>
                  </div>
               </div>
              </div>
              <?php } ?>
              <input type="submit" name="edit_prod" class="btn btn-primary btn-rounded" value="Add Product">
          </form>
         </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <?php  include("partials/footer.php") ?>
  <?php

}
else{
    header("location:login.php");
}

?>