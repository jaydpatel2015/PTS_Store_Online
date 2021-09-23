<!-- My Account Sidebar starts here -->
<div class="col-md-3 mb-3 text-center">
    <div class="card">
        <img class="card-img-top" id="sideBarImg" src="../customer/cust_img/286_180_people.jpg" alt="Card image cap" class="img-responsive">
        <h5 class="card-header text-center">Jay Patel</h5>
        <div class="card-body text-left">
            <ul class="list-group">
                <li class="list-group-item <?= (isset($_GET['my_orders']))? "bg-dark active" :"" ?>"><i class="bi bi-handbag-fill"></i>&nbsp;<a href="my_account.php?my_orders">My Order</a></li>
                <li class="list-group-item <?= (isset($_GET['my_addresses']))? "bg-dark active" :"" ?>"><i class="bi bi-geo-alt-fill"></i>&nbsp;<a href="my_account.php?my_addresses">My Addresses</a></li>
                <li class="list-group-item <?= (isset($_GET['edit_account']))? "bg-dark active" :"" ?>"><i class="bi bi-people-fill"></i>&nbsp;<a href="my_account.php?edit_account">Edit Account</a></li>
                <li class="list-group-item <?= (isset($_GET['change_password']))? "bg-dark active" :"" ?>"><i class="bi bi-key-fill"></i>&nbsp;<a href="my_account.php?change_password">Change Password</a></li>
                <li class="list-group-item <?= (isset($_GET['wish_list']))? "bg-dark active" :"" ?>"><i class="bi bi-suit-heart-fill"></i>&nbsp;<a href="my_account.php?wish_list">My Wish List</a></li>
                <li class="list-group-item <?= (isset($_GET['delete_account']))? "bg-dark active" :"" ?>"><i class="bi bi-file-excel-fill"></i>&nbsp;<a href="my_account.php?delete_account">Delete Account</a></li>
                <li class="list-group-item <?= (isset($_GET['log_out']))? "bg-dark active" :"" ?>"><i class="bi bi-door-open-fill"></i>&nbsp;<a href="my_account.php?log_out">Log Out</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- My Account Sidebar Ends here -->