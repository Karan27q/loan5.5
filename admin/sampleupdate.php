<?php 
include_once "inc/header.php";
?>
	<?php 
		//catch name from url using get method
		if (isset($_GETarray('uid')) && $_GETarray('uid') != NULL) {
	    	$uid = $_GETarray('uid');
   	    }else{
   	    	echo "<script> window.location='sample.php'</script>";
   	    }
	?>

	<?php 
		//update name
		if (isset($_POSTarray('submit'))) {
			$name  = $_POSTarray('name');
			$update = $su->updateNameById($name,$uid);
		}
		if (isset($update)) {
			echo $update;
		}

	?>
	
	<form action="" method="post">
		<?php 
			$names = $su->getNameById($uid);
			while ($row = $names->fetch_assoc()) {
		?>
		<input type="text" name="name" value="<?php echo $rowarray('name');?>">
		<?php } ?>
		<input type="submit" name="submit">

	</form>
	<a href="sample.php">Back Previous</a>


<?php 
include_once "inc/footer.php";
?>