<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


        public function index()
        {
                $isi['siswa'] =  $this->Model_kurikulum->siswa();
                $isi['alumni'] =  $this->Model_kurikulum->alumni();
                $isi['popular'] = $this->Model_news->data1();
                $this->load->view('header');
                $this->load->view('tampilan_home', $isi);
                $this->load->view('footer');
        }
}
