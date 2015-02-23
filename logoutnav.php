<?php require_once('header.php') ?>
<?php require_once('mysql.php') ?>

<?php 

$id = $_SESSION['user_id'];
$result= mysqli_query($conn, "select * from users where id = '$id'");

$user = mysqli_fetch_array($result);
$first_name = $user['firstname'];
?>

<p>Welcome Back, <?= $first_name ?></p>

			<a href="/index.php"><img width="150px" src="/css/logo.png"></a>
			<ul>
				<li><a href="/logout.php">Log out</a></li>
			</ul>