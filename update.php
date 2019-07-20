<?php
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "task1";

	$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	} 
 
	$id=$_POST['e_id'];
 
	$e_lastname =  $_POST['e_lastname'];
	$e_firstname =  $_POST['e_firstname'];
	$e_mail =  $_POST['e_mail'];
	$e_phone =  $_POST['e_phone'];
	$e_bday =  $_POST['e_bday'];
	$e_address =  $_POST['e_address'];
	$e_sss_gsis =  $_POST['e_sss_gsis'];
	$e_status =  $_POST['e_status'];
 
	mysqli_query($conn,"update employees set e_lastname='$e_lastname', e_firstname='$e_firstname', e_mail='$e_mail', e_phone='$e_phone', e_bday='$e_bday', e_address='$e_address', e_sss_gsis='$e_sss_gsis', e_status='$e_status' where e_id='$id'");
	header('location:employee.php');
 
?>