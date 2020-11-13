<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function loadMenu()
    { 
        $this->load->view('admin/menu');
       
    }
}
