<?php require_once('../header.php') ?>
<?php require_once('../mysql.php') ?>

<?php

$fname = mysqli_real_escape_string($conn, $_POST['first_name']);
$lname = mysqli_real_escape_string($conn, $_POST['last_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];

/**
 * TODO: 
 * password_confirm was undefined
 */
// $password_confirm = $password;

$errors = [];

if (strlen($fname) == 0) {
	$errors[] = "Please enter your first name";
}

if (strlen($lname) == 0) {
	$errors[] = "Please enter your last name";
}

if (strlen($email) == 0){
	$errors[] = "Please enter your email";
} 

if (strlen($password) == 0){
	$errors[] = "Please enter your password";
} 

$form_valid = count($errors) == 0;

if ($form_valid) {
	$encrypted_password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO users (firstname, lastname, email, password) VALUES ('$fname', '$lname', '$email', '$encrypted_password')");
	
	$error = mysqli_error($conn);

	if($error !== '')
	{
		$errors[] = $error;
	}
}

$mysql_valid = count($errors) == 0;

// var_dump($errors);

?>

<?php if ($form_valid && $mysql_valid): ?>

<?php header("Location: /dashboard/index.php"); ?>

<?php else: ?>

	<div id="error-box">
		<center>
			<ul>
				<?php foreach($errors as $error): ?>
					<li><?= $error ?></li>
				<?php endforeach ?>
			</ul>
		</center>
	</div>
	<?php require_once('new.php'); ?>

<?php endif ?>

<?php require_once('../footer.php') ?>








