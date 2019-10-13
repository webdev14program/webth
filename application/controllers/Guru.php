<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['content'] = '/Admin/Guru/Data_Guru';
        // $isi['judul'] = 'Dashboard';
        // $isi['subjudul'] = 'Siswa';
        $isi['data'] = $this->Model_guru->data();
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }
}
