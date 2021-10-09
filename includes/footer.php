<?php 

include ('db_config.php');

if(isset($_POST['subscribe'])){
  $email=$_POST['email'];
  if($email == "" ){
      echo "";
  }else{
    $reg_subscribe="INSERT INTO email_subs (cust_email) VALUES ('$email')";
    $run_subscribe=mysqli_query($con,$reg_subscribe);
      if($run_subscribe){
        echo "<div class='alert alert-success alert-fixed'>
                <h4><i class='fa fa-check'></i>&nbsp;&nbsp;Great ! Thank you for subscribing. Stay Tuned for Great Offers & News
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
            </div>";
      }else{
        echo "<div class='alert alert-danger alert-fixed'>
                <h4><i class='fa fa-times'></i>&nbsp;&nbsp;Oops ! There was an error, Kindly try again ! 
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
            </div>";
      }
  }

}

?>


<!-- *** FOOTER *** -->
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <h4 class="mb-3">Pages</h4>
        <ul class="list-unstyled">
          <li><a href="cart.php">Shopping Cart</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="customer/my_account.php">My Account</a></li>
        </ul>
        <hr>
        <h4 class="mb-3">User section</h4>
        <ul class="list-unstyled">
          <li><a href="customer/my_account.php">Login</a></li>
          <li><a href="customer_register.php">Register</a></li>
        </ul>
      </div>
      <!-- /.col-lg-3-->
      <div class="col-lg-3 col-md-6">
        <h4 class="mb-3">Top categories</h4>
        <ul class="list-unstyled">
          <?php
          $p_get_cats = "SELECT * FROM product_categories";
          $run_p_cats = mysqli_query($con, $p_get_cats);
          while ($res_p_cats = mysqli_fetch_array($run_p_cats)) {
            $p_cat_id = $res_p_cats['p_cat_id'];
            $p_cat_title = $res_p_cats['p_cat_title'];
            echo "
              <li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>
              ";
          }
          ?>
        </ul>
      </div>
      <!-- /.col-lg-3-->
      <div class="col-lg-3 col-md-6">
        <h4 class="mb-3">Reach Us</h4>
        <p>
          <strong>Prime Time Shopper</strong>
          <br>Surat, Gujarat, India
          <br><a href="mailto:someone@example.com" class="email external"><i class="fa fa-envelope"></i> contactus@pts.com</a>
          <br><a href="mailto:someone@example.com" class="email external"><i class="fa fa-envelope"></i> info@pts.com</a>
          <br><a href="tel:+910130401012"><i class="fa fa-phone"></i> +91-0130401012</a>
        </p>
        <hr class="d-block d-md-none">
      </div>
      <!-- /.col-lg-3-->
      <div class="col-lg-3 col-md-6">
        <h4 class="mb-3">News Buzz</h4>
        <p>Subscribe here to get latest deals and offers on Prime Time Shopper</p>
        <form action="" method="post">
          <div class="input-group">
            <input type="text" name="email" class="form-control" required><span class="input-group-append">
              <button type="submit" name="subscribe" class="btn btn-outline-secondary">Subscribe!</button></span>
          </div>
          <!-- /input-group-->
        </form>
        <hr>
        <h4 class="mb-3">Follow Us</h4>
        <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="mailto:someone@example.com" class="email external"><i class="fa fa-envelope"></i></a></p>
      </div>
      <!-- /.col-lg-3-->
    </div>
    <!-- /.row-->
  </div>
  <!-- /.container-->
</div>
<!-- /#footer-->
<!-- *** FOOTER END ***-->

<div id="copyright">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-2 mb-lg-0">
        <p class="text-center text-lg-left"><i class="fa fa-copyright"></i>&nbsp;<?php echo date('Y') ?> Prime Time Shopper || All Rights Reserved</p>
      </div>
      <div class="col-lg-6">
        <p class="text-center text-lg-right">Design & Developerd <a href="#">Tithi Enterprise</a>
        </p>
      </div>
    </div>
  </div>
</div>