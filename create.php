<?php require_once('header.php') ?>
<?php require_once('mysql.php') ?>

<?php

$fname = mysqli_real_escape_string($conn, $_POST['first_name']);
$lname = mysqli_real_escape_string($conn, $_POST['last_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];

/**
 * TODO: 
 * password_confirm was undefined
 */
$password_confirm = $password;

if (strlen($fname) == 0) {
	$form_valid = false;
 //no email:
 //show error message
 //display prefilled form
} else if (strlen($email) == 0){
	$form_valid = false;
} else {
	$form_valid = true;
 //proceed to encrypt password and insert
 //show success message, or redirect
	$encrypted_password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn, "INSERT INTO users (firstname, lastname, email, password) VALUES ('$fname', '$lname', '$email', '$encrypted_password')");
}

?>

<?php if ($form_valid): ?>

<h1>User Created!</h1>

<p>
	<strong>First Name:</strong><br>
	<?= $_POST['first_name'] ?>
</p>

<p>
	<strong>Last Name:</strong><br>
	<?= $_POST['last_name'] ?>
</p>

<p>
	<strong>Email:</strong><br>
	<?= $_POST['email'] ?>
</p>

<p>
	<strong>Password:</strong><br>
	<?= $_POST['password'] ?>
</p>

<?php else: ?>
<h1>There was an error</h1>
<?php require_once(dirname(__DIR__).'/new.php'); ?>
<?php endif ?>

<?php require_once(dirname(__DIR__).'/footer.php') ?>
