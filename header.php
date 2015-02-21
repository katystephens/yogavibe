<?php

// require_once('display_errors.php');
// require_once('mysql.php');
// require_once('functions.php');

session_start();

?>


<!DOCTYPE html>
<html>
	<head>
		<title>YogaVibe</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div id="nav-bar">
			<?php
				if(isset($_SESSION['user_id'])) {
					require_once('logoutnav.php');
				} else {
					require_once('login.php');
				}
			?>
		</div>
		<br><br>