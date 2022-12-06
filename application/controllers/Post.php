<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{

    public function index()
    {
        $isi['post'] = $this->Model_post->data();
        $this->load->view('header');
        $this->load->view('tampilan_post', $isi);
        $this->load->view('footer');
    }
}
