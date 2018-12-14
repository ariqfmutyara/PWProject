<?php
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar_awal');
		if($this->session->userdata('logged_in_voter') || $this->session->userdata('logged_in_user') ) {
			$this->load->model('posts_model');
			$data['posts'] = $this->posts_model->get_posts();
			$this->load->view('header_voter');
			$this->load->view('container_log', $data);
		}
		else {
			$this->load->view('header');
			$this->load->view('container_awal');
		}
		
	}

	public function posts($id = NULL) {
		$data['posts'] = $this->posts_model->get_posts($id);

		if(empty($data['posts'])) 
			show_404();

		$this->load->view('posts_artist', $data);
	}
}
?>