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
		$name = $_POST['name'];
		$description = $_POST['description'];
		$userId = $_POST['userId']; // TODO belongs to dummy data field, remove after sorting out CSRF
		// $userId = $_SESSION['userId'];

		return $this->insertItem($name, $description, $userId);
	}

	//////////////////////////////////////////////////////
	// EDIT ITEM FOR USER ///////////////////////////////
	public function editItem() {
		$itemId = $_POST['itemId'];
		$name = $_POST['name'];
		$description = $_POST['description'];

		return $this->updateItem($name, $description, $itemId);	
	}




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
	public function getAllItems($userId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM items WHERE user_id = '$userId'");
		// execute the query
		$query->execute();
		// fetch results
		$results = $query->fetchAll();

		return $results;
	}

	//////////////////////////////////////////////////////
	// QUERY TO GET ONE ITEM FOR USER ///////////////////
	public function getItem($userId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM items WHERE id = '$userId'");
		// execute the query
		$query->execute();
		// fetch results
		$result = $query->fetch();

		return $result;
	}

	//////////////////////////////////////////////////////
	// QUERY TO EDIT RECIPIENT TO DB ////////////////////
	private function updateItem($name, $description, $itemId) {
		$database = new Database();

		$query = $database->connect()->prepare('UPDATE items SET name = ?,  description = ? WHERE id = ?');
		$values = array($name, $description, $itemId);
		$query->execute($values);
	}
}


?>