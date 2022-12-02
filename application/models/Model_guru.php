<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_guru extends CI_Model
{
    public function countdataGuru()
    {
        $sql = "SELECT COUNT(*) AS jumlah_guru FROM `guru`;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function dataGuru()
    {
        $sql = "SELECT *,
                CASE
                    WHEN jenis_guru='AKL' THEN 'AKUNTANSI KEUANGAN DAN LEMBAGA'
                    WHEN jenis_guru='PM' THEN 'PEMASARAN'
                    WHEN jenis_guru='MPLB' THEN 'MANAJEMEN PERKANTORAN DAN LAYANAN BISNIS'
                    WHEN jenis_guru='TJKT' THEN 'TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI'
                    WHEN jenis_guru='DKV' THEN 'DESAIN KOMUNIKASI VISUAL'
                    WHEN jenis_guru='UMUM' THEN 'MAPEL UMUM'
                END AS status_guru
                FROM `guru`;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function detail($id)
    {
        return $this->db->get_where('guru', ['id' => $id])->row_array();
    }

    public function tkj()
    {
        $sql = "SELECT * FROM `guru`
INNER JOIN jurusan
ON guru.jenis_guru=jurusan.kode
WHERE jenis_guru LIKE '%TJKT%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function ak()
    {
        $sql = "SELECT * FROM `guru`
INNER JOIN jurusan
ON guru.jenis_guru=jurusan.kode
WHERE jenis_guru LIKE '%AKL%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function pm()
    {
        $sql = "SELECT * FROM `guru`
INNER JOIN jurusan
ON guru.jenis_guru=jurusan.kode
WHERE jenis_guru LIKE '%PM%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function ap()
    {
        $sql = "SELECT * FROM `guru`
INNER JOIN jurusan
ON guru.jenis_guru=jurusan.kode
WHERE jenis_guru LIKE '%MPLB%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dkv()
    {
        $sql = "SELECT * FROM `guru`
INNER JOIN jurusan
ON guru.jenis_guru=jurusan.kode
WHERE jenis_guru LIKE '%DKV%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function umum()
    {
        $sql = "SELECT * FROM `guru`
INNER JOIN jurusan
ON guru.jenis_guru=jurusan.kode
WHERE jenis_guru LIKE '%Umum%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function simpan($data = array())
    {
        $jumlah = count($data);

        if ($jumlah > 0) {
            $this->db->insert_batch('guru', $data);
        }
    }
}
