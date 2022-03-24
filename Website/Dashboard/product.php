<?php
session_start();
if(isset($_SESSION['userid'])){




?>

<?php  include("partials/header.php") ?>

<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="mr-auto d-lg-block">
						<a href="add_product.php" class="btn btn-primary btn-rounded">+ Add New</a>
					</div>
					<div class="input-group search-area ml-auto d-inline-flex mr-2">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
						</div>
					</div>
					<a href="javascript:void(0);" class="settings-icon"><i class="flaticon-381-settings-2 mr-0"></i></a>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive">
							<table id="example5" class="table shadow-hover  table-bordered mb-4 dataTablesCard fs-14">
								<thead>
									<tr>
										<th>
											<div class="checkbox align-self-center">
												<div class="custom-control custom-checkbox ">
													<input type="checkbox" class="custom-control-input" id="checkAll" required="">
													<label class="custom-control-label" for="checkAll"></label>
												</div>
											</div>
										</th>
										<th>ID</th>
										<th>Product Name</th>
										<th>Category</th>
										<th>Quantity</th>
										<th>Buying Price</th>
										<th>Selling Price</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
<?php 
include("config/db.php"); 

$products = $con->query("SELECT * FROM `products`");
foreach($products as $prod){
?>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="checkbox text-right align-self-center">
													<div class="custom-control custom-checkbox ">
														<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</div>
												
												<img alt="" src="uploads/<?php  echo $prod['mediaid'] ?>" height="43" width="43" class="rounded-circle ml-4">
												
											</div>
										</td>
										<td><?php echo $prod['id'] ?></td>
										<td><?php echo $prod['productname'] ?></td>
										
										<td><?php echo $prod['categoryid'] ?></td>
										
										<td><?php echo $prod['quantity'] ?></td>
										<td><?php echo $prod['buyingprice'] ?></td>
										<td><span class="font-w500"><?php echo $prod['sellingprice'] ?></span></td>
										<td>
											<div class="d-flex align-items-center">
												<span class="text-light font-w600">Unavailable</span>
												<div class="dropdown ml-auto text-right">
													<div class="btn-link" data-toggle="dropdown" >
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="edit_product.php?id=<?php echo $prod['id'] ?>">Edit</a>
														<a class="dropdown-item" href="delete_product.php?id=<?php echo $prod['id'] ?>">Delete</a>
													</div>
												</div>
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

<?php  include("partials/footer.php") ?>
<?php

}
else{
    header("location:login.php");
}

?>