<?php  
	$connect = mysqli_connect("localhost", "root", "", "task1");
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE employees SET ".$column_name."='".$text."' WHERE e_id='".$id."'";  
	if(mysqli_query($connect, $sql))  
	


 ?>