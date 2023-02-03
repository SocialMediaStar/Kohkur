<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');

  class User
  {
	  public $logged_in = null;
	  public $is_admin = null;
	  public $is_client = null;
	  public $uid = 0;
	  public $userid = 0;
      public $email;
	  public $sesid;
	  public $name;
	  private $lastlogin = "NOW()";
      
      /** 
       * Users::__construct()
       * 
       * @return
       */
      function __construct()
      {
		  $this->getUserId();
		  $this->startSession();
      }
	  /**
	   * Users::getUserId()
	   * 
	   * @return
	   */
	  private function getUserId()
	  {
	  	  global $core, $DEBUG;
		  if (isset($_GET['userid'])) {
			  $userid = (is_numeric($_GET['userid']) && $_GET['userid'] > -1) ? intval($_GET['userid']) : false;
			  $userid = sanitize($userid);
			  if ($userid == false) {
				  $DEBUG == true ? $core->error("You have selected an Invalid Id", "Users::getUserId()") : $core->ooops();
			  } else
				  return $this->userid = $userid;
		  }
	  }  
      /**
       * Users::startSession()
       * 
       * @return
       */
      private function startSession()
      {  


		if (strlen(session_id()) < 1)
			session_start();
		
		$this->logged_in = $this->loginCheck();
			
		if (!$this->logged_in) {
			$this->email = $_SESSION['email'] = "0";
			$this->sesid = hash('sha256', session_id());
			
			$_SESSION["sesid"] = $this->sesid;
		}
      }
	  /**
	   * Users::loginCheck()
	   * 
	   * @return
	   */
	  private function loginCheck()
	  {
		global $db;
          if (isset($_SESSION['email']) && $_SESSION['email'] != "0") {
              
              $row = $this->getUserInfo($_SESSION['email']);
			  $this->uid = $row['id'];
			  $this->email = $row['email'];
			return true;
          } else {
              return false;
          }  
	  }
	  /**
	   * Users::checkStatus()
	   * 
	   * @param mixed $email
	   * @param mixed $password
	   * @return
	   */
	  public function checkStatus($email, $password)
	  {
		  global $db;
		  
		  $email = sanitize($email);
		  $email = $db->escape($email);
		  $password = sanitize($password);
		  
          $sql = "SELECT id,password, is_admin FROM user"
		  . "\n WHERE email = '".$email."'";

          $result = $db->query($sql);
		  $row = $db->fetch($result);

          $maintenance = $db->first("SELECT is_active FROM maintenance");

		  $entered_pass = hash('sha256', $password);
		  if ($db->numrows($result) == 0) {
			  $data["number"] = 0;
			  $data["msg"] = "No such username";
		  } else 
		  if ($entered_pass != $row["password"]) {
			  $data["number"] = 0;
			  $data["msg"] = "Password is incorrect";			
		  }  else 
		  if ($entered_pass == $row["password"]) {
              if ($maintenance["is_active"] == 1 and $row["is_admin"] != 1){
                  $data["number"] = 0;
                  $data["msg"] = "Maintenance in progress. Try again later.";
              }else{
                  $data["number"] = 1;
                  $data["msg"] = "Logged in! Coool!";
              }
		  } 
		  return $data;
	  }


		/**
	   * Users::LoginForm()
	   * @return
	   */
	  public function LoginForm($email,$password) {
		  global $db, $core;
			$status = $this->checkStatus($email, $password);
			if ($status["number"] == 0) {
				$e = $status["msg"];
			} 
		  if (empty($e) && $status["number"] == 1 ) {
			$row = $this->getUserInfo($email);
			$this->uid = $_SESSION['uid'] = $row['id'];
			$this->email = $_SESSION['email'] = $row['email'];
			$result["email"] = $this->email;
			$result["success"] = "1";
			$result["user_id"] = $this->uid;
			$result["msg"] = "success";
			$result["url"] = $core->site_url.'shop.php';
			$data = array("loginCount" => "inc(1)");
			$db->update("user",$data,"id='".$this->uid."'");
		  } else {
			  $result["success"] = "0";
			  $result["msg"] = $e;
		  }
			echo json_encode($result,true);
	  }
		/**
	   * Users::ChangePasswordForm()
	   * @return
	   */
	  public function ChangePasswordForm() {
		global $db, $core;
		
		$opwd = hash('sha256', $_POST["oldPWD"]);
		$u = $db->first("SELECT * FROM user WHERE id = '".$this->uid."' AND password = '".$opwd."'");
		if ($u) {
			$npwd = hash('sha256', $_POST["PWD"]);
			$data = array(
				"password" => $npwd
			);
			$db->update("user",$data,"id='".$this->uid."'");
			$result["success"] = "1";
			$result["msg"] = "Sinu salasõna on uuendatud!";

		} else {
			$result["success"] = "0";
			$result["msg"] = "Su praegune salasõna ei ole õige!";
		}	  
		  echo json_encode($result,true);
	}
	
      /**
       * Users::logout()
       * 
       * @return
       */
      public function logout()
      {
          unset($_SESSION['email']);
		  unset($_SESSION['email']);
		  unset($_SESSION['name']);
          unset($_SESSION['uid']);
          session_destroy();
		  session_regenerate_id();
          
          $this->logged_in = false;
          $this->email = "Guest";
          $this->userlevel = 0;
      }
	  /**
	   * Users::getUserInfo()
	   * 
	   * @param mixed $email
	   * @return
	   */
	  private function getUserInfo($email)
	  {
		  global $db;
		  $email = sanitize($email);
		  $email = $db->escape($email);
		  
		  $sql = "SELECT * FROM user WHERE email = '" . $email . "'";
		  $row = $db->first($sql);
		  if (!$email)
			  return false;
		  
		  return ($row) ? $row : 0;
	  }


		/**
	   * Users::registerForm()
	   * @return
	   */
	  public function registerForm($fname,$lname,$phone,$email,$password) {
		global $db, $core;

		$checkEmail = $db->first("SELECT email FROM user WHERE email = '".$email."'");
		
		if ($checkEmail) {
			$res["success"] = "0";
			$res["msg"] = "Selline e-mail on juba kasutades, äkki proovid sisselogida?";
		} else {
			
			$passwordHashed = hash('sha256', $password);
			$data = array(
				"email" => $email,
				"fname" => $fname,
				"lname" => $lname,
				"password" => $passwordHashed,
				"phone" => $phone,
				"created" => "NOW()"
			);
			$uid = $db->insert("user",$data);

			if (isset($_GET["hash"]) && !empty($_GET["hash"])) {
				$gc = $db->first("SELECT * FROM groups WHERE hash = '".$_GET["hash"]."'");
				if ($gc) {
					$data = array(
						"user_id" => $uid,
						"group_id" => $gc["id"],
						"created" => "NOW()"
					);
					$db->insert("group_user",$data);
					$res["url"] = "group.php?hash=".$_GET["hash"];
				} else {
					$res["url"] = "setup.php";
				}
			} else {
				$res["url"] = "setup.php";
			}



			$res["success"] = "1";
			$res["msg"] = "Sa oled nüüd registeeritud";
			$this->email = $_SESSION["email"] = $email;
		}
		echo json_encode($res,true);
	}

	}	
?>