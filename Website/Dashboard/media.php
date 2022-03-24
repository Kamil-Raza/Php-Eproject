<?php
session_start();
if(isset($_SESSION['userid'])){




?>
<?php  include("partials/header.php") ?>

<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
			<div class="row">
     <div class="col-md-12">
       
     </div>
  </div>
   <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Add Media</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="files/insert_media.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="image"  class="form-control"  placeholder="Categorie Name">
            </div>
            <input type="submit" name="media" class="btn btn-primary" value="add Media">
        </form>
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