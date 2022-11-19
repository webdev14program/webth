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

    public function TKJ()
    {
        $isi['guru'] = 'Guru Teknik Komputer dan Jaringan';
        $isi['content'] = 'Guru/guru_tkj';
        $isi['data'] = $this->Model_guru->tkj();
        $this->load->view('header');
        $this->load->view('Guru/tampilan_guru', $isi);
        $this->load->view('footer');
    }

    public function AK()
    {
        $isi['guru'] = 'Guru Akutansi Keuangan Lembaga';
        $isi['content'] = 'Guru/guru_ak';
        $isi['data'] = $this->Model_guru->ak();
        $this->load->view('header');
        $this->load->view('Guru/tampilan_guru', $isi);
        $this->load->view('footer');
    }

    public function PM()
    {
        $isi['guru'] = 'Guru Bisnis Daring dan Pemasaran';
        $isi['content'] = 'Guru/guru_pm';
        $isi['data'] = $this->Model_guru->pm();
        $this->load->view('header');
        $this->load->view('Guru/tampilan_guru', $isi);
        $this->load->view('footer');
    }

    public function AP()
    {
        $isi['guru'] = 'Guru Otomatisati Tata Kelola Perkantoran';
        $isi['content'] = 'Guru/guru_ap';
        $isi['data'] = $this->Model_guru->ap();
        $this->load->view('header');
        $this->load->view('Guru/tampilan_guru', $isi);
        $this->load->view('footer');
    }

    public function Umum()
    {
        $isi['guru'] = 'Guru Mata Pelajaran Umum';
        $isi['content'] = 'Guru/guru_umum';
        $isi['data'] = $this->Model_guru->umum();
        $this->load->view('header');
        $this->load->view('Guru/tampilan_guru', $isi);
        $this->load->view('footer');
    }
}
