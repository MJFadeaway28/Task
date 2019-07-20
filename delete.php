<?php  
	$connect = mysqli_connect("localhost", "root", "", "task1");
	$sql = "DELETE FROM employees WHERE e_id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>