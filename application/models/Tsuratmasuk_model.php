<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tsuratmasuk_model extends CI_Model
{

    public $table = 'tbl_surat_masuk';
    public $id = 'id_surat';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json()
    {
        $this->datatables->select('id_surat,no_agenda,no_surat,asal_surat,isi,kode,indeks,tgl_surat,date_format(tgl_surat,"%Y-%M-%d") as tgl_ind 
        ,tgl_diterima,file,keterangan,id_user,disposisi');
        $this->datatables->from('tbl_surat_masuk');
        //add this line for join
        if ($this->input->post('disposisi')) {
            $this->datatables->where('disposisi', $this->input->post('disposisi'));
        }
        //$this->datatables->join('table2', 'tbl_surat_masuk.field = table2.field');
        $this->datatables->add_column('file_surat', "<a href='" . base_url('assets/file_surat/$1') . "' class='btn btn-success btn-xs'><i class='fa fa-download'></i></a>", 'file');

        if ($this->session->level != 'admin' and $this->session->level != 'staff') {
        } else {
            $this->datatables->add_column('action', anchor(site_url('tsuratmasuk/detail/$1'), '<i class="fa fa-book"></i>', 'class="btn btn-info btn-xs edit"') . "
        <button id='edit' to='" . base_url('tsuratmasuk/edit/$1') . "' class='btn btn-warning btn-xs'><i class='fa fa-edit'></i></button>
        <a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i>  </a>&nbsp; <a href='#' class='btn btn-info btn-xs' onclick='javasciprt: return set_disposisi($1)'><i class='fa fa-check'></i> </a>", 'id_surat');
        }
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
        $this->db->like('id_surat', $q);
        $this->db->or_like('no_agenda', $q);
        $this->db->or_like('no_surat', $q);
        $this->db->or_like('asal_surat', $q);
        $this->db->or_like('isi', $q);
        $this->db->or_like('kode', $q);
        $this->db->or_like('indeks', $q);
        $this->db->or_like('tgl_surat', $q);
        $this->db->or_like('tgl_diterima', $q);
        $this->db->or_like('file', $q);
        $this->db->or_like('keterangan', $q);
        $this->db->or_like('id_user', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_surat', $q);
        $this->db->or_like('no_agenda', $q);
        $this->db->or_like('no_surat', $q);
        $this->db->or_like('asal_surat', $q);
        $this->db->or_like('isi', $q);
        $this->db->or_like('kode', $q);
        $this->db->or_like('indeks', $q);
        $this->db->or_like('tgl_surat', $q);
        $this->db->or_like('tgl_diterima', $q);
        $this->db->or_like('file', $q);
        $this->db->or_like('keterangan', $q);
        $this->db->or_like('id_user', $q);
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

    function notification()
    {
        $this->db->select('count(disposisi) as jumlah');
        $this->db->from('tbl_surat_masuk');
        $this->db->where('disposisi', 'n');
        return $this->db->get();
    }
}
