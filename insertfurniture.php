


<?php
		
	include_once 'config.php';
	
	$femail=$_POST['email'];
	$fdate=$_POST['date'];
	$ftime=$_POST['time'];
	$flocation=$_POST['location'];
	$fbudget=$_POST['budget'];
	$ftheme=$_POST['theme'];
	


	$sql="Insert into furniture values('','$femail','$fdate','$ftime','$flocation','$fbudget','$ftheme')";
	
	
	if($conn->query($sql)){
		echo "<h1>Insertion successful</h1>";
	}
	
	else{
		echo "Error message" . $conn->error;
	}
	
	
	$conn->close();
	
?>
	