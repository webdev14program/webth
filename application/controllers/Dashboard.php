<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'third_party/spout/src/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Dashboard extends CI_Controller
{

    public function index()
    {
        // $isi['tahun_ajaran'] = $this->Model_tahun_ajaran->home_tahun_ajaran();
        $isi['jurusan'] = $this->Model_jurusan->countJurusan();
        $isi['kelas'] = $this->Model_kelas->countKelas();
        // $isi['siswa'] = $this->Model_siswa->countSiswa();

        $isi['version'] = 'RC V2.0';
        $isi['content'] = 'Admin/tampilan_home';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function data_jurusan()
    {
        $isi['jurusan'] = $this->Model_jurusan->dataJurusan();
        $isi['content'] = 'Admin/tampilan_jurusan';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function data_kelas()
    {
        $isi['tahun_ajaran'] = $this->Model_kelas->tahun_ajaran();
        $isi['content'] = 'Admin/tampilan_kelas';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }

    public function hapus_all_kelas()
    {
        $this->db->empty_table('kelas');
        $this->session->set_flashdata('pesan', '<div class="row">
        <div class="col-md mt-2">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data Kelas Berhasil Di Hapus</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
        </div>');
        redirect('Dashboard/data_kelas');
    }

    public function upload_kelas()
    {
        if ($this->input->post('submit', TRUE) == 'upload') {
            $config['upload_path']      = './temp_doc/';
            $config['allowed_types']    = 'xlsx|xls';
            $config['file_name']        = 'doc' . time();

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('excel')) {
                $file   = $this->upload->data();

                $reader = ReaderEntityFactory::createXLSXReader();
                $reader->open('temp_doc/' . $file['file_name']);


                foreach ($reader->getSheetIterator() as $sheet) {
                    $numRow = 1;
                    $save   = array();
                    foreach ($sheet->getRowIterator() as $row) {

                        if ($numRow > 1) {

                            $cells = $row->getCells();

                            $data = array(
                                'id'              => $cells[0],
                                'kode'     => $cells[1],
                                'kelas'            => $cells[2],
                                'id_tahun_ajaran'            => $cells[3],
                            );
                            array_push($save, $data);
                        }
                        $numRow++;
                    }
                    $this->Model_kelas->simpan_kelas($save);
                    $reader->close();
                    unlink('temp_doc/' . $file['file_name']);
                    $this->session->set_flashdata('pesan', '<div class="row">
        <div class="col-md mt-2">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Kelas Berhasil Di Tambah</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
        </div>');
                    redirect('Dashboard/data_kelas');
                }
            } else {
                echo "Error :" . $this->upload->display_errors();
            }
        }
    }

    public function detail_kelas($id_tahun_ajaran)
    {
        $isi['detail_kelas'] = $this->Model_kelas->detail_kelas($id_tahun_ajaran);
        $isi['content'] = 'Admin/tampilan_detail_kelas';
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('Admin/templates/footer');
    }



    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/Auth');
    }
}
