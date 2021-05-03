<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_surat_keluar_model extends CI_Model
{

    public $table = 'tbl_surat_keluar';
    public $id = 'id_surat';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json()
    {
        $this->datatables->select(' 

            a.id_surat,
            a.no_agenda,
            a.id_jenis_surat,
            a.tujuan,
            a.no_surat,
            a.isi,
            a.kode,
            a.tgl_surat,
            a.tgl_catat,
            a.file,
            a.keterangan,
            a.id_user,

            b.id_jenis,
            b.nama_jenis,
            b.id_user,
            date_format(b.tanggal_create,"%y-M-d%") as tgl_ind 
 
            ');
        $this->datatables->from('tbl_surat_keluar a');
        $this->datatables->join('jenis_surat b', 'b.id_jenis=a.id_jenis_surat', 'left');
        if ($this->input->post('id_jenis') != '') :
            $this->datatables->where('a.id_jenis_surat', $this->input->post('id_jenis'));
        endif;
        $this->datatables->add_column('data_file', '<a href="' . base_url('assets/file_surat/$1') . '" class="btn bg-navy btn-flat margin btn-xs" target="_blank">Lihat file</a>', 'file');
        $this->datatables->add_column('action', anchor(site_url('tbl_surat_keluar/detail/$1'), '<i class="fa fa-book"></i>Read', 'class="btn bg-green btn-flat btn-xs edit"') . "  " . anchor(site_url('tbl_surat_keluar/edit/$1'), '<i class="fa fa-edit"></i> Update', 'class="btn btn-warning btn-xs edit"') . "<a href='#' class='btn bg-red btn-flat btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id_surat');
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
        $this->db->or_like('tujuan', $q);
        $this->db->or_like('no_surat', $q);
        $this->db->or_like('isi', $q);
        $this->db->or_like('kode', $q);
        $this->db->or_like('tgl_surat', $q);
        $this->db->or_like('tgl_catat', $q);
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
        $this->db->or_like('tujuan', $q);
        $this->db->or_like('no_surat', $q);
        $this->db->or_like('isi', $q);
        $this->db->or_like('kode', $q);
        $this->db->or_like('tgl_surat', $q);
        $this->db->or_like('tgl_catat', $q);
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
}
