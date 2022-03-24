<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>TSS - Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
	<link href="./assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="./index.php" class="brand-logo">
                <!-- <img class="logo-abbr" src="./assets/images/logo.png" alt=""> -->
                <img class="logo-compact" src="./assets/images/logo2.png" alt="">
                <img class="brand-title" src="./assets/images/logo2.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:;" role="button" data-toggle="dropdown">
                                    <img src="assets/images/profile/12.png" width="20" alt=""/>
									<div class="header-info">
										<span>Hello,<strong> Admin</strong></span>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    
                                    <a href="./logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

          <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="./index.php">Dashboard</a></li>
							<li><a  class="has-arrow" href="javascript:void()" aria-expanded="false">Products</a>
                                <ul aria-expanded="false">
                                    <li><a href="./product.php">All Products</a></li>
									<li><a href="./add_product.php">Add Product</a></li>
                                </ul>
                            </li>
                            <li><a href="./categories.php" class="has-arrow" href="javascript:void()" aria-expanded="false">Categories</a>
                                <ul aria-expanded="false">
                                    <li><a href="./categories.php">All Categories</a></li>
                                </ul>
                            </li>
							<li><a href="customers.php">Review</a></li>
                    
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="./product_grid.php">Product Grid</a></li>
									
									<li><a href="./order_list.php">Order</a></li>
									
									<li><a href="./customers.php">Customers</a></li>
                                </ul>
                            </li>
							<li><a href="./media.php">Media</a></li>
                        </ul>
                    </li>
                    
                </ul>
            
				
				<div class="copyright">
					<p class="fs-14 font-w200"><strong class="font-w400">Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <i class="fa fa-heart"></i> by FN154</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->