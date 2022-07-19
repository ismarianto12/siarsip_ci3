<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Tsuratmasuk extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    login_access();
    // hak_akses();
    $this->load->model('Tsuratmasuk_model');
    $this->load->library('form_validation');
    $this->load->library('datatables');
  }

  public function index()
  {
    catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Akses surat masuk.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    $x['judul'] = '.:: Surat Masuk ::.';
    $this->template->load('template', 'tsuratmasuk/tbl_surat_masuk_list', $x);
  }

  public function json()
  {
    header('Content-Type: application/json');
    echo $this->Tsuratmasuk_model->json();
  }

  public function detail($id)
  {
    $row = $this->Tsuratmasuk_model->get_by_id($id);
    if ($row) {
      $user = $this->db->get_where('login', ['id_user' => $row->id_user])->row();
      $data = array(
        'id_surat' => $row->id_surat,
        'no_agenda' => $row->no_agenda,
        'no_surat' => $row->no_surat,
        'asal_surat' => $row->asal_surat,
        'isi' => $row->isi,
        'kode' => $row->kode,
        'indeks' => $row->indeks,
        'tgl_surat' => $row->tgl_surat,
        'tgl_diterima' => $row->tgl_diterima,
        'file' => $row->file,
        'keterangan' => $row->keterangan,
        'id_user' => $user->nama,
        'judul' => 'Detail surat masuk',
      );
      $this->template->load('template', 'tsuratmasuk/tbl_surat_masuk_read', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('tsuratmasuk'));
    }
  }

  public function tambah()
  {
    //catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'tambah data surat masuk.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    $data = array(
      'judul' => 'Tambah Data Surat Masuk.',
      'button' => 'Create',
      'action' => site_url('tsuratmasuk/tambah_data'),
      'id_surat' => set_value('id_surat'),
      'no_agenda' => set_value('no_agenda'),
      'no_surat' => set_value('no_surat'),
      'asal_surat' => set_value('asal_surat'),
      'isi' => set_value('isi'),
      'kode' => set_value('kode'),
      'indeks' => set_value('indeks'),
      'tgl_surat' => set_value('tgl_surat'),
      'tgl_diterima' => set_value('tgl_diterima'),
      'file' => set_value('file'),
      'keterangan' => set_value('keterangan'),
      'id_user' => set_value('id_user'),
    );
    $this->load->view('tsuratmasuk/tbl_surat_masuk_form', $data);
  }

  public function tambah_data()
  {
    $this->_rules();
    // catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Menambahkan surat masuk.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    if ($this->form_validation->run() == FALSE) {
      $respon = array(
        'ket' => 2,
        'respon' => validation_errors()
      );
      echo json_encode($respon);
    } else {

      $tgl_surat = $this->input->post('tgl_surat');
      $tgl_catat = $this->input->post('tgl_diterima');

      $f_tgl_surat = date("Y-m-d", strtotime($tgl_surat));
      $f_tgl_catat = date("Y-m-d", strtotime($tgl_catat));

      $conf['allowed_types'] = 'pdf|jpg|png|ico|bmp|docx';
      $conf['upload_path'] = 'assets/file_surat/';
      // $conf['max_upload_size'] = '';
      $conf['file_name']   = time() . 'file_surat';
      $this->upload->initialize($conf);
      if ($this->upload->do_upload('file')) {
        $data = array(
          'no_agenda' => $this->input->post('no_agenda', TRUE),
          'no_surat' => $this->input->post('no_surat', TRUE),
          'asal_surat' => $this->input->post('asal_surat', TRUE),
          'isi' => $this->input->post('isi', TRUE),
          'kode' => $this->input->post('kode', TRUE),
          'indeks' => ($this->input->post('indeks', TRUE)) ? $this->input->post('indeks', TRUE) : 'null',
          'tgl_surat' => $f_tgl_surat,
          'tgl_diterima' => $f_tgl_catat,
          'file' => $this->upload->file_name,
          'keterangan' => $this->input->post('keterangan', TRUE),
          'id_user' => $this->session->id_user,
          'disposisi' => 'n',

        );
        $this->db->insert('tbl_surat_masuk', $data);
        $respon = array(
          'ket' => 1,
          'respon' => 'data berhasil di tambahkan'
        );
        echo json_encode($respon);
      } else {
        $data = array(
          'no_agenda' => $this->input->post('no_agenda', TRUE),
          'no_surat' => $this->input->post('no_surat', TRUE),
          'asal_surat' => $this->input->post('asal_surat', TRUE),
          'isi' => $this->input->post('isi', TRUE),
          'kode' => $this->input->post('kode', TRUE),
          'indeks' => ($this->input->post('indeks', TRUE)) ? $this->input->post('indeks', TRUE) : 'null',
          'tgl_surat' => $f_tgl_surat,
          'tgl_diterima' => $f_tgl_catat,
          'keterangan' => $this->input->post('keterangan', TRUE),
          'id_user' => $this->session->id_user,
        );
        $this->db->insert('tbl_surat_masuk', $data);
        $respon = array(
          'ket' => 1,
          'respon' => 'data berhasil di tambahkan'
        );
        echo json_encode($respon);
      }
    }
  }

  public function edit($id)
  {
    $row = $this->Tsuratmasuk_model->get_by_id($id);
    if ($row) {
      $data = array(
        'judul' => 'Edit data surat masuk.',
        'button' => 'Update',
        'action' => site_url('tsuratmasuk/edit_data'),
        'id_surat' => set_value('id_surat', $row->id_surat),
        'no_agenda' => set_value('no_agenda', $row->no_agenda),
        'no_surat' => set_value('no_surat', $row->no_surat),
        'asal_surat' => set_value('asal_surat', $row->asal_surat),
        'isi' => set_value('isi', $row->isi),
        'kode' => set_value('kode', $row->kode),
        'indeks' => set_value('indeks', $row->indeks),
        'tgl_surat' => set_value('tgl_surat', $row->tgl_surat),
        'tgl_diterima' => set_value('tgl_diterima', $row->tgl_diterima),
        'file' => set_value('file', $row->file),
        'keterangan' => set_value('keterangan', $row->keterangan),
        'id_user' => set_value('id_user', $row->id_user),
      );
      $this->load->view('tsuratmasuk/tbl_surat_masuk_form', $data);
    } else {
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

      $tgl_surat = $this->input->post('tgl_surat');
      $tgl_catat = $this->input->post('tgl_diterima');

      $f_tgl_surat = date("Y-m-d", strtotime($tgl_surat));
      $f_tgl_catat = date("Y-m-d", strtotime($tgl_catat));

      if ($_FILES['file']['name'] != '') {
        $conf['allowed_types'] = 'docx|pdf|jpg|png|ico|bmp|docx';
        $conf['upload_path'] = 'assets/file_surat/';
        $conf['file_name']   = time() . 'file_surat';
        $this->upload->initialize($conf);
        if ($this->upload->do_upload('file')) {
          $dapatkan_file = $this->db->get_where('tbl_surat_masuk', array('id_surat' => $this->input->post('id_surat')));
          $surat_masuk = $dapatkan_file->row_array();
          @unlink('assets/file_surat/' . $surat_masuk['file']);
          $data = array(
            'no_agenda' => $this->input->post('no_agenda', TRUE),
            'no_surat' => $this->input->post('no_surat', TRUE),
            'asal_surat' => $this->input->post('asal_surat', TRUE),
            'isi' => $this->input->post('isi', TRUE),
            'kode' => $this->input->post('kode', TRUE),
            'indeks' => ($this->input->post('indeks', TRUE)) ? $this->input->post('indeks', TRUE) : 'null',
            'tgl_surat' => $f_tgl_surat,
            'tgl_diterima' => $f_tgl_catat,
            'file' => $this->upload->file_name,
            'keterangan' => $this->input->post('keterangan', TRUE),
            'id_user' => $this->session->id_user,
            'disposisi' => 'n',
          );
          $this->Tsuratmasuk_model->update($this->input->post('id_surat', TRUE), $data);
          $respon = array(
            'ket' => 1,
            'respon' => 'data berhasil di tambahkan'
          );
          echo json_encode($respon);
        } else {
          $respon = array(
            'ket' => 2,
            'respon' => 'server tidak respon harap tunggu'
          );
          echo json_encode($respon);
        }
      } else {
        $data = array(
          'no_agenda' => $this->input->post('no_agenda', TRUE),
          'no_surat' => $this->input->post('no_surat', TRUE),
          'asal_surat' => $this->input->post('asal_surat', TRUE),
          'isi' => $this->input->post('isi', TRUE),
          'kode' => $this->input->post('kode', TRUE),
          'indeks' => ($this->input->post('indeks', TRUE)) ? $this->input->post('indeks', TRUE) : 'null',
          'tgl_surat' => $f_tgl_surat,
          'tgl_diterima' => $f_tgl_catat,
          'keterangan' => $this->input->post('keterangan', TRUE),
          'id_user' => $this->session->id_user,
        );
        $this->Tsuratmasuk_model->update($this->input->post('id_surat', TRUE), $data);
        $respon = array(
          'ket' => 1,
          'respon' => 'Data berhasil di edit'
        );
        echo json_encode($respon);
      }
    }
  }

  public function hapus()
  {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $id = $this->input->post('id_suratmasuk');
      $row = $this->Tsuratmasuk_model->get_by_id($id);
      if ($row) {
        if ($row->file != '') :
          @unlink('assets/file_surat/' . $row->file);
        endif;
        $this->db->delete('tbl_surat_masuk', array('id_surat' => $id));
        catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Menghapus surat masuk.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
      }
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('no_agenda', 'no agenda', 'trim|required');
    $this->form_validation->set_rules('no_surat', 'no surat', 'trim|required');
    $this->form_validation->set_rules('asal_surat', 'asal surat', 'trim|required');
    $this->form_validation->set_rules('isi', 'isi', 'trim|required');
    $this->form_validation->set_rules('kode', 'kode', 'trim|required');
    $this->form_validation->set_rules('tgl_surat', 'tgl surat', 'trim|required');
    $this->form_validation->set_rules('tgl_diterima', 'tgl diterima', 'trim|required');
    $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
    $this->form_validation->set_rules('id_surat', 'id_surat', 'trim');
    $this->form_validation->set_error_delimiters('<span >', '</span>');
  }

  /*json detaill data*/
  function get_detail_data()
  {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $id_surat = $this->input->post('id_suratmasuk');
      $data = $this->db->get_where('tbl_surat_masuk', array('id_surat' => $id_surat))->result_array();
      echo json_encode($data);
    }
  }

  function get_notification()
  {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $data = $this->Tsuratmasuk_model->notification();
      $sql = $data->row_array();
      echo (int) $sql['jumlah'];
    }
  }

  function get_list()
  {
    // if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    $x['data'] = $this->db->get_where('tbl_surat_masuk', array('disposisi' => 'n'));
    $this->load->view('list_notifikasi', $x);
    //}
  }
  function check_no_surat()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $id_jenis_surat = $this->input->post('id_jenis_surat');
      $data = $this->db->get_where('jenis_surat', array('id_jenis' => $id_jenis_surat));
      $query = $data->row_array();
      if ($query['kode_surat'] != '') :
        $no_surat = $query['kode_surat'] . '-' . penomoran_surat_masuk();
        $keterangan = '';
      else :
        $no_surat = penomoran_surat_masuk();
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

  public function pagedata($id)
  {
    $row = $this->Tsuratmasuk_model->get_by_id($id);
    if ($row) {
      $user = $this->db->get_where('login', ['id_user' => $row->id_user])->row();
      $data = array(
        'id_surat' => $row->id_surat,
        'no_agenda' => $row->no_agenda,
        'no_surat' => $row->no_surat,
        'asal_surat' => $row->asal_surat,
        'isi' => $row->isi,
        'kode' => $row->kode,
        'indeks' => $row->indeks,
        'tgl_surat' => $row->tgl_surat,
        'tgl_diterima' => $row->tgl_diterima,
        'file' => $row->file,
        'keterangan' => $row->keterangan,
        'id_user' => $user->nama,
        'judul' => 'Detail surat masuk',
      );
      $this->load->view('tsuratmasuk/tbl_surat_masuk_notif', $data);
    }
  }
}
