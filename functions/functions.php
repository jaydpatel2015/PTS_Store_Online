<?php

$db = mysqli_connect('localhost', 'root', '', 'pts_store');

<<<<<<< HEAD
// Get IP Address of Client Starts here
function getRealIPaddress()
{
    switch (true) {
        case (!empty($_SERVER['HTTP_X_REAL_IP'])):
            return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])):
            return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default:
            return $_SERVER['REMOTE_ADDR'];
    }
}

//Add to cart function
function add_cart()
{
    global $db;
    if (isset($_GET['add_cart'])) {
        $ip_add = getRealIPaddress();
        $p_id = $_GET['add_cart'];
        $product_qty = $_POST['product_qty'];
        $product_size = $_POST['product_size'];
        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
        $run_check = mysqli_query($db, $check_product);
        if($run_check){
            $query = "INSERT INTO cart (p_id,ip_add,qty,size) VALUES ('$p_id','$ip_add','$product_qty','$product_size')";
            $run_query = mysqli_query($db, $query);
            echo "<script>window.open('details.php?pro_id=$p_id','_self');</script>";
            echo "<div class='alert alert-success' role='alert'>
                            Product added to cart successfully !
                    </div>
                ";
        }

        // if (mysqli_num_rows($run_check) > 0) {
        //     echo "<script>window.open('details.php?pro_id=$p_id','_self');</script>";
        //     echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        //             <strong>Error !</strong> This Product is already exist in the cart.
        //             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        //                 <span aria-hidden='true'>&times;</span>
        //             </button>
        //         </div>";
        // } else {
        //     $query = "INSERT INTO cart (p_id,ip_add,qty,size) VALUES ('$p_id','$ip_add','$product_qty','$product_size')";
        //     $run_query = mysqli_query($db, $query);
        //     echo "<script>window.open('details.php?pro_id=$p_id','_self');</script>";
        //     echo "<div class='alert alert-success' role='alert'>
        //                     Product added to cart successfully !
        //             </div>
        //         ";
        // }
    }
}
//Add to cart ends


// Get IP Address of Client Ends here


=======
//Retrieve IP address of Client starts here

function getRealIPaddress(){
    switch(true){
        case(!empty($_SERVER['HTTP_X_REAL_IP'])): return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_CLIENT_IP'])): return $_SERVER['HTTP_CLIENT_IP'];
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default : return $_SERVER['REMOTE_ADDR'];   
    }
}
//Retrieve IP address of client ends here

//Add to cart function
function add_cart(){
    global $db;
    if(isset($_GET['add_cart'])){
        $ip_add=getRealIPaddress();
        $p_id=$_GET['add_cart'];
        $product_qty=$_POST['product_qty'];
        $product_size=$_POST['product_size'];
        $check_product="select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
        $run_check=mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            echo "<script>window.open('details.php?pro_id=$p_id','_self');</script>";
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Error !</strong> This Product is already exist in the cart.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        }else{
            $query="INSERT INTO cart (p_id,ip_add,qty,size) VALUES ('$p_id','$ip_add','$product_qty','$product_size')";
            $run_query=mysqli_query($db,$query);
            echo "<script>window.open('details.php?pro_id=$p_id','_self');</script>";
                 echo "<script>
                         <div class='alert alert-success' role='alert'>
                            Product added to cart successfully !
                         </div>
                 </script>";
        }
    }   
}
//Add to cart ends

// Items in cart starts

function items(){
    global $db;
    $ip_add=getRealIPaddress();
    $get_items="SELECT * FROM cart WHERE ip_add='$ip_add'";
    $run_items=mysqli_query($db,$get_items);
    $count_items=mysqli_num_rows($run_items);
    echo $count_items;
}
// Items in cart Ends

// total Price starts
function total_price() {
    global $db;
    $ip_add=getRealIPaddress();
    $total=0;
    $select_cart="SELECT * FROM cart where ip_add='$ip_add'";
    $run_cart=mysqli_query($db,$select_cart);
    while($record=mysqli_fetch_array($run_cart)){
        $pro_id=$record['p_id']; // p_id from cart table
        $pro_qty=$record['qty'];
        $pro_size=$record['size'];

        $get_price="SELECT * FROM products where product_id='$pro_id'";
        $run_price_query=mysqli_query($db,$get_price);
        while($res_price=mysqli_fetch_array($run_price_query)){
            $sub_total=$res_price['product_price'] * $pro_qty;
            $total+=$sub_total;
        }
    }
    echo $total;
}
// total price ends
>>>>>>> f02f187751e2e575d010401dfb98a631b0fed68b


// Retrieve Products in sidebar
function getPro()
{
    global $db;
    $get_products = "select * from products order by 1 DESC LIMIT 0,8";
    $run_products = mysqli_query($db, $get_products);
    while ($row_product = mysqli_fetch_array($run_products)) {
        $pro_id = $row_product['product_id'];
        $pro_title = $row_product['product_title'];
        $pro_price = $row_product['product_price'];
        $pro_img1 = $row_product['product_img1'];
        echo "<div class='col-lg-2 col-md-4 d-flex justify-content-between'>
                <div class='product'>
                    <div class='card text-center mb-1'>
                        <div class='card-heading p-1'>
                            <a href='details.php?product_id=$pro_id'><img class='card-img-top' src='admin_area/admin_product_images/$pro_img1' alt='men's t-shirts'></a>
                        </div>
                        <div class='card-body'> 
                            <h4 class='card-title'><a href='details.php?product_id=$pro_id'>$pro_title</a></h4>
                            <h4 class='card-text'><strong>&#8377;</strong>$pro_price</h4>
                            <a href='details.php?pro_id=$pro_id' class='btn btn-primary btn-sm mb-1'><i class='bi bi-info-circle'></i> View Details</a>
                            <a href='details.php?pro_id=$pro_id' class='btn btn-primary btn-sm mb-1'><i class='bi bi-cart-plus'></i> Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>";
    }
}

