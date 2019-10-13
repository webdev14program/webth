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
}
