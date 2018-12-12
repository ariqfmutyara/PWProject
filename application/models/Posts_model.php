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
		public function get_image() {
			$this->db->select('image');
			$this->db->from('posts');
			$result = $this->db->get();
			return $result->result_array();
		}
		public function delete($id) {
			$this->db->where('id',$id);
			$this->db->delete('posts');
			return true;
		}
		public function update() {
			
		}

	}