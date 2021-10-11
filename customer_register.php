<?php
include('includes/db_config.php');
include('./functions/functions.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prime Time Shopper</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap">
    <!-- owl carousel-->
    <link rel="stylesheet" href="styles/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="styles/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="styles/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="styles/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="./logo/primetime_icon.png">
</head>
</head>

<body>
     <!-- Header File Loads here -->
     <?php include ('includes/header.php'); ?>
   <!-- Header files ends here-->
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li aria-current="page" class="breadcrumb-item active">Register / Sign-in</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6">
                        <div class="box">
                            <h1>New account</h1>
                            <p class="lead">Not our registered customer yet?</p>
                            <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                            <p class="text-muted">If you have any questions, please feel free to <a href="contact.php">contact us</a>, our customer service center is working for you 24/7.</p>
                            <hr>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" name='customer_name' class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" name='customer_email' class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" name='customer_pass' class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Reconfirm Password</label>
                                    <input id="password" type="password" name='r_c_password' class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <select id="country_id" name="customer_country" class='form-control'>
                                    <option value=''>Select your country</option>
                                    <?php include ('includes/db_config.php'); 
                                        $get_country='select id,name from countries';
                                        $run_country_query=mysqli_query($con,$get_country);
                                        while($row_country=mysqli_fetch_array($run_country_query)){
                                    ?>
                                        <option value="<?php echo $row_country['id'] ?>"><?php echo $row_country['name'] ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>State</label>
                                    <select id="state_id" name="customer_state" class='form-control'>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <select id="city_id" name="customer_city" class='form-control'>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input id="address" name='customer_address' type="text" class="form-control">
                                </div>
                                <div class="form-group">    
                                    <label for="image">Profile Pic</label>
                                    <input id="profile_pic" name='customer_img' type="file" class="form-control">
                                </div>
                                <div class="text-center">
                                    <button type="submit" name='register' class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box">
                            <h1>Login</h1>
                            <p class="lead">Already our customer?</p>
                            <hr>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" name="password" class="form-control">
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="login" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    

    <!-- *** Copyright Start *** -->
    <?php include('./includes/footer.php'); ?>
    <!-- *** Copyright End ***-->

    <!-- JavaScript files-->
    <script src="styles/jquery/jquery.min.js"></script>
    <script src="styles/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="styles/jquery.cookie/jquery.cookie.js"> </script>
    <script src="styles/owl.carousel/owl.carousel.min.js"></script>
    <script src="styles/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>

<script type='text/javascript'>
$(document).ready(function(){
    $('#country_id').on('change',function(){
        var country_id=this.value;
        $.ajax({
            url:'states.php',
            method:'post',
            data:{
                country_id:country_id,
            },
            success:function(result){
                $('#state_id').html(result);
                $('#city_id').html("<option value=''>Select your state first</option>");
            }
        })
    })

    $('#state_id').on('change',function(){
        var state_id=this.value
        $.ajax({
            url:'cities.php',
            method:'post',
            data:{
                state_id:state_id,
            },
            success:function(result){
                $('#city_id').html(result);
            }
        })
    })  
})  
</script>
</body>
</html>

