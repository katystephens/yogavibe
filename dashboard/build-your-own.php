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
				<div><a href="/dashboard/index.php">Custom Classes</a></div>
				<div class="main-active"><a id="build-classes" href="/dashboard/build-your-own.php">Build Your Own</a></div>
				<div><a id="scheduled-classes" href="/dashboard/schedule.php">Scheduled Classes</a></div>
			</div>

			<div id="class-options">
				<a class="float-right" href="#">Save Sequence</a>
				<div id="focus-option" class="float-right">
					<p class="float-left">Focus:</p>
					<select class="float-right">
						<option value="all">All</option>
						<option value="shoulders">Shoulders</option>
						<option value="hamstrings">Hamstrings</option>
						<option value="upper-back">Upper Back</option>
						<option value="lower-back">Lower Back</option>
						<option value="quadriceps">Quadriceps</option>
						<option value="neck">Neck</option>
					</select>
				</div>
				<div id="duration-option" class="float-right">
					<p class="float-left">Duration:&nbsp; 0:00</p>
				</div>
			</div>
			<div class="all-build">
				<div class="build-title"><p>Standing</p></div>
				<div class="build-area" id="build-standing"></div>
			</div>
			<div class="all-build">
				<div class="build-title"><p>Ground</p></div>
				<div class="build-area" id="build-ground"></div>
			</div>
			<div class="all-build add-space">
				<div class="build-title"><p>Your Sequence</p></div>
				<div class="build-area" id="build-sequence"></div>
			</div>
		</div>
	</div>
</div>












