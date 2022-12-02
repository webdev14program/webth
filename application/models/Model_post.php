<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_post extends CI_Model
{


    public function data()
    {
        $sql = "SELECT * FROM `post`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function data_admin()
    {
        $sql = "SELECT * FROM `post`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function detail_admin_post($id_kegiatan)
    {
        $sql = "SELECT * FROM `post`
WHERE id_kegiatan='$id_kegiatan';";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function data_terbaru()
    {
        $sql = "SELECT * FROM `post`
ORDER BY date DESC
limit 3;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
