<?php 
/** Configuration ***/
	if (!defined("_VALID_PHP"))
		die('Direct access to this location is not allowed.');
		  
	/**  
	Database Constants - these constants refer to
	the database configuration settings.
	**/
		define('DB_SERVER', 'localhost'); 
		define('DB_USER', 'root');  
		define('DB_PASS', '');  
		define('DB_DATABASE', 'kohkur'); 

		define('SITE_URL', '127.0.0.1/Kohkur/'); 
		define('SITE_DIR', '/home/arendusn/florabook.ee/'); 

	/** 
	Show MySql Errors.
	Not recomended for live site. true/false
	**/
		$DEBUG = true;
?>
