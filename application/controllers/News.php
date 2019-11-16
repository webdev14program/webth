<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{


	public function index()
	{


		$config['base_url'] = 'http://localhost:8123/webth/News/';
		$config['total_rows'] = $this->Model_news->count();
		$config['per_page'] = 3;

		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$isi['start'] = $this->uri->segment(3);
		$isi['data'] = $this->Model_news->data($config['per_page'], $isi['start']);


		$isi['content'] = 'News/tampilan_photo';
		$this->load->view('header');
		$this->load->view('News/tampilan_news', $isi);
		$this->load->view('footer');
	}
}
