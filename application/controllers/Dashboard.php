<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

    public function index()
    {
        $this->vars['title'] = 'Aplikasi Antrian';
        $this->vars['content'] = 'backend/dashboard';
        $this->load->view('tmp/index', $this->vars);
    }

}

/* End of file Dashboard.php */
