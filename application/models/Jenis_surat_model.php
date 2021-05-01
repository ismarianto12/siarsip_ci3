<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class jenis_surat_model extends CI_Model
{

    public $table = 'jenis_surat';
    public $id = 'id_jenis';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('a.id_jenis,a.kode_surat,a.nama_jenis,a.id_user,a.tanggal_create, 
            b.id_user,b.nama,b.level 
            ');
        $this->datatables->from('jenis_surat a');
        $this->datatables->join('login b','a.id_user=b.id_user','left');
        //add this line for join
        //$this->datatables->join('table2', 'jenis_surat.field = table2.field');
        $this->datatables->add_column('user','$1','nama');
        $this->datatables->add_column('action', anchor(site_url('jenis_surat/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(site_url('jenis_surat/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id_jenis');
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
        $this->db->like('id_jenis', $q);
	$this->db->or_like('nama_jenis', $q);
	$this->db->or_like('id_user', $q);
	$this->db->or_like('tanggal_create', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_jenis', $q);
	$this->db->or_like('nama_jenis', $q);
	$this->db->or_like('id_user', $q);
	$this->db->or_like('tanggal_create', $q);
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

 