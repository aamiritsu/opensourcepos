<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Secure_Controller.php");

class Home extends Secure_Controller 
{
	function __construct()
	{
		parent::__construct(NULL, NULL, 'home');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function logout()
	{
		$this->track_page('logout', 'logout');

		$this->Employee->logout();
	}
}
?>
