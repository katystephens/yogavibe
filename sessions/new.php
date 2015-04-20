<?php require_once ('../header.php'); ?>	

<div class="gray-background">
	<div class="forms">
		<a href="/index.php"><center><img src="/css/logo.png"></a></center>
		<form method="post" action="create.php">
			<p>
				<input type="text" name="email" id="email" class="input" placeholder="Email">
			</p>
			<p>
				<input type="password" name="password" id="password" class="input" placeholder="Password">
			</p>
			<input type="submit" class="button" value="Sign In">
		</form>
	</div>
</div>