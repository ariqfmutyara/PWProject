<?php
	class Register_model extends CI_Model {
		public function _construct() {
			$this->load->database();
		}
		public function register_voter($enc) {
			$data =  array(
				'name_voter' => $this->input->post('name_voter'),
				'username_voter' => $this->input->post('username_voter'),
				'email_voter' => $this->input->post('email_voter'),
				'pw_voter' => $enc
			);

			return $this->db->insert('voters', $data);
		}

		public function register_artist($enc) {
			$data =  array(
				'name_user' => $this->input->post('name_user'),
				'username_user' => $this->input->post('username_user'),
				'email_user' => $this->input->post('email_user'),
				'pw_user' => $enc
			);

			return $this->db->insert('users', $data);
		}

		public function check_username_voters($username) 
		{
			$query = $this->db->get_where('voters', array('username_voter => $username'));
			if(empty($query->row_array()))
				return true;
			else
				return false;
		}

		public function check_username_users($username) 
		{
			$query = $this->db->get_where('users', array('username_user => $username'));
			if(empty($query->row_array()))
				return true;
			else
				return false;
		}

		public function check_email_voters($email) 
		{
			$query = $this->db->get_where('voters', array('email_voter => $email'));
			if(empty($query->row_array()))
				return true;
			else
				return false;
		}

		public function check_email_users($email) 
		{
			$query = $this->db->get_where('users', array('email_user => $email'));
			if(empty($query->row_array()))
				return true;
			else
				return false;
		}
	}
?>