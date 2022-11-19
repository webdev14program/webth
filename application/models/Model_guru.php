<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_guru extends CI_Model
{
    public function data()
    {
        $sql = "SELECT * FROM `guru`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function detail($id)
    {
        return $this->db->get_where('guru', ['id' => $id])->row_array();
    }

    public function tkj()
    {
        $sql = "SELECT * FROM `guru` WHERE guru='Teknik Komputer dan Jaringan'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function ak()
    {
        $sql = "SELECT * FROM `guru` WHERE guru='Akutansi'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function pm()
    {
        $sql = "SELECT * FROM `guru` WHERE guru='Pemasaran'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function ap()
    {
        $sql = "SELECT * FROM `guru` WHERE guru='Administrasi Perkantoran'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function umum()
    {
        $sql = "SELECT * FROM `guru` WHERE guru='Umum'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
