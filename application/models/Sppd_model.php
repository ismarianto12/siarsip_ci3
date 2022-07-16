<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Sppd_model extends CI_Model
{

	public $table = 'sppd';
	public $id = 'id';
	public $order = 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function json()
	{

		$this->datatables->select('sppd.id as sppd_id,
		( 	 
			SELECT GROUP_CONCAT(pegawai.nama) from pegawai where FIND_IN_SET(pegawai.nip,sppd.pengikut_nip) > 0
			
			) AS pengikut,
		sppd.pimpinan,
		a.nama,
		sppd.letter_code,
		sppd.letter_subject,
		sppd.letter_about,
		sppd.letter_from,
		sppd.letter_content,
		sppd.letter_date,
		sppd.code,
		sppd.date,
		sppd.bawahan,
		sppd.atasan,
		sppd.rate_travel,
		sppd.pengikut_nip,
		sppd.purpose,
		sppd.transport,
		sppd.place_from,
		sppd.place_to,
		sppd.length_journey,
		sppd.date_go,
		sppd.date_back,
		sppd.government,
		sppd.budget,
		sppd.budget_from,
		sppd.description,
		sppd.result_date,
		sppd.result,
		sppd.result_username,
		sppd.file,
		sppd.jenis_surat_id,
		sppd.file_update,
		sppd.status,
		sppd.username,
		sppd.username_update,
		sppd.datetime_insert,
		sppd.datetime_update,
		sppd.basic,
		sppd.city,
		sppd.rekening,
		sppd.kabag,
		sppd.kasubag,
		sppd.pimpinan_spt,
		sppd.kabag_spt,
		sppd.kasubag_spt,
		sppd.letter_code_spt');
		$this->datatables->from('sppd');
		// //add this line for join
		$this->datatables->join('pegawai a', 'a.nip = sppd.bawahan', 'left outer');
		$this->datatables->join('pegawai b', 'b.nip = sppd.pimpinan', 'left outer');
		$this->datatables->join('jenis_surat c', 'sppd.jenis_surat_id = c.id_jenis', 'left outer');
		$jenis_sppd = $this->input->post('jenisppd_id');
		if ($jenis_sppd != '') {
			$this->datatables->where('sppd.jenis_surat_id', $jenis_sppd);
		}
		$this->datatables->add_column('action',  "<a href='#' data-id='$2' data-judul='" . strtoupper('$2') . "' data-idp='$1' class='btn btn-info btn-xs delete' id='konfirmasi'><i class='fa fa-print'></i> Print</a>" . "" . anchor(site_url('sppd/edit/$1'), '<i class="fa fa-edit"></i> Update', 'class="btn btn-success btn-xs edit"') . "<a href='#' class='btn btn-danger btn-xs delete' id='delete' data-id='$1'><i class='fa fa-trash'></i> Delete</a>", 'sppd_id,parameter');
		return $this->datatables->generate();
	}

	// get all
	function get_all()
	{
		$this->db->order_by($this->id, $this->order);
		return $this->db->get($this->table)->result();
	}

	// get data by id
	function get_by_id($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->table)->row();
	}

	// get total rows
	function total_rows($q = NULL)
	{
		$this->db->like('id', $q);
		$this->db->or_like('letter_code', $q);
		$this->db->or_like('letter_subject', $q);
		$this->db->or_like('letter_about', $q);
		$this->db->or_like('letter_from', $q);
		$this->db->or_like('letter_content', $q);
		$this->db->or_like('letter_date', $q);
		$this->db->or_like('code', $q);
		$this->db->or_like('date', $q);
		$this->db->or_like('nip_pejabat', $q);
		$this->db->or_like('nip_leader', $q);
		$this->db->or_like('rate_travel', $q);
		$this->db->or_like('nip', $q);
		$this->db->or_like('purpose', $q);
		$this->db->or_like('transport', $q);
		$this->db->or_like('place_from', $q);
		$this->db->or_like('place_to', $q);
		$this->db->or_like('length_journey', $q);
		$this->db->or_like('date_go', $q);
		$this->db->or_like('date_back', $q);
		$this->db->or_like('government', $q);
		$this->db->or_like('budget', $q);
		$this->db->or_like('budget_from', $q);
		$this->db->or_like('description', $q);
		$this->db->or_like('result_date', $q);
		$this->db->or_like('result', $q);
		$this->db->or_like('result_username', $q);
		$this->db->or_like('result_username_update', $q);
		$this->db->or_like('file', $q);
		$this->db->or_like('file_update', $q);
		$this->db->or_like('status', $q);
		$this->db->or_like('username', $q);
		$this->db->or_like('username_update', $q);
		$this->db->or_like('datetime_insert', $q);
		$this->db->or_like('datetime_update', $q);
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	// get data with limit and search
	function get_limit_data($limit, $start = 0, $q = NULL)
	{
		$this->db->order_by($this->id, $this->order);
		$this->db->like('id', $q);
		$this->db->or_like('letter_code', $q);
		$this->db->or_like('letter_subject', $q);
		$this->db->or_like('letter_about', $q);
		$this->db->or_like('letter_from', $q);
		$this->db->or_like('letter_content', $q);
		$this->db->or_like('letter_date', $q);
		$this->db->or_like('code', $q);
		$this->db->or_like('date', $q);
		$this->db->or_like('nip_pejabat', $q);
		$this->db->or_like('nip_leader', $q);
		$this->db->or_like('rate_travel', $q);
		$this->db->or_like('nip', $q);
		$this->db->or_like('purpose', $q);
		$this->db->or_like('transport', $q);
		$this->db->or_like('place_from', $q);
		$this->db->or_like('place_to', $q);
		$this->db->or_like('length_journey', $q);
		$this->db->or_like('date_go', $q);
		$this->db->or_like('date_back', $q);
		$this->db->or_like('government', $q);
		$this->db->or_like('budget', $q);
		$this->db->or_like('budget_from', $q);
		$this->db->or_like('description', $q);
		$this->db->or_like('result_date', $q);
		$this->db->or_like('result', $q);
		$this->db->or_like('result_username', $q);
		$this->db->or_like('result_username_update', $q);
		$this->db->or_like('file', $q);
		$this->db->or_like('file_update', $q);
		$this->db->or_like('status', $q);
		$this->db->or_like('username', $q);
		$this->db->or_like('username_update', $q);
		$this->db->or_like('datetime_insert', $q);
		$this->db->or_like('datetime_update', $q);
		$this->db->limit($limit, $start);
		return $this->db->get($this->table)->result();
	}

	// insert data
	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	// update data
	function update($id, $data)
	{
		$this->db->where($this->id, $id);
		$this->db->update($this->table, $data);
	}

	// delete data
	function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
	}

	function cetak($id)
	{
		$this->db->select('sppd.id,a.nip,
		
		a.jabatan as jabatan_pimpinan,
		b.jabatan as jabatan_pengikut,  

		a.golongan as golongan_pimpinan,
		b.golongan as golongan_pengikut,  

		b.nip, sppd.pengikut_nip,a.nama as pimpinan,b.nama as pengikut, letter_code,letter_subject,letter_about,letter_from,letter_content,letter_date,code,date,atasan,rate_travel,purpose,transport,place_from,place_to,length_journey,date_go,date_back,government,budget,budget_from,description,result_date,result,result_username,file,file_update,status');
		$this->db->from('sppd');
		$this->db->join('pegawai a', 'a.nip = sppd.pengikut_nip', 'left outer');
		$this->db->join('pegawai b', 'b.nip = sppd.atasan', 'left outer');
		$this->db->where('sppd.id', $id);
		return $this->db->get();
	}

	// json report data
	function laporan_json()
	{
		$dari   = $this->input->post('dari');
		$sampai = $this->input->post('sampai');

		$this->datatables->select('sppd.id as sppd_id,a.nip , b.nip, sppd.nip,a.nama as pimpinan,b.nama as pengikut, letter_code,letter_subject,letter_about,letter_from,letter_content,letter_date,code,date,nip_leader,rate_travel,purpose,transport,place_from,place_to,length_journey,date_go,date_back,government,budget,budget_from,description,result_date,result,result_username,file,file_update,status');
		$this->datatables->from('sppd');
		// //add this line for join
		$this->datatables->join('pegawai a', 'a.nip = sppd.nip_pejabat', 'left outer');
		$this->datatables->join('pegawai b', 'b.nip = sppd.nip_leader', 'left outer');
		if ($dari != '' and $sampai != '') {
			$this->datatables->where('sppd.date >=', $dari);
			$this->datatables->where('sppd.date <=', $sampai);
		}
		return $this->datatables->generate();
	}
}
