<?php

class Gift {
	// spiffy code here
	public $id;
	public $itemId;
	public $recipientId;
	public $occasion;
	public $added;

	// some methods here
	public function newGift() {
		$name = $_POST['name'];
		$description = $_POST['description'];
		$userId = $_POST['userId']; // TODO belongs to dummy data field, remove after sorting out CSRF
		// $userId = $_SESSION['userId'];

		return $this->insertGift($name, $description, $userId);
	}

	public function getGift($gift, $user(?), $recipient) {
		// hämtar en gåva från databasen som hör till den inloggade användaren och/eller en specifik mottagare
	}

	public function editGift($gift) {
		// redigerar en gåva i databasen
	}

	public function getAllGifts($user, $recipient) {
		// hämtar alla gåvor från databasen som hör till den inloggade användaren och en specifik mottagare
	}

	//////////////////////////////////////////////////
	// GET RECEIVED GIFTS ///////////////////////////
	// get giftReceived() {

	// }




	//////////////////////////////////////////////////
	// ADD A NEW GIFT RECEIVED //////////////////////
	// set giftReceived() {

	// }
}


?>