// Retrieve Product Categories in sidebar
function gePcats()
{
    global $db;
    $get_p_cats = "SELECT * FROM product_categories";
    $run_p_cats = mysqli_query($db, $get_p_cats);
    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
        $p_cat_id = $row_p_cats['p_cat_id'];
        $p_cat_title = $row_p_cats['p_cat_title'];
        echo "<li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>";
    }
}

// Retrieve Categories in Sidebar
function getCat()
{
    global $db;
    $get_cats = "SELECT * FROM categories";
    $run_cats_query = mysqli_query($db, $get_cats);
    while ($row_cat = mysqli_fetch_array($run_cats_query)) {
        $p_cat_id = $row_cat['cat_id'];
        $p_cat_title = $row_cat['cat_title'];
        echo "<li><a href='shop.php?cat=$p_cat_id'>$p_cat_title</a></li>";
    }
}

// Retrieve Pro ducts after Filtering Product Categories
function getProdCatAfterFilter()
{
    global $db;
    if (isset($_GET['p_cat'])) {
        $p_cat_id = $_GET['p_cat'];
        $get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($db, $get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_pro = "SELECT * FROM products WHERE p_cat_id='$p_cat_id'";
        $run_pro_query = mysqli_query($db, $get_pro);
        $count_pro = mysqli_num_rows($run_pro_query);
        if ($count_pro == 0) {
            echo "<div class='col-lg-12'>
                    <div class='box'>
                            <h1 class='text-center'>No Products Found in " . $p_cat_title . " Category</h1>
                    </div>                        
                </div>";
        } else {
            echo "<div class='col-lg-12'>
                    <div class='box'>
                        <h1 class='text-left'>$p_cat_title</h1>
                        <p class='text-muted text-left'>$p_cat_desc</p>
                    </div>                        
                </div>";
        }
        while ($row_products = mysqli_fetch_array($run_pro_query)) {
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];
            echo "<div class='col-md-4 col-sm-6 mt-2'>
                  <div class='card text-center mb-1'>
                    <div class='card-heading p-1'>
                        <a href='details.php?product_id=$pro_id'><img class='card-img-top' src='admin_area/admin_product_images/$pro_img1' alt='men's t-shirts'></a>
                    </div>
                    <div class='card-body'> 
                        <h4 class='card-title'><a href='details.php?product_id=$pro_id'>$pro_title</a></h4>
                        <h4 class='card-text'><strong>&#8377;</strong>$pro_price</h4>
                        <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='bi bi-info-circle'></i> View Details</a>
                        <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='bi bi-cart-plus'></i> Add to Cart</a>
                    </div>
                </div>
            </div>";
        }
    }
}

// Retrieve Products after Filtering Product Categories
function getCatAfterFilter()
{
    global $db;
    if (isset($_GET['cat'])) {
        $cat_id = $_GET['cat'];
        $get_cat_query = "SELECT * FROM categories WHERE cat_id='$cat_id'";
        $run_get_cat = mysqli_query($db, $get_cat_query);
        $row_cat = mysqli_fetch_array($run_get_cat);
        $get_cat_title = $row_cat['cat_title'];
        $get_cat_desc = $row_cat['cat_desc'];
        $get_products = "SELECT * FROM products WHERE cat_id='$cat_id'";
        $run_products = mysqli_query($db, $get_products);
        $count_pro = mysqli_num_rows($run_products);
        if ($count_pro == 0) {
            echo "<div class='col-lg-12'>
                    <div class='box'>
                            <h1 class='text-center'>No Products Found in " . $get_cat_title . " Category</h1>
                    </div>                        
                </div>";
        } else {
            echo "<div class='col-lg-12'>
                    <div class='box'>
                        <h1 class='text-left'>$get_cat_title</h1>
                        <p class='text-muted text-left'>$get_cat_desc</p>
                    </div>                        
                </div>";
        }
        while ($row_products = mysqli_fetch_array($run_products)) {
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];
            echo "<div class='col-md-4 col-sm-6 mt-2'>
            <div class='card text-center mb-1'>
              <div class='card-heading p-1'>
                  <a href='details.php?product_id=$pro_id'><img class='card-img-top' src='admin_area/admin_product_images/$pro_img1' alt='men's t-shirts'></a>
              </div>
              <div class='card-body'> 
                  <h4 class='card-title'><a href='details.php?product_id=$pro_id'>$pro_title</a></h4>
                  <h4 class='card-text'><strong>&#8377;</strong>$pro_price</h4>
                  <a href='details.php?prod_id=$pro_id' class='btn btn-primary'><i class='bi bi-info-circle'></i> View Details</a>
                  <a href='details.php?prod_id=$pro_id' class='btn btn-primary'><i class='bi bi-cart-plus'></i> Add to Cart</a>
              </div>
          </div>
      </div>";
        }
    }
}
