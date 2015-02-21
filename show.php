<?php require_once("header.php"); ?>
<?php require_once("mysql.php"); ?>


<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users where id =$id");
$row = mysqli_fetch_array($result);

?>

<h1>Showing a User</h1>

<?php if ($row): ?>

<p>
	<strong>First Name:</strong><br>
	<?= $row['firstname'] ?>
</p>

<p>
	<strong>Last Name:</strong><br>
	<?= $row['lastname'] ?>
</p>

<p>
	<strong>Email:</strong><br>
	<?= $row['email'] ?>
</p>

<p>
	<strong>Age:</strong><br>
	<?= $row['age'] ?>
</p>

<p>
	<strong>Date:</strong><br>
	<?= $row['created'] ?>
</p>

<p>
	<strong>Password:</strong><br>
	<?= $row['password'] ?>
</p>

<?php else: ?>

<p>
	No such student.
</p>

<?php endif ?>


<?php require_once("footer.php"); ?>

