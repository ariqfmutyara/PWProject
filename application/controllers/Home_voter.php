<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_voter extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar_voter');
		$this->load->view('header_awal');
		$this->load->view('container_voter');
	}
}
?>