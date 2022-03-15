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
          <form method="post" action="files/insert_category.php">
            <div class="form-group">
                <input type="name"name="categoryname"  class="form-control"  placeholder="Categorie Name">
            </div>
            <input type="submit" name="cat" class="btn btn-primary" value="add category">
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
<?php include("config/db.php"); 

$fetch = $con->query("SELECT * FROM `categories`");
foreach($fetch as $row){
?>
              
                <tr>
                    <td class="text-center"><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="edit_category.php?id=<?php echo $row['id'] ?>"  class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="delete_category.php?id=<?php echo $row['id'] ?>"  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
                          <span class="glyphicon glyphicon-trash"></span>
                        </a>
                      </div>
                    </td>

                </tr>
<?php } ?>
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