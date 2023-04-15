<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tsuratkeluar_model extends CI_Model
{

    public $table = 'tsuratkeluar';
    public $id = 'id_agenda';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json()
    {
        $this->datatables->select('a.id_agenda,a.no_agenda,a.jenis_surat,a.tanggal_kirim,a.no_surat,a.pengirim,a.perihal,a.nama_file,if(a.disposisi = "y" ,"<button class=\'btn  btn-success btn-xs\'>Disposisi</button>","<button class=\'btn  btn-danger btn-xs\'>Belum Disposisi</button>") as tdisposisi,a.id_user, 

         b.id_user,b.username,b.nama');
        $this->datatables->from('tsuratkeluar a');
        $this->datatables->join('login b', 'a.id_user=b.id_user', 'left');
        if ($this->input->post('disposisi')) {
            $this->datatables->where('disposisi', $this->input->post('disposisi'));
        }
        if ($this->session->level != 'admin') {
            $this->datatables->where('a.id_user', $this->session->id_user);
        }
        $this->datatables->add_column('j_disposisi', '$1', 'tdisposisi');
        if ($this->session->level != 'admin' and $this->session->level != 'staff') {
        } else {
            $this->datatables->add_column('action', anchor(site_url('tsuratkeluar/detail/$1'), '<i class="fa fa-book"></i>Read', 'class="btn btn-info btn-xs edit"') . "  " . anchor(site_url('tsuratkeluar/edit/$1'), '<i class="fa fa-edit"></i> Update', 'class="btn btn-success btn-xs edit"') . "<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id_agenda');
        }
        if ($this->input->post('disposisi')) {
            $this->datatables->where('disposisi', $this->input->post('disposisi'));
        }
        $this->datatables->add_column("Qrcode", "<img src='" . base_url('assets/qrsurat/keluar/$1.png') . "' style='width:100px;height:100px'>", "no_surat");
        $this->datatables->add_column("file_surat", "<a href='" . base_url('sppdprint/download?file=assets/file_surat/$1') . "' class='btn btn-success'>Detail File Surat</a>", "nama_file");
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
        $this->db->like('id_agenda', $q);
        $this->db->or_like('no_agenda', $q);
        $this->db->or_like('jenis_surat', $q);
        $this->db->or_like('tanggal_kirim', $q);
        $this->db->or_like('no_surat', $q);
        $this->db->or_like('pengirim', $q);
        $this->db->or_like('perihal', $q);
        $this->db->or_like('nama_file', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_agenda', $q);
        $this->db->or_like('no_agenda', $q);
        $this->db->or_like('jenis_surat', $q);
        $this->db->or_like('tanggal_kirim', $q);
        $this->db->or_like('no_surat', $q);
        $this->db->or_like('pengirim', $q);
        $this->db->or_like('perihal', $q);
        $this->db->or_like('nama_file', $q);
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
