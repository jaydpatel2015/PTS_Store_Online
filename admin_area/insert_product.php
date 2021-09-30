<?php
include('../admin_area/admin_includes/db_config.php');

if(isset($_POST['insert_new'])){
    $product_title=mysqli_real_escape_string($con,$_POST['product_title']);
    $product_cat=$_POST['product_cat'];
    $cat=$_POST['cat'];
    $product_price=mysqli_real_escape_string($con,$_POST['product_price']);
    $product_desc=mysqli_real_escape_string($con,$_POST['product_desc']);
    $product_keywords=mysqli_real_escape_string($con,$_POST['product_keywords']);

    $product_img1=$_FILES['product_img1']['name'];
    $product_img2=$_FILES['product_img2']['name'];
    $product_img3=$_FILES['product_img3']['name'];

    $temp_img1=$_FILES['product_img1']['tmp_name'];
    $temp_img2=$_FILES['product_img2']['tmp_name'];
    $temp_img3=$_FILES['product_img3']['tmp_name'];

    move_uploaded_file($temp_img1,"admin_product_images/$product_img1");
    move_uploaded_file($temp_img2,"admin_product_images/$product_img2");
    move_uploaded_file($temp_img3,"admin_product_images/$product_img3");

    $insert_product="insert into products 
    (p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keywords) 
    values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords')";
    $run_product=mysqli_query($con,$insert_product);
    if($run_product){
        echo "<script>location.href('insert_product.php','_self');</script>";
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
    }else{ 
        echo "<div class='alert alert-danger' role='alert'>
                    <h1>Error ! Kindly Try again</h1>;
                </div>";
        echo "<script>location.href('insert_product.php','_self');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Time Shopper</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- TinyMCE Code Editor -->
  <script src="../admin_area/admin_styles/TinyMCE/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="../admin_area/admin_styles/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="../admin_area/admin_styles/font-awesome/css/font-awesome.css">
  <!-- Google fonts - Poppins -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap">
  <!-- Default Style Sheet -->
  <link rel="stylesheet" href="../admin_area/admin_styles/style.default.css" id="theme-stylesheet">
  <!-- Favicon-->
  <link rel="shortcut icon" href="../logo/primetime_icon.png">
  <title>Add New Product</title>
  <script>
      tinymce.init({
        selector: '#productdesc'
      });
    </script>
</head>

<body>
  <div id="all">
    <div id="content">
      <div class="container mt-0 mb-2">
        <div class="row">
          <div class="col-lg-12 mt-2">
            <!-- breadcrumb starts here-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home"></i>&nbsp;<a href="../index.php">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Insert New Product</li>
              </ol>
            </nav>
            <!-- Breadcrumb Ends here  -->
          </div>
          <div class="col-lg-6 offset-lg-3">
            <div class="card">
              <div class="card-header text-center">
                <h1>Insert New Product here</h1>
              </div>
              <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Product Title</label>
                    <input type="text" name='product_title' class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Product Category</label>
                    <select name="product_cat" id="" class="form-control">
                      <option value="">Select Product Category</option>
                      <?php
                      $get_p_cat = "select * from product_categories";
                      $run_p_cat = mysqli_query($con, $get_p_cat);
                      while ($row_p_cat = mysqli_fetch_array($run_p_cat)) {
                        $p_cat_id = $row_p_cat['p_cat_id'];
                        $p_cat_title = $row_p_cat['p_cat_title'];
                        echo "<option value='$p_cat_id'>$p_cat_title</option>";
                      } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select name="cat" class="form-control">
                      <option value="">Select Category</option>
                      <?php
                      $get_cat = "select * from categories";
                      $run_cat = mysqli_query($con, $get_cat);
                      while ($row_cat = mysqli_fetch_array($run_cat)) {
                        $cat_id = $row_cat['cat_id'];
                        $cat_title = $row_cat['cat_title'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                      } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Product Image 1</label>
                    <input type="file" name='product_img1' class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Product Image 2</label>
                    <input type="file" name='product_img2' class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Product Image 3</label>
                    <input type="file" name='product_img3' class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Product Price</label>
                    <input name='product_price' type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Product Description</label>
                    <textarea id="productdesc" name='product_desc' class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Product Keywords</label>
                    <input name='product_keywords' type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <button type="submit" name='insert_new' class="btn btn-primary" style="width: 100%;"><i class="fa fa-user-md"></i> Add New Product</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="../admin_area/admin_styles/jquery/jquery.min.js"></script>
  <script src="../admin_area/admin_styles/bootstrap/js/bootstrap.min.js"></script>
  <script src="../admin_area/admin_styles/sweet-alert2/sweetalert2.js"></script>
</body>

</html>

