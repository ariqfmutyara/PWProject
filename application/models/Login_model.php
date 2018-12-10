<?php
	class Login_model extends CI_Model {
		public function _construct() {
			$this->load->database();
		}

		public function login_voter($username, $password)
		{
			$this->db->where('username_voter', $username);
			$this->db->where('pw_voter', $password);

			$result = $this->db->get('voters');
			return $result->row_array();
		}

		public function login_user($username, $password)
		{
			$this->db->where('username_user', $username);
			$this->db->where('pw_user', $password);

			$result = $this->db->get('users');
			return $result->row_array();
		}

		public function edit_artist($pp, $bio)
		{
			$this->db->where('pp', $pp);
			$this->db->where('bio', $bio);

			$result = $this->db->get('users');
			return $result->row_array();
		}
	}
?>


	