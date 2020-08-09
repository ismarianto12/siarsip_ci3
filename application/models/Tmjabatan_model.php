<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tmjabatan_model extends CI_Model
{

    public $table = 'tmjabatan';
    public $id = 'Id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('Id,Title,Description,Stat,OtherString');
        $this->datatables->from('tmjabatan');
        //add this line for join
        //$this->datatables->join('table2', 'tmjabatan.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('tmjabatan/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(site_url('tmjabatan/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'Id');
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
        $this->db->like('Id', $q);
	$this->db->or_like('Title', $q);
	$this->db->or_like('Description', $q);
	$this->db->or_like('Stat', $q);
	$this->db->or_like('OtherString', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('Id', $q);
	$this->db->or_like('Title', $q);
	$this->db->or_like('Description', $q);
	$this->db->or_like('Stat', $q);
	$this->db->or_like('OtherString', $q);
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

 