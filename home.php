<?php

include "connection.php";

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | DRodX Store</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />

</head>

<body class="">

    <div class="container-fluid home  ">
        <div class="row">

            <?php include "header.php"; ?>

            <hr />

            <div class="col-12 justify-content-center">
                <div class="row mb-2">

                    <div class="offset-0 offset-lg-0 col-3 col-lg-2 logo" style="height: 60px;"></div>

                    <div class="col-12 col-lg-6">

                        <div class="input-group mt-3 mb-3">
                            <!-- <input type="text" class="form-control" aria-label="Text input with dropdown button" id="basic_search_txt"> -->

                            <select class="form-select offset-5" style="max-width: 250px;" id="basic_search_select">
                                <option value="0">All Categories</option>
                                <?php

                                $category_rs = Database::search("SELECT * FROM `category`");
                                $category_num = $category_rs->num_rows;

                                for ($x = 0; $x < $category_num; $x++) {
                                    $category_data = $category_rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo $category_data["cat_id"]; ?>">
                                        <?php echo $category_data["cat_name"]; ?>
                                    </option>
                                <?php
                                }

                                ?>
                            </select>

                        </div>

                    </div>

                    <div class="col-12 col-lg-2 d-grid">
                        <button class="btn btn-outline-success mt-3 mb-3" onclick="basicSearch(0);">Search</button>
                    </div>
