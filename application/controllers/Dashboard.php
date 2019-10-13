<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function index()
    {
        $isi['content'] = 'Admin/tampilan_content';
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }
}
