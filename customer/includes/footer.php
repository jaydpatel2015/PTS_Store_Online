<?php
    include '../includes/db_config.php';
?>
<div id="footer">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-md-2 col-sm-12">
                <h4>Pages</h4>                
                <ul>
                    <li><a href="../../cart.php">Shopping Cart</a></li>
                    <li><a href="/contactus.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="./customer/my_account.php">My Account</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-12">
                <h4>User Section</h4>
                <ul>
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_register.php">Register</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-2">
                <h4>Top Product Categories</h4>
                <ul>
                    <?php 
                        $get_prod_cats="SELECT * from product_categories";
                        $run_prod_cats=mysqli_query($con,$get_prod_cats);
                        while($row_prod=mysqli_fetch_array($run_prod_cats)){
                            $prod_cat_id=$row_prod['product_category_id'];
                            $prod_cat_title=$row_prod['product_category_title'];
                            echo "<li><a href='../shop.php?product_cat_id=$prod_cat_id'>$prod_cat_title</a></li>";
                        }
                    ?>
                </ul>
            </div>  
            <div class="col-sm-12 col-md-2 text-center">
                <h4>Where to Find us</h4>
                <p>
                    <strong>Prime Time Shopper</strong>
                    <br>Surat, Gujarat, India
                    <br><i class="bi bi-envelope"></i> contactus@pts.com
                    <br><i class="bi bi-envelope"></i> info@pts.com
                    <br><i class="bi bi-telephone"></i> +91-0130401012
                </p>
            </div>
            <div class="col-sm-12 col-md-2">
                <h4 class="text-center">Get the News</h4>
                <p class="text-muted">
                    Subscribe Here for getting news from Prime Time Shopper
                </p>
                <form action="" method='Post'>
                    <div class="input-group-sm">
                        <input type="text" name="email" class="form-control mb-1" placeholder='Email Address' id="">
                        <div>
                            <button type="submit" class="btn btn-primary btn-sm">Subscribe</button>
                        </div>
                    </div>
                </form>
                <hr>
                <h5>Stay in Touch</h5>
                <p class='social d-flex justify-content-between'>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-envelope"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Footer Ends Here -->

<!-- Copyright Starts From here -->
<div id='copyright'>
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">
                &#169; Copyright <script type="text/javascript">document.write(new Date().getFullYear('Y'))</script> | Prime Time Shopper | All Rights Reserved
            </p>
        </div>
        <div class="col-md-6">
            <p class="pull-right">
                Proudly & Passionately Developed by <a href="#">Tithi Enterprise </a>
            </p>
        </div>
    </div>
</div>
<!-- Copyright Ends here -->
</body>
</html>