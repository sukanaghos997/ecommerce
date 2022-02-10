
<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">

                                    <?php

                                    if(isset($_SESSION['uid'])){
                                        $user_id = $_SESSION['uid'];
                                        // echo $user_id;
                                    }

                                    $query = "SELECT pid, pName, pNewPrice, pImage
                                    FROM cart 
                                    INNER JOIN products
                                    ON cart.pid = products.id 
                                    where cart.uid = '$user_id' ";

                                    $result = mysqli_query($con, $query);
                                    if (!$result) {
                                        die("Query Failed" . mysqli_error($con));
                                    } else {
                                        $sum = 0;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $sum += $row['pNewPrice'] + 100;
                                           
                                    ?>

                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="assets/img/<?php echo $row['pImage']; ?>" alt="Image"></a>
                                                    <p><?php echo $row['pName']; ?></p>
                                                </div>
                                            </td>
                                            <td>$<?php echo $row['pNewPrice']; ?></td>
                                            
                                            <td>$<?php echo $row['pNewPrice']+100; ?></td>
                                            <td><button><a href="includes/cart_delete.php?pid=<?php echo $row['pid']; ?>"><i style="color:#fff" class="fa fa-trash"></i></a></button></td>
                                        </tr>
                                   <?php
                                        }
                                        
                                    }
                                   ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                               
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>
                                            <p>Sub Total<span>$<?php echo $sum; ?></span></p>
                                            <p>Shipping Cost<span>$1</span></p>
                                            <h2>Grand Total<span>$<?php echo $sum+1; ?></span></h2>
                                        </div>
                                        <div class="cart-btn">
                                            <button>Update Cart</button>
                                            <button>Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
<?php include('includes/footer.php'); ?>
 