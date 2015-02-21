<?php require_once('../header.php') ?>

	<form method="post" action="create.php" id="form">
		<p>
			<input type="text" name="email" id="email" class="input" placeholder="Email">
		</p>
		<p>
			<input type="password" name="password" id="password" class="input" placeholder="Password">
		</p>
		<input type="submit" class="button" value="Sign In">
	</form>

<?php require_once('footer.php') ?>
