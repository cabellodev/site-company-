<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	

	public function index()
	{
		$this->load->view('sh_digitales/header');
		$this->load->view('sh_digitales/site');
		$this->load->view('sh_digitales/footer');

	}


	




}
