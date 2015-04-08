<div id="dash-nav-bar">
	<?php 

	$id = $_SESSION['user_id'];
	$result= mysqli_query($conn, "select * from users where id = '$id'");

	$user = mysqli_fetch_array($result);
	$first_name = $user['firstname'];
	?>

	<p>Welcome Back, <?= $first_name ?></p>

				<a href="#"><img id="hamburger" src="/css/hamburger.png"></a>
				<img id="logo" width="150px" src="/css/logo-onwhite.png">
				<ul id="logout">
					<li><a href="/logout.php">Logout</a></li>
				</ul>
</div>

