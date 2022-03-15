<?php
session_start();
if(isset($_SESSION['userid'])){




?>
<?php
include("config/db.php") ;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $fetch = $con->query("SELECT * FROM `categories` WHERE `id`='$id'");
    $data = mysqli_fetch_array($fetch);   
 

}

?>
<?php  include("partials/header.php") ?>

<div class="content-body">
            <!-- row -->
			<div class="container-fluid">



<div class="row">
   <div class="col-md-12">
     
   </div>
   <div class="col-md-5">
     <div class="panel panel-default">
       <div class="panel-heading">
         <strong>
           <span class="glyphicon glyphicon-th"></span>
           <span>Editing </span>
        </strong>
       </div>
       <div class="panel-body">
         <form method="post" action="files/update_category.php?id=<?php echo $data['id'] ?>">
           <div class="form-group">
               <input type="name" class="form-control" name="categoryname" value="<?php echo $data['name'] ?>">
           </div>
           <input type="submit" name="edit_cat" class="btn btn-primary" value="edit category">
       </form>
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