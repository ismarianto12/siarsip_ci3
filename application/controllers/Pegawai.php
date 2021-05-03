<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		login_access();
		//hak_akses();
		$this->load->model('Pegawai_model');
		$this->load->library('form_validation');
		$this->load->library('datatables');
	}

	public function index()
	{
		$x['judul'] = 'Data : Pegawai';
		$this->template->load('template', 'pegawai/pegawai_list', $x);
	}

	public function json()
	{
		header('Content-Type: application/json');
		echo $this->Pegawai_model->json();
	}

	public function detail($id)
	{
		$row = $this->Pegawai_model->get_by_id($id);
		if ($row) {
			$data = array(
				'id' => $row->id,
				'nip' => $row->nip,
				'nama' => $row->nama,
				'no_hp' => $row->no_hp,
				'alamat' => $row->alamat,
				'tanggal_lahir' => $row->tanggal_lahir,
				'tempat_lahir' => $row->tempat_lahir,
				'golongan' => $row->golongan,
				'golongan_tanggal' => $row->golongan_tanggal,
				'jabatan' => $row->jabatan,
				'jabatan_tanggal' => $row->jabatan_tanggal,
				'kerja_tahun' => $row->kerja_tahun,
				'kerja_bulan' => $row->kerja_bulan,
				'latihan_jabatan' => $row->latihan_jabatan,
				'latihan_jabatan_tanggal' => $row->latihan_jabatan_tanggal,
				'latihan_jabatan_jam' => $row->latihan_jabatan_jam,
				'pendidikan' => $row->pendidikan,
				'pendidikan_lulus' => $row->pendidikan_lulus,
				'pendidikan_ijazah' => $row->pendidikan_ijazah,
				'catatan_mutasi' => $row->catatan_mutasi,
				'keterangan' => $row->keterangan,
				'username' => $row->username,
				'username_update' => $row->username_update,
				'datetime_insert' => $row->datetime_insert,
				'datetime_update' => $row->datetime_update,
				'status_deleted' => $row->status_deleted,

				'judul' => 'Detail :  PEGAWAI',
			);
			$this->template->load('template', 'pegawai/pegawai_read', $data);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
			redirect(site_url('pegawai'));
		}
	}

	public function tambah()
	{
		$data = array(
			'judul' => 'Tambah Pegawai',
			'button' => 'Create',
			'action' => site_url('pegawai/tambah_data'),
			'id' => set_value('id'),
			'nip' => set_value('nip'),
			'nama' => set_value('nama'),
			'no_hp' => set_value('no_hp'),
			'alamat' => set_value('alamat'),
			'tanggal_lahir' => set_value('tanggal_lahir'),
			'tempat_lahir' => set_value('tempat_lahir'),
			'golongan' => set_value('golongan'),
			'golongan_tanggal' => set_value('golongan_tanggal'),
			'jabatan' => set_value('jabatan'),
			'jabatan_tanggal' => set_value('jabatan_tanggal'),
			'kerja_tahun' => set_value('kerja_tahun'),
			'kerja_bulan' => set_value('kerja_bulan'),
			'latihan_jabatan' => set_value('latihan_jabatan'),
			'latihan_jabatan_tanggal' => set_value('latihan_jabatan_tanggal'),
			'latihan_jabatan_jam' => set_value('latihan_jabatan_jam'),
			'pendidikan' => set_value('pendidikan'),
			'pendidikan_lulus' => set_value('pendidikan_lulus'),
			'pendidikan_ijazah' => set_value('pendidikan_ijazah'),
			'catatan_mutasi' => set_value('catatan_mutasi'),
			'keterangan' => set_value('keterangan'),
		);
		$this->template->load('template', 'pegawai/pegawai_form', $data);
	}

	public function tambah_data()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah();
		} else {
			$data = array(
				'nip' => $this->input->post('nip', TRUE),
				'nama' => $this->input->post('nama', TRUE),
				'no_hp' => $this->input->post('no_hp', TRUE),
				'alamat' => $this->input->post('alamat', TRUE),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
				'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
				'golongan' => $this->input->post('golongan', TRUE),
				'golongan_tanggal' => $this->input->post('golongan_tanggal', TRUE),
				'jabatan' => $this->input->post('jabatan', TRUE),
				'jabatan_tanggal' => $this->input->post('jabatan_tanggal', TRUE),
				'kerja_tahun' => $this->input->post('kerja_tahun', TRUE),
				'kerja_bulan' => $this->input->post('kerja_bulan', TRUE),
				'latihan_jabatan' => $this->input->post('latihan_jabatan', TRUE),
				'latihan_jabatan_tanggal' => $this->input->post('latihan_jabatan_tanggal', TRUE),
				'latihan_jabatan_jam' => $this->input->post('latihan_jabatan_jam', TRUE),
				'pendidikan' => $this->input->post('pendidikan', TRUE),
				'pendidikan_lulus' => $this->input->post('pendidikan_lulus', TRUE),
				'pendidikan_ijazah' => $this->input->post('pendidikan_ijazah', TRUE),
				'catatan_mutasi' => $this->input->post('catatan_mutasi', TRUE),
				'keterangan' => $this->input->post('keterangan', TRUE),
				'username' => $this->input->post('username', TRUE),
			);
			$this->Pegawai_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
			redirect(site_url('pegawai'));
		}
	}

	public function edit($id)
	{
		$row = $this->Pegawai_model->get_by_id($id);

		if ($row) {
			$data = array(
				'judul' => 'Data PEGAWAI',
				'button' => 'Update',
				'action' => site_url('pegawai/edit_data'),
				'id' => set_value('id', $row->id),
				'nip' => set_value('nip', $row->nip),
				'nama' => set_value('nama', $row->nama),
				'no_hp' => set_value('no_hp', $row->no_hp),
				'alamat' => set_value('alamat', $row->alamat),
				'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
				'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
				'golongan' => set_value('golongan', $row->golongan),
				'golongan_tanggal' => set_value('golongan_tanggal', $row->golongan_tanggal),
				'jabatan' => set_value('jabatan', $row->jabatan),
				'jabatan_tanggal' => set_value('jabatan_tanggal', $row->jabatan_tanggal),
				'kerja_tahun' => set_value('kerja_tahun', $row->kerja_tahun),
				'kerja_bulan' => set_value('kerja_bulan', $row->kerja_bulan),
				'latihan_jabatan' => set_value('latihan_jabatan', $row->latihan_jabatan),
				'latihan_jabatan_tanggal' => set_value('latihan_jabatan_tanggal', $row->latihan_jabatan_tanggal),
				'latihan_jabatan_jam' => set_value('latihan_jabatan_jam', $row->latihan_jabatan_jam),
				'pendidikan' => set_value('pendidikan', $row->pendidikan),
				'pendidikan_lulus' => set_value('pendidikan_lulus', $row->pendidikan_lulus),
				'pendidikan_ijazah' => set_value('pendidikan_ijazah', $row->pendidikan_ijazah),
				'catatan_mutasi' => set_value('catatan_mutasi', $row->catatan_mutasi),
				'keterangan' => set_value('keterangan', $row->keterangan),
			);
			$this->template->load('template', 'pegawai/pegawai_form', $data);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
			redirect(site_url('pegawai'));
		}
	}

	public function edit_data()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->edit($this->input->post('id', TRUE));
		} else {
			$data = array(
				'nip' => $this->input->post('nip', TRUE),
				'nama' => $this->input->post('nama', TRUE),
				'no_hp' => $this->input->post('no_hp', TRUE),
				'alamat' => $this->input->post('alamat', TRUE),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
				'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
				'golongan' => $this->input->post('golongan', TRUE),
				'golongan_tanggal' => $this->input->post('golongan_tanggal', TRUE),
				'jabatan' => $this->input->post('jabatan', TRUE),
				'jabatan_tanggal' => $this->input->post('jabatan_tanggal', TRUE),
				'kerja_tahun' => $this->input->post('kerja_tahun', TRUE),
				'kerja_bulan' => $this->input->post('kerja_bulan', TRUE),
				'latihan_jabatan' => $this->input->post('latihan_jabatan', TRUE),
				'latihan_jabatan_tanggal' => $this->input->post('latihan_jabatan_tanggal', TRUE),
				'latihan_jabatan_jam' => $this->input->post('latihan_jabatan_jam', TRUE),
				'pendidikan' => $this->input->post('pendidikan', TRUE),
				'pendidikan_lulus' => $this->input->post('pendidikan_lulus', TRUE),
				'pendidikan_ijazah' => $this->input->post('pendidikan_ijazah', TRUE),
				'catatan_mutasi' => $this->input->post('catatan_mutasi', TRUE),
				'keterangan' => $this->input->post('keterangan', TRUE),
			);

			$this->Pegawai_model->update($this->input->post('id', TRUE), $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
			redirect(site_url('pegawai'));
		}
	}

	public function hapus($id)
	{
		$row = $this->Pegawai_model->get_by_id($id);

		if ($row) {
			$this->Pegawai_model->delete($id);
			$this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
			redirect(site_url('pegawai'));
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
			redirect(site_url('pegawai'));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nip', 'nip', 'trim|required|unique[pegawai:nip]');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
		$this->form_validation->set_rules('golongan', 'golongan', 'trim|required');
		$this->form_validation->set_rules('golongan_tanggal', 'golongan tanggal', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
		$this->form_validation->set_rules('jabatan_tanggal', 'jabatan tanggal', 'trim|required');
		$this->form_validation->set_rules('kerja_tahun', 'kerja tahun', 'trim|required');
		$this->form_validation->set_rules('kerja_bulan', 'kerja bulan', 'trim|required');
		$this->form_validation->set_rules('latihan_jabatan', 'latihan jabatan', 'trim|required');
		$this->form_validation->set_rules('latihan_jabatan_tanggal', 'latihan jabatan tanggal', 'trim|required');
		$this->form_validation->set_rules('latihan_jabatan_jam', 'latihan jabatan jam', 'trim|required');
		$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');
		$this->form_validation->set_rules('pendidikan_lulus', 'pendidikan lulus', 'trim|required');
		$this->form_validation->set_rules('pendidikan_ijazah', 'pendidikan ijazah', 'trim|required');
		$this->form_validation->set_rules('catatan_mutasi', 'catatan mutasi', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span>', '</span>');
	}

	public function excel()
	{
		$this->load->helper('exportexcel');
		$namaFile = "pegawai.xls";
		$judul = "pegawai";
		$tablehead = 0;
		$tablebody = 1;
		$nourut = 1;
		//penulisan header
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Disposition: attachment;filename=" . $namaFile . "");
		header("Content-Transfer-Encoding: binary ");

		xlsBOF();

		$kolomhead = 0;
		xlsWriteLabel($tablehead, $kolomhead++, "No");
		xlsWriteLabel($tablehead, $kolomhead++, "Nip");
		xlsWriteLabel($tablehead, $kolomhead++, "Nama");
		xlsWriteLabel($tablehead, $kolomhead++, "No Hp");
		xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
		xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Lahir");
		xlsWriteLabel($tablehead, $kolomhead++, "Tempat Lahir");
		xlsWriteLabel($tablehead, $kolomhead++, "Golongan");
		xlsWriteLabel($tablehead, $kolomhead++, "Golongan Tanggal");
		xlsWriteLabel($tablehead, $kolomhead++, "Jabatan");
		xlsWriteLabel($tablehead, $kolomhead++, "Jabatan Tanggal");
		xlsWriteLabel($tablehead, $kolomhead++, "Kerja Tahun");
		xlsWriteLabel($tablehead, $kolomhead++, "Kerja Bulan");
		xlsWriteLabel($tablehead, $kolomhead++, "Latihan Jabatan");
		xlsWriteLabel($tablehead, $kolomhead++, "Latihan Jabatan Tanggal");
		xlsWriteLabel($tablehead, $kolomhead++, "Latihan Jabatan Jam");
		xlsWriteLabel($tablehead, $kolomhead++, "Pendidikan");
		xlsWriteLabel($tablehead, $kolomhead++, "Pendidikan Lulus");
		xlsWriteLabel($tablehead, $kolomhead++, "Pendidikan Ijazah");
		xlsWriteLabel($tablehead, $kolomhead++, "Catatan Mutasi");
		xlsWriteLabel($tablehead, $kolomhead++, "Keterangan");
		xlsWriteLabel($tablehead, $kolomhead++, "Username");
		xlsWriteLabel($tablehead, $kolomhead++, "Username Update");
		xlsWriteLabel($tablehead, $kolomhead++, "Datetime Insert");
		xlsWriteLabel($tablehead, $kolomhead++, "Datetime Update");
		xlsWriteLabel($tablehead, $kolomhead++, "Status Deleted");

		foreach ($this->Pegawai_model->get_all() as $data) {
			$kolombody = 0;

			//ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
			xlsWriteNumber($tablebody, $kolombody++, $nourut);
			xlsWriteLabel($tablebody, $kolombody++, $data->nip);
			xlsWriteLabel($tablebody, $kolombody++, $data->nama);
			xlsWriteLabel($tablebody, $kolombody++, $data->no_hp);
			xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
			xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_lahir);
			xlsWriteLabel($tablebody, $kolombody++, $data->tempat_lahir);
			xlsWriteLabel($tablebody, $kolombody++, $data->golongan);
			xlsWriteLabel($tablebody, $kolombody++, $data->golongan_tanggal);
			xlsWriteLabel($tablebody, $kolombody++, $data->jabatan);
			xlsWriteLabel($tablebody, $kolombody++, $data->jabatan_tanggal);
			xlsWriteNumber($tablebody, $kolombody++, $data->kerja_tahun);
			xlsWriteNumber($tablebody, $kolombody++, $data->kerja_bulan);
			xlsWriteLabel($tablebody, $kolombody++, $data->latihan_jabatan);
			xlsWriteLabel($tablebody, $kolombody++, $data->latihan_jabatan_tanggal);
			xlsWriteNumber($tablebody, $kolombody++, $data->latihan_jabatan_jam);
			xlsWriteLabel($tablebody, $kolombody++, $data->pendidikan);
			xlsWriteLabel($tablebody, $kolombody++, $data->pendidikan_lulus);
			xlsWriteLabel($tablebody, $kolombody++, $data->pendidikan_ijazah);
			xlsWriteLabel($tablebody, $kolombody++, $data->catatan_mutasi);
			xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);
			xlsWriteLabel($tablebody, $kolombody++, $data->username);
			xlsWriteLabel($tablebody, $kolombody++, $data->username_update);
			xlsWriteLabel($tablebody, $kolombody++, $data->datetime_insert);
			xlsWriteLabel($tablebody, $kolombody++, $data->datetime_update);
			xlsWriteLabel($tablebody, $kolombody++, $data->status_deleted);

			$tablebody++;
			$nourut++;
		}

		xlsEOF();
		exit();
	}


	public function json_select()
	{
		$data = $this->db->get('pegawai');
		$row = [];
		foreach ($data->result_array() as $list) {
			$row[] = ['val' => $list['nip'], 'text' => $list['nama'] . '-' . $list['nip']];
		}
		echo json_encode($row,JSON_PRETTY_PRINT);
	}

	public function word()
	{
		header("Content-type: application/vnd.ms-word");
		header("Content-Disposition: attachment;Filename=pegawai.doc");

		$data = array(
			'pegawai_data' => $this->Pegawai_model->get_all(),
			'start' => 0
		);

		$this->load->view('template', 'pegawai/pegawai_doc', $data);
	}
}
