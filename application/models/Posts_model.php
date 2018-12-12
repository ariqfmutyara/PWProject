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
		public function delete() {
			$image_file_name = $this->db->select('image')->get_where('posts');
			$cwd = getcwd();
			$image_file_path = $cwd."\\assets\\foto\\posts\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); 
			$this->db->where('image');
			$this->db->delete('posts');
			return true;
		}
		public function update() {
			$data = array(
				'caption' => $this->input->post('caption'),
			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);
		}

	}