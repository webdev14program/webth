<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {


	public function index()
	{
		$this->load->view('header');
		$this->load->view('News/tampilan_news');
		$this->load->view('footer');
	}
}
