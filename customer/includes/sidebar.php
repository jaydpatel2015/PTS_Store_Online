<div class="col-lg-3">
    <!--*** CUSTOMER MENU *** -->
    <div class="card sidebar-menu mb-2">
        <div class="card-header">
            <h3 class="h4 card-title">Hello, Jay Patel</h3>
        </div>
        <img class="card-img-top" src="..." alt="Account Profile Pic">
    </div>

    <div class="card sidebar-menu">
        <div class="card-body">
            <ul class="nav nav-pills flex-column">
                <a href="my_account.php?my_orders" class="nav-link <?php if(isset($_GET['my_orders'])){echo "active";} ?>"><i class="fa fa-list"></i> My orders</a>
                <a href="my_account.php?edit_account" class="nav-link <?php if(isset($_GET['edit_account'])){echo "active";} ?>"><i class="fa fa-user"></i> Edit Account</a>
                <a href="my_account.php?change_password" class="nav-link <?php if(isset($_GET['change_password'])){echo "active";} ?>"><i class="fa fa-lock"></i> Change Password</a>
                <a href="my_account.php?delete_account" class="nav-link <?php if(isset($_GET['delete_account'])){echo "active";} ?>"><i class="fa fa-trash"></i> Delete Account</a>
                <a href="../index.php" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a>
            </ul>
        </div>
    </div>
    <!-- /.col-lg-3-->
    <!-- *** CUSTOMER MENU END ***-->
</div>