<?php

$db = mysqli_connect('localhost', 'root', '', 'pts_store');

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
        echo
        "<div class='col-md-4 col-sm-12 d-flex justify-content-center'>
            <div class='product'>
                    <div class='card'>
                            <a href='details.php?pro_id=$pro_id'><img height='200' width='100%' class='img-responsive' src='admin_area/admin_product_images/$pro_img1'></a>
                        <div class='card-body text-center'>
                            <h4><a href='details.php?pro_id=$pro_id'>$pro_title</a></h4>
                            <p class='price'> 
                                <del></del>&#8377;$pro_price
                            </p>
                            <div class='d-flex'>
                                <a href='details.php?pro_id=$pro_id' class='btn btn-primary btn-sm'><i class='fa fa-binoculars'></i> View details </a>
                                <a href='details.php?pro_id=$pro_id' class='btn btn-primary btn-sm'><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                            </div>
                        </div>
                </div>
                </div>
            </div>
   ";
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
    if (isset($_GET['prod_cat_id'])) {
        $p_cat_id = $_GET['prod_cat_id'];
        $get_p_cat = "SELECT * FROM product_categories WHERE product_category_id='$p_cat_id'";
        $run_p_cat = mysqli_query($db, $get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['product_category_title'];
        $p_cat_desc = $row_p_cat['product_category_desc'];

        $get_pro = "SELECT * FROM products WHERE product_category_id='$p_cat_id'";
        $run_pro_query = mysqli_query($db, $get_pro);
        $count_pro = mysqli_num_rows($run_pro_query);
        if ($count_pro == 0) {
            echo "<div class='col-md-12 col-sm-6'>
                <div class='card'>
                    <h1 class='card-heading text-center'>No Results Found in " . $p_cat_title . " Category</h1>
                </div>                        
            </div>";
        } else {
            echo "<div class='col-md-12 col-sm-6'>
                    <div class='card'>
                        <h5 class='card-title text-center p-2'>$p_cat_title</h5>
                        <p class='card-subctitle mb-2 text-muted text-left p-2'>$p_cat_desc</p>
                    </div>                        
            </div>";
        }
        while ($row_products = mysqli_fetch_array($run_pro_query)) {
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img = $row_products['product_img'];
            echo "<div class='col-md-4 col-sm-6 mt-2'>
                  <div class='card text-center mb-1'>
                    <div class='card-heading p-1'>
                        <a href='details.php?product_id=$pro_id'><img class='card-img-top' src='admin_area/admin_product_images/$pro_img' alt='men's t-shirts'></a>
                    </div>
                    <div class='card-body'> 
                        <h5 class='card-title'><a href='details.php?product_id=$pro_id'>$pro_title</a></h5>
                        <p class='card-text'><strong>&#8377;</strong>$pro_price</p>
                        <a href='details.php?prod_id=$pro_id' class='btn btn-primary mb-1'><i class='bi bi-info-circle'></i> View Details</a>
                        <a href='details.php?prod_id=$pro_id' class='btn btn-success'><i class='bi bi-cart-plus'></i> Add to Cart</a>
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
    if (isset($_GET['cat_id'])) {
        $cat_id = $_GET['cat_id'];
        $get_cat_query = "SELECT * FROM categories WHERE category_id='$cat_id'";
        $run_get_cat = mysqli_query($db, $get_cat_query);
        $row_cat = mysqli_fetch_array($run_get_cat);
        $get_cat_title = $row_cat['category_title'];
        $get_cat_desc = $row_cat['category_desc'];
        $get_products = "SELECT * FROM products WHERE category_id='$cat_id'";
        $run_products = mysqli_query($db, $get_products);
        $count_products = mysqli_num_rows($run_products);
        if ($count_products == 0) {
            echo "<div class='col-md-12 col-sm-6'>
                <div class='card'>
                    <h1 class='card-heading text-center'>No Results Found in " . $get_cat_title . " Category</h1>
                </div>                        
            </div>";
        } else {
            echo "<div class='col-md-12 col-sm-6'>
                    <div class='card'>
                        <h5 class='card-title text-center p-2'>$get_cat_title</h5>
                        <p class='card-subctitle mb-2 text-muted text-left p-2'>$get_cat_desc</p>
                    </div>                        
            </div>";
        }
        while ($row_products = mysqli_fetch_array($run_products)) {
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img = $row_products['product_img'];
            echo "<div class='col-md-4 col-sm-6 mt-2'>
                  <div class='card text-center mb-1'>
                    <div class='card-heading p-1'>
                        <a href='details.php?product_id=$pro_id'><img class='card-img-top' src='admin_area/admin_product_images/$pro_img' alt='men's t-shirts'></a>
                    </div>
                    <div class='card-body'> 
                        <h5 class='card-title'><a href='details.php?product_id=$pro_id'>$pro_title</a></h5>
                        <p class='card-text'><strong>&#8377;</strong>$pro_price</p>
                        <a href='details.php?prod_id=$pro_id' class='btn btn-primary mb-1'><i class='bi bi-info-circle'></i> View Details</a>
                        <a href='details.php?prod_id=$pro_id' class='btn btn-success'><i class='bi bi-cart-plus'></i> Add to Cart</a>
                    </div>
                </div>
            </div>";
        }
    }
}
