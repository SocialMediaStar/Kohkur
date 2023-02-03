<?php
  define("_VALID_PHP", true);
  require_once("../init.php");
?>
<?php
  /* createEventForm */
  if (isset($_POST['createEventForm']))
      : if (intval($_POST['createEventForm']) == 0 || empty($_POST['createEventForm']))
      : redirect_to("../index.php");
  endif;
  $event->createEventForm();
  endif;
?>
<?php
  /* loadEvents */
  if (isset($_POST['loadEvents']))
      : if (intval($_POST['loadEvents']) == 0 || empty($_POST['loadEvents']))
      : redirect_to("../index.php");
  endif;
  $event->loadEvents();
  endif;
?>