<?php
	include 'inc/header.php';
 ?>

<style>
	.tblone{width: 550px; margin: 0 auto; border: 2px solid #ddd;}
	.tblone tr td{text-align: justify;}
    .tblone input[type="text"]{width: 400px; padding: 5px; font-size: 15px;}

</style>


<?php
    $cmrId = Session::get("cmrId");
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $updateCmr = $cmr->cmrProfileUpdate($_POST, $cmrId);
    }
?>



 <div class="main">
    <div class="content">
    	<div class="section group">

    		<?php
    			$id = Session::get("cmrId");
    			$getCmr = $cmr->getCustomerProfile($id);
    			if($getCmr){
    				while ($result = $getCmr->fetch_assoc()) {
    					
    		?>
	<form action="" method="post">
       
    	<table class="tblone">
    		<tr >
    			<td colspan="2"> 
                <?php
                    if(isset( $updateCmr)){
                        echo " $updateCmr";
                    } ?>
                    <h2>Update Profile Details</h2>
                 </td>
 
    		</tr>
    		<tr>
    			<td width="20%">Name</td>
                <td><input type="text" name="name" value="<?php echo $result['name']; ?>"></td>

    		</tr>
    		<tr>
    			<td>Address</td>
                <td><input type="text" name="address" value="<?php echo $result['address']; ?>"></td>

    		</tr>
    		<tr>
    			<td>City</td>
                <td><input type="text" name="city" value="<?php echo $result['city']; ?>"></td>

    		</tr>
    		<tr>
    			<td>Country</td>
                <td><input type="text" name="country" value="<?php echo $result['country']; ?>"></td>

    		</tr>
    		<tr>
    			<td>Zip-Code</td>
                <td><input type="text" name="zipcode" value="<?php echo $result['zipcode']; ?>"></td>
    		</tr>
    		<tr>
    			<td>Phone</td>
                <td><input type="text" name="phone" value="<?php echo $result['phone']; ?>"></td>

    		</tr>
    		<tr>
    			<td>E-mail</td>
                <td><input type="text" name="email" value="<?php echo $result['email']; ?>"></td>

    		</tr>
    		<tr>
    			<td></td>
    			<td><input type="submit" name="submit" value="Save"></td>
    		</tr>

    	</table>
    <?php }} ?>
	</form>			
 		</div>
 	</div>
	</div>


<?php
	include 'inc/footer.php';
 ?>
