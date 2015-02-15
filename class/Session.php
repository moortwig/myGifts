<?php
require_once ('Database.php');
require_once ('User.php');

class Session {
	// spiffy code here
	public function getSession($session) {
	// getter som används för att kolla om session finns
	// ... eller ngt sådant ...
	}

	public function startSession($session) {
		// startar en session och kan användas för att skapa en inloggning t ex
		$username = $_POST['user'];	// fältnamn user
		$password = $_POST['pass'];	// fältnamn pass

		$user = new User(); //
		$database = new Database();
			$_SESSION['username'] = $username;
		}

	public function destroySession($session) {
		// ta bort session, t ex logga ut
		session_destroy();
		echo "You're now being logged out, and will shortly return to the start page.";
		header('Refresh: 3; url=index.php');
	}


	// some methods here
	//////////////////////////////////////////////////
	// LOGIN A USER /////////////////////////////////
	// get data from the input fields



	//////////////////////////////////////////////////
	// LOGOUT A USER ////////////////////////////////
}


?>