<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_news extends CI_Model
{
    public function data($limit, $start)
    {
        return $this->db->get('posting', $limit, $start)->result_array();
    }

    public function count()
    {
        return $this->db->get('posting')->num_rows();
    }

    public function data1()
    {
        $sql = "SELECT * FROM `posting` ORDER BY `posting`.`date` DESC LIMIT 3";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
