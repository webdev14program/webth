<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kurikulum extends CI_Model
{

    public function guru()
    {
        $sql = "SELECT COUNT(*) AS 'Guru' FROM `guru`";
        $query = $this->db->query($sql);
        return $query->row()->Guru;
    }

    public function siswa()
    {
        $sql = "SELECT COUNT(*) AS 'siswa' FROM `siswa`";
        $query = $this->db->query($sql);
        return $query->row()->siswa;
    }

    public function tkj()
    {
        $sql = "SELECT COUNT(*) AS 'tkj' FROM `siswa` WHERE jurusan='Teknik Komputer dan Jaringan'";
        $query = $this->db->query($sql);
        return $query->row()->tkj;
    }

    public function pm()
    {
        $sql = "SELECT COUNT(*) AS 'pm' FROM `siswa` WHERE jurusan='Pemasaran'";
        $query = $this->db->query($sql);
        return $query->row()->pm;
    }

    public function ak()
    {
        $sql = "SELECT COUNT(*) AS 'ak' FROM `siswa` where jurusan='Akutansi'";
        $query = $this->db->query($sql);
        return $query->row()->ak;
    }
    public function ap()
    {
        $sql = "SELECT COUNT(*) AS 'ap' FROM `siswa` WHERE jurusan='Administrasi Perkantoran'";
        $query = $this->db->query($sql);
        return $query->row()->ap;
    }

    public function alumni()
    {
        $sql = "SELECT COUNT(*) AS alum FROM `alumni`";
        $query = $this->db->query($sql);
        return $query->row()->alum;
    }


}
