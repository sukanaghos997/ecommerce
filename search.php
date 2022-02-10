<?php include('includes/header.php'); ?>
        
<?php include('includes/nav.php'); ?>

        

        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                           
                        <?php

                        if(isset($_POST['find'])){
                            $search_item = $_POST['search'];
                        }

                        $query = "SELECT * FROM `products` where `tags` like '%$search_item%' ";

                        $result = mysqli_query($con, $query);
                        if (!$result) {
                            die("Query Failed" . mysqli_error($con));
                        } else {
                            $row_counter = mysqli_num_rows($result);
                            if($row_counter > 0){

                           
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#"><?php echo $row['pName']; ?></a>
                                      
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
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
                        else{
                            echo "<h1>No Result Found!</h1>";
                        }
                        }
                        ?>
                         
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
        <!-- Product List End -->  
        
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
   