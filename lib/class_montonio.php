<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/** Montonio Class **/ 
    require __DIR__ . '/montonio/autoload.php';
	use \Firebase\JWT\JWT;
 
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');

  class Montonio
  {
//	private $access_key = '6add5c24-727b-4c69-8793-b08792f4a3b3';
//	private $secret_key = 'hwmL3D40FlOAFzMr1ALxsw13rgju3yE87LPtDLUCnNu4';
//	private $url = 'https://payments.montonio.com?payment_token=';


	private $access_key = '1d57823e-5d69-41d7-8c12-2a31e0a53105';
	private $secret_key = 'VFUhuW8vIvvSgU3NM5v8YebD/SrD0awG4sUh+QmjkoNx';
	private $url = 'https://sandbox-payments.montonio.com?payment_token=';
	
	
      /**
       * Montonio::__construct()
       * 
       * @return
       */
      function __construct()
      {

      }

	  
  	  /**
	   * Montonio::Pay()
	   * 
	   * @return
	   */
	  public function Pay($o) {
		global $db,$core,$user;
		
		$payment_data = array(
			'amount'                           => $o["price"],
			'currency'                         => 'EUR',
			'access_key'                       => $this->access_key,
			'merchant_name'					   => 'Tellimuse tasumine',
			'preselected_locale' 			   => 'EE',
			'merchant_reference'               => $o["hash"]."client".$o["client_id"],
			'merchant_return_url'              => $core->site_url.'return_montonio_'.$o["hash"]."client".$o["client_id"],
			'merchant_notification_url'        => $core->site_url.'webhook/montonio.php?id='.$o["hash"],
			'payment_information_unstructured' => 'Tasumine tehingu eest',
			'preselected_locale'               => 'et',
			'checkout_email'                   => $o["email"],
			'exp'                              => time() + (60 * 10), 
		);
		$payment_token = \Firebase\JWT\JWT::encode($payment_data, $this->secret_key);
		$return["url"] = $this->url.$payment_token;
		return $return;
	  }  
	  


  	  /**
	   * Montonio::Validate()
	   * 
	   * @return
	   */
	  public function Validate($payment_token,$hash,$client_id) {
		global $db,$core,$user;
		

			$decoded = Firebase\JWT\JWT::decode(
				$payment_token, 
				$this->secret_key, 
				array('HS256')
			);
			if ($decoded->access_key === $this->access_key &&
				$decoded->merchant_reference === $hash."client".$client_id &&
				$decoded->status === 'finalized') {
				
				$carts = $db->fetch_all("
					SELECT 
					a.id, a.client_id, a.5O_id, a.hash, a.created,
					b.item_id, b.qty, b.price, b.priceTotal 
					FROM cart AS a
					LEFT JOIN cart_item AS b ON b.cart_id = a.id
					WHERE a.hash = '".$hash."' 
					AND a.client_id = '".$client_id."'
					");

				foreach($carts as $cart):
					$data = array(
						"client_id" => $cart["client_id"],
						"5O_id" => $cart["5O_id"],
						"item_id" => $cart["item_id"],
						"qty" => $cart["qty"],
						"price" => $cart["price"],
						"priceTotal" => $cart["priceTotal"],
						"hash" => $cart["hash"],
						"payment_token" => $payment_token,
						"status" => "1",
						"created" => "NOW()"	
					);
					$db->insert("orders",$data);
				endforeach;

				$db->delete("cart_item","client_id='".$client_id."'");
				$db->delete("cart","client_id='".$client_id."'");
				
				$result["success"] = "1";
				$result["msg"] = "Jee makstud! :)";
			} else {
				$result["success"] = "0";
				$result["msg"] = "Makse ebaõnnestus! Proovi uuesti!";
			}
		return $result;
		}
	  }	
?>