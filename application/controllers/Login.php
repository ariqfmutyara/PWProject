<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function _construct() {
		parent::_construct();
		$this->load->model('login_model');
		$this->load->library('session');
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
	}
	public function login_voter()
	{
		$data['title'] = 'Login Voter';

		$this->form_validation->set_rules('username_voter', 'Enter Username', 'required');
		$this->form_validation->set_rules('pw_voter', 'Enter Password', 'required');

		if($this->form_validation->run() == FALSE) 
			$this->load->view('login_voter', $data);
		else {
			$username = $this->input->post('username_voter');
			$password = md5($this->input->post('pw_voter'));

			$voter = $this->login_model->login_voter($username, $password);

			if($voter) {
				die('Login Successfull');
				$this->session->set_flashdata('login_voter_success', 'You are now Logged in');
				redirect('home_voter');
				}
			else {
				$this->session->set_flashdata('login_voter_failed', 'Login Failed, Please check your username and password');
				redirect('login_voter');
			}
		}	
	}

	public function login_artist() 
	{
		$this->load->view('login_artist');
	}
}

?>