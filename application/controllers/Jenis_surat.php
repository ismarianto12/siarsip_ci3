<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class jenis_surat extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    login_access();
    $this->load->model('jenis_surat_model');
    $this->load->library('form_validation');
    $this->load->library('datatables');
  }

  public function index()
  {
    catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Menambahkan jenis surat.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    $x['judul'] = 'Data : Jenis surat';
    $this->template->load('template', 'jenis_surat/jenis_surat_list', $x);
  }
  public function json()
  {
    header('Content-Type: application/json');
    echo $this->jenis_surat_model->json();
  }

  public function detail($id)
  {
    $row = $this->jenis_surat_model->get_by_id($id);
    if ($row) {
      $data = array(
        'id_jenis' => $row->id_jenis,
        'nama_jenis' => $row->nama_jenis,
        'id_user' => $row->id_user,
        'tanggal_create' => $row->tanggal_create,

        'judul' => 'Detail :  jenis_surat',
      );
      $this->template->load('template', 'jenis_surat/jenis_surat_read', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('jenis_surat'));
    }
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Jenis surat',
      'button' => 'Create',
      'action' => site_url('jenis_surat/tambah_data'),
      'id_jenis' => set_value('id_jenis'),
      'nama_jenis' => set_value('nama_jenis'),
      'id_user' => set_value('id_user'),
      'kode_surat' => set_value('kode_surat'),
      'tanggal_create' => set_value('tanggal_create'),
    );
    $this->template->load('template', 'jenis_surat/jenis_surat_form', $data);
  }

  public function tambah_data()
  {
    $this->_rules();
    catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Tambah jenis surat.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    if ($this->form_validation->run() == FALSE) {
      $this->tambah();
    } else {
      $data = array(
        'nama_jenis' => $this->input->post('nama_jenis', TRUE),
        'id_user' => $this->session->id_user,
        'tanggal_create' => date('Y-m-d'),
        'kode_surat' => $this->input->post('kode_surat'),
      );

      $this->jenis_surat_model->insert($data);
      $this->session->set_flashdata('message', '<div class="callout callout-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
      redirect(site_url('jenis_surat'));
    }
  }

  public function edit($id)
  {
    $row = $this->jenis_surat_model->get_by_id($id);
    catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Edit jenis surat.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    if ($row) {
      $data = array(
        'judul' => 'Data jenis_surat',
        'button' => 'Update',
        'action' => site_url('jenis_surat/edit_data'),
        'id_jenis' => set_value('id_jenis', $row->id_jenis),
        'nama_jenis' => set_value('nama_jenis', $row->nama_jenis),
        'id_user' => set_value('id_user', $row->id_user),
        'kode_surat' => set_value('kode_surat', $row->kode_surat),
        'tanggal_create' => set_value('tanggal_create', $row->tanggal_create),
      );
      $this->template->load('template', 'jenis_surat/jenis_surat_form', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="callout callout-info fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('jenis_surat'));
    }
  }

  public function edit_data()
  {
    $this->_rules();
    catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Edit jenis surat.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    if ($this->form_validation->run() == FALSE) {
      $this->edit($this->input->post('id_jenis', TRUE));
    } else {
      $data = array(
        'nama_jenis' => $this->input->post('nama_jenis', TRUE),
        'id_user' => $this->session->id_user,
        'tanggal_create' => date('Y-m-d'),
        'kode_surat' => $this->input->post('kode_surat'),
      );

      $this->jenis_surat_model->update($this->input->post('id_jenis', TRUE), $data);
      $this->session->set_flashdata('message', '<div class="callout callout-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
      redirect(site_url('jenis_surat'));
    }
  }

  public function hapus($id)
  {
    $row = $this->jenis_surat_model->get_by_id($id);
    catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Hapus jenis surat.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    if ($row) {
      $this->jenis_surat_model->delete($id);
      $this->session->set_flashdata('message', '<div class="callout callout-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
      redirect(site_url('jenis_surat'));
    } else {
      $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
      redirect(site_url('jenis_surat'));
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('nama_jenis', 'nama jenis', 'trim|required');
    $this->form_validation->set_rules('id_jenis', 'id_jenis', 'trim');
    $this->form_validation->set_error_delimiters('<span>', '</span>');
  }
}
