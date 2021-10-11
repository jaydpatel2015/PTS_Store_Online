<?php 
    include ('includes/db_config.php');
    $state_id=$_POST['state_id'];
    $get_city="SELECT * FROM cities where state_id='$state_id'";
    $res_city=mysqli_query($con,$get_city);
?>
<option value=''>Select your City</option>;
<?php
    while($res_city_result=mysqli_fetch_array($res_city)){
?>
    <option value='<?php echo $res_city_result['id']?>'><?php echo $res_city_result['name'] ?></option>
<?php 
}
?>