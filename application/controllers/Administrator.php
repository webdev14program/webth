<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{


    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['menu'] = 'Admin SMK Tunas Harapan Version 1.0';
        $isi['guru'] =  $this->Model_kurikulum->guru();
        $isi['siswa'] =  $this->Model_kurikulum->siswa();
        $isi['alumni'] =  $this->Model_kurikulum->alumni();
        $isi['tkj'] =  $this->Model_kurikulum->tkj();
        $isi['pm'] =  $this->Model_kurikulum->pm();
        $isi['ak'] =  $this->Model_kurikulum->ak();
        $isi['ap'] =  $this->Model_kurikulum->ap();
        $isi['content'] = 'Admin/tampilan_content';
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }
    public function guru()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['menu'] = 'Data Guru';
        $isi['submenu'] = '';
        $isi['content'] = 'Admin/tampilan_guru';
        $isi['data'] = $this->Model_guru->data();
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }

    public function detail_guru($id)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['menu'] = 'Data Guru';
        $isi['submenu'] = 'Detail';
        $isi['content'] = 'Admin/detail_guru';
        $isi['data'] = $this->Model_guru->detail($id);
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }
    public function siswa()

    {

        $this->Model_keamanan->getKeamanan();
        $config['base_url'] = 'http://localhost/webth/Administrator/siswa';
        $config['total_rows'] = $this->Model_siswa->count();
        $config['per_page'] = 10;

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

        if ($this->input->post('submit')) {
            $isi['keyword'] = $this->input->post('keyword');
        } else {
            $isi['keyword'] = null;
        }

        $isi['content'] = 'Admin/Kurikulum/tampilan_siswa';

        $isi['start'] = $this->uri->segment(3);
        $isi['data'] = $this->Model_siswa->data($config['per_page'], $isi['start'], $isi['keyword']);

        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }


    public function walikelas()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['content'] = 'Admin/Kurikulum/tampilan_walikelas';
        $isi['data'] = $this->Model_walikelas->data();
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }

    public function posting()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['content'] = 'Admin/tampilan_posting';
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/tampilan_footer');
    }




    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/Login');
    }
}
