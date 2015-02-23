<?php require_once('../header.php') ?>
<?php require_once('../mysql.php') ?>

<?php

$email =  $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "select * from users where email = '$email'");

$row = mysqli_fetch_array($result);
 

if ($row) {
	//users exists with email provided
	//verify password provided
	if (password_verify($password, $row['password'])) {
		// save user id into session:
		$_SESSION['user_id'] = $row['id'];
		$success = true;
	} else {
		//show failure message
		$success = false;
	}
} else {
	// no such user exists with email provided
	// show failure message, or redirect
	$success = false;
}

?>

<?php if ($success): ?>
<?php header("Location: /dashboard/index.php"); ?>


<?php else: ?>
<h1>Invalid email address and/or password.</h1>
<?php endif ?>


<?php require_once('../footer.php') ?>