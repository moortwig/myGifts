<?php


class Recipient {
	// spiffy code here
	public $id;
	public $name;
	public $information;
	public $userId;

	// some methods here
	/*public function getName($recipientId) {
		$this->getRecipient($recipientId)['name'];
		var_dump($this->getRecipient($recipientId)['name']);
		die('remove');
		return $this->name;
	}

	public function getInformation() {
		$this->getRecipient();
		return $this->name;
	}*/


	//////////////////////////////////////////////////////
	// QUERY TO COMPARE USERNAMES ///////////////////////
	public function checkNameExists($name) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM recipients WHERE name = '$name'");
		// execute the query
		$query->execute();
		// fetch results
		$results = $query->fetchAll();
		// count the number of rows fetched, so we can use it in the if statement
		$count = count($results);

		// if rows === 1, return true
		if ($count !== 1) {
			return false;
		} else {
			// else return false
			return true;
		}		
	}

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
	// TODO test this
	private function updateRecipient($name, $information, $recipientId) {
		$database = new Database();

		$query = $database->connect()->prepare('UPDATE recipients SET name = ?,  information = ? WHERE id = ?');
		$values = array($name, $information, $recipientId);
		$query->execute($values);
	}

	
	//////////////////////////////////////////////////////
	// ADD A NEW RECIPIENT //////////////////////////////
	public function newRecipient() {
	// sparar recipient till databas
		$name = $_POST['name'];
		$information = $_POST['information'];
		$userId = $_POST['userId']; // TODO belongs to dummy data field, remove after sorting out CSRF
		// $userId = $_SESSION['userId'];
		
		$check = $this->checkNameExists($name);

		if ($check === true) {
			echo "This recipient already exists! Did you mean to add someone else? You will be redirected shortly.";
		} else {
			echo $name . " has been added! Please wait ...";

			return $this->saveRecipient($name, $information, $userId);
		}		
	}


	//////////////////////////////////////////////////////
	// GET ONE RECIPIENT FOR USER ///////////////////////
	public function getRecipient($recipientId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM recipients WHERE id = '$recipientId'");
		// execute the query
		$query->execute();
		// fetch results
		$result = $query->fetch();

		$name = $result['name'];
		$information = $result['information'];

		return $result;
	}


	//////////////////////////////////////////////////////
	// EDIT RECIPIENT FOR USER //////////////////////////
	public function editRecipient() {
		// redigera info om mottagaren
		$recipientId = $_POST['recipientId'];
		$name = $_POST['name'];
		$information = $_POST['information'];

		return $this->updateRecipient($name, $information, $recipientId);	
	}


	//////////////////////////////////////////////////////
	// DELETE RECIPIENT FOR USER ////////////////////////
	public function deleteRecipient($recipient) {
		// tar bort mottagaren ur databasen
	}


	//////////////////////////////////////////////////////
	// GET ALL RECIPIENTS FOR USER //////////////////////
	public function getAllRecipients($userId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM recipients WHERE user_id = '$userId'");
		// execute the query
		$query->execute();
		// fetch results
		$results = $query->fetchAll();

		return $results;
	}



	//////////////////////////////////////////////////
	// LIST RECIPIENT'S GIFT HISTORY ////////////////
}


?>