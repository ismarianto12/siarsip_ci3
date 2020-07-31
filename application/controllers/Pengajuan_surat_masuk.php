<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

  if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengajuan_surat_masuk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Pengajuan_surat_masuk_model');
        $this->load->library('form_validation');   
        $this->load->library('datatables');
    }

    public function index()
    {
       $x['judul'] = 'Data : Pengajuan surat masuk';
       $this->template->load('template','pengajuan_surat_masuk/pengajuan_surat_masuk_list',$x);
   } 
   
   public function json() {
    header('Content-Type: application/json');
    echo $this->Pengajuan_surat_masuk_model->json();
}

public function detail($id) 
{
    $row = $this->Pengajuan_surat_masuk_model->get_by_id($id);
    if ($row) {
        $data = array(
          'id_pengajuan_s' => $row->id_pengajuan_s,
          'no_agenda' => $row->no_agenda,
          'jenis_surat' => $row->jenis_surat,
          'tanggal_kirim' => $row->tanggal_kirim,
          'tanggal_terima' => $row->tanggal_terima,
          'no_surat' => $row->no_surat,
          'pengirim' => $row->pengirim,
          'perihal' => $row->perihal,
          'nama_file' => $row->nama_file,
          
          'judul'=>'Detail :  PENGAJUAN_SURAT_MASUK',
      );
        $this->template->load('template','pengajuan_surat_masuk/pengajuan_surat_masuk_read', $data);
    } else {
        $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Data Tidak Di Temukan.</div>');
        redirect(site_url('pengajuan_surat_masuk'));
    }
}

public function tambah() 
{
    $data = array(
        'judul'=>'Tambah Pengajuan surat masuk',
        'button' => 'Create',
        'action' => site_url('pengajuan_surat_masuk/tambah_data'),
        'id_pengajuan_s' => set_value('id_pengajuan_s'),
        'no_agenda' => set_value('no_agenda'),
        'jenis_surat' => set_value('jenis_surat'),
        'tanggal_kirim' => set_value('tanggal_kirim'),
        'tanggal_terima' => set_value('tanggal_terima'),
        'no_surat' => set_value('no_surat'),
        'pengirim' => set_value('pengirim'),
        'perihal' => set_value('perihal'),
        'nama_file' => set_value('nama_file'),
    );
    $this->template->load('template','pengajuan_surat_masuk/pengajuan_surat_masuk_form', $data);
}

public function tambah_data() 
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambah();
    } else {
        $data = array(
          'no_agenda' => $this->input->post('no_agenda',TRUE),
          'jenis_surat' => $this->input->post('jenis_surat',TRUE),
          'tanggal_kirim' => $this->input->post('tanggal_kirim',TRUE),
          'tanggal_terima' => $this->input->post('tanggal_terima',TRUE),
          'no_surat' => $this->input->post('no_surat',TRUE),
          'pengirim' => $this->input->post('pengirim',TRUE),
          'perihal' => $this->input->post('perihal',TRUE),
          'nama_file' => $this->input->post('nama_file',TRUE),
      );

        $this->Pengajuan_surat_masuk_model->insert($data);
        $this->session->set_flashdata('message', '<div class="callout callout-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
        redirect(site_url('pengajuan_surat_masuk'));
    }
}

public function edit($id) 
{
    $row = $this->Pengajuan_surat_masuk_model->get_by_id($id);

    if ($row) {
        $data = array(
            'judul'=>'Data PENGAJUAN_SURAT_MASUK',
            'button' => 'Update',
            'action' => site_url('pengajuan_surat_masuk/edit_data'),
            'id_pengajuan_s' => set_value('id_pengajuan_s', $row->id_pengajuan_s),
            'no_agenda' => set_value('no_agenda', $row->no_agenda),
            'jenis_surat' => set_value('jenis_surat', $row->jenis_surat),
            'tanggal_kirim' => set_value('tanggal_kirim', $row->tanggal_kirim),
            'tanggal_terima' => set_value('tanggal_terima', $row->tanggal_terima),
            'no_surat' => set_value('no_surat', $row->no_surat),
            'pengirim' => set_value('pengirim', $row->pengirim),
            'perihal' => set_value('perihal', $row->perihal),
            'nama_file' => set_value('nama_file', $row->nama_file),
        );
        $this->template->load('template','pengajuan_surat_masuk/pengajuan_surat_masuk_form', $data);
    } else {
        $this->session->set_flashdata('message', '<div class="callout callout-info fade-in">Data Tidak Di Temukan.</div>');
        redirect(site_url('pengajuan_surat_masuk'));
    }
}