<!-- 
                    <div class="col-12 col-lg-2 mt-2 mt-lg-4 text-center text-lg-start">
                        <a href="advancedSearch.php" class="text-decoration-none link-secondary fw-bold">Advanced</a>
                    </div> -->

                </div>
            </div>

            <hr />

            <div class="col-12" id="basicSearchResult">
                <div class="row">
   <!-- Carousel -->
   <div class="promo-area">
                        <div class="zigzag-bottom"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-promo promo1">
                                        <i class="fa fa-refresh"></i>
                                        <p>30 Days return</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-promo promo2">
                                        <i class="fa fa-truck"></i>
                                        <p>Free shipping</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-promo promo3">
                                        <i class="fa fa-lock"></i>
                                        <p>Secure payments</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-promo promo4">
                                        <i class="fa fa-gift"></i>
                                        <p>New products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End promo area -->
                    <!-- Carousel -->

                    <div class="col-12 d-none d-lg-block mb-4">
                        <div class="row">

                            <div id="carouselExampleIndicators" class="offset-3 col-6 carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                   
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="resource/slider_images/posterimg.jpg" class=" img-thumbnail poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption">
                                            <h5 class="poster-title">Welcome to DRodX Store</h5>
                                            <p class="text-info">The World's Best Online Store By One Click.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resource/slider_images/posterimg2.jpg" class=" img-thumbnail poster-img-1" />
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <img src="resource/slider_images/posterimg3.jpg" class="d-block img-thumbnail poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption-1">
                                            <h5 class="poster-title">Be Free.....</h5>
                                            <p class="text-info">Experience the Lowest Delivery Costs With Us.</p>
                                        </div>
                                    </div>
                                   
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                    </div>

                 
                    <?php
                    $category_rs2 = Database::search("SELECT * FROM `category`");
                    $category_num2 = $category_rs2->num_rows;

                    for ($y = 0; $y < $category_num2; $y++) {
                        $category_data2 = $category_rs2->fetch_assoc();
                    ?>
                        <!-- Category Name -->
                        <div class="row mt-2 mb-2 btn-secondary text-center">
                            <div class="col-12 ">
                                <a href="#" class="text-decoration-none text-dark fs-3 fw-bold text-center">
                                    <?php echo $category_data2["cat_name"]; ?>
                                </a> &nbsp;&nbsp;
                                <a href="#" class="text-decoration-none text-dark fs-6"></a>
                            </div>
                        </div>
                        <!-- Category Name -->


                        <!-- products -->

                        <div class="col-12 mb-3">
                            <div class="row border border-primary">

                                <div class="col-12">
                                    <div class="row justify-content-center gap-2 ">

                                        <?php

                                        $product_rs = Database::search("SELECT * FROM `product` WHERE `category_cat_id`='" . $category_data2["cat_id"] . "' 
                                    AND `status_status_id`='1' ORDER BY `datetime_added` DESC LIMIT 4 OFFSET 0");

                                        $product_num = $product_rs->num_rows;

                                        for ($z = 0; $z < $product_num; $z++) {
                                            $product_data = $product_rs->fetch_assoc();
                                        ?>

                                            <div class=" card col-6 col-lg-2 mt- mb-2 " style="width: 18rem;">

                                                <?php
                                                $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $product_data["id"] . "'");
                                                $img_data = $img_rs->fetch_assoc();
                                                ?>


                                                <div class=" single-product ">
                                                    <div class="product-f-image">

                                                        <img src="<?php echo $img_data["img_path"]; ?>" class="card-img-top img-thumbnail mt-2 " style="height: 180px;" />
                                                        <div class="product-hover ">

                                                            <a href='<?php echo "singleProductView.php?id=" . ($product_data["id"]); ?>' class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="card-body ms-0 m-0 text-center ">
                                                    <h5 class="card-title fw-bold fs-6"><?php echo $product_data["title"]; ?></h5>
                                                    <span class="badge rounded-pill text-bg-primary">New</span><br />
                                                    <span class="card-text fw-bold">Rs. <?php echo $product_data["price"]; ?> .00</span><br />

                                                    <?php
                                                    if ($product_data["qty"] > 0) {

                                                    ?>
                                                        <span class="card-text  fw-bold">In Stock</span><br />
                                                        <span class="card-text  fw-bold"><?php echo $product_data["qty"]; ?> Items Available</span><br /><br />
                                                        <a href='<?php echo "singleProductView.php?id=" . ($product_data["id"]); ?>' class="col-12 btn btn-warning">
                                                            Buy Now
                                                        </a>
                                                        <button class="col-6 btn btn-dark mt-2">
                                                            <i class="bi bi-cart-plus-fill text-white fs-5" onclick="addToCart(<?php echo $product_data['id']; ?>);"></i>
                                                        </button>
                                                        
                                                    <?php

                                                    } else {
                                                    ?>
                                                        <span class="card-text  fw-bold">Out Of Stock</span><br />
                                                        <span class="card-text text-danger fw-bold">00 Items Available</span><br /><br />
                                                        <a href='#' class="col-12 btn btn-warning disabled">
                                                            Buy Now
                                                        </a>
                                                        <button class="col-6 btn btn-dark mt-2 disabled">
                                                            <i class="bi bi-cart-plus-fill text-white fs-5"></i>
                                                        </button>
                                                        <?php
                                                    }

                                                    if (isset($_SESSION["u"])) {

                                                        $watchlist_rs = Database::search("SELECT * FROM `watchlist` WHERE `user_email`='" . $_SESSION["u"]["email"] . "' 
                                                            AND `product_id`='" . $product_data["id"] . "'");
                                                        $watchlist_num = $watchlist_rs->num_rows;

                                                        if ($watchlist_num == 1) {
                                                        ?>
                                                            <button class="col-6 btn btn-outline-light mt-2 border border-primary" onclick='addToWatchlist(<?php echo $product_data["id"]; ?>);'>
                                                                <i class="bi bi-heart-fill text-danger fs-5" id="heart<?php echo $product_data["id"]; ?>"></i>
                                                            </button>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <button class="col-6 btn btn-outline-light mt-2 border border-primary" onclick='addToWatchlist(<?php echo $product_data["id"]; ?>);'>
                                                                <i class="bi bi-heart-fill text-dark fs-5" id="heart<?php echo $product_data["id"]; ?>"></i>
                                                            </button>
                                                    <?php
                                                        }
                                                    }


                                                    ?>



                                                </div>
                                            </div>

                                        <?php
                                        }

                                        ?>



                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- products -->
                    <?php
                    }

                    ?>






                    <!-- End main content area -->



                    <div class="brands-area">
                        <div class="zigzag-bottom"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <img src="resource/brands/brand1.png" alt="">
                                    <img src="resource/brands/brand2.png" alt="">
                                    <img src="resource/brands/brand3.png" alt="">
                                    <img src="resource/brands/brand4.png" alt="">
                                    <img src="resource/brands/brand5.png" alt="">
                                    <img src="resource/brands/brand6.png" alt="">
                                    <img src="resource/brands/brand1.png" alt="">
                                    <img src="resource/brands/brand2.png" alt="">
                                </div>

                            </div>
                        </div>
                    </div> <!-- End brands area -->




                    </di>
                </div>

                <?php include "footer.php"; ?>

            </div>
        </div>

        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>

</body>

</html>