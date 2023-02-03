<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');

  class Group
  {

	/** 
       * Group::__construct()
       * 
       * @return
       */
      function __construct()
      {
      }
		/**
	   * Group::createGroup()
	   * @return
	   */
	  public function createGroup() {
		global $db, $core,$user;

		$hash = hash('sha256', rand_string(15));
		$uploadOk = 1;

		if (isset($_FILES["groupPicture"]["name"])) {
			$target_dir = "uploads/group/";
			$target_file = $target_dir . basename($_FILES["groupPicture"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$filename = time().".".$imageFileType;
			if ($_FILES["fileToUpload"]["size"] > 500000) {
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
			if (move_uploaded_file($_FILES["groupPicture"]["tmp_name"], $target_dir.$filename)) {
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
				"name" => $_POST["name"],
				"description" => $_POST["desc"],
				"created_by" => $user->uid,
				"picture" => $picture,
				"created" => "NOW()",
				"hash" => $hash
			);
			$id = $db->insert("groups",$data);	


			$data = array(
				"user_id" => $user->uid,
				"group_id" => $id,
				"created" => "NOW()"
			);
			$db->insert("group_user",$data);

			$res["success"] = "1";
			$res["msg"] = "Juhuu, sinu grupp on loodud!";
			$res["url"] = "group.php?hash=".$hash;	
		}


		echo json_encode($res,true);
	}
		/**
	   * Group::loadGroupMembers()
	   * @return
	   */
	  public function loadGroupMembers() {
		global $db, $core,$user;

		$gr = $db->fetch_all("
			SELECT 
			b.id, b.fname, b.lname
			FROM group_user AS a
			LEFT JOIN user AS b ON b.id = a.user_id
			WHERE a.group_id = '".$_POST["group_id"]."'");

		$res["totalMembers"] = count($gr);
		$res["success"] = "1";
		$res["members"] = $gr;

		echo json_encode($res,true);		
	}
	}	
?>