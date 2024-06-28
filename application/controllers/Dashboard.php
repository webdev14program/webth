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
		$isi['guru'] = $this->Model_guru->countdataGuru();
		$isi['kelas'] = $this->Model_kelas->countKelas();
		$isi['siswa'] = $this->Model_siswa->countSiswa();

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

	public function data_guru()
	{
		$isi['guru'] = $this->Model_guru->dataGuru();
		$isi['content'] = 'Admin/tampilan_guru';
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/tampilan_dashboard', $isi);
		$this->load->view('Admin/templates/footer');
	}

	public function hapus_all_guru()
	{
		$this->db->empty_table('guru');
		$this->session->set_flashdata('pesan', '<div class="row">
        <div class="col-md mt-2">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data Guru Berhasil Di Hapus</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
        </div>');
		redirect('Dashboard/data_guru');
	}

	public function upload_guru()
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
								'id_guru'       => $cells[0],
								'nama_guru'     => $cells[1],
								'jenis_guru'    => $cells[2],

							);
							array_push($save, $data);
						}
						$numRow++;
					}
					$this->Model_guru->simpan($save);
					$reader->close();
					unlink('temp_doc/' . $file['file_name']);
					$this->session->set_flashdata('pesan', '<div class="row">
            <div class="col-md mt-2">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Guru Berhasil Di Tambah</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
            </div>
            </div>');
					redirect('Dashboard/data_guru');
				}
			} else {
				echo "Error :" . $this->upload->display_errors();
			}
		}
	}

	public function data_siswa()
	{
		$isi['siswa'] = $this->Model_siswa->dataSiswa();
		$isi['content'] = 'Admin/tampilan_siswa';
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/tampilan_dashboard', $isi);
		$this->load->view('Admin/templates/footer');
	}

	public function hapus_all_siswa()
	{
		$this->db->empty_table('siswa');
		$this->session->set_flashdata('pesan', '<div class="row">
        <div class="col-md mt-2">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data Siswa Berhasil Di Hapus</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
        </div>');
		redirect('Dashboard/data_siswa');
	}

	public function upload_siswa()
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
								'id_siswa'       => $cells[0],
								'nama_siswa'     => $cells[1],
								'jurusan'    => $cells[2],
								'kelas'    => $cells[3],
								'tahun_ajaran'    => $cells[4],

							);
							array_push($save, $data);
						}
						$numRow++;
					}
					$this->Model_siswa->simpan($save);
					$reader->close();
					unlink('temp_doc/' . $file['file_name']);
					$this->session->set_flashdata('pesan', '<div class="row">
            <div class="col-md mt-2">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Siswa Berhasil Di Tambah</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
            </div>
            </div>');
					redirect('Dashboard/data_siswa');
				}
			} else {
				echo "Error :" . $this->upload->display_errors();
			}
		}
	}

	public function detail_siswa($id_tahun_ajaran)
	{
		$isi['detail_siswa'] = $this->Model_siswa->detail_siswa($id_tahun_ajaran);
		$isi['content'] = 'Admin/tampilan_detail_siswa';
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/tampilan_dashboard', $isi);
		$this->load->view('Admin/templates/footer');
	}

	public function post()
	{
		$isi['post'] = $this->Model_post->data_admin();
		$isi['content'] = 'Admin/tampilan_post';
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/tampilan_dashboard', $isi);
		$this->load->view('Admin/templates/footer');
	}

	public function upload_post()
	{
		$this->Model_keamanan->getKeamanan();
		$id = rand(111111, 999999);
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$ringkasan_kegiatan = $this->input->post('ringkasan_kegiatan');
		$detail_kegiatan = $this->input->post('detail_kegiatan');
		$gambar = $this->input->post('gambar');

		$data = array(
			'id_kegiatan' =>  $id,
			'nama_kegiatan' =>  $nama_kegiatan,
			'ringkasan_kegiatan' => $ringkasan_kegiatan,
			'detail_kegiatan' => $detail_kegiatan,
			'gambar' => $gambar,

		);

		$this->db->insert('post', $data);
		redirect('Dashboard/post');
	}

	public function detail_post($id_kegiatan)
	{
		$isi['detail_post'] = $this->Model_post->detail_admin_post($id_kegiatan);
		$isi['detail_post_gambar'] = $this->Model_post->detail_admin_post_gambar($id_kegiatan);
		$isi['content'] = 'Admin/tampilan_detail_post';
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/tampilan_dashboard', $isi);
		$this->load->view('Admin/templates/footer');
	}

	public function upload_post_gambar()
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
								'id_gambar_post '       => $cells[0],
								'id_kegiatan'     => $cells[1],
								'gambar'    => $cells[2],

							);
							array_push($save, $data);
						}
						$numRow++;
					}
					$this->Model_post->simpan($save);
					$reader->close();
					unlink('temp_doc/' . $file['file_name']);
					$this->session->set_flashdata('pesan', '<div class="row">
            <div class="col-md mt-2">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Gambar Berhasil  Berhasil Di Upload</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
            </div>
            </div>');
					redirect('Dashboard/detail_post/' . $id_kegiatan);
				}
			} else {
				echo "Error :" . $this->upload->display_errors();
			}
		}


		// $this->Model_keamanan->getKeamanan();
		// $id = rand(111111, 999999);
		// $id_kegiatan = $this->input->post('id_kegiatan');
		// $gambar = $this->input->post('gambar');

		// $data = array(
		// 	'id_gambar_post' =>  $id,
		// 	'id_kegiatan' =>  $id_kegiatan,
		// 	'gambar' => "http://drive.google.com/uc?export=view&id=" . $gambar,
		// );

		// $this->db->insert('post_gambar', $data);
		// redirect('Dashboard/detail_post/' . $id_kegiatan);
	}

	public function hapus_post($id_kegiatan)
	{
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->delete('post');

		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->delete('post_gambar');


		$this->session->set_flashdata('info', '<div class="row">
        <div class="col-md mt-2">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>POST BERHASIL DI HAPUS BERDASARKAN ID </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        </div>');
		redirect('Dashboard/post');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/Webadmin');
	}
}
