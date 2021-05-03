<?php


if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    login_access();
    hak_akses();
    $this->load->model('Login_model');
    $this->load->library('form_validation');
    $this->load->library('datatables');
  }

  public function index()
  {
    catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Akses modul login .', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    $x['judul'] = 'Data : Login';
    $this->template->load('template', 'login/login_list', $x);
  }

  public function json()
  {
    header('Content-Type: application/json');
    echo $this->Login_model->json();
  }

  public function detail($id)
  {
    $row = $this->Login_model->get_by_id($id);
    if ($row) {
      $data = array(
        'id_user' => $row->id_user,
        'username' => $row->username,
        'password' => $row->password,
        'nama' => $row->nama,
        'level' => $row->level,
        'email' => $row->email,
        'foto' => $row->foto,
        'log' => $row->log,
        'active' => $row->active,
        'judul' => 'Login detail',
      );
      $this->template->load('template', 'login/login_read', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('login'));
    }
  }

  public function tambah()
  {
    catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Menambahkan akses login', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    $data = array(
      'judul' => 'Tambah Login',
      'button' => 'Create',
      'action' => site_url('login/tambah_data_action'),
      'id_user' => set_value('id_user'),
      'username' => set_value('username'),
      'password' => set_value('password'),
      'nama' => set_value('nama'),
      'level' => set_value('level'),
      'foto' => set_value('foto'),
      'email' => set_value('email'),
      'active' => set_value('active'),
    );
    $this->template->load('template', 'login/login_form', $data);
  }

  public function tambah_data_action()
  {

    $this->_rules();
    if ($this->form_validation->run() == FALSE) {

      echo json_encode([
        'status' => 2,
        'msg' => validation_errors('<p>', '</p>')
      ]);
    } else {

      $conf['file_name'] = 'foto' . time();
      $conf['upload_path'] = 'assets/img/foto';
      $conf['allowed_types']  = 'jpg|png|bmp';

      $this->upload->initialize($conf);
      if ($this->upload->do_upload('foto') == TRUE) {

        $data = array(
          'username' => $this->input->post('username', TRUE),
          'password' => md5($this->input->post('password')),
          'nama' => $this->input->post('nama', TRUE),
          'foto' => $this->upload->file_name,
          'level' => $this->input->post('level', TRUE),
          'email' => $this->input->post('email', TRUE),
          'active' => $this->input->post('active', TRUE),
        );
        $this->Login_model->insert($data);
        $this->session->set_flashdata('message', '<div class="callout callout-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
        echo json_encode([
          'status' => 1,
          'msg' => 'dat berhasil di simpan'
        ]);
      } else {
        echo json_encode([
          'status' => 2,
          'msg' => $this->upload->display_errors('<div class="callout callout-danger fade-in"><i class="fa fa-check"></i>', '</div>')
        ]);
      }
    }
  }
  public function edit($id)
  {
    $row = $this->Login_model->get_by_id($id);

    if ($row) {
      $data = array(
        'judul' => 'Data LOGIN',
        'button' => 'Update',
        'action' => site_url('login/edit_data_action'),
        'id_user' => set_value('id_user', $row->id_user),
        'username' => set_value('username', $row->username),
        'password' => set_value('password', $row->password),
        'nama' => set_value('nama', $row->nama),
        'level' => set_value('level', $row->level),
        'foto' => set_value('foto', $row->foto),
        'email' => set_value('email', $row->email),
        'active' => set_value('active', $row->active),
      );
      $this->template->load('template', 'login/login_form', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="callout callout-info fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('login'));
    }
  }

  public function edit_data_action()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      echo json_encode([
        'status' => 2,
        'msg' => validation_errors('<p>', '</p>')
      ]);
    } else {
      if ($_FILES['foto']['name'] != '') {

        $conf['file_name'] = 'foto' . time();
        $conf['upload_path'] = 'assets/img/foto';
        $conf['allowed_types']  = 'jpg|png|bmp';

        $this->upload->initialize($conf);
        if ($this->upload->do_upload('foto') == TRUE) {

          $qdata = $this->db->get_where('login', array('id_user' => $this->input->post('id_user')));
          $cek_id = $qdata->row_array();
          unlink('assets/img/foto/' . $cek_id['foto']);
          $data = array(
            'username' => $this->input->post('username', TRUE),
            'password' => md5($this->input->post('password', TRUE)),
            'nama' => $this->input->post('nama', TRUE),
            'level' => $this->input->post('level', TRUE),
            'email' => $this->input->post('email', TRUE),
            'foto' => $this->upload->file_name,
            'log' => date('Y-m-d H:i:s'),
            'active' => $this->input->post('active', TRUE),
          );
          $this->Login_model->update($this->input->post('id_user', TRUE), $data);
          $this->session->set_flashdata('message', '<div class="callout callout-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
          // catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'akses edit data login user.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
          // redirect(site_url('login'));
        } else {
          echo json_encode([
            'status' => 1,
            'msg' => 'update berhasil'
          ]);
        }
      } else {
        $data = array(
          'username' => $this->input->post('username', TRUE),
          'password' => md5($this->input->post('password', TRUE)),
          'nama' => $this->input->post('nama', TRUE),
          'level' => $this->input->post('level', TRUE),
          'email' => $this->input->post('email', TRUE),
          'log' => date('Y-m-d H:i:s'),
          'active' => $this->input->post('active', TRUE),
        );

        $this->Login_model->update($this->input->post('id_user', TRUE), $data);
        $this->session->set_flashdata('message', '<div class="callout callout-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
        echo json_encode([
          'status' => 2,
          'msg' => $this->upload->display_errors('<div class="callout callout-danger fade-in"><i class="fa fa-check"></i>', '</div>')
        ]);
      }
    }
  }

  public function hapus($id)
  {

    $row = $this->Login_model->get_by_id($id);

    if ($row) {
      $this->Login_model->delete($id);
      catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'menghapus data login user.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
      $this->session->set_flashdata('message', '<div class="callout callout-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
      redirect(site_url('login'));
    } else {
      $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
      redirect(site_url('login'));
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('username', 'username', 'trim|required|is_unique[login.username]');
    $this->form_validation->set_rules('password', 'password', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('level', 'level', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('id_user', 'id_user', 'trim');
    $this->form_validation->set_error_delimiters('<span>', '</span>');
  }
  public function excel()
  {
    $this->load->helper('exportexcel');
    $namaFile = "login.xls";
    $judul = "login";
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
    xlsWriteLabel($tablehead, $kolomhead++, "Username");
    xlsWriteLabel($tablehead, $kolomhead++, "Password");
    xlsWriteLabel($tablehead, $kolomhead++, "Nama");
    xlsWriteLabel($tablehead, $kolomhead++, "Level");
    xlsWriteLabel($tablehead, $kolomhead++, "Email");
    xlsWriteLabel($tablehead, $kolomhead++, "Log");
    xlsWriteLabel($tablehead, $kolomhead++, "Aktif");

    foreach ($this->Login_model->get_all() as $data) {
      $kolombody = 0;

      //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
      xlsWriteNumber($tablebody, $kolombody++, $nourut);
      xlsWriteLabel($tablebody, $kolombody++, $data->username);
      xlsWriteLabel($tablebody, $kolombody++, $data->password);
      xlsWriteLabel($tablebody, $kolombody++, $data->nama);
      xlsWriteLabel($tablebody, $kolombody++, $data->level);
      xlsWriteLabel($tablebody, $kolombody++, $data->email);
      xlsWriteLabel($tablebody, $kolombody++, $data->log);
      xlsWriteLabel($tablebody, $kolombody++, $data->active);

      $tablebody++;
      $nourut++;
    }

    xlsEOF();
    exit();
  }

  public function word()
  {
    header("Content-type: application/vnd.ms-word");
    header("Content-Disposition: attachment;Filename=login.doc");

    $data = array(
      'login_data' => $this->Login_model->get_all(),
      'start' => 0
    );

    $this->template->load('template', 'login/login_doc', $data);
  }
}
