<?php
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar_awal');
		if($this->session->userdata('logged_in_voter') || $this->session->userdata('logged_in_user') ) {
			$this->load->model('posts_model');
			$result['image'] = $this->posts_model->get_image();
			$this->load->view('header_voter');
			$this->load->view('container_log', $result);
		}
		else {
			$this->load->view('header');
			$this->load->view('container_awal');
		}
		
	}
}
?>