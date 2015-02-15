<?php


class Item {
	// spiffy properties here
	public $id;
	public $name;
	public $description;


	// some methods here
	public function newItem() {
	// sparar ett föremål till databasen
	}

	public function getItem($item, $user(?), $recipient) {
		// hämtar ett föremål från databasen som hör till den inloggade användaren och/eller en specifik mottagare
	}

	public function editItem($item) {
		// redigerar ett föremål i databasen
	}

	public function getAllItems($user) {
		// hämtar alla föremål som hör till den inloggade användaren
	}
	//////////////////////////////////////////////////
	// GET GIFT ////////////////////////////////////
	// get gift() {

	// }




	//////////////////////////////////////////////////
	// ADD A NEW GIFT  //////////////////////////////
	// set gift() {

	// }
}


?>