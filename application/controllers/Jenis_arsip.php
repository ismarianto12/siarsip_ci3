<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenis_arsip extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Jenis_arsip_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $x['judul'] = 'Data : Jenis arsip';
        $this->template->load('template', 'jenis_arsip/jenis_arsip_list', $x);
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Jenis_arsip_model->json();
    }

    public function detail($id)
    {

        if ($this->session->level != 'admin' and $this->session->level != 'staff') {
            redirect(base_url('404'));
            exit();
        }
        $row = $this->Jenis_arsip_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_jenis' => $row->id_jenis,
                'jenis_arsip' => $row->jenis_arsip,
                'create_id' => $row->create_id,
                'create_date' => $row->create_date,

                'judul' => 'Detail :  JENIS_ARSIP',
            );
            $this->template->load('template', 'jenis_arsip/jenis_arsip_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('jenis_arsip'));
        }
    }

    public function tambah()
    {
        if ($this->session->level != 'admin' and $this->session->level != 'staff') {
            redirect(base_url('404'));
            exit();
        }
        catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Menambahkan jenis arsip', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
        $data = array(
            'judul' => 'Tambah Jenis arsip',
            'button' => 'Create',
            'action' => base_url('jenis_arsip/tambah_data'),
            'id_jenis' => set_value('id_jenis'),
            'jenis_arsip' => set_value('jenis_arsip'),
            'create_id' => set_value('create_id'),
            'create_date' => set_value('create_date'),
        );
        $this->load->view('jenis_arsip/jenis_arsip_form', $data);
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
                'jenis_arsip' => $this->input->post('jenis_arsip', TRUE),
                'create_id' => $this->session->id_user,
                'create_date' => date('Y-m-d'),
            );
            $this->Jenis_arsip_model->insert($data);
            $respon = array(
                'ket' => 2,
                'respon' => 'Data berhasil di tambah'
            );
            echo json_encode($respon);
        }
    }

    public function edit($id)
    {
        $row = $this->Jenis_arsip_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul' => 'Edit jenis arsip.',
                'button' => 'Update',
                'action' => site_url('jenis_arsip/edit_data'),
                'id_jenis' => set_value('id_jenis', $row->id_jenis),
                'jenis_arsip' => set_value('jenis_arsip', $row->jenis_arsip),
                'create_id' => set_value('create_id', $row->create_id),
                'create_date' => set_value('create_date', $row->create_date),
            );
            $this->load->view('jenis_arsip/jenis_arsip_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="callout callout-info fade-in">Data Tidak Di Temukan.</div>');
            //redirect(site_url('jenis_arsip'));
        }
    }

    public function edit_data()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            // $this->edit($this->input->post('id_jenis', TRUE));
            $respon = array(
                'ket' => 2,
                'respon' => validation_errors()
            );
            echo json_encode($respon);
        } else {
            $data = array(
                'jenis_arsip' => $this->input->post('jenis_arsip', TRUE),
                'create_id' => $this->session->id_user,
                'create_date' => date('Y-m-d'),
            );

            $this->Jenis_arsip_model->update($this->input->post('id_jenis', TRUE), $data);
            catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Edit data arsip', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
            $respon = array(
                'ket' => 1,
                'respon' => 'data berhasil di edit',
            );
            echo json_encode($respon);
        }
    }

    public function hapus()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $this->input->post('id_jenis');
            $row = $this->Jenis_arsip_model->get_by_id($id);
            if ($row) {
                catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Hapus arsip', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
                $this->Jenis_arsip_model->delete($id);
                $this->session->set_flashdata('message', '<div class="callout callout-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
                redirect(site_url('jenis_arsip'));
            } else {
                $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
                redirect(site_url('jenis_arsip'));
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('jenis_arsip', 'jenis arsip', 'trim|required');
        $this->form_validation->set_rules('id_jenis', 'id_jenis', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "jenis_arsip.xls";
        $judul = "jenis_arsip";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Jenis Arsip");
        xlsWriteLabel($tablehead, $kolomhead++, "Create Id");
        xlsWriteLabel($tablehead, $kolomhead++, "Create Date");

        foreach ($this->Jenis_arsip_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->jenis_arsip);
            xlsWriteLabel($tablebody, $kolombody++, $data->create_id);
            xlsWriteLabel($tablebody, $kolombody++, $data->create_date);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=jenis_arsip.doc");

        $data = array(
            'jenis_arsip_data' => $this->Jenis_arsip_model->get_all(),
            'start' => 0
        );

        $this->template->load('template', 'jenis_arsip/jenis_arsip_doc', $data);
    }
}
