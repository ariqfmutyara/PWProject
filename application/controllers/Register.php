<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function _construct() {
		parent::_construct();
		$this->load->model('register_model');
		$this->load->library('session');
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
	}

	public function register_voter()
	{
		$data['title'] = 'Register Voter';

		$this->form_validation->set_rules('name_voter', 'Enter fullname', 'required');
		$this->form_validation->set_rules('username_voter', 'Enter Username', 'required|callback_check_username_exists');
		$this->form_validation->set_rules('email_voter', 'Enter email', 'required');
		$this->form_validation->set_rules('pw_voter', 'Enter Password', 'required');
		$this->form_validation->set_rules('pw_voter1', 'Confirm Password', 'matches[pw_voter]');

		if($this->form_validation->run() == FALSE) 
			$this->load->view('register_voter', $data);
		else {
			$enc = $this->input->post('pw_voter');

			$this->session->set_flashdata('register_voter', 'Registered Successfull');

			redirect('login_voter');	
		}
	}

	public function register_artist()
	{
		$data['title'] = 'Register Artist';

		$this->form_validation->set_rules('name_user', 'Enter fullname', 'required');
		$this->form_validation->set_rules('username_user', 'Enter Username', 'required');
		$this->form_validation->set_rules('email_user', 'Enter email', 'required');
		$this->form_validation->set_rules('pw_user', 'Enter Password', 'required');
		$this->form_validation->set_rules('pw_user1', 'Confirm Password', 'matches[pw_user]');

		if($this->form_validation->run() == FALSE) 
			$this->load->view('register_artist', $data);
		else {
			$enc = md5($this->input->post('pw_user'));
			$this->register_model->register_artist($enc);

			$this->session->set_flashdata('register_artist', 'Registered Successfull');

			redirect('login_artist');	
		}
	}

	public function check_username_voters($username) 
	{
		$this->form_validation->set_message('check_username_voters', 'Username is Taken, Try Another!!!');

		if($this->register_model->check_username_voters($username))
			return true; 
		else
			return false;
	}

	public function check_username_users($username) 
	{
		$this->form_validation->set_message('check_username_users', 'Username is Taken, Try Another!!!');

		if($this->register_model->check_username_exists($username))
			return true; 
		else
			return false;
	}



}
?>