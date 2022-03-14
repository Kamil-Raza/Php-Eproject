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
            <span>Add New Categorie</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="categorie.php">
            <div class="form-group">
                <input type="text" class="form-control" name="categorie-name" placeholder="Categorie Name">
            </div>
            <button type="submit" name="add_cat" class="btn btn-primary">Add categorie</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>All Categories</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Categories</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
            </thead>
            <tbody>
              
                <tr>
                    <td class="text-center"></td>
                    <td></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="edit_categorie.php?id="  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="delete_categorie.php?id="  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
                          <span class="glyphicon glyphicon-trash"></span>
                        </a>
                      </div>
                    </td>

                </tr>
              
            </tbody>
          </table>
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