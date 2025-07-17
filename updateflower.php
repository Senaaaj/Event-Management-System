
<?php

	include_once 'config.php';
	
	$pemail=$_POST['wemail'];
	$pdate=$_POST['wdate'];
	$ptime=$_POST['wtime'];
	$pbudget=$_POST['wbudget'];
	$pshop=$_POST['wshop'];
	$pinfo=$_POST['winfo'];
	
	if(empty($pemail)){
		
		echo "Email should not be Empty";
	}
	
	else{
		$sql="update flower set date='$pdate', time='$ptime', budget='$pbudget', shop='$pshop', info='$pinfo' where email='$pemail' ";
		
		
		if($conn->query($sql)){
			echo "<h1>Updated successfully</h1>";
		}
		
		else{
			echo "Not Updated.";
		}
	}
	
?>	