<?php
require_once ('Database.php');
require_once ('User.php');

class Session {
	// spiffy code here
	public function getSession($session) {
	// getter som används för att kolla om session finns
	// ... eller ngt sådant ...
		// return $this->session;	// $session
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
			echo "Perfect match! You've been logged in! Please wait ...";
		} else {
			echo "Nope, you did something very wrong there. Please try again after you've been redirected back!";
		}
	}
}


?>