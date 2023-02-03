<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');

  class Event
  {

	/** 
       * Event::__construct()
       * 
       * @return
       */
      function __construct()
      {
      }
		/**
	   * Event::createEventForm()
	   * @return
	   */
	  public function createEventForm() {
		global $db, $core,$user;

		$hash = hash('sha256', rand_string(15));
		$uploadOk = 1;

		if (isset($_FILES["eventPicture"]["name"]) && !empty($_FILES["eventPicture"]["name"])) {
			$target_dir = "uploads/event/";
			$target_file = $target_dir . basename($_FILES["eventPicture"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$filename = time().".".$imageFileType;
			if ($_FILES["eventPicture"]["size"] > 500000) {
				$res["success"] = "0";
				$res["msg"] = "Pilt on kahjuks liiga suures formaadis";
				$uploadOk = 0;
			}
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			  $res["success"] = "1";
			  $res["msg"] = "Lubatud on ainult pildid lõpuga jpg,png,jpeg ja gif";
			  $uploadOk = 0;
			}	
			if (move_uploaded_file($_FILES["eventPicture"]["tmp_name"], $target_dir.$filename)) {
				$picture = $filename;
			} else {
				$res["success"] = "0";
				$res["msg"] = "Midagi läks valesti, proovi palun uuesti!";
			}			  
		} else {
			$picture = "";
		}
		if ($uploadOk == 1) {
			$data = array(
				"group_id" => $_POST["group_id"],
				"name" => $_POST["name"],
				"description" => $_POST["desc"],
				"sum" => $_POST["sum"],
				"dueDate" => $_POST["date"],
				"created_by" => $user->uid,
				"picture" => $picture,
				"created" => "NOW()",
				"hash" => $hash
			);
			$id = $db->insert("event",$data);	
			$res["success"] = "1";
			$res["msg"] = "Juhuu, sinu event on loodud!";
		}


		echo json_encode($res,true);
	}

		/**
	   * Event::loadEvents()
	   * @return
	   */
	  public function loadEvents() {
		global $db, $core,$user;


		$ev = $db->fetch_all("
			SELECT 
			a.id AS event_id, a.group_id, a.name AS event_name, a.description AS event_desc, a.sum AS event_sum, a.dueDate AS event_dueData, a.picture AS event_picture,
			FORMAT((((SELECT COUNT(id) FROM event_paid WHERE event_id = a.id) /
			(SELECT COUNT(id) FROM group_user WHERE group_id = a.group_id)) * 100),2) AS per,
			(SELECT COUNT(id) FROM event_paid WHERE event_id = a.id AND user_id = '".$user->uid."') AS mePaid
			FROM event AS a
			WHERE a.group_id = '".$_POST["group_id"]."'
		");
		if ($ev) {
			$res["success"] = "1";
			$res["events"] = $ev;			
		} else {
			$res["success"] = "0";
			$res["msg"] = "Kahjuks pole siin grupis ühtegi sündmust";
		}

		echo json_encode($res,true);

	  }
		/**
	   * Event::PayForEvent()
	   * @return
	   */
	  public function PayForEvent() {
		global $db, $core,$user;

		$e = $db->first("SELECT * FROM event WHERE id = '".$_POST["event_id"]."'");
		$g = $db->first("SELECT * FROM groups WHERE id = '".$e["group_id"]."'");

		$data = array(
			"user_id" => $user->uid,
			"price" => $e["sum"],
			"email" => $user->email,
			"hash" => $g["hash"]
		);
		require_once(location . "lib/class_montonio.php");
		$montonio = new Montonio(); 
		$r = $montonio->Pay($data);

		$res["url"] = $r["url"];
		$res["success"] = "1";
		echo json_encode($res,true);
	  }

	}	
?>