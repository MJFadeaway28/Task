<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP CRUD with Bootstrap Modal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<style>
		* {box-sizing: border-box;}

		/* Style the navbar */
		.topnav {
		  overflow: hidden;
		  background-color: #FDFEFE;

		}

		/* Navbar links */
		.topnav a {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 14px 10px;
		  text-decoration: none;
		  font-size: 17px;
		}

		/* Navbar links on mouse-over */
		.topnav a:hover {
		  background-color: #2D2D2D;
		  color: white;
		  text-decoration: none;
		}

		/* Active/current link */
		.topnav a.active {
		  background-color: #2196F3;
		  color: white;
		  text-decoration: none;
		}

		/* Style the input container */
		.topnav .login-container {
		  float: right;
		}

		/* Style the input field inside the navbar */
		.topnav input[type=text] {
		  padding: 6px;
		  margin-top: 8px;
		  margin-bottom: 10px;
		  font-size: 17px;
		  border: none;
		  background-color: #E5E7E9;
		  width: 150px; /* adjust as needed (as long as it doesn't break the topnav) */
		}

		.topnav input[type=password] {
		  padding: 6px;
		  margin-top: 8px;
		  margin-bottom: 1px;
		  font-size: 17px;
		  border: none;
		  width:165px;
		  background-color: #E5E7E9;
		}

		.topnav p{
			font-size: 11px;
			font-weight: bold;
		}

		/* Style the button inside the input container */
		.topnav .login-container button {
		  float: right;
		  background-color: #DC0F0F  ;
		  color: #FDFEFE;
		  padding: 9px;
		  margin-top: 8px;
		  margin-bottom: 1px;
		  margin-right: 16px;
		  margin-left: 4px;
		  border: none;
		  cursor: pointer;
		  width: 100px;
		  opacity: 0.9;
		  font-weight: bold;
		  font-size: 13px;
		}

		.topnav .login-container button:hover {
		  background: #2D2D2D;
		}

		/* Add responsiveness - On small screens, display the navbar vertically instead of horizontally */
		@media screen and (max-width: 600px) {
		  .topnav .login-container {
		    float: none;
		}
		.topnav a, .topnav input[type=text], .topnav input[type=password], .topnav .login-container button {
		    display: block;
		    text-align: left;
		    width: 100%;
		    margin: 0;
		    padding: 14px;
		}
		.topnav input[type=text] {
		    border: 1px solid #ccc; 
		}
		.topnav input[type=password] {
		    border: 1px solid #ccc;  
		}
		      	}
      	#box1{
          margin-top: 5%;
          background-color: white;
      	}
      	#title1{
          text-align: center;
      	}
	    #bt {
	        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	        border-collapse: collapse;
	        font-size: 15px;
	        width: 100%;
	    }

	    #bt td, #bt th {
	        border: 1px solid #ddd;
	        padding: 8px;
	    }

	    #bt tr{background-color: white;}

	    #bt tr:hover {background-color: #ddd;}

	    #bt th {
	        padding-top: 12px;
	        padding-bottom: 12px;
	        text-align: center;
	        background-color: #DC0F0F;
	        color: white;
	    }
	</style>
</head>
<body>
	<div class="topnav">			
			
				<?php 
					if (isset($_SESSION['adminId'])) {
						echo '<a><center><span class="glyphicon glyphicon-user"></span></center></a>';
						echo '<a href="employee.php"><b><center>Employees</center></b></a>';
						echo '<a href="incomingbirthdays.php"><b><center>Incoming Birthdays</center></b></a>';
						echo '<div class="login-container">';
		 				echo '<form action="includes/logout.inc.php" method="post">
									<button type="submit" name="logout-submit"><center>Logout</center></button>
							  </form>';
						echo '</div>';
		 			}
		 			else {	
		 				echo '<div class="login-container">';	 				
		 				echo '<form action="includes/login.inc.php" method="post">
									<input type="text" name="mailuid" placeholder="Username/E-mail...">
									<input type="password" name="pwd" placeholder="Password...">
									<button type="submit" name="login-submit">Login</button>
							  </form>';
						if (isset($_GET["error"])) {
							if ($_GET["error"] == "emptyfields") {
								echo '<p><font color="red">Fill in all fields!</font></p>';
							}
							else if ($_GET["error"] == "wrongpwd") {
								echo '<p><font color="red">Your password is incorrect!</font></p>';
							}
							else if ($_GET["error"] == "nouser") {
								echo '<p><font color="red">User does not exist!</font></p>';
							}
						}
						echo '</div>';
		 			}
				 ?>
			
	</div>
</body>
</html>