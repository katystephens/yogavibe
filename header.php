<?php require_once('mysql.php');

session_start();

$logout = '';

if(!isset($_SESSION['user_id'])) 
{
	$logout = 'logout';
}
	

?>


<!DOCTYPE html>
<html>
<head>
	<title>YogaVibe</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<script type="text/javascript" src="/javascript/jquery.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
 	<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
	<script type="text/javascript" src="/javascript/yogavibe.js"></script>
	<script type="text/javascript" src="/javascript/schedule.js"></script>
	<link rel="shortcut icon" href="/css/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/css/favicon.ico" type="image/x-icon">
</head>
<body class="<?= $logout ?>">
