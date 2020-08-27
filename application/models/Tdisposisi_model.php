<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tdisposisi_model extends CI_Model
{

    public $table = 'tbl_disposisi';
    public $id = 'id_disposisi';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json()
    {
        $this->datatables->select(' 
                tbl_disposisi.id_disposisi, 
                tbl_disposisi.tujuan, 
                tbl_disposisi.isi_disposisi, 
                tbl_disposisi.sifat, 
                tbl_disposisi.batas_waktu, 
                tbl_disposisi.catatan, 
                tbl_disposisi.id_surat, 
                tbl_disposisi.id_user,  

                tbl_surat_masuk.id_surat, 
                tbl_surat_masuk.no_agenda, 
                tbl_surat_masuk.no_surat, 
                tbl_surat_masuk.asal_surat, 
                tbl_surat_masuk.kode, 
                tbl_surat_masuk.indeks, 
                tbl_surat_masuk.tgl_surat, 
                tbl_surat_masuk.tgl_diterima, 
                tbl_surat_masuk.file
             

        ');
        $this->datatables->from('tbl_disposisi');
        //add this line for join
        $this->datatables->join('tbl_surat_masuk', 'tbl_disposisi.id_surat = tbl_surat_masuk.id_surat');
        $this->datatables->add_column('action', anchor(site_url('tdisposisi/detail/$1'), '<i class="fa fa-book"></i>Read', 'class="btn btn-info btn-xs edit"') . "  " . anchor(site_url('tdisposisi/edit/$1'), '<i class="fa fa-edit"></i> Update', 'class="btn btn-success btn-xs edit"') . "<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'tbl_disposisi.id_disposisi');
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
        $this->db->like('id_disposisi', $q);
        $this->db->or_like('tujuan', $q);
        $this->db->or_like('isi_disposisi', $q);
        $this->db->or_like('sifat', $q);
        $this->db->or_like('batas_waktu', $q);
        $this->db->or_like('catatan', $q);
        $this->db->or_like('id_surat', $q);
        $this->db->or_like('id_user', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_disposisi', $q);
        $this->db->or_like('tujuan', $q);
        $this->db->or_like('isi_disposisi', $q);
        $this->db->or_like('sifat', $q);
        $this->db->or_like('batas_waktu', $q);
        $this->db->or_like('catatan', $q);
        $this->db->or_like('id_surat', $q);
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



    function lembar_disposisi($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_disposisi a');
        $this->db->join('tbl_surat_masuk b', 'a.id_surat=b.id_surat', 'left');
        $this->db->where('b.id_surat', $id);
        return $this->db->get();
    }
}
