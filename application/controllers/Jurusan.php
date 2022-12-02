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
    public function tjkt()
    {
        $isi['jurusan'] = 'TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI';
        $isi['content'] = 'Jurusan/tkj';
        $this->load->view('header');
        $this->load->view('Jurusan/tampilan_jurusan', $isi);
        $this->load->view('footer');
    }

    public function akl()
    {
        $isi['content'] = 'Jurusan/ak';
        $isi['jurusan'] = 'Akuntansi Keuangan dan Lembaga';
        $this->load->view('header');
        $this->load->view('Jurusan/tampilan_jurusan', $isi);
        $this->load->view('footer');
    }
    public function mplb()
    {
        $isi['content'] = 'Jurusan/ap';
        $isi['jurusan'] = 'MANAJEMEN PERKANTORAN DAN LAYANAN BISNIS';
        $this->load->view('header');
        $this->load->view('Jurusan/tampilan_jurusan', $isi);
        $this->load->view('footer');
    }
    public function pm()
    {
        $isi['content'] = 'Jurusan/pm';
        $isi['jurusan'] = 'Pemasaran';
        $this->load->view('header');
        $this->load->view('Jurusan/tampilan_jurusan', $isi);
        $this->load->view('footer');
    }

    public function dkv()
    {
        $isi['content'] = 'Jurusan/dkv';
        $isi['jurusan'] = 'DESAIN KOMUNIKASI VISUAL';
        $this->load->view('header');
        $this->load->view('Jurusan/tampilan_jurusan', $isi);
        $this->load->view('footer');
    }
}
