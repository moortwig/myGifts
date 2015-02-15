<?php


class Recipient {
	// spiffy code here
	public $id;
	public $name;
	public $info;
	public $userId;

	// some methods here
	public function newRecipient() {
	// sparar recipient till databas
	}

	public function getRecipient($recipient, $user) {
		// hämtar ALLT från databasen om en mottagare för den inloggade användaren
	}

	public function editRecipient($recipient) {
		// redigera info om mottagaren
	}

	public function deleteRecipient($recipient) {
		// tar bort mottagaren ur databasen
	}

	public function getAllRecipients($recipient, $user) {
		// hämtar alla mottagare för den inloggade användaren
	}


	//////////////////////////////////////////////////
	// ADD A NEW RECIPIENT //////////////////////////



	//////////////////////////////////////////////////
	// LIST ALL USER'S RECIPIENTS ///////////////////



	//////////////////////////////////////////////////
	// LIST RECIPIENT'S GIFT HISTORY ////////////////
}


?>