<?php 
	require "header.php";
?>
<style>
	body {
		background-image: url(image/bday2.jpg);
		 background-color: #ECF0F1;
		 background-size: cover;
	}
</style>
<main>
<br>
<div class="container-fluid">
	<div class="col-md-1 col-sm-1"></div>
			
	<div class="well well-lg col-md-10 col-sm-10" id="box1">
		<h4><b><center><?php
							echo date('F Y')
							?>
				</center></b></h4>
		<div class="row">
			<div class="col-md-1 col-sm-1">
</div>
</div>
	<hr>
	<table id="bt">
		<tr>
			<th>Birthdate</th>
			<th>Name</th>
			
			
		</tr>
		
		<?php
		
		include "includes/dbh.inc.php";
		$adminId = $_SESSION['adminId'];
		$sql = "SELECT e_id, e_lastname, e_firstname, e_mail, e_phone, e_bday, e_address, e_sss_gsis, e_status FROM employees WHERE e_status='Active' AND Month(employees.e_bday) = Month(CURRENT_DATE) group by e_bday asc";
		$res = mysqli_query($conn, $sql);
		while ($line = mysqli_fetch_array($res)) {
			$id = $line['e_id'];
			$timestamp = strtotime($line['e_bday']);
			$newDate = date('F d, Y', $timestamp); 
			echo "<tr>";
			
			echo "<td><center>" .$newDate. "</center></td>";
			echo "<td><center>" .$line['e_lastname']. ",";
			echo " " .$line['e_firstname']. "</center></td>";
			
			echo '<div>';
                echo '<input type="hidden" name="adminId" value="'. $adminId .'" >';
        	echo '</div>';
			echo "</tr>";
		}
		mysqli_close($conn);
		?>
	</table>
</div>
</main>