public function edit_data() 
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->edit($this->input->post('id_pengajuan_s', TRUE));
    } else {
        $data = array(
          'no_agenda' => $this->input->post('no_agenda',TRUE),
          'jenis_surat' => $this->input->post('jenis_surat',TRUE),
          'tanggal_kirim' => $this->input->post('tanggal_kirim',TRUE),
          'tanggal_terima' => $this->input->post('tanggal_terima',TRUE),
          'no_surat' => $this->input->post('no_surat',TRUE),
          'pengirim' => $this->input->post('pengirim',TRUE),
          'perihal' => $this->input->post('perihal',TRUE),
          'nama_file' => $this->input->post('nama_file',TRUE),
      );

        $this->Pengajuan_surat_masuk_model->update($this->input->post('id_pengajuan_s', TRUE), $data);
        $this->session->set_flashdata('message', '<div class="callout callout-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
        redirect(site_url('pengajuan_surat_masuk'));
    }
}

public function hapus($id) 
{
    $row = $this->Pengajuan_surat_masuk_model->get_by_id($id);

    if ($row) {
        $this->Pengajuan_surat_masuk_model->delete($id);
        $this->session->set_flashdata('message', '<div class="callout callout-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
        redirect(site_url('pengajuan_surat_masuk'));
    } else {
        $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
        redirect(site_url('pengajuan_surat_masuk'));
    }
}

public function _rules() 
{
	$this->form_validation->set_rules('no_agenda', 'no agenda', 'trim|required');
	$this->form_validation->set_rules('jenis_surat', 'jenis surat', 'trim|required');
	$this->form_validation->set_rules('tanggal_kirim', 'tanggal kirim', 'trim|required');
	$this->form_validation->set_rules('tanggal_terima', 'tanggal terima', 'trim|required');
	$this->form_validation->set_rules('no_surat', 'no surat', 'trim|required');
	$this->form_validation->set_rules('pengirim', 'pengirim', 'trim|required');
	$this->form_validation->set_rules('perihal', 'perihal', 'trim|required');
	$this->form_validation->set_rules('nama_file', 'nama file', 'trim|required');

	$this->form_validation->set_rules('id_pengajuan_s', 'id_pengajuan_s', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
}

public function excel()
{
    $this->load->helper('exportexcel');
    $namaFile = "pengajuan_surat_masuk.xls";
    $judul = "pengajuan_surat_masuk";
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
    xlsWriteLabel($tablehead, $kolomhead++, "No Agenda");
    xlsWriteLabel($tablehead, $kolomhead++, "Jenis Surat");
    xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Kirim");
    xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Terima");
    xlsWriteLabel($tablehead, $kolomhead++, "No Surat");
    xlsWriteLabel($tablehead, $kolomhead++, "Pengirim");
    xlsWriteLabel($tablehead, $kolomhead++, "Perihal");
    xlsWriteLabel($tablehead, $kolomhead++, "Nama File");

    foreach ($this->Pengajuan_surat_masuk_model->get_all() as $data) {
        $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
        xlsWriteNumber($tablebody, $kolombody++, $nourut);
        xlsWriteLabel($tablebody, $kolombody++, $data->no_agenda);
        xlsWriteLabel($tablebody, $kolombody++, $data->jenis_surat);
        xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_kirim);
        xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_terima);
        xlsWriteLabel($tablebody, $kolombody++, $data->no_surat);
        xlsWriteLabel($tablebody, $kolombody++, $data->pengirim);
        xlsWriteLabel($tablebody, $kolombody++, $data->perihal);
        xlsWriteLabel($tablebody, $kolombody++, $data->nama_file);

        $tablebody++;
        $nourut++;
    }

    xlsEOF();
    exit();
}

public function word()
{
    header("Content-type: application/vnd.ms-word");
    header("Content-Disposition: attachment;Filename=pengajuan_surat_masuk.doc");

    $data = array(
        'pengajuan_surat_masuk_data' => $this->Pengajuan_surat_masuk_model->get_all(),
        'start' => 0
    );
    
    $this->template->load('template','pengajuan_surat_masuk/pengajuan_surat_masuk_doc',$data);
}

}

