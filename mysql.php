<?php

	// get current server
	$server = $_SERVER['HTTP_HOST'];
	
	if($server === 'local.yogavibe.com')
	{
		//create connection for local config
		$conn = mysqli_connect("yogavibe.org", "katy", "katy123", "yogavibe");
	}
	else if($server === 'kstephens.php.cs.dixie.edu')
	{
		//create connection for dixie server
		$conn = mysqli_connect("mysql.cs.dixie.edu", "kstephens", "Katy123", "kstephens");
	}
	else
	{
		//create connection for production site
		$conn = mysqli_connect("localhost", "katy", "katy123", "yogavibe");
	}

?>