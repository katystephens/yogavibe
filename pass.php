<?php

$password = $_POST['password'];

//encrypt it
$encrypted_password = password_hash($password, PASSWORD_DEFAULT);


echo "Encrypted Password: " . $encrypted_password;

?>


<form method="post" action="pass.php">
	Password:
	<input type="text" name="password">
	<input type="submit" value="submit">
</form>
