<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

    public $table = 'pegawai';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json()
    {
        $id_satker = $this->input->get_post('sikd_satker_id');
        $this->datatables->select('
        pegawai.id,
        pegawai.sikd_satker_id,
        pegawai.nip,
        pegawai.nama,
        pegawai.no_hp,
        pegawai.alamat,
        pegawai.tanggal_lahir,
        pegawai.tempat_lahir,
        pegawai.golongan,
        pegawai.golongan_tanggal,
        pegawai.jabatan,
        pegawai.jabatan_tanggal,
        pegawai.kerja_tahun,
        pegawai.kerja_bulan,
        pegawai.latihan_jabatan,
        pegawai.latihan_jabatan_tanggal,
        pegawai.latihan_jabatan_jam,
        pegawai.pendidikan,
        pegawai.pendidikan_lulus,
        pegawai.pendidikan_ijazah,
        pegawai.catatan_mutasi,
        pegawai.keterangan,
        pegawai.username,
        pegawai.username_update,
        pegawai.datetime_insert,
        pegawai.datetime_update,
        pegawai.status_deleted,
        pegawai.pangkat,
        
        sikd_satker.kode,
        sikd_satker.nama
        ');
        $this->datatables->from('pegawai');
        if ($this->input->get_post('sikd_satker_id')) {
            $this->datatables->where('pegawai.sikd_satker_id', $id_satker);
        }
        $this->datatables->join('sikd_satker', 'pegawai.sikd_satker_id = sikd_satker.id', 'left outer');
        $this->datatables->add_column('action', anchor(site_url('pegawai/detail/$1'), '<i class="fa fa-book"></i> ', 'class="btn btn-info btn-xs"') . "  " . anchor(site_url('pegawai/edit/$1'), '<i class="fa fa-edit"></i>  ', 'class="btn btn-success btn-xs edit"') . "<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i>  </a>", 'id');
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
        $this->db->or_like('nip', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('no_hp', $q);
        $this->db->or_like('alamat', $q);
        $this->db->or_like('tanggal_lahir', $q);
        $this->db->or_like('tempat_lahir', $q);
        $this->db->or_like('golongan', $q);
        $this->db->or_like('golongan_tanggal', $q);
        $this->db->or_like('jabatan', $q);
        $this->db->or_like('jabatan_tanggal', $q);
        $this->db->or_like('kerja_tahun', $q);
        $this->db->or_like('kerja_bulan', $q);
        $this->db->or_like('latihan_jabatan', $q);
        $this->db->or_like('latihan_jabatan_tanggal', $q);
        $this->db->or_like('latihan_jabatan_jam', $q);
        $this->db->or_like('pendidikan', $q);
        $this->db->or_like('pendidikan_lulus', $q);
        $this->db->or_like('pendidikan_ijazah', $q);
        $this->db->or_like('catatan_mutasi', $q);
        $this->db->or_like('keterangan', $q);
        $this->db->or_like('username', $q);
        $this->db->or_like('username_update', $q);
        $this->db->or_like('datetime_insert', $q);
        $this->db->or_like('datetime_update', $q);
        $this->db->or_like('status_deleted', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('nip', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('no_hp', $q);
        $this->db->or_like('alamat', $q);
        $this->db->or_like('tanggal_lahir', $q);
        $this->db->or_like('tempat_lahir', $q);
        $this->db->or_like('golongan', $q);
        $this->db->or_like('golongan_tanggal', $q);
        $this->db->or_like('jabatan', $q);
        $this->db->or_like('jabatan_tanggal', $q);
        $this->db->or_like('kerja_tahun', $q);
        $this->db->or_like('kerja_bulan', $q);
        $this->db->or_like('latihan_jabatan', $q);
        $this->db->or_like('latihan_jabatan_tanggal', $q);
        $this->db->or_like('latihan_jabatan_jam', $q);
        $this->db->or_like('pendidikan', $q);
        $this->db->or_like('pendidikan_lulus', $q);
        $this->db->or_like('pendidikan_ijazah', $q);
        $this->db->or_like('catatan_mutasi', $q);
        $this->db->or_like('keterangan', $q);
        $this->db->or_like('username', $q);
        $this->db->or_like('username_update', $q);
        $this->db->or_like('datetime_insert', $q);
        $this->db->or_like('datetime_update', $q);
        $this->db->or_like('status_deleted', $q);
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

    function getPengikut($data)
    {
        return $this->db->query("SELECT * from pegawai where nip in($data)");
    }
}
