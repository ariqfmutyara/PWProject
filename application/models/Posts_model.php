<?php
	class Posts_model extends CI_Model {
		public function _construct() {
			$this->load->database();
		}
		public function get_posts($id = FALSE) {
			if($id === FALSE) {
				$this->db->join('genre', 'genre.id = posts.genre_id');
				$query = $this->db->get('posts');
				return $query->result_array();
			}
			
			$query = $this->db->get_where('posts', array('id' => $id));
			return $query->row_array();
		}

		public function get_genre() {
			$this->db->order_by('id');
			$query =  $this->db->get('genre');
			return $query->result_array();

		}
		public function create($image) {
			$data =  array(
				'genre_id' => $this->input->post('genre_id'),
				'user_id' => $this->session->userdata('user'),
				'image' => $image,
				'caption' => $this->input->post('caption')
			);
			return $this->db->insert('posts', $data);
		}
		public function delete($id) {
			$image_file_name = $this->db->select('image')->get_where('posts', array('id' => $id))->row()->image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\foto\\posts\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;
		}
		public function update() {
			$data =  array(
				'genre_id' => $this->input->post('genre_id'),
				'user_id' => $this->session->userdata('user'),
				'image' => $image,
				'caption' => $this->input->post('caption')
			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);
		}
	}
?>