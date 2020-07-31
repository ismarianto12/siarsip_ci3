<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lokasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Lokasi_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Akses data lokasi.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
        if ($this->session->level != 'admin' and $this->session->level != 'staff') {
            redirect(base_url('404'));
            exit();
        }
        $x['judul'] = 'Data : Lokasi';
        $this->template->load('template', 'lokasi/lokasi_list', $x);
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Lokasi_model->json();
    }

    public function detail($id)
    {
        if ($this->session->level != 'admin' and $this->session->level != 'staff') {
            redirect(base_url('404'));
            exit();
        }
        $row = $this->Lokasi_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_lokasi' => $row->id_lokasi,
                'nama_lokasi' => $row->nama_lokasi,
                'tanggal' => $row->tanggal,
                'judul' => 'Detail lokasi Arsip',
            );
            $this->template->load('template', 'lokasi/lokasi_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('lokasi'));
        }
    }
    public function tambah()
    { 
            $data = array(
                'judul' => 'Tambah Lokasi',
                'button' => 'Create',
                'action' => site_url('lokasi/tambah_data'),
                'id_lokasi' => set_value('id_lokasi'),
                'nama_lokasi' => set_value('nama_lokasi'),
                'tanggal' => set_value('tanggal'),
            );
            $this->load->view('lokasi/lokasi_form', $data); 
    }
    public function tambah_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $respon = array(
                'ket' => 2,
                'respon' => validation_errors()
            );
            echo json_encode($respon);
        } else {
            $data = array(
                'nama_lokasi' => $this->input->post('nama_lokasi', TRUE),
                'tanggal' => date('Y-m-d'),
            );
            $this->Lokasi_model->insert($data);
            $respon = array(
                'ket' => 1,
                'respon' => 'data berhasil di tambah'
            );
            echo json_encode($respon);
        }
    }

    public function edit($id)
    {
        $row = $this->Lokasi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul' => 'Data LOKASI',
                'button' => 'Update',
                'action' => site_url('lokasi/edit_data'),
                'id_lokasi' => set_value('id_lokasi', $row->id_lokasi),
                'nama_lokasi' => set_value('nama_lokasi', $row->nama_lokasi),
                'tanggal' => set_value('tanggal', $row->tanggal),
            );
            $this->load->view('lokasi/lokasi_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="callout callout-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('lokasi'));
        }
    }

    public function edit_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $respon = array(
                'ket' => 2,
                'respon' => validation_errors()
            );
            echo json_encode($respon);
        } else {
            $data = array(
                'nama_lokasi' => $this->input->post('nama_lokasi', TRUE),
                'tanggal' => date('Y-m-d'),
            );

            $this->Lokasi_model->update($this->input->post('id_lokasi', TRUE), $data);
            $respon = array(
                'ket' => 1,
                'respon' => 'Data berhasil di edit'
            );
            echo json_encode($respon);
        }
    }

    public function hapus($id)
    {
        if ($this->session->level != 'admin' || $this->session->level != 'staff') {
            redirect(base_url('404'));
            exit();
        }

        $row = $this->Lokasi_model->get_by_id($id);

        if ($row) {
            $this->Lokasi_model->delete($id);
            $this->session->set_flashdata('message', '<div class="callout callout-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(site_url('lokasi'));
        } else {
            $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(site_url('lokasi'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_lokasi', 'nama lokasi', 'trim|required');
        $this->form_validation->set_rules('id_lokasi', 'id_lokasi', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "lokasi.xls";
        $judul = "lokasi";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
        xlsWriteLabel($tablehead, $kolomhead++, "Nama Lokasi");
        xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");

        foreach ($this->Lokasi_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->nama_lokasi);
            xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=lokasi.doc");

        $data = array(
            'lokasi_data' => $this->Lokasi_model->get_all(),
            'start' => 0
        );

        $this->template->load('template', 'lokasi/lokasi_doc', $data);
    }
}
