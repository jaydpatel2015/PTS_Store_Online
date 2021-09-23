<?php 
    include "./includes/db_config.php";
    include "./functions/functions.php";
?>

<div class="card mb-3" id="sidebarProCat">
    <div class="card-header" id='sidebarTitle'>Product Categories</div>
    <ul class="list-group list-group-flush" id='proCatList'>
        <?php get_prod_cat() ?>
    </ul>
</div>

<div class="card mb-3" id="sidebarProCat">
    <div class="card-header" id='sidebarTitle'>Categories</div>
    <ul class="list-group list-group-flush" id='proCatList'>
        <?php getCat() ?>
    </ul>
</div>
