<?php 
  define("_VALID_PHP", true);
  require_once("init.php");
?>
<?php
if ($user->logged_in) {

  if (isset($_GET["hash"])) {
    $hash = sanitize($_GET["hash"]);
    $checkGroup = $db->first("SELECT * FROM groups WHERE hash = '".$hash."'");
    if ($checkGroup) {
      require "views/group.php";	
    } 
  } else {
    redirect_to("index.php");
  }
} else {
  if (isset($_GET["hash"])) {
    $hash = sanitize($_GET["hash"]);
    $checkGroup = $db->first("SELECT * FROM groups WHERE hash = '".$hash."'");
    if ($checkGroup) {
      require "views/group_notlogged.php";	
    } 
  } else {
    redirect_to("index.php");
  }

}
?>