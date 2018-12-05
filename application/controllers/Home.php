<?php
class Home extends CI_Controller {

	public function index($page = 'header', $page1 = 'container_awal')
	{
		if(!file_exists(APPPATH.'/views/'.$page.'.php'))
		{
			show_404();
		}

		if(!file_exists(APPPATH.'/views/'.$page1.'.php'))
		{
			show_404();
		}

		$this->load->view('navbar_awal');

		$data['title'] = ucfirst($page);
		$this->load->view($page, $data);

		$data['title'] = ucfirst($page1);
		$this->load->view($page1, $data);

	}
}
?>