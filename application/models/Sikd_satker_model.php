<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sikd_satker_model extends CI_Model
{

    public $table = 'sikd_satker';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,sikd_satker_type,sikd_satker_id,kode,nama,singkatan,sikd_bidang_id,kd_bidang_induk,rek_konsolidasi_id,nip_ka_satker,nm_ka_satker,jab_ka_satker,klasifikasi,satker_pendapatan,sotk_lama,npwp_satker,kd_skpd_bmd,created_by,creation_date,last_updated_by,last_updated_date');
        $this->datatables->from('sikd_satker');
        //add this line for join
        //$this->datatables->join('table2', 'sikd_satker.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('sikd_satker/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(site_url('sikd_satker/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id');
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
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('sikd_satker_type', $q);
	$this->db->or_like('sikd_satker_id', $q);
	$this->db->or_like('kode', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('singkatan', $q);
	$this->db->or_like('sikd_bidang_id', $q);
	$this->db->or_like('kd_bidang_induk', $q);
	$this->db->or_like('rek_konsolidasi_id', $q);
	$this->db->or_like('nip_ka_satker', $q);
	$this->db->or_like('nm_ka_satker', $q);
	$this->db->or_like('jab_ka_satker', $q);
	$this->db->or_like('klasifikasi', $q);
	$this->db->or_like('satker_pendapatan', $q);
	$this->db->or_like('sotk_lama', $q);
	$this->db->or_like('npwp_satker', $q);
	$this->db->or_like('kd_skpd_bmd', $q);
	$this->db->or_like('created_by', $q);
	$this->db->or_like('creation_date', $q);
	$this->db->or_like('last_updated_by', $q);
	$this->db->or_like('last_updated_date', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('sikd_satker_type', $q);
	$this->db->or_like('sikd_satker_id', $q);
	$this->db->or_like('kode', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('singkatan', $q);
	$this->db->or_like('sikd_bidang_id', $q);
	$this->db->or_like('kd_bidang_induk', $q);
	$this->db->or_like('rek_konsolidasi_id', $q);
	$this->db->or_like('nip_ka_satker', $q);
	$this->db->or_like('nm_ka_satker', $q);
	$this->db->or_like('jab_ka_satker', $q);
	$this->db->or_like('klasifikasi', $q);
	$this->db->or_like('satker_pendapatan', $q);
	$this->db->or_like('sotk_lama', $q);
	$this->db->or_like('npwp_satker', $q);
	$this->db->or_like('kd_skpd_bmd', $q);
	$this->db->or_like('created_by', $q);
	$this->db->or_like('creation_date', $q);
	$this->db->or_like('last_updated_by', $q);
	$this->db->or_like('last_updated_date', $q);
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

}

 