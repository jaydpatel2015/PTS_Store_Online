

<?php

$db=mysqli_connect('localhost','root','','pts');

function getPro(){
    global $db;
    $get_products="select * from products order by product_id DESC LIMIT 0,4";
    $run_products=mysqli_query($db,$get_products);
    while($row_product=mysqli_fetch_array($run_products)){
        $product_id=$row_product['product_id'];
        $product_title=$row_product['product_title'];
        $product_price=$row_product['product_price'];
        $product_img=$row_product['product_img'];
        echo "<div class='col-md-3 col-sm-6'>
                <div class='card text-center mb-3' style='width: 17rem;'>
                    <a href='details.php?product_id=$product_id'><img class='card-img-top' src='admin_area/admin_product_images/T-Shirts/$product_img' alt='men's t-shirts'></a>
                    <div class='card-body'> 
                        <h5 class='card-title'><a href='details.php?product_id=$product_id'>$product_title</a></h5>
                        <p class='card-text'><strong>&#8377;</strong>$product_price</p>
                    </div>
                    <div class='card-body'>
                        <a href='details.php?product_id=$product_id' class='btn btn-primary mb-1'><i class='bi bi-info-circle'></i> View Details</a>
                        <a href='details.php?product_id=$product_id' class='btn btn-success'><i class='bi bi-cart-plus'></i> Add to Cart</a>
                    </div>
                </div>
            </div>";
    }
}

?>