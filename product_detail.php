<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

<?php

if (isset($_GET['id'])) {
    $pid = $_GET['id'];

    $query = "select * from `products` where `id` = '$pid'";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("Query Failed" . mysqli_error($con));
    } else {
        $row = mysqli_fetch_assoc($result);
        $pCategory = $row['pCat'];
        // echo "<pre>";
        // print_r($row);
    }
}

?>

<!-- Product Detail Start -->
<div class="product-detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="product-detail-top">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="product-slider-single normal-slider">
                                <img src="assets/img/<?php echo $row['pImage']; ?>" alt="Product Image">

                            </div>

                        </div>
                        <div class="col-md-7">
                            <div class="product-content">
                                <div class="title">
                                    <h2><?php echo $row['pName']; ?></h2>
                                </div>

                                <div class="price">
                                    <h4>Price:</h4>
                                    <p>$<?php echo $row['pNewPrice']; ?> <span>$<?php echo $row['pOldPrice']; ?></span></p>
                                </div>


                                <div class="action">
                                    <a class="btn" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                    <a class="btn" href="#"><i class="fa fa-shopping-bag"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row product-detail-bottom">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#specification">Specification</a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div id="description" class="container tab-pane active">
                                <h4>Product description</h4>
                                <p>
                                    <?php echo $row['pDesc']; ?>
                                </p>
                            </div>
                            <div id="specification" class="container tab-pane fade">
                                <h4>Product specification</h4>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="section-header">
                        <h1>Related Products</h1>
                    </div>

                    <div class="row align-items-center product-slider product-slider-3">
                        <?php

                        $query = "select * from `products` where `pCat` = '$pCategory' and `id` != '$pid'";
                        $result = mysqli_query($con, $query);
                        if (!$result) {
                            die("Query Failed" . mysqli_error($con));
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="product_detail.php"><?php echo $row['pName']; ?></a>

                                        </div>
                                        <div class="product-image">
                                            <a href="product_detail.php">
                                                <img src="assets/img/<?php echo $row['pImage']; ?>" alt="Product Image">
                                            </a>

                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span><?php echo $row['pNewPrice']; ?></h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }

                        ?>


                    </div>
                </div>
            </div>

            <!-- Side Bar Start -->
            <div class="col-lg-4 sidebar">
                <div class="sidebar-widget category">
                    <h2 class="title">Category</h2>
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
            <!-- Side Bar End -->
        </div>
    </div>
</div>
<!-- Product Detail End -->

<!-- Brand Start -->
<div class="brand">
    <div class="container-fluid">
        <div class="brand-slider">
            <div class="brand-item"><img src="assets/img/brand-1.png" alt=""></div>
            <div class="brand-item"><img src="assets/img/brand-2.png" alt=""></div>
            <div class="brand-item"><img src="assets/img/brand-3.png" alt=""></div>
            <div class="brand-item"><img src="assets/img/brand-4.png" alt=""></div>
            <div class="brand-item"><img src="assets/img/brand-5.png" alt=""></div>
            <div class="brand-item"><img src="assets/img/brand-6.png" alt=""></div>
        </div>
    </div>
</div>
<!-- Brand End -->

<?php include('includes/footer.php'); ?>