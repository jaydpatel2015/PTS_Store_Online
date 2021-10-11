<?php 
    include ('includes/db_config.php');
    $country_id=$_POST['country_id'];
    $get_states="SELECT * from states where country_id='$country_id'";
    $res_states=mysqli_query($con,$get_states);
?>
<option value=''>Select your state</option>
<?php 
    while($row_states=mysqli_fetch_array($res_states)){ ?>
        <option value="<?php echo $row_states['id']?>"><?php echo $row_states['name'] ?></option>
<?php } ?>