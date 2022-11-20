<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    public function countSiswa()
    {
        $sql = "SELECT COUNT(*) AS jumlah_siswa FROM `siswa`
INNER JOIN tahun_ajaran
ON siswa.tahun_ajaran=tahun_ajaran.id_tahun_ajaran
WHERE tahun_ajaran.status='AKTIF';";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function dataSiswa()
    {
        $sql = "SELECT tahun_ajaran.id_tahun_ajaran,tahun_ajaran.tahun_ajaran,COUNT(*) AS jumlah_siswa FROM `siswa`
INNER JOIN tahun_ajaran
ON siswa.tahun_ajaran=tahun_ajaran.id_tahun_ajaran
GROUP BY tahun_ajaran.id_tahun_ajaran;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function detail_siswa($id_tahun_ajaran)
    {
        $sql = "SELECT tahun_ajaran.id_tahun_ajaran,tahun_ajaran.tahun_ajaran,siswa.id_siswa,siswa.nama_siswa,jurusan.jurusan,siswa.kelas FROM `siswa`
                INNER JOIN tahun_ajaran
                ON siswa.tahun_ajaran=tahun_ajaran.id_tahun_ajaran
                INNER JOIN jurusan
                ON siswa.jurusan=jurusan.kode
                WHERE tahun_ajaran.id_tahun_ajaran='$id_tahun_ajaran';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function simpan($data = array())
    {
        $jumlah = count($data);

        if ($jumlah > 0) {
            $this->db->insert_batch('siswa', $data);
        }
    }
}
