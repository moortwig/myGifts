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
	private function saveRecipient($name, $information) {
		$database = new Database();

		$query = $database->connect()->prepare('INSERT INTO recipients (name, information) VALUES (?,?)');
		$values = array($name, $information);
		$query->execute($values);
	}

	//////////////////////////////////////////////////////
	// PICKS UP FORM DATA ///////////////////////////////
	public function newRecipient() {
	// sparar recipient till databas
		$name = $_POST['name'];
		$information = $_POST['information'];
		
		
		$check = $this->checkNameExists($name);

		if ($check === true) {
			echo "This recipient already exists! Did you mean to add someone else? You will be redirected shortly.";
		} else {
			echo "Welcome, " . $username . "! You have successfully signed up, and will shortly be redirected to the start page.";
			// session works, but it would be nice if we could do it differently, I suppose We do have a session class >.< ...			
			return $this->saveRecipient($name, $information);
		}		
	}

	public function getRecipient($recipient, $user) {
		// hämtar ALLT från databasen om en mottagare för den inloggade användaren
	}

	public function editRecipient($recipient) {
		// redigera info om mottagaren
	}

	public function deleteRecipient($recipient) {
		// tar bort mottagaren ur databasen
	}

	public function getAllRecipients($recipient, $user) {
		// hämtar alla mottagare för den inloggade användaren
	}


	//////////////////////////////////////////////////
	// ADD A NEW RECIPIENT //////////////////////////



	//////////////////////////////////////////////////
	// LIST ALL USER'S RECIPIENTS ///////////////////



	//////////////////////////////////////////////////
	// LIST RECIPIENT'S GIFT HISTORY ////////////////
}


?>