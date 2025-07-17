
<?php 
	
	include_once 'config.php';
	
	$pemail=$_POST['wemail'];
	
	$sql="delete from flower where email='$pemail'";
	
	if($conn->query($sql)){
		
		echo "<h1>Record Deleted</h1>";
	}
	
	else{
		echo "Not Deleted.";
	}
	
?>	