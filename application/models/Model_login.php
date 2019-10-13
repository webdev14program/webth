<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{
    public function getlogin($u, $p)
    {
        $this->db->where('username', $u);
        $this->db->where('password', $p);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'username' => $row->username,
                    'password' => $row->password,
                    'level'  => $row->level
                );
                // $sess2 = array('level' => $row->level);
                $this->session->set_userdata($sess);
                // redirect('Dashboard');
                if ($this->session->userdata("level") == "1") {
                    redirect('Dashboard');
                } elseif ($this->session->userdata("level") == "2") {
                    redirect('Kurikulum');
                } elseif ($this->session->userdata("level") == "4") {
                    redirect('Dashboard/Siswa');
                }
            }
        } else {
            $this->session->set_flashdata('info', 'maaf username dan password salah');
            redirect('Admin');
        }
    }
}
