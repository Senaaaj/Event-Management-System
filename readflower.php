
<?php
	
	include_once 'config.php';
	
	$sql="select orderNO,email,date,time,budget,shop,info from flower";
	
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		
		echo "<table border='1'>";
		
		while($data=$result->fetch_assoc()){
			
			echo "<tr>";
			echo "<td>".$data["orderNO"]. "</td>". "<td>" .$data["email"]. "</td>". "<td>" .$data["date"]. "</td>". "<td>" .$data["time"]. "</td>". "<td>" .$data["budget"]. "</td>". "<td>" .$data["shop"]. "</td>". "<td>" .$data["info"]. "</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
	
	else{
		
		echo "No result Found";
	}
	
	
	$conn->close();
	
	

?>	