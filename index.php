<?php 
  define("_VALID_PHP", true);
  require_once("init.php");
?>
<?php
if ($user->logged_in) {
	require "views/index.php";
} else {
	redirect_to("login.php");
}
?>