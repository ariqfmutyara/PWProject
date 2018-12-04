<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_artist extends CI_Controller {

	public function index()
	{
        $this->load->view('home_artist');
        $this->load->view('header');
		$this->load->view('container');
	}
}
?>