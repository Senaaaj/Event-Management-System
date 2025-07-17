
<?php 
	
	include_once 'config.php';
	
	$femail=$_POST['email'];
	
	$sql="delete from furniture where email='$femail'";
	
	if($conn->query($sql)){
		
		echo "Deleted";
	}
	
	else{
		echo "Not Deleted.";
	}
	
?>	