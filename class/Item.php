<?php


class Item {
	// spiffy properties here
	public $id;
	public $name;
	public $description;


	// some methods here
	//////////////////////////////////////////////////////
	// ADD A NEW ITEM ///////////////////////////////////
	public function newItem() {
	// sparar recipient till databas
		$name = $_POST['name'];
		$information = $_POST['description'];

		return $this->insertItem($name, $information);
		}		
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

	public function deleteItem($id) {
		// tar bort ett föremål
	}




	//////////////////////////////////////////////////
	// ----- QUERIES --------------------------------
	////////////////////////////////////////////////

	//////////////////////////////////////////////////////
	// QUERY TO SAVE RECIPIENT TO DB ////////////////////
	private function insertItem($name, $description) {
		$database = new Database();

		$query = $database->connect()->prepare('INSERT INTO recipients (name, information) VALUES (?,?)');
		$values = array($name, $information);
		$query->execute($values);
	}
}


?>