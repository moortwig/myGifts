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
		$description = $_POST['description'];
// Olivolja, balsamvinäger, tapenade, crostini
		return $this->insertItem($name, $description);
	}

	/*public function getItem($item, $user, $recipient) {
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
*/



	//////////////////////////////////////////////////
	// ----- QUERIES --------------------------------
	////////////////////////////////////////////////

	//////////////////////////////////////////////////////
	// QUERY TO SAVE ITEM TO DB /////////////////////////
	private function insertItem($name, $description) {
		$database = new Database();

		$query = $database->connect()->prepare('INSERT INTO items (name, description) VALUES (?,?)');
		$values = array($name, $description);
		$query->execute($values);
	}
}


?>