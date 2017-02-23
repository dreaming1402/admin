<?php
class Logout_Controller extends Base_Controller
{
	public function indexAction() {
		session_destroy(); // Is Used To Destroy All Sessions
		//Or
		if(isset($_SESSION['uid']))
			unset($_SESSION['uid']);  //Is Used To Destroy Specified Session

		echo 'You\'re logout!';
		die();
	}
}