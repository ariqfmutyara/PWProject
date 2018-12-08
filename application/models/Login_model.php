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
			if($result->num_rows() == 1)
				return $result->row(0)->id_voters;
			else
				return false;
		}
	}
?>


	