<?php 
    include '../includes/db_config.php';
    
    if(isset($_POST['submit'])){
        $product_title=$_POST['product_title'];
        $product_cat=$_POST['product_cat'];
        $cat=$_POST['cat'];
        $product_price=$_POST['product_price'];
        $product_keyword=$_POST['product_keyword'];
        $product_desc=$_POST['product_desc'];

        $total=count($_FILES['product_img']['name']);
        for($i=0;$i<$total;$i++){
            $tmpName=$_FILES['product_img']['tmp_name'][$i];
            if($tmpName != ''){
                $newName="./admin_product_images/".$_FILES['product_img']['name'][$i];
                if(move_uploaded_file($tmpName,$newName)){
                    $product_img=$newName;
                    // print_r($product_img);
                }
            }
        }
        
        $insertProductDetails="insert into products (product_category_id,category_id,product_img,product_title,date,product_price,product_desc,product_keywords) 
        VALUES ('$product_cat','$cat','$product_img','$product_title',NOW(),'$product_price','$product_desc','$product_keyword')";

        $run_product=mysqli_query($con,$insertProductDetails);
        
        if($run_product){
            echo "<script>alert('Data Inserted Successfully')</script>";
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    <link rel="stylesheet" href="./admin_css/bootstrap4.6.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="images/primetime_icon.png" type="image/x-icon">
    <title>Add New Product</title>
    
</head>
<body>
    <!-- breadcrumb starts here -->
    <div class="row">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <i class="bi bi-palette-fill"></i>&nbsp;
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Insert Product</li>
                </ol>
            </nav>
       </div>
    </div>
    <!-- breadcrumb ends here -->
<div class="container">
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Insert Product</h3>
                    </div> 
                    <div class="card-body">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-control-label" for="">Product Title</label>
                                <input type="text" name="product_title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="">Product Category</label>
                                <select name="product_cat" class="form-control" id="">
                                    <option value="">Select a Product Category</option>
                                    <?php
                                    $get_p_cats="select * from product_categories";
                                    $run_p_cats=mysqli_query($con,$get_p_cats);
                                    while($row=mysqli_fetch_array($run_p_cats)){
                                        $id=$row['product_category_id'];
                                        $cat_title=$row['product_category_title'];
                                        echo "<option value='$id'>$cat_title</option>";
                                    } 
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="">Category</label>
                                <select name="cat" class="form-control" id="">
                                    <option value="">Select a Category</option>
                                    <?php
                                    $get_cats="select * from categories";
                                    $run_cats=mysqli_query($con,$get_cats);
                                    while($row=mysqli_fetch_array($run_cats)){
                                        $id=$row['category_id'];
                                        $cat_title=$row['category_title'];
                                        echo "<option value='$id'>$cat_title</option>";
                                    } 
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="">Product Images</label>
                                <input type="file" name="product_img[]" multiple class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="">Product Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><strong>&#8377;</strong></span>
                                    </div>
                                    <input type="text" name="product_price" class="form-control" required>  
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="form-control-label" for="">Product Keyword</label>
                                <input type="text" name="product_keyword" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="">Product Description</label>
                                <textarea class="form-control" name="product_desc" id="mytextarea"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" />
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</div>
</body> 
</html>

