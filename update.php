<?php require_once("header.php"); ?>
<?php require_once("mysql.php"); ?>


<?php

$id = $_POST['id'];


$fname = mysqli_real_escape_string($conn, $_POST['first_name']);
$lname = mysqli_real_escape_string($conn, $_POST['last_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

mysqli_query($conn, "UPDATE users SET firstname = '$fname', lastname = '$lname', email = '$email', age = '$age', created = '$date', password = '$password' WHERE id = '$id'");

header("Location: show.php?id=$id");

?>

<h1>User Updated</h1>

<p>
	<strong>First Name:</strong><br>
	<?= $fname ?>
</p>

<p>
	<strong>Last Name:</strong><br>
	<?= $lname ?>
</p>

<p>
	<strong>Email:</strong><br>
	<?= $email ?>
</p>

<p>
	<strong>Age:</strong><br>
	<?= $age ?>
</p>

<p>
	<strong>Date Created:</strong><br>
	<?= $date ?>
</p>

<p>
	<strong>Password:</strong><br>
	<?= $password ?>
</p>

<?php require_once("footer.php") ?>
