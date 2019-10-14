<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_walikelas extends CI_Model
{
    public function data()
    {
        $sql = "SELECT * FROM `walikelas`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
