<?php
  define("_VALID_PHP", true);
  require_once("../init.php");
?>
<?php
  /* createGroupForm */
  if (isset($_POST['createGroupForm']))
      : if (intval($_POST['createGroupForm']) == 0 || empty($_POST['createGroupForm']))
      : redirect_to("../index.php");
  endif;
  $group->createGroup();
  endif;
?>
<?php
  /* loadGroupMembers */
  if (isset($_POST['loadGroupMembers']))
      : if (intval($_POST['loadGroupMembers']) == 0 || empty($_POST['loadGroupMembers']))
      : redirect_to("../index.php");
  endif;
  $group->loadGroupMembers();
  endif;
?>
