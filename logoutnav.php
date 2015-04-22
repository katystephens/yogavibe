<div id="dash-nav-bar">

	<?php
		if(isset($_SESSION['user_id'])) {
			$id = $_SESSION['user_id'];
			$result= mysqli_query($conn, "select * from users where id = '$id'");

			$user = mysqli_fetch_array($result);
			$first_name = $user['firstname'];
			?><p>Welcome Back, <?= $first_name ?></p><?php
		} 
	?>


	

				<img id="logo" width="150px" src="/css/logo-type.png">
				<ul id="logout">
					<li><a href="/logout.php">Logout</a></li>
				</ul>
</div>

