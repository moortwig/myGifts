<?php

class Gift {
	// spiffy code here
	public $id;
	public $itemId;
	public $recipientId;
	public $occasion;
	public $added;

	//////////////////////////////////////////////////
	// ADD A NEW GIFT ///////////////////////////////
	public function newGift() {
		$itemId = $_POST['itemId'];
		$userId = $_POST['userId']; // TODO belongs to dummy data field, remove after sorting out CSRF
		// $userId = $_SESSION['userId'];
		$recipientId = $_POST['recipientId'];

		// TODO foreach loop here
		var_dump($recipientId);
		die('remove');


		return $this->insertGift($userId, $itemId, $recipientId, $userId);
	}

	public function getGift($gift, $user, $recipient) {
		// hämtar en gåva från databasen som hör till den inloggade användaren och/eller en specifik mottagare
	}

	public function editGift($gift) {
		// redigerar en gåva i databasen
	}

	public function getAllGifts($user, $recipient) {
		// hämtar alla gåvor från databasen som hör till den inloggade användaren och en specifik mottagare
	}

	//////////////////////////////////////////////////
	// GET GIFTS ////////////////////////////////////
	// get giftReceived() {

	// }


	//////////////////////////////////////////////////
	// ----- QUERIES --------------------------------
	////////////////////////////////////////////////

	//////////////////////////////////////////////////
	// QUERY SAVE GIFT TO DB ////////////////////////
	private function insertGift($userId, $itemId, $recipientId, $occasion) {
		$database = new Database();

		$query = $database->connect()->prepare('INSERT INTO gifts (user_id, item_id, recipient_id, occasion) VALUES (?,?,?,?)');
		$values = array($userId, $itemId, $recipientId, $occasion);
		$query->execute($values);
	}
}


?>