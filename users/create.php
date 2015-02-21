<?php require_once('../header.php') ?>
<?php require_once('../mysql.php') ?>

<?php

$fname = mysqli_real_escape_string($conn, $_POST['first_name']);
$lname = mysqli_real_escape_string($conn, $_POST['last_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];

$errors = [];

if (strlen($fname) == 0) {
	$errors[] = "Please enter your name";
}
if (strlen($email) == 0){
	$errors[] = "Please enter your email";
} 
if (strlen($password) == 0){
	$errors[] = "Please enter your password";
} 
if (strlen($password_confirm) == 0){
	$errors[] = "Please confirm your password";
} 
if ($password != $password_confirm){
	$errors[] = "Your passwords do not match";
} 

$form_valid = count($errors) == 0;

if ($form_valid) {
	$encrypted_password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn, "INSERT INTO users (firstname, lastname, email, password) VALUES ('$fname', '$lname', '$email', '$encrypted_password')");
	$errors[] = mysqli_error($conn);
}

$form_valid = count($errors) == 0;

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
<ul>
<?php foreach($errors as $error): ?>
	<li><?= $error ?></li>
<?php endforeach ?>
</ul>
<?php require_once('new.php'); ?>
<?php endif ?>

<?php require_once('footer.php') ?>








