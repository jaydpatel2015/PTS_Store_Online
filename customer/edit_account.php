<!-- edit_account starts here -->
<div class="col-md-9 mb-3 text-center bg-white p-4">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Edit Account Details</h1>
        </div>
        <div class="card-body">
            <div class="form-group text-left">
                <form action="customer_register.php" method="post" enctype="multipart/form-data">
                    <label for="">Customer Name</label>
                    <input type="text" name="c_name" class="form-control">                    
                    <br>
                    <label for="">Customer Email</label>
                    <input type="email" name="c_email" class="form-control">                    
                    <br>
                    <label for="">Username</label>
                    <input type="text" name="c_uname" class="form-control">                    
                    <br>
                    <label for="">Contact No.   </label>
                    <input type="text" name="c_nbr" class="form-control">                    
                    <br>
                    <label for="">Country</label>
                    <input type="text" name="c_ctry" class="form-control">                    
                    <br>
                    <label for="">State</label>
                    <input type="text" name="c_st" class="form-control">                    
                    <br>
                    <label for="">City</label>
                    <input type="text" name="c_cty" class="form-control">                    
                    <br>
                    <label for="">Profile Pic</label>
                    <div class="form-group d-flex">
                        <img style="height:100px;width:100px;margin-right:10px" src="./cust_img/286_180_people.jpg" alt="Profile Pic">    
                        <input type="file" name="c_img" id="cpicTag" class="form-control">                    
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" value="edit_account" class="btn btn-outline-dark" id="regForm"><i class="bi bi-person-fill"></i>Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- edit_account Sidebar Ends here -->