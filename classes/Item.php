<?php

require_once ('Session.php');

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
		// $session = new Session();

		$name = $_POST['name'];
		$description = $_POST['description'];
		$userId = $_POST['userId']; // TODO belongs to dummy data field, remove after sorting out CSRF
		// $userId = $_SESSION['userId'];

		// saves to db and returns the id of this item
		// $lastInsertId = $this->insertItem($name, $description, $userId);

		// $_SESSION['item'];    $this->
		// $itemSession = $session->startItemSession($lastInsertId);

	// var_dump($itemSession);
	// die('remove');

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
	// AND GET LATEST ID ///////////////////////////////
	private function insertItem($name, $description, $userId) {
		$database = new Database();
		$session = new Session();

		$db = $database->connect();
		$query = $db->prepare('INSERT INTO items (name, description, user_id) VALUES (?,?,?)');

		// $db->beginTransaction();
		$values = array($name, $description, $userId);
		$query->execute($values);
		$result = $db->lastInsertId(); // get item id for session
		// $db->commit();

		$session->startItemSession($result);

		return $result;
	}

	//////////////////////////////////////////////////////
	// QUERY TO GET ALL ITEMS FOR USER //////////////////
	public function getAllItems($userId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM items WHERE user_id = '$userId'");
		
		$query->execute(); // execute the query
		$results = $query->fetchAll(); // fetch results

		return $results;
	}

	//////////////////////////////////////////////////////
	// QUERY TO GET ONE ITEM FOR USER ///////////////////
	public function getItem($userId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM items WHERE id = '$userId'");
		
		$query->execute(); // execute the query
		$result = $query->fetch(); // fetch results

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