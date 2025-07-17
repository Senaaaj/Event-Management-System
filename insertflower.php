
<?php
		
	include_once 'config.php';
	
	$pemail=$_POST['wemail'];
	$pdate=$_POST['wdate'];
	$ptime=$_POST['wtime'];
	$pbudget=$_POST['wbudget'];
	$pshop=$_POST['wshop'];
	$pinfo=$_POST['winfo'];
	


	$sql="Insert into flower values('','$pemail','$pdate','$ptime','$pbudget','$pshop','$pinfo')";
	
	
	if($conn->query($sql)){
		echo "<h1>Insertion successful</h1>";
	}
	
	else{
		echo "Error message" . $conn->error;
	}
	
	
	$conn->close();
	
?>
	