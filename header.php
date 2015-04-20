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
	<script type="text/javascript" src="/javascript/yogavibe.js"></script>
	<script type="text/javascript" src="/javascript/schedule.js"></script>
</head>
<body class="<?= $logout ?>">
