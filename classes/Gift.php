<?php

require_once('Item.php');

class Gift {
	// spiffy code here
	public $id;
	public $itemId;
	public $recipientId;
	public $occasion;
	public $added;

	//////////////////////////////////////////////////
	// ADD A NEW GIFT ///////////////////////////////
	// referred to from Item->insertItem()
	public function newGift($itemId) {
		$userId = $_POST['userId']; // TODO belongs to dummy data field, remove after sorting out CSRF
		$recipients = $_POST['recipients'];
		$occasion = $_POST['occasion'];

		$recipientIdArray = json_decode($recipients);

		$this->insertGift($userId, $itemId, $recipientIdArray, $occasion);
	}


	public function editGift($gift) {
		// redigerar en gåva i databasen
	}

	public function getAllGifts($recipientId) {
		// hämtar alla gåvor från databasen som hör till en specifik mottagare
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
	// TODO 
	// query gifts
	// join recipients.id on gifts.recipient_id
	// join items.id on gifts.item_id
	public function queryGiftsOnRecipient($recipientId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM gifts WHERE recipient_id = '$recipientId'");
		// execute the query
		$query->execute();
		// fetch results
		$result = $query->fetchAll();

		return $result;
	}

}


?>