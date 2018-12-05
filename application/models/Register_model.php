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
	}