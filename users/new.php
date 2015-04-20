<?php 

require_once('../header.php');

$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

?>

<div class="gray-background">
	<div class="forms">
		<a href="/index.php"><center><img src="/css/logo.png"></a></center>
		<form method="post" action="create.php" id="form">
			<p>
				<input type="text" name="first_name" id="first_name" class="input" placeholder="First Name" value="<?= $first_name ?>">
			</p>
			<p>
				<input type="text" name="last_name" id="last_name" class="input" placeholder="Last Name" value="<?= $last_name ?>">
			</p>
			<p>
				<input type="text" name="email" id="email" class="input" placeholder="Email" value="<?= $email ?>">
			</p>
			<p>
				<input type="password" name="password" id="password" class="input" placeholder="Password">
			</p>
			<input type="submit" class="button" value="Create Account">
		</form>
	</div>
</div>

<?php //require_once('../footer.php') ?>
