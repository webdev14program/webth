<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{


    // public function index()
    // {
    //     $this->load->view('header');
    //     $this->load->view('Jurusan/tampilan_jurusan');
    //     $this->load->view('footer');
    // }
    public function tkj()
    {
        $isi['content'] = 'Jurusan/tkj';
        $this->load->view('header');
        $this->load->view('Jurusan/tampilan_jurusan', $isi);
        $this->load->view('footer');
    }
}
