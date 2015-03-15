<?php

// require_once('class/Recipient.php');

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
		// there can be several recipientId, so I need to insert into the database as many rows as there are recipientId.
		// foreach recipientId, insert into gifts ... Should do it.
		// $recipient = new Recipient();

		$itemId = $_POST['itemId'];
		$userId = $_POST['userId']; // TODO belongs to dummy data field, remove after sorting out CSRF
		// $userId = $_SESSION['userId'];		
		$recipientIdArray = $_POST['recipientId'];
		$occasion = $_POST['occasion'];

		return $this->insertGift($userId, $itemId, $recipientIdArray, $occasion);
	}


	public function getGift($gift, $user, $recipient) {
		// hämtar en gåva från databasen som hör till den inloggade användaren och/eller en specifik mottagare
	}

	public function editGift($gift) {
		// redigerar en gåva i databasen
	}

	public function getAllGifts($recipientId) {
		// hämtar alla gåvor från databasen som hör till en specifik mottagare
		

		// queryGiftsOnRecipient($recipientId);
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
	private function insertGift($userId, $itemId, $recipientIdArray, $occasion) {
		$database = new Database();
		
		foreach ($recipientIdArray as $recipientId) {		
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
		$result = $query->fetch();

		return $result;
	}

}


?>