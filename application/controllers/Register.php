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
		$data['title'] = 'Register';

		$this->form_validation->set_rules('name_voter', 'Enter fullname', 'required');
		$this->form_validation->set_rules('username_voter', 'Enter Username', 'required');
		$this->form_validation->set_rules('email_voter', 'Enter email', 'required');
		$this->form_validation->set_rules('pw_voter', 'Enter Password', 'required');
		$this->form_validation->set_rules('pw_voter1', 'Confirm Password', 'matches[pw_voter]');

		if($this->form_validation->run() == FALSE) 
			$this->load->view('register_voter', $data);
		else {
			$enc = md5($this->input->post('password'));
			$this->register_model->register_voter($enc);

			$this->session->set_flashdata('register_voter', 'Registered Successfull');

			redirect('login_voter');	
		}
	}
	
}
?>