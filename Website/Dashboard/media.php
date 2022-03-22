<?php
session_start();
if(isset($_SESSION['userid'])){





?>

<?php  include("partials/header.php") ?>

<div class="content-body">
            <!-- row -->
			<div class="container-fluid">




<div class="row">
        <div class="col-md-6">
          
        </div>

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <span class="glyphicon glyphicon-camera"></span>
            <span>All Photos</span>
            <div class="pull-right">
              <form class="form-inline" action="media.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-btn">
                    <input type="file" name="file_upload" multiple="multiple" class="btn btn-primary btn-file"/>
                 </span>

                 <button type="submit" name="submit" class="btn btn-default">Upload</button>
               </div>
              </div>
             </form>
            </div>
          </div>
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center" style="width: 50px;">#</th>
                  <th class="text-center">Photo</th>
                  <th class="text-center">Photo Name</th>
                  <th class="text-center" style="width: 20%;">Photo Type</th>
                  <th class="text-center" style="width: 50px;">Actions</th>
                </tr>
              </thead>
                <tbody>
                
                <tr class="list-inline">
                 <td class="text-center"></td>
                  <td class="text-center">
                      <img src="uploads/products/" class="img-thumbnail" />
                  </td>
                <td class="text-center">
                  
                </td>
                <td class="text-center">
                  
                </td>
                <td class="text-center">
                  <a href="delete_media.php?id=" class="btn btn-danger btn-xs"  title="Edit">
                    <span class="glyphicon glyphicon-trash"></span>
                  </a>
                </td>
               </tr>
             
            </tbody>
          </div>
        </div>
      </div>
</div></div>
<?php  include("partials/footer.php") ?>
<?php

}
else{
    header("location:login.php");
}

?>



