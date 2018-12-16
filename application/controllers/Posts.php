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
		if(!$this->session->userdata('logged_in_user'))
			redirect('login_artist');
		$data['title'] = 'Create';

		$data['genre'] = $this->posts_model->get_genre();

		$this->form_validation->set_rules('caption', 'Write your caption', 'required');
		$this->form_validation->set_rules('genre_id', 'Select Genre', 'required');

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
	public function delete($id) {
		if(!$this->session->userdata('logged_in_user'))
			redirect('login_artist');
		$this->posts_model->delete($id);
		redirect('home');
	}
	public function edit($id) {
		if(!$this->session->userdata('logged_in_user'))
			redirect('login_artist');
		$data['posts'] = $this->posts_model->get_posts($id);

		if(empty($data['posts'])) 
			show_404();

		$this->load->view('edit_post', $data);
	}
	public function update() {
		if(!$this->session->userdata('logged_in_user'))
			redirect('login_artist');
		$this->posts_model->update();
		redirect('home');
	}
}
?>