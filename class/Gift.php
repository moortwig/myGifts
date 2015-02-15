<?php

class Gift {
	// spiffy code here
	public $id;
	public $giftId;
	public $recipientId;
	public $occasion;
	public $added;

	// some methods here
	public function newGift() {
		// sparar en gåva till databasen
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