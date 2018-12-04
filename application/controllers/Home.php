<?php
class Home extends CI_Controller {

	public function index($page = 'header_awal', $page1 = 'container_awal')
	{
		if(!file_exists(APPPATH.'views/'.$page.'.php'))
		{
			show_404();
		}

		if(!file_exists(APPPATH.'views/'.$page1.'.php'))
		{
			show_404();
		}

		$this->load->view('navbar_awal');
<<<<<<< HEAD
		$this->load->view('header');
		$this->load->view('container_awal');
=======

		$data['title'] = ucfirst($page);
		$this->load->view($page, $data);

		$data['title'] = ucfirst($page1);
		$this->load->view($page1, $data);
>>>>>>> 78393a86cea359d1533b855697e9f968357c26d1
	}
}
?>