<?php
	class Posts_model extends CI_Model {
		public function _construct() {
			$this->load->database();
		}
		public function get_posts($id = FALSE) {
			if($id === FALSE) {
				$query = $this->db->get('posts');
				return $query->result_array();
			}
			
			$query = $this->db->get_where('posts', array('id' => $id));
			return $query->row_array();
		}
		public function create($image) {
			$data =  array(
				'image' => $image,
				'caption' => $this->input->post('caption'),
				'genre' => $this->input->post('genre')
			);
			return $this->db->insert('posts', $data);
		}
		public function delete($id) {
			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;
		}
		public function update() {
			$data =  array(
				'image' => $image,
				'caption' => $this->input->post('caption'),
				'genre' => $this->input->post('genre')
			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);

		}
	}
?>