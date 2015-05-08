<?php

require_once('Item.php');


class Gift {
	
	public $id;
	public $itemId;
	public $recipientId;
	public $occasion;
	public $added;

	//////////////////////////////////////////////////
	// ADD A NEW GIFT ///////////////////////////////
	// referred to from Item->insertItem()
	public function newGift($itemId) {
		$userId = $_POST['userId'];
		$recipients = $_POST['recipients'];
		$occasion = $_POST['occasion'];

		$recipientIdArray = json_decode($recipients);

		$this->insertGift($userId, $itemId, $recipientIdArray, $occasion);
	}

	public function getAllGifts($recipientId) {
		$result = $this->queryGiftsOnRecipient($recipientId);

		return $result;
	}

	public function getAllGiftsAsMultiArray($recipientId, $userId) {
		$gifts = $this->getAllGifts($recipientId);

		// Build a multi array IF $gifts contains any data
		if ($gifts) {
			$item = new Item();
			$items = $item->getAllItems($userId);

			foreach ($gifts as $gift => $g) {

				// ITEMS
				foreach ($items as $item => $i) {
					$itemId = $i['id']; // get the id

					// check if data matches
					if ($g['item_id'] == $itemId) {
						// sneak that query into the separated arrays
	      				$g['item_id'] = $i;
					}
				}

				// make a big array of the separated arrays
				$giftsArray[$gift] = $g;
			}
		return $giftsArray;
		}
	}


	//////////////////////////////////////////////////
	// ----- QUERIES --------------------------------
	////////////////////////////////////////////////

	//////////////////////////////////////////////////
	// QUERY SAVE GIFT TO DB ////////////////////////
	private function insertGift($userId, $itemId, $recipientIdArray, $occasion) {
		$database = new Database();

		$db = $database->connect();

		foreach ($recipientIdArray as $recipientId) {
			$recipientId = intval($recipientId);	
			$query = $database->connect()->prepare('INSERT INTO gifts (user_id, item_id, recipient_id, occasion) VALUES (?,?,?,?)');
			$values = array($userId, $itemId, $recipientId, $occasion);
			$query->execute($values);
		}
	}

	//////////////////////////////////////////////////
	// QUERY GIFTS ON RECIPIENT /////////////////////
	public function queryGiftsOnRecipient($recipientId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM gifts WHERE recipient_id = '$recipientId'");
		
		$query->execute(); // execute the query
		
		$result = $query->fetchAll(); // fetch results

		return $result;
	}

}


?>