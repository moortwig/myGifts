<?php
require_once ('Database.php');
require_once ('User.php');

class Session {
	// spiffy code here
	public function getSession($session) {
	// getter som används för att kolla om session finns
	// ... eller ngt sådant ...
	}

	public function startLoginSession() {
		// startar en session och kan användas för att skapa en inloggning t ex
		$user = new User();

		$username = $_POST['user'];	// field name user
		$password = $_POST['pass'];	// field name pass

		// query to check user and pass
		$check = $user->checkUserForLogin($username, $password);

		if ($check === true) {			
			$_SESSION['username'] = $username;
			echo "Perfect match! You may log in!";
		} else {
			echo "Nope, you did something very wrong there. Please try again after you've been redirected back!";
		}
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