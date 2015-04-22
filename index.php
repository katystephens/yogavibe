<?php require_once('header.php'); ?>
<?php require_once('mysql.php'); ?>


<div id="main-background">	
	<?php
		if(isset($_SESSION['user_id'])) {
			//require_once('logoutnav.php');
			header('Location: dashboard/index.php');
		} else {
			require_once('login.php');
		}
	?>

	<div id="welcome">
		<div id="get-started">
			<p>Online yoga sequence builder.<br> 
			Customize your yoga to fit your needs.</p>
			<p>$10 a month. 30 day free trial.</p>
			<p><a class="btn-medium btn-blue" href="users/new.php">Get Started Now</a></p>
		</div>
	</div>

	<div id="about-section">
		<h1>What can you do with YogaVibe?</h1>
		<p>Customize and build your own yoga sequences.</p>
		<p>Pick a yoga sequence based on your condition.</p>
		<p>Choose a series from a list of pre built sequences.</p>
		<p>Learn how to do postures correctly.</p>
		<p>Practice meditation through guided instruction.</p>
		<p>and many, many more.</p>
		<img class="right" src="images/ipad-imac.png">
	</div>

	<div id="join-today">
		<div id="join-today-p">
			<p class="white">Become a YogaVibe member today.</p>
			<p class="blue">TRY IT OUT FOR FREE.</p>
			<p class="gray">Get access to online yoga classes. Build your own practice. Watch live classes on your schedule.</p>
			<p><a class="btn-medium btn-blue" href="users/new.php">Sign Up Today!</a></p>
		</div>
	</div>

</div>


<?php require_once("footer.php"); ?>
