<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

        
        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6"> 
                        <h2>Register Form</h2>   
                        <form action="includes/register_process.php" method="post" class="register-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" name="fname" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <input class="form-control" name="lname" type="text" placeholder="Last Name">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" name="email" type="email" placeholder="E-mail">
                                </div>
                                <div class="col-md-6">
                                    <label>Mobile No</label>
                                    <input class="form-control" name="mobile" type="number" placeholder="Mobile No">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" name="pwd" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <label>Retype Password</label>
                                    <input class="form-control" name="c_pwd" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="register_btn" class="btn">Register</button>
                                </div>
                            </div>
                        </form>
                        <strong>
                        <?php
                        
                        if(isset($_GET['register_msg'])){
                            echo $_GET['register_msg'];
                        }
                        
                        ?>
                        </strong>
                    </div>
                    <div class="col-lg-6">
                        <h2>Login Form</h2>
                        <form action="includes/login_process.php" method="post" class="login-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" name="email" type="email" placeholder="E-mail" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" name="pwd" type="text" placeholder="Password" required>
                                </div>
                               
                                <div class="col-md-12">
                                    <button type="submit" name="login_btn" class="btn">Login</button>
                                </div>
                            </div>
                            <p>
                                <?php
                                if(isset($_GET['login_error'])){
                                    echo $_GET['login_error'];
                                }
                                
                                ?>
                            </p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login End -->



<?php include('includes/footer.php'); ?>
