<?php
	class Posts_model extends CI_Model {
		public function _construct() {
			$this->load->database();
		}
		public function create($image) {
			$data =  array(
				'image' => $image,
				'caption' => $this->input->post('caption'),
				'genre' => $this->input->post('genre')
			);
			return $this->db->insert('posts', $data);
		}

	}