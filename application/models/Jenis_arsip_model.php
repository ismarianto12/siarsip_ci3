<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenis_arsip_model extends CI_Model
{

    public $table = 'jenis_arsip';
    public $id = 'id_jenis';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json()
    {
        $this->datatables->select('a.id_jenis,a.jenis_arsip,a.create_id,date_format(create_date,"%Y-%M-%d") as create_date,
            b.id_user,b.username,b.nama,b.email,b.level
            ');
        $this->datatables->from('jenis_arsip a');
        //add this line for join
        $this->datatables->join('login b', 'b.id_user = a.create_id', 'left');
        $this->datatables->add_column('create_id', '$1', 'nama');
        if ($this->session->level == 'staff') {
            $this->datatables->where('b.id_user', $this->session->id_user);
        }
        $this->datatables->add_column('action', anchor(site_url('jenis_arsip/detail/$1'), '<i class="fa fa-book"></i>Read', 'class="btn btn-info btn-xs edit"') . "
        
        <button class='btn bg-navy btn-flat margin edit' id='edit' to='" . base_url('jenis_arsip/edit/$1') . "'><i class='fa fa-trash'></i> Edit</button>
        <a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id_jenis');
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
        $this->db->like('id_jenis', $q);
        $this->db->or_like('jenis_arsip', $q);
        $this->db->or_like('create_id', $q);
        $this->db->or_like('create_date', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_jenis', $q);
        $this->db->or_like('jenis_arsip', $q);
        $this->db->or_like('create_id', $q);
        $this->db->or_like('create_date', $q);
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
