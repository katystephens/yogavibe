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
			<div class="nav-items active"><img src="/css/home-icon.png"><a href="/dashboard/index.php">HOME</a><br></div>
			<div class="nav-items"><img src="/css/saved-icon.png"><a href="/dashboard/saved.php">SAVED</a><br></div>
			<div class="nav-items"><img src="/css/settings-icon.png"><a href="/dashboard/settings.php">SETTINGS</a></div>
		</div>

		<div id="main-container3">
			<div id="main-nav">
				<div class="main-active"><a href="/dashboard/index.php">Custom Classes</a></div>
				<div><a id="build-classes" href="/dashboard/build-your-own.php">Build Your Own</a></div>
				<div><a id="scheduled-classes" href="/dashboard/schedule.php">Scheduled Classes</a></div>
			</div>

			<div id="class-options">
				<div id="duration-option" class="float-left">
					<p class="float-left">Duration:</p>
					<select class="float-right">
						<option value="five">5</option>
						<option value="ten">10</option>
						<option value="twenty">20</option>
						<option value="thirty">30</option>
						<option value="fourty-five">45</option>
						<option value="sixty" selected>60</option>
						<option value="ninety">90</option>
					</select>
				</div>
				<div id="level-option" class="float-left">
					<p class="float-left">Level:</p>
					<select class="float-right">
						<option value="one-beginner">1 beginner</option>
						<option value="two-intermediate">2 intermediate</option>
						<option value="three-advanced">3 advanced</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>












