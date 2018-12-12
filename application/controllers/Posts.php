<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Posts extends CI_Controller {
		public function _construct() {
		parent::_construct();
		$this->load->model('posts_model');
		$this->load->library('session');
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		}

		public function create() {
			$data['title'] = 'Create';

			$this->form_validation->set_rules('caption', 'Write your caption', 'required');
			$this->form_validation->set_rules('genre', 'Select Genre', 'required');

			if($this->form_validation->run() == FALSE) 
				$this->load->view('upload_foto', $data);
			else {
				$config['upload_path'] = './assets/foto/posts';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = '4096';
				$config['max_width'] = '1200';
				$config['max_height'] = '1200';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()) {
					$error = array('error' => $this->upload->display_errors());
					$image =  'noimage.jpg';
					redirect('create');
				}
				else {
					$data = array('upload_data' => $this->upload->data());
					$image = $_FILES['userfile']['name'];
					$this->session->set_flashdata('create', 'Data Successfully Uploaded');
				}
				$this->posts_model->create($image); 
					redirect('home');
		}
	}
}
?>