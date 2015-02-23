<?php require_once('../header.php') ?>
<?php require_once('../mysql.php') ?>

<?php 

$id = $_SESSION['user_id'];
$result= mysqli_query($conn, "select * from users where id = '$id'");

$user = mysqli_fetch_array($result);
$permission = $user['permission'];
?>

<br><br><br><br><br><br>
<a href="regular.php">Regular User</a><br><br><br>

<?php
if ($permission == "20"){ ?>
	<a href="super.php">Super User</a>
<?php } else {

}

?>








