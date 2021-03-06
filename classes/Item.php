<?php

require_once ('Session.php');

class Item {
	
	public $id;
	public $name;
	public $description;
	public $userId;


	//////////////////////////////////////////////////////
	// ADD A NEW ITEM ///////////////////////////////////
	public function newItem() {

		$name = $_POST['itemName'];
		$description = $_POST['description'];
		$userId = $_POST['userId']; 


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
		$gift = new Gift();

		$db = $database->connect();
		$query = $db->prepare('INSERT INTO items (name, description, user_id) VALUES (?,?,?)');

		$values = array($name, $description, $userId);
		$query->execute($values);
		$itemId = $db->lastInsertId(); // get item id
		$gift->newGift($itemId);

		return $itemId;
	}


	//////////////////////////////////////////////////////
	// QUERY TO GET ALL ITEMS FOR USER //////////////////
	public function getAllItems($userId) {
		$database = new Database();

		$db = $database->connect();
		$query = $db->query("SELECT * FROM items WHERE user_id = '$userId'");
		
		$query->execute(); // execute the query
		$results = $query->fetchAll(); // fetch results

		return $results;
	}

	//////////////////////////////////////////////////////
	// QUERY TO GET ONE ITEM FOR USER ///////////////////
	public function getItem($userId) {
		$database = new Database();

		$db = $database->connect();
		$query = $db->query("SELECT * FROM items WHERE id = '$userId'");
		
		$query->execute(); // execute the query
		$result = $query->fetch(); // fetch results

		return $result;
	}

	//////////////////////////////////////////////////////
	// QUERY TO EDIT RECIPIENT TO DB ////////////////////
	private function updateItem($name, $description, $itemId) {
		$database = new Database();

		$db = $database->connect();
		$query = $db->prepare('UPDATE items SET name = ?,  description = ? WHERE id = ?');
		$values = array($name, $description, $itemId);
		$query->execute($values);
	}
}


?>