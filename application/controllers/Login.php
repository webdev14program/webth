<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function index()
    {
        // $this->load->view('header');
        $this->load->view('Admin/tampilan_login');
        // $this->load->view('footer');
    }

    public function getlogin()
    {
        $u = $this->input->post('username');
        $p = $this->input->post('password');
        // $l = $this->input->post('level');
        $this->load->model('Model_login');
        $this->Model_login->getlogin($u, $p);
    }

    public function register()
    {
        $this->load->view('admin/tampilan_register');
    }

    public function save()
    {
        $level = '4';
        $data = array(
            'id' => $this->input->post('id'),
            'jurusan' => $this->input->post('jurusan'),
            'nama' => $this->input->post('nama')
        );
        $data2 = array(
            'id' => $this->input->post('id'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $level
        );

        $this->db->insert('siswa', $data);
        $this->db->insert('user', $data2);

        redirect('Login');
    }
}
