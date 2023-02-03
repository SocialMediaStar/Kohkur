<?php
  define("_VALID_PHP", true);
  require_once("../init.php");
?>
<?php
  /* registerForm */
  if (isset($_POST['registerForm']))
      : if (intval($_POST['registerForm']) == 0 || empty($_POST['registerForm']))
      : redirect_to("../index.php");
  endif;
  $fname = sanitize($_POST["fname"]);
  $lname = sanitize($_POST["lname"]);
  $email = sanitize($_POST["email"]);
  $phone = sanitize($_POST["phone"]);
  $password = sanitize($_POST["password"]); 
  $user->registerForm($fname,$lname,$phone,$email,$password);
  endif;
?>

<?php
  /* LoginForm */
  if (isset($_POST['LoginForm']))
      : if (intval($_POST['LoginForm']) == 0 || empty($_POST['LoginForm']))
      : redirect_to("../index.php");
  endif;
  $email = sanitize($_POST["email"]);
  $password = sanitize($_POST["password"]); 
  $user->LoginForm($email,$password);
  endif;
?>
<?php
  /* LoginCheck */
  if (isset($_GET['LoginCheck']))
      : if (intval($_GET['LoginCheck']) == 0 || empty($_GET['LoginCheck']))
      : redirect_to("../index.php");
  endif;
  if (isset($_GET["page"]) && $_GET["page"] != "login.php") {
    if (!$user->logged_in) {
      $res["endSess"] = "1";
      echo json_encode($res,true); 
    } else {
      $data = array("lastActive" => date("Y-m-d H:i:s"));
      $db->update("user",$data,"id='".$user->uid."'");

      $res["endSess"] = "0";
      echo json_encode($res,true);    
    }
  }
endif;
?>
