<?php 
/** Configuration ***/
	if (!defined("_VALID_PHP"))
		die('Direct access to this location is not allowed.');
		  
	/**  
	Database Constants - these constants refer to
	the database configuration settings.
	**/
		define('DB_SERVER', 'localhost'); 
		define('DB_USER', 'olavi_kohkur');  
		define('DB_PASS', 'w6s1sv4T9');  
		define('DB_DATABASE', 'olavi_kohkur'); 

		define('SITE_URL', 'https://kohkur.olaviallik.com'); 
		define('SITE_DIR', '/home/arendusn/florabook.ee/'); 

	/** 
	Show MySql Errors.
	Not recomended for live site. true/false
	**/
		$DEBUG = true;
?>
