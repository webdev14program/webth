<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{


    public function index()
    {
        $this->load->view('header');
        $this->load->view('Contact/tampilan_contact');
        $this->load->view('footer');
    }
}
