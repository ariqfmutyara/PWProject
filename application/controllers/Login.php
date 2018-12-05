<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function login_voter()
	{
		$this->load->view('login_voter');
	}

	public function login_artist() 
	{
		$this->load->view('login_artist');
	}
}
?>