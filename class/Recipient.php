<?php


class Recipient {
	// spiffy code here
	public $id;
	public $name;
	public $info;
	public $userId;

	// some methods here


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
	// QUERY SAVE RECIPIENT TO DB ///////////////////////
	private function insertRecipient($name, $information, $userId) {
		$database = new Database();

		$query = $database->connect()->prepare('INSERT INTO recipients (name, information, user_id) VALUES (?,?,?)');
		$values = array($name, $information, $userId);
		$query->execute($values);
	}

	//////////////////////////////////////////////////////
	// QUERY EDIT RECIPIENT TO DB ///////////////////////
	// TODO test this
	private function updateRecipient($name, $information, $recipientId) {
		$database = new Database();

		$query = $database->connect()->prepare('UPDATE recipients SET name = ?,  information = ? WHERE id = ?)';
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
			// session works, but it would be nice if we could do it differently, I suppose We do have a session class >.< ...			
			return $this->saveRecipient($name, $information, $userId);
		}		
	}


	//////////////////////////////////////////////////////
	// GET ONE RECIPIENT FOR USER ///////////////////////
	// hämtar ALLT från databasen om en mottagare för den inloggade användaren
	public function getRecipient($recipientId, $userId) {
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM recipients WHERE id = '$recipientId' AND user_id = '$userId'");
		// execute the query
		$query->execute();
		// fetch results
		$result = $query->fetch();
		/*// count the number of rows fetched, so we can use it in the if statement
		$count = count($results);

		// if rows === 1, return true
		if ($count !== 1) {
			return false;
		} else {
			// else return false
			return true;
		}	*/
		return $result;
	}


	//////////////////////////////////////////////////////
	// EDIT RECIPIENT FOR USER //////////////////////////
	// TODO bygg färdigt denna! Knappt börjat ... Se också över argumenten
	public function editRecipient($recipientId, $userId) {
		// redigera info om mottagaren
		$recipientId = $_POST['recipientId'];
		$name = $_POST['name'];
		$information = $_POST['information'];
		$userId = $_POST['userId']; // TODO belongs to dummy data field, remove after sorting out CSRF
		// $userId = $_SESSION['userId'];

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
		// hämtar alla mottagare för den inloggade användaren
		$database = new Database();

		$query = $database->connect()->query("SELECT * FROM recipients WHERE user_id = '$userId'");
		// execute the query
		$query->execute();
		// fetch results
		$results = $query->fetchAll();
		/*// count the number of rows fetched, so we can use it in the if statement
		$count = count($results);

		// if rows === 1, return true
		if ($count !== 1) {
			return false;
		} else {
			// else return false
			return true;
		}	*/
		return $results;
	}



	//////////////////////////////////////////////////
	// LIST RECIPIENT'S GIFT HISTORY ////////////////
}


?>