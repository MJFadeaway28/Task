<?php
/*$connection = mysqli_connect("localhost","root","strawberrychampagne28");
$db = mysqli_select_db($connection, 'task1');*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['insertdata'])) 
{
	
	$e_lastname =  $_POST['e_lastname'];
	$e_firstname =  $_POST['e_firstname'];
	$e_mail =  $_POST['e_mail'];
	$e_phone =  $_POST['e_phone'];
	$e_bday =  $_POST['e_bday'];
	$e_address =  $_POST['e_address'];
	$e_sss_gsis =  $_POST['e_sss_gsis'];
	$e_status =  $_POST['e_status'];

	/*$query = "INSERT INTO `employees` (`e_id`, `e_lastname`, `e_firstname`, `e_mail`, `e_phone`, `e_bday`, `e_address`, `e_sss_gsis`, `e_status`) VALUES (NULL, '$e_lastname', '$e_firstname', '$e_mail', '$e_phone', '$e_bday', '$e_address', '$e_sss_gsis', '$e_status');";
	$query_run = mysqli_query($connection, $query);*/

	$stmt = $conn->prepare("INSERT INTO `employees` (`e_lastname`, `e_firstname`, `e_mail`, `e_phone`, `e_bday`, `e_address`, `e_sss_gsis`, `e_status`) VALUES (?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssss", $e_lastname, $e_firstname, $e_mail, $e_phone, $e_bday, $e_address, $e_sss_gsis, $e_status);

	$stmt->execute();
	echo '<script>alert("Data Successfully Updated");
	location="employee.php";</script>';

	$stmt->close();
	$conn->close();
	
	

}

?>