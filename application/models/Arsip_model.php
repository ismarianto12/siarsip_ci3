<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Arsip_model extends CI_Model
{

    public $table = 'arsip';
    public $id = 'id_arsip';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function data_ajuan_arsip()
    {
        $this->datatables->select(' 
           a.id_pengajuan,  
           a.id_pejabat,   
           a.id_satuan,    
           a.nama_arsip,  
           a.jumlah,     
           a.satuan,       
           a.tanggal,     
           a.tujuan,   
           a.file_arsip,  
           a.id_jenis,    
           a.nonaktif,

           b.id_jenis,b.jenis_arsip,b.create_id,b.create_date,

           c.id_user,c.username,c.nama as nama_staff,c.level,c.email,c.log,
           d.id_satuan,d.nama_satuan,d.keterangan 
         
           ');

        $this->datatables->from('pengajuan_arsip a');
        $this->datatables->join('jenis_arsip b', 'a.id_jenis=b.id_jenis', 'left');
        $this->datatables->join('login c', 'a.id_pejabat=c.id_user', 'left');
        $this->datatables->join('m_satuan d', 'a.id_satuan=d.id_satuan', 'left');
        $this->datatables->where('nonaktif', 'n');
        $this->datatables->add_column('pilih', '<button class="btn btn-success btn-xs" onclick="javasciprt:terima($1)">Pilih Ajuan</button>', 'id_pengajuan');
        return $this->datatables->generate();
    }
    // datatables
    function json($level = '')
    {

        $this->datatables->select('a.id_arsip,a.id_jenis,a.id_pejabat,a.nama_arsip,a.file_arsip,a.jumlah,a.id_satuan,a.lokasi,a.ket_isi,a.tanggal,a.permision,
     
        b.id_jenis,b.jenis_arsip,b.create_id,b.create_date,

        c.id_user,c.username,c.nama,c.level,c.email,c.log,
        d.id_satuan,d.nama_satuan,d.keterangan,
        e.id_lokasi,e.nama_lokasi,date_format(e.tanggal,"%Y-%M-%d") as tgl  
            ');
        $this->datatables->from('arsip a');

        //add this line for join
        $this->datatables->join('jenis_arsip b', 'b.id_jenis=a.id_jenis', 'left');
        $this->datatables->join('login c', 'c.id_user=a.id_pejabat', 'left');
        $this->datatables->join('m_satuan d', 'a.id_satuan=d.id_satuan', 'left');
        $this->datatables->join('lokasi e', 'e.id_lokasi=a.lokasi', 'left');
        if ($this->session->level != 'admin') {
            $this->datatables->where('a.id_pejabat', $this->session->id_user);
        }
        if ($this->input->post('id_jenis') != '') {
            $this->datatables->where('a.id_jenis', $this->input->post('id_jenis'));
        } else {
        }
        $this->datatables->add_column('file_arsip', "<a href='#' data-id='$1' id='download' class='btn btn-success btn-xs'><i class='fa fa-download'></i></a>", 'id_arsip');
        $this->datatables->add_column('nama_satuan', '$1', 'nama_satuan');
        $this->datatables->add_column('nama', '$1', 'nama');
        $this->datatables->add_column('jenis_arsip', '$1', 'jenis_arsip');
        $this->datatables->add_column('lokasi', '$1', 'nama_lokasi');
        $this->datatables->add_column('nama_satuan', '$1', 'nama_satuan');
        if ($this->session->level == 'admin') {
            if ($this->input->post('permision') != '') {
                $level = $this->input->post('permision');
                $this->datatables->where('locate("' . $level . '",a.permision) >', 0);
            } else {
            }
        } else {
            $this->datatables->where('locate("' . $level . '",a.permision) >', 0);
        }
        //  $this->datatables->add_column('file_arsip','$1','nama_satuan');
        $this->datatables->add_column('qr_code', '<img src="' . base_url('assets/qrarsip/$1.png') . '" id="barcode" onError="this.onerror=null;this.src=\'' . base_url('assets/img/no_image.jpg') . '\';">', 'nama_arsip');

        $this->datatables->add_column('action', anchor(site_url('arsip/detail/$1'), '<i class="fa fa-book"></i>', 'class="btn btn-info btn-xs edit"') . "
         <button to='" . base_url('arsip/edit/$1') . "' id='edit' class='btn btn-warning btn-xs'><i class='fa fa-edit'></i></button>
        <a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i></a>", 'id_arsip');
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
        $this->db->like('id_arsip', $q);
        $this->db->or_like('id_jenis', $q);
        $this->db->or_like('id_pejabat', $q);
        $this->db->or_like('nama_arsip', $q);
        $this->db->or_like('file_arsip', $q);
        $this->db->or_like('jumlah', $q);
        $this->db->or_like('id_satuan', $q);
        $this->db->or_like('lokasi', $q);
        $this->db->or_like('ket_isi', $q);
        $this->db->or_like('tanggal', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_arsip', $q);
        $this->db->or_like('id_jenis', $q);
        $this->db->or_like('id_pejabat', $q);
        $this->db->or_like('nama_arsip', $q);
        $this->db->or_like('file_arsip', $q);
        $this->db->or_like('jumlah', $q);
        $this->db->or_like('id_satuan', $q);
        $this->db->or_like('lokasi', $q);
        $this->db->or_like('ket_isi', $q);
        $this->db->or_like('tanggal', $q);
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

    /*tambahan*/

    function get_jenis($jenis)
    {
        $data = $this->db->get_where('jenis_arsip', array('id_jenis' => $jenis));
        if ($data->num_rows() > 0) {
            return $data->row()->jenis_arsip;
        } else {
            return 'unknown data';
        }
    }
    // bagian pengajuan data arsip;
    function pengajuan_arsip($id_user = '')
    {

        $this->db->select('
            a.id_pengajuan,
            a.id_pejabat,
            a.nama_arsip,
            a.jumlah,
            a.satuan,
            a.tanggal,
            a.tujuan,
            a.file_arsip,

            b.id_user,
            b.username,
            b.password,
            b.nama,
            b.level,
            b.foto,
            b.email,  

            c.id_satuan,
            c.nama_satuan,
            c.keterangan

            ');

        $this->db->from('pengajuan_arsip a');
        $this->db->join('login b', 'a.id_pejabat = b.id_user', 'left');
        $this->db->join('m_satuan c', 'a.satuan = c.id_satuan', 'left');
        if ($this->session->level == 'admin') {
        } else {
            $this->db->where('b.id_user', $id_user);
        }
        $this->db->where('a.nonaktif', 'n');
        return $this->db->get();
    }


    function pengajuan_arsip_id($id)
    {

        $this->db->select('
            a.id_pengajuan,
            a.id_pejabat,
            a.nama_arsip,
            a.jumlah,
            a.satuan,
            a.tanggal,
            a.tujuan,
            a.file_arsip,

            b.id_user,
            b.username,
            b.password,
            b.nama,
            b.level,
            b.foto,
            b.email  
            ');

        $this->db->from('pengajuan_arsip a');
        $this->db->join('login b', 'a.id_pejabat = b.id_user', 'left');
        $this->db->where('a.id_pengajuan', $id);
        return $this->db->get();
    }

    function pengajuan_arsip_cek($id)
    {

        $this->db->select('
            a.id_pengajuan,
            a.id_pejabat,
            a.nama_arsip,
            a.jumlah,
            a.satuan,
            a.tanggal,
            a.tujuan,
            a.nonaktif,

            b.id_user,
            b.username,
            b.password,
            b.nama,
            b.level,
            b.foto,
            b.email  
            ');
        $this->db->from('pengajuan_arsip a');
        $this->db->join('login b', 'a.id_pejabat = b.id_user', 'left');
        $this->db->where('b.id_user', $id);
        $this->db->where('a.nonaktif', 'n');
        return $this->db->get();
    }

    function data_arsip($id)
    {

        $this->db->select('
            b.jenis_arsip,
            b.id_jenis,

            a.id_arsip,
            a.file_arsip,
            a.nama_arsip,
            a.file_arsip,
            a.lokasi,
            a.ket_isi,
            a.tanggal,

            c.id_lokasi,
            c.nama_lokasi,
            
            d.id_user,
            d.username,
            d.password,
            d.nama,
            d.level,
            d.foto,
            d.email 
            ');

        $this->db->from('arsip a');
        $this->db->join('jenis_arsip b', 'b.id_jenis = a.id_jenis', 'left');
        $this->db->join('lokasi c', 'a.lokasi = c.id_lokasi', 'left');
        $this->db->join('login d', 'd.id_user = a.id_pejabat', 'left');
        $this->db->where('a.id_arsip=' . $this->db->escape($id) . '');
        return $this->db->get();
    }
}
