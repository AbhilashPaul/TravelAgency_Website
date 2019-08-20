<?php
/*
Program:	PROJ-216-A Software Project Concepts - Travel Experts Website
Author:		Robbie Nielsen
Date:		2019-05-13 [Start]
Abstract:	A simple website for a travel agency, demonstrating HTML/CSS/JavaScript/PHP concepts.
			This is the database configuration page.
*/
	// travelexperts database connect
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "travelexperts";

	/* Attempt MySQL server connection. Assuming you are running MySQL
		server with default setting (user 'root' with no password)
		Based on code from https://www.tutorialrepublic.com/php-tutorial/php-mysql-prepared-statements.php */
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// end travelexperts database connect
?>
