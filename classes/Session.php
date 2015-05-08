<?php
require_once ('Database.php');
require_once ('User.php');
require_once ('Item.php');

class Session {

	public function startLoginSession() {
		$user = new User();

		$username = $_POST['user'];	// field name user
		$password = $_POST['pass'];	// field name pass

		// query to check user and pass
		$checkUser = $user->checkUserForLogin($username, $password);

		// query to get the user ID 
		$userId = $user->getUserId($username)->id;

		if ($checkUser === true) {
			$_SESSION['username'] = $username;
			$_SESSION['userId'] = $userId;
		}
	}

}


?>