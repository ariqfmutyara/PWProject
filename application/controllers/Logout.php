<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function _construct() {
		parent::_construct();
		$this->load->model('login_model');
		$this->load->library('session');
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
	}

	public function logout_voter()
	{
		$this->session->unset_userdata('voter');
		$this->session->unset_userdata('username_voter');
		$this->session->unset_userdata('logged_in_voter');

		$this->session->set_flashdata('logout_voter_success', 'You are now Logged out');
		redirect('home');
	}

	public function logout_artist() 
	{
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('username_user');
		$this->session->unset_userdata('logged_in_user');

		$this->session->set_flashdata('logout_user_success', 'You are now Logged out');
		redirect('home');
	}
}

?>