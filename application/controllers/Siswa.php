<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{


    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['menu'] = 'Admin SMK Tunas Harapan Version 1.0';
        $isi['content'] = 'Admin/Siswa/tampilan_content';
        $this->load->view('Admin/Siswa/tampilan_siswa', $isi);
        $this->load->view('Admin/tampilan_footer');
    }




    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/Login');
    }
}
