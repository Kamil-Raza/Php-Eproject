<?php  include("partials/header.php") ?>

        <!-- Begin Hiraola's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Shop</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->

        <!-- Begin Hiraola's Content Wrapper Area -->
        <div class="hiraola-content_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="hiraola-sidebar-catagories_area">
                            <div class="hiraola-sidebar_categories">
                                <div class="hiraola-categories_title">
                                    <h5>Price</h5>
                                </div>
                                <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <label>price : </label>
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                        <!-- <button type="button">Filter</button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="hiraola-sidebar_categories">
                                <div class="hiraola-categories_title">
                                    <h5>Brand</h5>
                                </div>
                                <ul class="sidebar-checkbox_list">
                                    <li>
                                        <a href="javascript:void(0)">Brand 1(15)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Brand 2(16)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Brand 3(16)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Brand 4(17)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hiraola-sidebar_categories">
                                <div class="hiraola-categories_title">
                                    <h5>Size</h5>
                                </div>
                                <ul class="sidebar-checkbox_list">
                                    <li>
                                        <a href="javascript:void(0)">Size 1(17)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Size 2(16)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Size 3(17)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Size 4(17)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hiraola-sidebar_categories">
                                <div class="hiraola-categories_title">
                                    <h5>Weight</h5>
                                </div>
                                <ul class="sidebar-checkbox_list">
                                    <li>
                                        <a href="javascript:void(0)">Weight 1(16)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Weight 2(17)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Weight 3(17)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Weight 4(17)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="category-module hiraola-sidebar_categories">
                                <div class="category-module_heading">
                                    <h5>Categories</h5>
                                </div>
                                <div class="module-body">
                                    <ul class="module-list_item">
                                        <li>
                                            <a href="javascript:void(0)">Hand Harness (18)</a>
                                            <ul class="module-sub-list_item">
                                                <li>
                                                    <a href="javascript:void(0)">Maang Tika (18)</a>
                                                    <a href="javascript:void(0)">Toe Rings (18)</a>
                                                    <a href="javascript:void(0)">Traditional Earrings (18)</a>
                                                    <a href="javascript:void(0)">Kada Cum Bracelet (18)</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Exquisite Rings (18)</a>
                                            <a href="javascript:void(0)">Necklaces (18)</a>
                                            <a href="javascript:void(0)">Foot Harness (18)</a>
                                            <a href="javascript:void(0)">Braid Jewels (18)</a>
                                            <a href="javascript:void(0)">Anklet (18)</a>
                                            <a href="javascript:void(0)">Graceful Armlet (18)</a>
                                            <a href="javascript:void(0)">Magna Pellentesq (18)</a>
                                            <a href="javascript:void(0)">Molestie Tortor (18)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-banner_area">
                            <div class="banner-item img-hover_effect">
                                <a href="javascript:void(0)">
                                    <img src="" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="shop-toolbar">
                            <div class="product-view-mode">
                                <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                                <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                            </div>
                            <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">Short By:</label>
                                    <select class="nice-select">
                                        <option value="1">Relevance</option>
                                        <option value="2">Price, low to high</option>
                                        <option value="3">Price, high to low</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
<?php 
include("config/db.php"); 

$products = $con->query("SELECT * FROM `products`");
foreach($products as $prod){
?>
                        <div class="shop-product-wrap grid gridview-3 row">
                            <div class="col-lg-4">
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="dashboard/uploads/<?php  echo $prod['mediaid'] ?>" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="dashboard/uploads/<?php  echo $prod['mediaid'] ?>" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html"><?php echo $prod['productname'] ?></a></h6>
                                                <div class="price-box">
                                                    <span class="new-price"><?php echo $prod['sellingprice'] ?></span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-slide_item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="uploads/<?php  echo $prod['mediaid'] ?>" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="uploads/<?php  echo $prod['mediaid'] ?>" alt="Hiraola's Product Image">
                                            </a>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.php"></a><?php echo $prod['productname'] ?></h6>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price"><?php echo $prod['sellingprice'] ?></span>
                                                </div>
                                                <div class="product-short_desc">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                                    <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                        class="ion-android-favorite-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php } ?>	
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hiraola-paginatoin-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <ul class="hiraola-pagination-box">
                                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                                <li><a href="javascript:void(0)">2</a></li>
                                                <li><a href="javascript:void(0)">3</a></li>
                                                <li><a class="Next" href="javascript:void(0)"><i
                                                    class="ion-ios-arrow-right"></i></a></li>
                                                <li><a class="Next" href="javascript:void(0)">>|</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-select-box">
                                                <div class="product-short">
                                                    <p>Showing 1 to 12 of 18 (2 Pages)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
           
</br>
</br>
</br>
</br>

       
        <?php  include("partials/footer.php") ?>