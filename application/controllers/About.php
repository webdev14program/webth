<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


	public function index()
	{
        $this->load->view('header');
        $this->load->view('About/tampilan_about');
        $this->load->view('footer');
	}
}
