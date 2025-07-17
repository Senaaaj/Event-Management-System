
<?php
	
	include_once 'config.php';
	
	$sql="select orderNO,email,date,time,location,budget,theme from furniture";
	
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		
		echo "<table border='1'>";
		
		while($data=$result->fetch_assoc()){
			
			echo "<tr>";
			echo "<td>".$data["orderNO"]. "</td>". "<td>" .$data["email"]. "</td>". "<td>" .$data["date"]. "</td>". "<td>" .$data["time"]. "</td>". "<td>" .$data["location"]. "</td>". "<td>" .$data["budget"]. "</td>". "<td>" .$data["theme"]. "</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
	
	else{
		
		echo "No result Found";
	}
	
	
	$conn->close();
	
	

?>	