<?php require_once ('../header.php'); ?>
<?php require_once ('../mysql.php'); ?>

<?php 

$id = $_SESSION['user_id'];
$result= mysqli_query($conn, "select * from users where id = '$id'");

$user = mysqli_fetch_array($result);
$permission = $user['permission'];
?>

<div id="main-container">
	<?php require_once ('../logoutnav.php'); ?>

	<div id="main-container2">
		<div id="side-nav">
			<div class="nav-items"><img src="/css/home-icon.png"><a href="/dashboard/index.php">HOME</a><br></div>
			<div class="nav-items active"><img src="/css/saved-icon.png"><a href="/dashboard/saved.php">SAVED</a><br></div>
			<div class="nav-items"><img src="/css/settings-icon.png"><a href="/dashboard/#">SETTINGS</a></div>
		</div>

		<div id="main-container3">
			<div id="main-nav">
				<p class="nav-header">Your Saved Classes</p>
			</div>
			<div class="main-spacing blue"><p>You currently have no saved videos.<p></div>

		</div>
	</div>
</div>












