<?php require_once("header.php"); ?>
<?php require_once(".mysql.php"); ?>


<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users where id =$id");
$row = mysqli_fetch_array($result);

?>

<h1>Editing a User</h1>

<?php if ($row): ?>

	<form method="post" action="update.php" id="form">
		<p>
			<input type="text" name="first_name" id="first_name" class="input" placeholder="First Name" value="<?= $row['firstname'] ?>">
		</p>
		<p>
			<input type="text" name="last_name" id="last_name" class="input" placeholder="Last Name" value="<?= $row['lastname'] ?>">
		</p>
		<p>
			<input type="text" name="email" id="email" class="input" placeholder="Email" value="<?= $row['email'] ?>">
		</p>
		<p>
			<input type="text" name="age" id="age" class="input" placeholder="Age" value="<?= $row['age'] ?>">
		</p>
		<p>
			<input type="text" name="date" id="date" class="input" placeholder="Date Created" value="<?= $row['created'] ?>">
		</p>
		<p>
			<input type="text" name="password" id="password" class="input" placeholder="Password" value="<?= $row['password'] ?>">
		</p>
		<input type="hidden" name="id" value="<?= $row['id'] ?>">
		<input type="submit" class="button" value="Update Account">
	</form>

<?php else: ?>

<p>
	No such student.
</p>

<?php endif ?>

<?php require_once("footer.php") ?>


