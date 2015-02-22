<?php

	$server = $_SERVER['HTTP_HOST'];
	//create connection
	if($server === 'local.yogavibe.com')
	{
		$conn = mysqli_connect("yogavibe.org", "katy", "katy123", "yogavibe");
	}
	else if($server === 'kstephens.php.cs.dixie.edu')
	{
		$conn = mysqli_connect("mysql.cs.dixie.edu", "kstephens", "Katy123", "kstephens");
	}
	else
	{
		$conn = mysqli_connect("localhost", "katy", "katy123", "yogavibe");
	}

?>
