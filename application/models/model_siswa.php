<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    public function data($limit, $start, $keyword = null)
    {

        if ($keyword) {
            $this->db->like('nama', $keyword);
        }

        return $this->db->get('siswa', $limit, $start)->result_array();
    }

    public function count()
    {
        return $this->db->get('siswa')->num_rows();
    }
}
