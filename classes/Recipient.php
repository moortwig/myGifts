<?php


class Recipient {
	
	public $id;
	public $name;
	public $information;
	public $userId;

	
	//////////////////////////////////////////////////////
	// ADD A NEW RECIPIENT //////////////////////////////
	public function newRecipient() {
	// sparar recipient till databas
		$name = $_POST['name'];
		$information = $_POST['information'];
		$userId = $_POST['userId'];
		
		return $this->insertRecipient($name, $information, $userId);
	}



	//////////////////////////////////////////////////////
	// EDIT RECIPIENT FOR USER //////////////////////////
	public function editRecipient() {
		$recipientId = $_POST['recipientId'];
		$name = $_POST['name'];
		$information = $_POST['information'];

		return $this->updateRecipient($name, $information, $recipientId);	
	}




	//////////////////////////////////////////////////
	// ----- QUERIES --------------------------------
	////////////////////////////////////////////////

	//////////////////////////////////////////////////////
	// QUERY TO SAVE RECIPIENT TO DB ////////////////////
	private function insertRecipient($name, $information, $userId) {
		$database = new Database();

		$query = $database->connect()->prepare('INSERT INTO recipients (name, information, user_id) VALUES (?,?,?)');
		$values = array($name, $information, $userId);
		$query->execute($values);
	}


	//////////////////////////////////////////////////////
	// QUERY TO EDIT RECIPIENT TO DB ////////////////////
	private function updateRecipient($name, $information, $recipientId) {
		$database = new Database();

		$query = $database->connect()->prepare('UPDATE recipients SET name = ?,  information = ? WHERE id = ?');
		$values = array($name, $information, $recipientId);
		$query->execute($values);
	}


	//////////////////////////////////////////////////////
	// QUERY TO GET ONE RECIPIENT FOR USER //////////////
	public function getRecipient($recipientId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM recipients WHERE id = '$recipientId'");
		$query->execute(); // execute the query
		$result = $query->fetch(); // fetch result

		return $result;
	}


	//////////////////////////////////////////////////////
	// DELETE RECIPIENT FOR USER ////////////////////////
	public function deleteRecipient($recipientId) {
		$recipientId = $_POST['recipientId'];
		$database = new Database();

		$query = $database->connect()->prepare("DELETE FROM recipients WHERE id = ?");
		$query->execute(array($recipientId));
	}


	//////////////////////////////////////////////////////
	// QUERY TO GET ALL RECIPIENTS FOR USER /////////////
	public function getAllRecipients($userId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM recipients WHERE user_id = '$userId'");
		$query->execute(); // execute the query
		$results = $query->fetchAll(); // fetch results

		return $results;
	}
}


?>