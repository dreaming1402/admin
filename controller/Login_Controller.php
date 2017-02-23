<?php
class Login_Controller extends Base_Controller
{
	public function indexAction() {
		$_SESSION['uid'] = 'blabla';
		echo 'Welcome '.$_SESSION['uid'].'!';
	}
}