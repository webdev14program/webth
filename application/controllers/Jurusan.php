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
        $isi['jurusan'] = 'Teknik Komputer dan Jaringan';
        $isi['content'] = 'Jurusan/tkj';
        $this->load->view('header');
        $this->load->view('Jurusan/tampilan_jurusan', $isi);
        $this->load->view('footer');
    }

    public function ak()
    {
        $isi['content'] = 'Jurusan/ak';
        $isi['jurusan'] = 'Akutansi Keuangan Lembaga';
        $this->load->view('header');
        $this->load->view('Jurusan/tampilan_jurusan', $isi);
        $this->load->view('footer');
    }
    public function ap()
    {
        $isi['content'] = 'Jurusan/ap';
        $isi['jurusan'] = 'Otomatisasi Tata Kelola Perkantoran';
        $this->load->view('header');
        $this->load->view('Jurusan/tampilan_jurusan', $isi);
        $this->load->view('footer');
    }
    public function pm()
    {
        $isi['content'] = 'Jurusan/pm';
        $isi['jurusan'] = 'Bisnis Daring dan Pemasaran';
        $this->load->view('header');
        $this->load->view('Jurusan/tampilan_jurusan', $isi);
        $this->load->view('footer');
    }
}
