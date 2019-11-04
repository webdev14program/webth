<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{


	public function index()
	{
		$isi['content'] = 'News/tampilan_photo';
		$this->load->view('header');
		$this->load->view('News/tampilan_news', $isi);
		$this->load->view('footer');
	}
}
