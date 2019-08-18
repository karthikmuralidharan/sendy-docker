<?php
	//----------------------------------------------------------------------------------//
	//                               COMPULSORY SETTINGS
	//----------------------------------------------------------------------------------//

	/*  Set the URL to your Sendy installation (without the trailing slash) */
	define('APP_PATH', getenv('SENDY_URL'));

	/*  MySQL database connection credentials (please place values between the apostrophes) */
	$dbHost = getenv('DB_HOST'); //MySQL Hostname
	$dbUser = getenv('DB_USERNAME'); //MySQL Username
    $dbPass = getenv('DB_PASSWORD'); //MySQL Password
	$dbName = getenv('DB_NAME'); //MySQL Database Name


//----------------------------------------------------------------------------------//
	//								  OPTIONAL SETTINGS
	//----------------------------------------------------------------------------------//

	/*
		Change the database character set to something that supports the language you'll
		be using. Example, set this to utf16 if you use Chinese or Vietnamese characters
	*/
	$charset = 'utf8mb4';

	/*  Set this if you use a non standard MySQL port.  */
	$dbPort = 3306;

	/*  Domain of cookie (99.99% chance you don't need to edit this at all)  */
	define('COOKIE_DOMAIN', '');

	//----------------------------------------------------------------------------------//
?>
