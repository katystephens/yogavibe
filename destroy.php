<?php require_once('d-header.php') ?>
<?php require_once('mysql.php') ?>

<?php

$fname = mysqli_real_escape_string($conn, $_POST['first_name']);
$lname = mysqli_real_escape_string($conn, $_POST['last_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM users where id=$id");

header("Location: index.php");

?>

