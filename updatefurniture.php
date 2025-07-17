
<?php

	include_once 'config.php';
	
	$femail=$_POST['email'];
	$fdate=$_POST['date'];
	$ftime=$_POST['time'];
	$flocation=$_POST['location'];
	$fbudget=$_POST['budget'];
	$ftheme=$_POST['theme'];
	
	if(empty($femail)){
		
		echo "Email should not be Empty";
	}
	
	else{
		$sql="update furniture set date='$fdate', time='$ftime', location='$flocation', budget='$fbudget', theme='$ftheme' where email='$femail' ";
		
		
		if($conn->query($sql)){
			echo "Updated successfully";
		}
		
		else{
			echo "Not Updated.";
		}
	}
	
?>	