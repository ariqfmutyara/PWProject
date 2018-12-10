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
				$voter_data = array(
					'voter' => $voter,
					'username_voter' => $username,
					'logged_in_voter' => true
				);
				$this->session->set_userdata($voter_data);

				$this->session->set_flashdata('login_voter_success', 'You are now Logged in');
				redirect('home');
				}
			else {
				$this->session->set_flashdata('login_voter_failed', 'Login Failed, Please check your username and password');
				redirect('login_voter');
			}
		}	
	}

	public function login_artist() 
	{
		$data['title'] = 'Login Artist';

		$this->form_validation->set_rules('username_user', 'Enter Username', 'required');
		$this->form_validation->set_rules('pw_user', 'Enter Password', 'required');

		if($this->form_validation->run() == FALSE) 
			$this->load->view('login_artist', $data);
		else {
			$username = $this->input->post('username_user');
			$password = md5($this->input->post('pw_user'));

			$user = $this->login_model->login_user($username, $password);

			if($user) {
				$user_data = array(
					'user' => $user,
					'username_user' => $username,
					'logged_in_user' => true
				);
				$this->session->set_userdata($user_data);

				$this->session->set_flashdata('login_user_success', 'You are now Logged in');
				redirect('home');
				}
			else {
				$this->session->set_flashdata('login_user_failed', 'Login Failed, Please check your username and password');
				redirect('login_artist');
			}
		}
	}

	public function edit_artist() 
	{

		$data['title'] = 'Edit Artist';

		$this->form_validation->set_rules('pp', 'Upload Profile Picture', 'required');
		$this->form_validation->set_rules('bio', 'Add Bio', 'required');
		if($this->form_validation->run() == FALSE)
			$this->load->view('edit_artist', $data);
		else {
			$pp = $this->input->post('pp');
			$bio = $this->input->post('bio');

			$user = $this->login_model->edit_artist($pp, $bio);

			$this->session->set_flashdata('edit_profile_success', 'Profile Edited!');
			redirect('home');
		}
	}
}

?>