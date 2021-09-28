<div id="customer-orders" class="col-lg-9">
    <div class="box">
        <h1>Edit Customer Details</h1>
        <hr>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" name='c_name' value='' class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="text" name='c_email' value='' class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name='c_password' value='' class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Reconfirm Password</label>
                <input id="password" type="password" name='r_c_password' value='' class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Country</label>
                <input id="country" name='c_country' value='' type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input id="state" name='c_state' value='' type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input id="state" name='c_city' type="text" value='' class="form-control">
            </div>
            <div class="form-group">
                <label for="address">address</label>
                <input id="address" name='c_address' type="text" value='' class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Profile Pic</label>
                <div  class='d-flex justify-content-between'>
                    <img src="" alt="existingPic" height="150" width="150">
                    <input id="profile_pic" name='c_img' type="file" class="form-control">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" name='register' class="btn btn-primary"><i class="fa fa-user-md"></i> Update</button>
                <button type="reset" class="btn btn-primary"><i class="fa fa-window-close"></i> Reset</button>
            </div>
        </form>
    </div>
</div>