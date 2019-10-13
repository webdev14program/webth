<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurikulum extends CI_Controller
{


    public function index()
    {
        $isi['content'] = 'Admin/Kurikulum/tampilan_content';
        $this->load->view('Admin/Kurikulum/tampilan_kurikulum', $isi);
        $this->load->view('Admin/tampilan_footer');
    }
    public function guru()
    {
        $isi['content'] = 'Admin/Kurikulum/tampilan_guru';
        $isi['data'] = $this->Model_guru->data();
        $this->load->view('Admin/Kurikulum/tampilan_kurikulum', $isi);
        $this->load->view('Admin/tampilan_footer');
    }
    public function siswa()
    {
        $isi['content'] = 'Admin/Kurikulum/tampilan_siswa';
        $isi['data'] = $this->Model_siswa->data();
        $this->load->view('Admin/Kurikulum/tampilan_kurikulum', $isi);
        $this->load->view('Admin/tampilan_footer');
    }
}
