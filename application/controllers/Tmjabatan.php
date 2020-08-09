<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tmjabatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Tmjabatan_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $x['judul'] = 'Data : Master Jabatan';
        $this->template->load('template', 'tmjabatan/tmjabatan_list', $x);
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Tmjabatan_model->json();
    }

    public function detail($id)
    {
        $row = $this->Tmjabatan_model->get_by_id($id);
        if ($row) {
            $data = array(
                'Id' => $row->Id,
                'Title' => $row->Title,
                'Description' => $row->Description,
                'Stat' => $row->Stat,
                'OtherString' => $row->OtherString,
                'judul' => 'Detail :  Master Jabatan',
            );
            $this->template->load('template', 'tmjabatan/tmjabatan_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('tmjabatan'));
        }
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Tambah Tmjabatan',
            'button' => 'Create',
            'action' => site_url('tmjabatan/tambah_data'),
            'Id' => set_value('Id'),
            'Title' => set_value('Title'),
            'Description' => set_value('Description'),
            'Stat' => set_value('Stat'),
            'OtherString' => set_value('OtherString'),
        );
        $this->template->load('template', 'tmjabatan/tmjabatan_form', $data);
    }

    public function tambah_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'Title' => $this->input->post('Title', TRUE),
                'Description' => $this->input->post('Description', TRUE),
                'Stat' => $this->input->post('Stat', TRUE),
                'OtherString' => $this->input->post('OtherString', TRUE),
            );

            $this->Tmjabatan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
            redirect(site_url('tmjabatan'));
        }
    }

    public function edit($id)
    {
        $row = $this->Tmjabatan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul' => 'Data Master Jabatan',
                'button' => 'Update',
                'action' => site_url('tmjabatan/edit_data'),
                'Id' => set_value('Id', $row->Id),
                'Title' => set_value('Title', $row->Title),
                'Description' => set_value('Description', $row->Description),
                'Stat' => set_value('Stat', $row->Stat),
                'OtherString' => set_value('OtherString', $row->OtherString),
            );
            $this->template->load('template', 'tmjabatan/tmjabatan_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('tmjabatan'));
        }
    }

    public function edit_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('Id', TRUE));
        } else {
            $data = array(
                'Title' => $this->input->post('Title', TRUE),
                'Description' => $this->input->post('Description', TRUE),
                'Stat' => $this->input->post('Stat', TRUE),
                'OtherString' => $this->input->post('OtherString', TRUE),
            );

            $this->Tmjabatan_model->update($this->input->post('Id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(site_url('tmjabatan'));
        }
    }

    public function hapus($id)
    {
        $row = $this->Tmjabatan_model->get_by_id($id);

        if ($row) {
            $this->Tmjabatan_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(site_url('tmjabatan'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(site_url('tmjabatan'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('Title', 'title', 'trim|required');
        $this->form_validation->set_rules('Description', 'description', 'trim|required');
        $this->form_validation->set_rules('Stat', 'stat', 'trim|required');
        $this->form_validation->set_rules('OtherString', 'otherstring', 'trim|required');

        $this->form_validation->set_rules('Id', 'Id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tmjabatan.xls";
        $judul = "tmjabatan";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Title");
        xlsWriteLabel($tablehead, $kolomhead++, "Description");
        xlsWriteLabel($tablehead, $kolomhead++, "Stat");
        xlsWriteLabel($tablehead, $kolomhead++, "OtherString");

        foreach ($this->Tmjabatan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->Title);
            xlsWriteLabel($tablebody, $kolombody++, $data->Description);
            xlsWriteLabel($tablebody, $kolombody++, $data->Stat);
            xlsWriteLabel($tablebody, $kolombody++, $data->OtherString);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tmjabatan.doc");

        $data = array(
            'tmjabatan_data' => $this->Tmjabatan_model->get_all(),
            'start' => 0
        );

        $this->load->view('template', 'tmjabatan/tmjabatan_doc', $data);
    }
}
