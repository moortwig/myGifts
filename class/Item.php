<?php


class Item {
	// spiffy properties here
	public $id;
	public $name;
	public $description;
	public $userId;


	// some methods here
	//////////////////////////////////////////////////////
	// ADD A NEW ITEM ///////////////////////////////////
	public function newItem() {
	// sparar recipient till databas
		$name = $_POST['name'];
		$description = $_POST['description'];
		$userId = $_POST['userId']; // TODO belongs to dummy data field, remove after sorting out CSRF
		// $userId = $_SESSION['userId'];

		return $this->insertItem($name, $description, $userId);
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
	private function insertItem($name, $description, $userId) {
		$database = new Database();

		$query = $database->connect()->prepare('INSERT INTO items (name, description, user_id) VALUES (?,?,?)');
		$values = array($name, $description, $userId);
		$query->execute($values);
	}

	//////////////////////////////////////////////////////
	// QUERY TO GET ALL ITEMS FOR USER //////////////////
	public function getAllRecipients($userId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM recipients WHERE user_id = '$userId'");
		// execute the query
		$query->execute();
		// fetch results
		$results = $query->fetchAll();

		return $results;
	}
}


?>