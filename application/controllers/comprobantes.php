
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comprobantes extends CI_Controller
{
    public function create_comprobantes()
    { 
        
        if ($this->accesscontrol->checkAuth()['correct']) {
            $this->load->view('admin/header');
            $this->load->view('admin/comprobantes');
            $this->load->view('admin/footer');
        } else {
            redirect(base_url() . 'login', 'refresh');
        }
    }
}