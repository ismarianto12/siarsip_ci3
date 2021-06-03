<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Sppd extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		login_access();
		$this->load->model(['Sppd_model', 'Pegawai_model']);
		$this->load->library(['form_validation', 'datatables', 'Cpdf']);
	}

	public function index()
	{
		$x['judul'] = 'Data : Sppd';
		$x['sppdjenis'] = $this->db->select('nama_jenis as name, id_jenis as  id')->from('jenis_surat')->where('kode_surat', 'SPPD')->get();
		$this->template->load('template', 'sppd/sppd_list', $x);
	}

	public function json()
	{
		header('Content-Type: application/json');
		echo $this->Sppd_model->json();
	}

	function cetakdta($id)
	{
		if ($id == '' || $id == 0) {
			echo 'response data null';
			die;
		}
		$data = $this->Sppd_model->cetak($id);
		if ($data->num_rows() > 0) {
		} else {
			echo 'response data null';
			die;
		}
		$render = [
			'judul' => 'cetak data sspd',
			'sppd'  => $data->row_array(),
		];
		$this->load->view('sppd/sppd_pdf', $render);
	}


	public function detail($id)
	{
		$row = $this->Sppd_model->get_by_id($id);
		if ($row) {
			$judul_sppd = ($row->code) ? $row->code : 'Kosong';
			$data = array(
				'id' => $row->id,
				'letter_code' => $row->letter_code,
				'letter_subject' => $row->letter_subject,
				'letter_about' => $row->letter_about,
				'letter_from' => $row->letter_from,
				'letter_content' => $row->letter_content,
				'letter_date' => $row->letter_date,
				'code' => $row->code,
				'date' => $row->date,
				'nip_pejabat' => $row->nip_pejabat,
				'nip_leader' => $row->nip_leader,
				'rate_travel' => $row->rate_travel,
				'nip' => $row->nip,
				'purpose' => $row->purpose,
				'transport' => $row->transport,
				'place_from' => $row->place_from,
				'place_to' => $row->place_to,
				'length_journey' => $row->length_journey,
				'date_go' => $row->date_go,
				'date_back' => $row->date_back,
				'government' => $row->government,
				'budget' => $row->budget,
				'budget_from' => $row->budget_from,
				'description' => $row->description,
				'result_date' => $row->result_date,
				'result' => $row->result,
				'result_username' => $row->result_username,
				'file' => $row->file,
				'file_update' => $row->file_update,
				'status' => $row->status,
				'username' => $row->username,
				'username_update' => $row->username_update,
				'datetime_insert' => $row->datetime_insert,
				'basic' => $row->basic,
				'datetime_update' => $row->datetime_update,
				'judul' => 'Detail Surat Perjalanan dinas :' . $judul_sppd,
			);
			$this->template->load('template', 'sppd/sppd_read', $data);
		} else {
			$this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Data Tidak Di Temukan.</div>');
			redirect(site_url('sppd'));
		}
	}

	public function tambah()
	{

		$sppdjenis = $this->db->select('nama_jenis as name, id_jenis as  id')->from('jenis_surat')->where('kode_surat', 'SPPD')->get();
		$letter_code = $this->properti->getCode();
		$data = array(
			'sppdjenis' => $sppdjenis,
			'judul' => 'Tambah Surat Perjalanan Dinas',
			'button' => 'Create',
			'kode_surat' => $this->properti->getCode(),
			'action' => site_url('sppd/tambah_data'),
			'id' => set_value('id'),
			'letter_code' => set_value('letter_code'),
			'letter_subject' => set_value('letter_subject'),
			'basic' => set_value('basic'),
			'letter_about' => set_value('letter_about'),
			'letter_from' => set_value('letter_from'),
			'letter_content' => set_value('letter_content'),
			'letter_date' => set_value('letter_date'),
			'code' => set_value('code'),
			'date' => set_value('date'),
			'nip_pejabat' => set_value('nip_pejabat'),
			'nip_leader' => set_value('nip_leader'),
			'rate_travel' => set_value('rate_travel'),
			'nip' => set_value('nip'),
			'purpose' => set_value('purpose'),
			'transport' => set_value('transport'),
			'place_from' => set_value('place_from'),
			'place_to' => set_value('place_to'),
			'length_journey' => set_value('length_journey'),
			'date_go' => set_value('date_go'),
			'date_back' => set_value('date_back'),
			'government' => set_value('government'),
			'budget' => set_value('budget'),
			'budget_from' => set_value('budget_from'),
			'description' => set_value('description'),
			'result_date' => set_value('result_date'),
			'result' => set_value('result'),
			'result_username' => set_value('result_username'),
			'file' => set_value('file'),
			'file_update' => set_value('file_update'),
			'status' => set_value('status'),
			'username' => set_value('username'),
			'username_update' => set_value('username_update'),
			'datetime_insert' => set_value('datetime_insert'),
			'datetime_update' => set_value('datetime_update'),
			'city' => set_value('city'),
			'rekening' => set_value('rekening'),
			'pimpinan' => set_value('pimpinan'),
			'kabag' => set_value('kabag'),
			'kasubag' => set_value('kasubag'),
			'pimpinan_spt' => set_value('pimpinan_spt'),
			'kabag_spt' => set_value('kabag_spt'),
			'kasubag_spt' => set_value('kasubag_spt')
		);
		$this->template->load('template', 'sppd/sppd_form', $data);
	}

	public function tambah_data()
	{

		$diperintah = implode(',', $this->input->post('nip'));
		$this->_rules();
		$letter_code = $this->properti->getCode();
		if ($this->form_validation->run() == FALSE) {
			$data = [
				'response' => 'n',
				'message' => str_replace('P', '', validation_errors()),
			];
			echo $this->properti->json($data);
			die;
		} else {
			$data = [
				'nip_pejabat' => $this->input->post('nip_pejabat'),
				'code' => $letter_code,
				'letter_code' => ($this->input->post('letter_code')) ? $this->input->post('letter_code') : 0,
				'letter_subject' => ($this->input->post('letter_subject')) ? $this->input->post('letter_subject') : 0,
				'letter_about' => ($this->input->post('letter_about')) ? $this->input->post('letter_about') : 0,
				'letter_from' => ($this->input->post('letter_from')) ? $this->input->post('letter_from') : 0,
				'letter_content' => ($this->input->post('letter_content')) ? $this->input->post('letter_content') : 0,
				'letter_date' => ($this->input->post('letter_date')) ? $this->input->post('letter_date') : 0,
				'purpose' => $this->input->post('purpose'),
				'transport' => $this->input->post('transport'),
				'place_from' => $this->input->post('place_from'),
				'place_to' => $this->input->post('place_to'),
				'length_journey' => (int) $this->input->post('length_journey'),
				'date_go' => ($this->input->post('date_go')) ? $this->input->post('date_go') : date('Y-m-d'),
				'date_back' => $this->input->post('date_back'),
				'nip_leader' => $this->input->post('nip_leader'),
				'rate_travel' => $this->input->post('rate_travel'),
				'nip' => $diperintah,
				'date' => date('Y-m-d'),
				'result_date' => date('Y-m-d'),
				'result' => ($this->input->post('result')) ? $this->input->post('result') : 0,
				'result_username' => ($this->input->post('result_username')) ? $this->input->post('result_username') : 0,
				'username_update' => ($this->input->post('username_update')) ? $this->input->post('username_update') : 0,
				'username' => $this->session->username,
				'file_update' => ($this->input->post('file_update')) ? $this->input->post('file_update') : 0,
				'file' => ($this->input->post('file')) ? $this->input->post('file') : 0,
				'government' => $this->input->post('government'),
				'budget_from' => $this->input->post('budget_from'),
				'description' => $this->input->post('description'),
				'basic' => $this->input->post('basic'),
				'city' => $this->input->post('city'),
				'letter_content' => $this->input->post('letter_content'),
				'datetime_insert' => date('Y-m-d H:i:s'),
				'datetime_update' => date('Y-m-d H:i:s'),
				'jenis_surat_id' => $this->input->post('sspdjeniss_id'),
				'rekening' => $this->input->post('rekening'),
				// add element data
				'pimpinan' => $this->input->post('pimpinan'),
				'kabag' => $this->input->post('kabag'),
				'kasubag' => $this->input->post('kasubag'),
				'pimpinan_spt' => $this->input->post('pimpinan_spt'),
				'kabag_spt' => $this->input->post('kabag_spt'),
				'kasubag_spt' => $this->input->post('kasubag_spt')
			];
			$this->Sppd_model->insert($data);
			$data = [
				'response' => 'y',
				'message' => 'data surat perjalanan dinas berhasil di simpan.',
			];
			echo $this->properti->json($data);
			die;
		}
	}

	public function edit($id)
	{
		$row = $this->Sppd_model->get_by_id($id);
		$sppdjenis = $this->db->select('nama_jenis as name, id_jenis as  id')->from('jenis_surat')->where('kode_surat', 'SPPD')->get();
		if ($row) {
			$data = array(
				'judul' => 'Data SPPD',
				'sppdjenis' => $sppdjenis,
				'button' => 'Update',
				'kode_surat' => $this->properti->getCode(),
				'action' => site_url('sppd/edit_data/' . $row->id),
				'id' => set_value('id', $row->id),
				'letter_code' => set_value('letter_code', $row->letter_code),
				'letter_subject' => set_value('letter_subject', $row->letter_subject),
				'letter_about' => set_value('letter_about', $row->letter_about),
				'letter_from' => set_value('letter_from', $row->letter_from),
				'letter_content' => set_value('letter_content', $row->letter_content),
				'letter_date' => set_value('letter_date', $row->letter_date),
				'code' => set_value('code', $row->code),
				'date' => set_value('date', $row->date),
				'nip_pejabat' => set_value('nip_pejabat', $row->nip_pejabat),
				'nip_leader' => set_value('nip_leader', $row->nip_leader),
				'rate_travel' => set_value('rate_travel', $row->rate_travel),
				'nip' => set_value('nip', $row->nip),
				'purpose' => set_value('purpose', $row->purpose),
				'transport' => set_value('transport', $row->transport),
				'place_from' => set_value('place_from', $row->place_from),
				'place_to' => set_value('place_to', $row->place_to),
				'length_journey' => set_value('length_journey', $row->length_journey),
				'date_go' => set_value('date_go', $row->date_go),
				'date_back' => set_value('date_back', $row->date_back),
				'government' => set_value('government', $row->government),
				'budget' => set_value('budget', $row->budget),
				'budget_from' => set_value('budget_from', $row->budget_from),
				'description' => set_value('description', $row->description),
				'result_date' => set_value('result_date', $row->result_date),
				'result' => set_value('result', $row->result),
				'result_username' => set_value('result_username', $row->result_username),
				'file' => set_value('file', $row->file),
				'file_update' => set_value('file_update', $row->file_update),
				'status' => set_value('status', $row->status),
				'username' => set_value('username', $row->username),
				'username_update' => set_value('username_update', $row->username_update),
				'datetime_insert' => set_value('datetime_insert', $row->datetime_insert),
				'datetime_update' => set_value('datetime_update', $row->datetime_update),
				'basic' => set_value('basic', $row->basic),
				'city' => set_value('city', $row->city),
				'rekening' => set_value('rekening', $row->rekening),
				'pimpinan' => set_value('pimpinan', $row->pimpinan),
				'kabag' => set_value('kabag', $row->kabag),
				'kasubag' => set_value('kasubag', $row->kasubag),
				'sspdjeniss_id' => set_value('sspdjeniss_id', $row->sspdjeniss_id),
				'pimpinan_spt' => set_value('pimpinan_spt', $row->pimpinan_spt),
				'kabag_spt' => set_value('kabag_spt', $row->kabag_spt),
				'kasubag_spt' => set_value('kasubag_spt', $row->kasubag_spt)
			);
			$this->template->load('template', 'sppd/sppd_form', $data);
		} else {
			$this->session->set_flashdata('message', '<div class="callout callout-info fade-in">Data Tidak Di Temukan.</div>');
			redirect(site_url('sppd'));
		}
	}

	public function edit_data($id)
	{
		if ($id == '' || $id == 0) {
			$data = [
				'response' => 'n',
				'message' => 'kesalahan dalam edit data',
			];
			echo $this->properti->json($data);
			die;
		}
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$data = [
				'response' => 'n',
				'message' => str_replace('<p></p>', '', validation_errors('<p>', '</p>')),
			];
			echo $this->properti->json($data);
			die;
		} else {

			$diperintah = implode(',', $this->input->post('nip'));
			$data = [
				'nip_pejabat' => $this->input->post('nip_pejabat'),
				'letter_code' => ($this->input->post('letter_code')) ? $this->input->post('letter_code') : 0,
				'letter_subject' => ($this->input->post('letter_subject')) ? $this->input->post('letter_subject') : 0,
				'letter_about' => ($this->input->post('letter_about')) ? $this->input->post('letter_about') : 0,
				'letter_from' => ($this->input->post('letter_from')) ? $this->input->post('letter_from') : 0,
				'letter_content' => ($this->input->post('letter_content')) ? $this->input->post('letter_content') : 0,
				'letter_date' => ($this->input->post('letter_date')) ? $this->input->post('letter_date') : 0,
				'purpose' => $this->input->post('purpose'),
				'transport' => $this->input->post('transport'),
				'place_from' => $this->input->post('place_from'),
				'place_to' => $this->input->post('place_to'),
				'length_journey' => (int) $this->input->post('length_journey'),
				'date_go' => ($this->input->post('date_go')) ? $this->input->post('date_go') : date('Y-m-d'),
				'date_back' => $this->input->post('date_back'),
				'date' => date('Y-m-d'),
				'nip_leader' => $this->input->post('nip_leader'),
				'rate_travel' => $this->input->post('rate_travel'),
				'nip' => $diperintah,
				'result_date' => date('Y-m-d'),
				'result' => ($this->input->post('result')) ? $this->input->post('result') : 0,
				'result_username' => ($this->input->post('result_username')) ? $this->input->post('result_username') : 0,
				'username_update' => ($this->input->post('username_update')) ? $this->input->post('username_update') : 0,
				'username' => $this->session->username,
				'file_update' => ($this->input->post('file_update')) ? $this->input->post('file_update') : 0,
				'file' => ($this->input->post('file')) ? $this->input->post('file') : 0,
				'government' => $this->input->post('government'),
				'budget_from' => $this->input->post('budget_from'),
				'description' => $this->input->post('description'),
				'letter_content' => $this->input->post('letter_content'),
				'jenis_surat_id' => $this->input->post('sspdjeniss_id'),
				'datetime_insert' => date('Y-m-d H:i:s'),
				'datetime_update' => date('Y-m-d H:i:s'),
				'rekening' => $this->input->post('rekening'),
				'pimpinan' => $this->input->post('pimpinan'),
				'kabag' => $this->input->post('kabag'),
				'kasubag' => $this->input->post('kasubag'),
				'pimpinan_spt' => $this->input->post('pimpinan_spt'),
				'kabag_spt' => $this->input->post('kabag_spt'),
				'kasubag_spt' => $this->input->post('kasubag_spt')

			];
			$this->Sppd_model->update($id, $data);
			$data = [
				'response' => 'y',
				'message' => 'data surat perjalanan dinas berhasil di simpan.',
			];
			echo $this->properti->json($data);
		}
	}

	public function hapus($id)
	{
		$row = $this->Sppd_model->get_by_id($id);

		if ($row) {
			$this->Sppd_model->delete($id);
			$this->session->set_flashdata('message', '<div class="callout callout-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
			redirect(site_url('sppd'));
		} else {
			$this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
			redirect(site_url('sppd'));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules(
			'nip_pejabat',
			'nip_pejabat',
			'trim|required',
			array('required' => 'Nip pegawai wajib di isi')

		);
		$this->form_validation->set_rules(
			'purpose',
			'purpose',
			'trim|required',
			array('required' => 'Maksud Perjalanan Dinas Wajib di isi')
		);
		$this->form_validation->set_rules(
			'transport',
			'transport',
			'trim|required',
			array('required' => 'Transportasi wajib Di isi')
		);
		$this->form_validation->set_rules('place_from', 'place_from', 'trim|required');
		$this->form_validation->set_rules('place_to', 'place_to', 'trim|required');
		$this->form_validation->set_rules('length_journey', 'length_journey', 'trim|required');
		$this->form_validation->set_rules('date_go', 'date_go', 'trim|required');
		$this->form_validation->set_rules('date_back', 'date_back', 'trim|required');
		$this->form_validation->set_rules('nip_leader', 'nip_leader', 'trim|required');
		$this->form_validation->set_rules('nip[]', 'nip', 'trim|required');
		$this->form_validation->set_rules('government', 'government', 'trim|required');
		$this->form_validation->set_rules('budget_from', 'budget_from', 'trim|required');
		$this->form_validation->set_rules('description', 'description', 'trim|required');
		$this->form_validation->set_rules('letter_content', 'letter_content', 'trim|required');
		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span>', '</span>');
	}
}
