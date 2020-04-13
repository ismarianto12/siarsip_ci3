<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Tbl_surat_keluar extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    login_access();

    $this->load->model('Tbl_surat_keluar_model');
    $this->load->library('form_validation');
    $this->load->library('datatables');
  }

  public function index()
  {
    // print_r($this->session->userdata('level'));

    $x['judul'] = 'Surat keluar';
    $this->template->load('template', 'tbl_surat_keluar/tbl_surat_keluar_list', $x);
  }

  public function json()
  {
    header('Content-Type: application/json');
    echo $this->Tbl_surat_keluar_model->json();
  }

  public function detail($id)
  {
    $row = $this->Tbl_surat_keluar_model->get_by_id($id);
    if ($row) {
      $data = array(
        'id_jenis_surat' => $row->id_jenis_surat,
        'id_surat' => $row->id_surat,
        'no_agenda' => $row->no_agenda,
        'tujuan' => $row->tujuan,
        'no_surat' => $row->no_surat,
        'isi' => $row->isi,
        'kode' => $row->kode,
        'tgl_surat' => $row->tgl_surat,
        'tgl_catat' => $row->tgl_catat,
        'file' => $row->file,
        'keterangan' => $row->keterangan,
        'id_user' => $row->id_user,

        'judul' => 'Detail :  Surat Keluar',
      );
      $this->template->load('template', 'tbl_surat_keluar/tbl_surat_keluar_read', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('tbl_surat_keluar'));
    }
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Tbl surat keluar',
      'button' => 'Create',
      'action' => site_url('tbl_surat_keluar/tambah_data'),
      'id_jenis_surat' => set_value('id_jenis_surat'),
      'id_surat' => set_value('id_surat'),
      'no_agenda' => set_value('no_agenda'),
      'tujuan' => set_value('tujuan'),
      'no_surat' => set_value('no_surat'),
      'isi' => set_value('isi'),
      'kode' => set_value('kode'),
      'tgl_surat' => set_value('tgl_surat'),
      'tgl_catat' => set_value('tgl_catat'),
      'file' => set_value('file'),
      'keterangan' => set_value('keterangan'),
      'id_user' => set_value('id_user'),
    );
    $this->template->load('template', 'tbl_surat_keluar/tbl_surat_keluar_form', $data);
  }

  public function tambah_data()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->tambah();
    } else {
      $tgl_surat = $this->input->post('tgl_surat');
      $tgl_catat = $this->input->post('tgl_catat');

      $f_tgl_surat = date("Y-m-d", strtotime($tgl_surat));
      $f_tgl_catat = date("Y-m-d", strtotime($tgl_catat));


      $conf['file_name'] = 'surat_keluar' . date('Y-m-d');
      $conf['upload_path'] = './assets/file_surat';
      $conf['allowed_types'] = 'pdf|doc|docx|xls|xlxs';
      $this->upload->initialize($conf);
      if ($this->upload->do_upload('file')) {

        $data = array(
          'no_agenda' => $this->input->post('no_agenda', TRUE),
          'tujuan' => $this->input->post('tujuan', TRUE),
          'no_surat' => $this->input->post('no_surat', TRUE),
          'isi' => $this->input->post('isi', TRUE),
          'kode' => $this->input->post('kode', TRUE),
          'tgl_surat' => $f_tgl_surat,
          'tgl_catat' => $f_tgl_catat,
          'id_jenis_surat' => $this->input->post('id_jenis_surat'),
          'file' => $this->upload->file_name,
          'keterangan' => $this->input->post('keterangan', TRUE),
          'id_user' => $this->session->id_user,
        );
        $this->Tbl_surat_keluar_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
        redirect(site_url('tbl_surat_keluar'));
      } else {
        $this->session->set_flashdata('message', $this->upload->display_errors('<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>', '</div>'));
        redirect(site_url('tbl_surat_keluar/tambah'));
      }
    }
  }

  public function edit($id)
  {
    $row = $this->Tbl_surat_keluar_model->get_by_id($id);
    if ($row) {
      $data = array(
        'judul' => 'Edit data surat keluar',
        'button' => 'Update',
        'action' => site_url('tbl_surat_keluar/edit_data'),
        'id_surat' => set_value('id_surat', $row->id_surat),
        'no_agenda' => set_value('no_agenda', $row->no_agenda),
        'tujuan' => set_value('tujuan', $row->tujuan),
        'no_surat' => set_value('no_surat', $row->no_surat),
        'isi' => set_value('isi', $row->isi),
        'kode' => set_value('kode', $row->kode),
        'tgl_surat' => set_value('tgl_surat', $row->tgl_surat),
        'tgl_catat' => set_value('tgl_catat', $row->tgl_catat),
        'file' => set_value('file', $row->file),
        'keterangan' => set_value('keterangan', $row->keterangan),
        'id_user' => set_value('id_user', $row->id_user),
      );
      $this->template->load('template', 'tbl_surat_keluar/tbl_surat_keluar_form', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('tbl_surat_keluar'));
    }
  }

  public function edit_data()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->edit($this->input->post('id_surat', TRUE));
    } else {

      $tgl_surat = $this->input->post('tgl_surat');
      $tgl_catat = $this->input->post('tgl_catat');

      $f_tgl_surat = date("Y-m-d", strtotime($tgl_surat));
      $f_tgl_catat = date("Y-m-d", strtotime($tgl_catat));

      if ($_FILES['file']['name'] == '') {
        $data = array(
          'no_agenda' => $this->input->post('no_agenda', TRUE),
          'tujuan' => $this->input->post('tujuan', TRUE),
          'no_surat' => $this->input->post('no_surat', TRUE),
          'isi' => $this->input->post('isi', TRUE),
          'kode' => $this->input->post('kode', TRUE),

          'tgl_surat' => $f_tgl_surat,
          'tgl_catat' => $f_tgl_catat,

          'id_jenis_surat' => $this->input->post('id_jenis_surat'),
          'file' => $this->input->post('file', TRUE),
          'keterangan' => $this->input->post('keterangan', TRUE),
          'id_user' => $this->session->id_user,
        );

        $this->Tbl_surat_keluar_model->update($this->input->post('id_surat', TRUE), $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
        redirect(site_url('tbl_surat_keluar'));
      } else {
        $conf['file_name'] = 'surat_keluar' . date('Y-m-d');
        $conf['upload_path'] = './assets/file_surat';
        $conf['allowed_types'] = 'pdf|doc|docx|xls|xlxs';
        $this->upload->initalize($conf);
        if ($this->upload->do_upload('file')) {
          $data = array(
            'no_agenda' => $this->input->post('no_agenda', TRUE),
            'tujuan' => $this->input->post('tujuan', TRUE),
            'no_surat' => $this->input->post('no_surat', TRUE),
            'isi' => $this->input->post('isi', TRUE),
            'kode' => $this->input->post('kode', TRUE),
            'tgl_surat' => $f_tgl_surat,
            'tgl_catat' => $f_tgl_catat,
            'id_jenis_surat' => $this->input->post('id_jenis_surat'),
            'file' => $this->upload->file_name,
            'keterangan' => $this->input->post('keterangan', TRUE),
            'id_user' => $this->session->id_user,
          );

          $this->Tbl_surat_keluar_model->update($this->input->post('id_surat', TRUE), $data);
          $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
          redirect(site_url('tbl_surat_keluar'));
        } else {
          $this->session->set_flashdata('message', $this->upload->display_errors('<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>', '</div>'));
          redirect(site_url('tbl_surat_keluar/edit/' . $this->input->post('id_surat')));
        }
      }
    }
  }


  /*start function check*/
  function check_no_surat()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $id_jenis_surat = $this->input->post('id_jenis_surat');
      $data = $this->db->get_where('jenis_surat', array('id_jenis' => $id_jenis_surat));
      $query = $data->row_array();
      if ($query['kode_surat'] != '') :
        $no_surat = $query['kode_surat'] . '-' . penomoran_surat();
        $keterangan = '';
      else :
        $no_surat = penomoran_surat();
        $keterangan = '<small>Kode untuk jenis surat ini belum di set sebelumnya.</small>';
      endif;
      if ($data->num_rows() > 0) {
        $sql_data = array('no_surat' => $no_surat, 'keterangan' => $keterangan);
        echo json_encode($sql_data);
      } else {
        $sql_data = array('no_surat' => $no_surat, 'keterangan' => $keterangan);
        echo json_encode($sql_data);
      }
    }
  }


  /*check json data */

  public function hapus($id)
  {
    $row = $this->Tbl_surat_keluar_model->get_by_id($id);
    if ($row) {
      if ($row->file != '') {
        @unlink('assets/surat_keluar/' . $row->file);
      }
      $this->Tbl_surat_keluar_model->delete($id);
      $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
      redirect(site_url('tbl_surat_keluar'));
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
      redirect(site_url('tbl_surat_keluar'));
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('no_agenda', 'no agenda', 'trim|required');
    $this->form_validation->set_rules('tujuan', 'tujuan', 'trim|required');
    $this->form_validation->set_rules('no_surat', 'no surat', 'trim|required');
    $this->form_validation->set_rules('isi', 'isi', 'trim|required');
    $this->form_validation->set_rules('kode', 'kode', 'trim|required');
    $this->form_validation->set_rules('tgl_surat', 'tgl surat', 'trim|required');
    $this->form_validation->set_rules('tgl_catat', 'tgl catat', 'trim|required');
    $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
    $this->form_validation->set_rules('id_surat', 'id_surat', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
  }
}
