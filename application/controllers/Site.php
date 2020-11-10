<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	

    public function home()
	{
		$this->load->view('sh_digitales/header');
		$this->load->view('sh_digitales/site');
		$this->load->view('sh_digitales/footer');

	}
	public function login()
	{
		
		$this->load->view('sh_digitales/login');
	

	}
	




}
