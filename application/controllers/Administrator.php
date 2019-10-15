<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{


    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['guru'] =  $this->Model_kurikulum->guru();
        $isi['siswa'] =  $this->Model_kurikulum->siswa();
        $isi['tkj'] =  $this->Model_kurikulum->tkj();
        $isi['pm'] =  $this->Model_kurikulum->pm();
        $isi['ak'] =  $this->Model_kurikulum->ak();
        $isi['ap'] =  $this->Model_kurikulum->ap();
        $isi['content'] = 'Admin/tampilan_content';
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }
    public function guru()
    {
        $isi['content'] = 'Admin/Kurikulum/tampilan_guru';
        $isi['data'] = $this->Model_guru->data();
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }
    public function siswa()
    {
        $isi['content'] = 'Admin/Kurikulum/tampilan_siswa';
        $isi['data'] = $this->Model_siswa->data();
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }

    public function walikelas()
    {
        $isi['content'] = 'Admin/Kurikulum/tampilan_walikelas';
        $isi['data'] = $this->Model_walikelas->data();
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }

    public function posting()
    {
        $isi['content'] = 'Admin/tampilan_posting';
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/Login');
    }
}
