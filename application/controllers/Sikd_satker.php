<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Sikd_satker extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		login_access();
		hak_akses();
		$this->load->model('Sikd_satker_model');
		$this->load->library('form_validation');
		$this->load->library('datatables');
	}

	public function index()
	{
		$x['judul'] = 'Data Satuan Kerja';
		$this->template->load('template', 'sikd_satker/sikd_satker_list', $x);
	}

	public function json()
	{
		header('Content-Type: application/json');
		echo $this->Sikd_satker_model->json();
	}

	public function detail($id)
	{
		$row = $this->Sikd_satker_model->get_by_id($id);
		if ($row) {
			$data = array(
				'id' => $row->id,
				'sikd_satker_type' => $row->sikd_satker_type,
				'sikd_satker_id' => $row->sikd_satker_id,
				'kode' => $row->kode,
				'nama' => $row->nama,
				'singkatan' => $row->singkatan,
				'sikd_bidang_id' => $row->sikd_bidang_id,
				'kd_bidang_induk' => $row->kd_bidang_induk,
				'rek_konsolidasi_id' => $row->rek_konsolidasi_id,
				'nip_ka_satker' => $row->nip_ka_satker,
				'nm_ka_satker' => $row->nm_ka_satker,
				'jab_ka_satker' => $row->jab_ka_satker,
				'klasifikasi' => $row->klasifikasi,
				'satker_pendapatan' => $row->satker_pendapatan,
				'sotk_lama' => $row->sotk_lama,
				'npwp_satker' => $row->npwp_satker,
				'kd_skpd_bmd' => $row->kd_skpd_bmd,
				'created_by' => $row->created_by,
				'creation_date' => $row->creation_date,
				'last_updated_by' => $row->last_updated_by,
				'last_updated_date' => $row->last_updated_date,

				'judul' => 'Detail :  SIKD_SATKER',
			);
			$this->template->load('template', 'sikd_satker/sikd_satker_read', $data);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
			redirect(site_url('sikd_satker'));
		}
	}

	public function tambah()
	{
		$data = array(
			'judul' => 'Tambah Sikd satker',
			'button' => 'Create',
			'action' => site_url('sikd_satker/tambah_data'),
			'id' => set_value('id'),
			'sikd_satker_type' => set_value('sikd_satker_type'),
			'sikd_satker_id' => set_value('sikd_satker_id'),
			'kode' => set_value('kode'),
			'nama' => set_value('nama'),
			'singkatan' => set_value('singkatan'),
			'sikd_bidang_id' => set_value('sikd_bidang_id'),
			'kd_bidang_induk' => set_value('kd_bidang_induk'),
			'rek_konsolidasi_id' => set_value('rek_konsolidasi_id'),
			'nip_ka_satker' => set_value('nip_ka_satker'),
			'nm_ka_satker' => set_value('nm_ka_satker'),
			'jab_ka_satker' => set_value('jab_ka_satker'),
			'klasifikasi' => set_value('klasifikasi'),
			'satker_pendapatan' => set_value('satker_pendapatan'),
			'sotk_lama' => set_value('sotk_lama'),
			'npwp_satker' => set_value('npwp_satker'),
			'kd_skpd_bmd' => set_value('kd_skpd_bmd'),
			'created_by' => set_value('created_by'),
			'creation_date' => set_value('creation_date'),
			'last_updated_by' => set_value('last_updated_by'),
			'last_updated_date' => set_value('last_updated_date'),
		);
		$this->template->load('template', 'sikd_satker/sikd_satker_form', $data);
	}

	public function tambah_data()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah();
		} else {
			$data = array(
				'sikd_satker_type' => $this->input->post('sikd_satker_type', TRUE),
				'sikd_satker_id' => $this->input->post('sikd_satker_id', TRUE),
				'kode' => $this->input->post('kode', TRUE),
				'nama' => $this->input->post('nama', TRUE),
				'singkatan' => $this->input->post('singkatan', TRUE),
				'sikd_bidang_id' => $this->input->post('sikd_bidang_id', TRUE),
				'kd_bidang_induk' => $this->input->post('kd_bidang_induk', TRUE),
				'rek_konsolidasi_id' => $this->input->post('rek_konsolidasi_id', TRUE),
				'nip_ka_satker' => $this->input->post('nip_ka_satker', TRUE),
				'nm_ka_satker' => $this->input->post('nm_ka_satker', TRUE),
				'jab_ka_satker' => $this->input->post('jab_ka_satker', TRUE),
				'klasifikasi' => $this->input->post('klasifikasi', TRUE),
				'npwp_satker' => $this->input->post('npwp_satker', TRUE),
				'kd_skpd_bmd' => $this->input->post('kd_skpd_bmd', TRUE),
				'creation_date' => date('Y-m-d'),
				'last_updated_by' => $this->session->userdata('id'),
				'last_updated_date' => date('Y-m-d'),
				'last_updated_by' => 1,
				'satker_pendapatan' => 1,
				'created_by' => 1,

			);

			$this->Sikd_satker_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
			redirect(site_url('sikd_satker'));
		}
	}

	public function edit($id)
	{
		$row = $this->Sikd_satker_model->get_by_id($id);

		if ($row) {
			$data = array(
				'judul' => 'Data SIKD_SATKER',
				'button' => 'Update',
				'action' => site_url('sikd_satker/edit_data'),
				'id' => set_value('id', $row->id),
				'sikd_satker_type' => set_value('sikd_satker_type', $row->sikd_satker_type),
				'sikd_satker_id' => set_value('sikd_satker_id', $row->sikd_satker_id),
				'kode' => set_value('kode', $row->kode),
				'nama' => set_value('nama', $row->nama),
				'singkatan' => set_value('singkatan', $row->singkatan),
				'sikd_bidang_id' => set_value('sikd_bidang_id', $row->sikd_bidang_id),
				'kd_bidang_induk' => set_value('kd_bidang_induk', $row->kd_bidang_induk),
				'rek_konsolidasi_id' => set_value('rek_konsolidasi_id', $row->rek_konsolidasi_id),
				'nip_ka_satker' => set_value('nip_ka_satker', $row->nip_ka_satker),
				'nm_ka_satker' => set_value('nm_ka_satker', $row->nm_ka_satker),
				'jab_ka_satker' => set_value('jab_ka_satker', $row->jab_ka_satker),
				'klasifikasi' => set_value('klasifikasi', $row->klasifikasi),
				'satker_pendapatan' => set_value('satker_pendapatan', $row->satker_pendapatan),
				'sotk_lama' => set_value('sotk_lama', $row->sotk_lama),
				'npwp_satker' => set_value('npwp_satker', $row->npwp_satker),
				'kd_skpd_bmd' => set_value('kd_skpd_bmd', $row->kd_skpd_bmd),
				'created_by' => set_value('created_by', $row->created_by),
				'creation_date' => set_value('creation_date', $row->creation_date),
				'last_updated_by' => set_value('last_updated_by', $row->last_updated_by),
				'last_updated_date' => set_value('last_updated_date', $row->last_updated_date),
			);
			$this->template->load('template', 'sikd_satker/sikd_satker_form', $data);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
			redirect(site_url('sikd_satker'));
		}
	}

	public function edit_data()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->edit($this->input->post('id', TRUE));
		} else {
			$data = array(
				'sikd_satker_type' => $this->input->post('sikd_satker_type', TRUE),
				'sikd_satker_id' => $this->input->post('sikd_satker_id', TRUE),
				'kode' => $this->input->post('kode', TRUE),
				'nama' => $this->input->post('nama', TRUE),
				'singkatan' => $this->input->post('singkatan', TRUE),
				'sikd_bidang_id' => $this->input->post('sikd_bidang_id', TRUE),
				'kd_bidang_induk' => $this->input->post('kd_bidang_induk', TRUE),
				'rek_konsolidasi_id' => $this->input->post('rek_konsolidasi_id', TRUE),
				'nip_ka_satker' => $this->input->post('nip_ka_satker', TRUE),
				'nm_ka_satker' => $this->input->post('nm_ka_satker', TRUE),
				'jab_ka_satker' => $this->input->post('jab_ka_satker', TRUE),
				'klasifikasi' => $this->input->post('klasifikasi', TRUE),
				'npwp_satker' => $this->input->post('npwp_satker', TRUE),
				'kd_skpd_bmd' => $this->input->post('kd_skpd_bmd', TRUE),
				'created_by' => $this->session->userdata('id'),
				'creation_date' => date('Y-m-d'),
				'last_updated_by' => $this->session->userdata('id'),
				'last_updated_date' => date('Y-m-d'),
				'last_updated_by' => $this->session->userdata('id'),
				'last_updated_by' => 1,
				'satker_pendapatan' => 1,
				'created_by' => 1,
			);

			$this->Sikd_satker_model->update($this->input->post('id', TRUE), $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
			redirect(site_url('sikd_satker'));
		}
	}

	public function hapus($id)
	{
		$row = $this->Sikd_satker_model->get_by_id($id);

		if ($row) {
			$this->Sikd_satker_model->delete($id);
			$this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
			redirect(site_url('sikd_satker'));
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
			redirect(site_url('sikd_satker'));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('sikd_satker_type', 'sikd satker type', 'trim|required');
		$this->form_validation->set_rules('sikd_satker_id', 'sikd satker id', 'trim|required');
		$this->form_validation->set_rules('kode', 'kode', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('singkatan', 'singkatan', 'trim|required');
		$this->form_validation->set_rules('sikd_bidang_id', 'sikd bidang id', 'trim|required');
		$this->form_validation->set_rules('kd_bidang_induk', 'kd bidang induk', 'trim|required');
		$this->form_validation->set_rules('rek_konsolidasi_id', 'rek konsolidasi id', 'trim|required');
		$this->form_validation->set_rules('nip_ka_satker', 'nip ka satker', 'trim|required');
		$this->form_validation->set_rules('nm_ka_satker', 'nm ka satker', 'trim|required');
		$this->form_validation->set_rules('jab_ka_satker', 'jab ka satker', 'trim|required');
		$this->form_validation->set_rules('klasifikasi', 'klasifikasi', 'trim|required');
		$this->form_validation->set_rules('sotk_lama', 'sotk lama', 'trim|required');
		$this->form_validation->set_rules('npwp_satker', 'npwp satker', 'trim|required');
		$this->form_validation->set_rules('kd_skpd_bmd', 'kd skpd bmd', 'trim|required');

		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}

	public function excel()
	{
		$this->load->helper('exportexcel');
		$namaFile = "sikd_satker.xls";
		$judul = "sikd_satker";
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
		xlsWriteLabel($tablehead, $kolomhead++, "Sikd Satker Type");
		xlsWriteLabel($tablehead, $kolomhead++, "Sikd Satker Id");
		xlsWriteLabel($tablehead, $kolomhead++, "Kode");
		xlsWriteLabel($tablehead, $kolomhead++, "Nama");
		xlsWriteLabel($tablehead, $kolomhead++, "Singkatan");
		xlsWriteLabel($tablehead, $kolomhead++, "Sikd Bidang Id");
		xlsWriteLabel($tablehead, $kolomhead++, "Kd Bidang Induk");
		xlsWriteLabel($tablehead, $kolomhead++, "Rek Konsolidasi Id");
		xlsWriteLabel($tablehead, $kolomhead++, "Nip Ka Satker");
		xlsWriteLabel($tablehead, $kolomhead++, "Nm Ka Satker");
		xlsWriteLabel($tablehead, $kolomhead++, "Jab Ka Satker");
		xlsWriteLabel($tablehead, $kolomhead++, "Klasifikasi");
		xlsWriteLabel($tablehead, $kolomhead++, "Satker Pendapatan");
		xlsWriteLabel($tablehead, $kolomhead++, "Sotk Lama");
		xlsWriteLabel($tablehead, $kolomhead++, "Npwp Satker");
		xlsWriteLabel($tablehead, $kolomhead++, "Kd Skpd Bmd");
		xlsWriteLabel($tablehead, $kolomhead++, "Created By");
		xlsWriteLabel($tablehead, $kolomhead++, "Creation Date");
		xlsWriteLabel($tablehead, $kolomhead++, "Last Updated By");
		xlsWriteLabel($tablehead, $kolomhead++, "Last Updated Date");

		foreach ($this->Sikd_satker_model->get_all() as $data) {
			$kolombody = 0;

			//ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
			xlsWriteNumber($tablebody, $kolombody++, $nourut);
			xlsWriteLabel($tablebody, $kolombody++, $data->sikd_satker_type);
			xlsWriteLabel($tablebody, $kolombody++, $data->sikd_satker_id);
			xlsWriteLabel($tablebody, $kolombody++, $data->kode);
			xlsWriteLabel($tablebody, $kolombody++, $data->nama);
			xlsWriteLabel($tablebody, $kolombody++, $data->singkatan);
			xlsWriteLabel($tablebody, $kolombody++, $data->sikd_bidang_id);
			xlsWriteLabel($tablebody, $kolombody++, $data->kd_bidang_induk);
			xlsWriteLabel($tablebody, $kolombody++, $data->rek_konsolidasi_id);
			xlsWriteLabel($tablebody, $kolombody++, $data->nip_ka_satker);
			xlsWriteLabel($tablebody, $kolombody++, $data->nm_ka_satker);
			xlsWriteLabel($tablebody, $kolombody++, $data->jab_ka_satker);
			xlsWriteLabel($tablebody, $kolombody++, $data->klasifikasi);
			xlsWriteLabel($tablebody, $kolombody++, $data->satker_pendapatan);
			xlsWriteLabel($tablebody, $kolombody++, $data->sotk_lama);
			xlsWriteLabel($tablebody, $kolombody++, $data->npwp_satker);
			xlsWriteLabel($tablebody, $kolombody++, $data->kd_skpd_bmd);
			xlsWriteLabel($tablebody, $kolombody++, $data->created_by);
			xlsWriteLabel($tablebody, $kolombody++, $data->creation_date);
			xlsWriteLabel($tablebody, $kolombody++, $data->last_updated_by);
			xlsWriteLabel($tablebody, $kolombody++, $data->last_updated_date);

			$tablebody++;
			$nourut++;
		}

		xlsEOF();
		exit();
	}

	public function word()
	{
		header("Content-type: application/vnd.ms-word");
		header("Content-Disposition: attachment;Filename=sikd_satker.doc");

		$data = array(
			'sikd_satker_data' => $this->Sikd_satker_model->get_all(),
			'start' => 0
		);

		$this->load->view('template', 'sikd_satker/sikd_satker_doc', $data);
	}
}
