<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Arsip extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Arsip_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Akses Arsip', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
        $x = array('judul' => 'Data list arsip');
        $this->template->load('template', 'arsip/arsip_list', $x);
    }

    public function json()
    {
        header('Content-Type: application/json');
        if ($this->session->level == 'admin') {
            echo $this->Arsip_model->json();
        } else {
            echo $this->Arsip_model->json($this->session->level);
        }
    }

    public function json_data()
    {
        //header('Content-Type : application/json');
        echo $this->Arsip_model->data_ajuan_arsip();
    }

    public function detail($id)
    {
        $row = $this->Arsip_model->data_arsip(addslashes($id));
        if ($row->num_rows() != 1) {
            redirect(base_url('arsip'));
        } else {
            if ($row) {
                $data = $row->row();
                $data = array(
                    'print' => '',
                    'id_arsip' => $data->id_arsip,
                    'jenis_arsip' => $data->jenis_arsip,
                    'nama_arsip' => $data->nama_arsip,
                    'file_arsip' => $data->file_arsip,
                    'lokasi' => $data->nama_lokasi,
                    'nama' => $data->nama,
                    'ket_isi' => $data->ket_isi,
                    'tanggal' => $data->tanggal,
                    'judul' => 'Detail :  Arsip - ' . $data->jenis_arsip,
                );
                $this->template->load('template', 'arsip/arsip_read', $data);
            } else {
                $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Data Tidak Di Temukan.</div>');
                redirect(site_url('arsip'));
            }
        }
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Tambah Data Arsip',
            'button' => 'Create',
            'aksi' => 'tambah',
            'action' => site_url('arsip/tambah_data'),
            'id_arsip' => set_value('id_arsip'),
            'id_satuan' => set_value('id_satuan'),
            'id_jenis' => set_value('id_jenis'),
            'jumlah' => set_value('jumlah'),
            'nama_arsip' => set_value('nama_arsip'),
            'file_arsip' => set_value('file_arsip'),
            'lokasi' => set_value('lokasi'),
            'ket_isi' => set_value('ket_isi'),
            'tanggal' => set_value('tanggal'),
        );
        $this->load->view('arsip/arsip_form', $data);
    }

    public function tambah_data()
    {

        //catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Menambahkan arsip', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
        $this->_rules();

        if ($this->session->level == 'admin') {
            $permision = implode('.', $this->input->post('permision[]'));
        } else {
            $permision = "." . $this->session->level . ".";
        }

        if ($this->form_validation->run() == FALSE) {
            $respon = array(
                'ket' => 2,
                'respon' => validation_errors('<p>', '</p>')
            );
            echo json_encode($respon);
        } else {
            $config['cacheable']    = true;
            $config['cachedir']     = './assets/';
            $config['errorlog']     = './assets/';
            $config['imagedir']     = './assets/qrarsip/';
            $config['quality']      = true;
            $config['size']         = '1024';
            $config['black']        = array(224, 255, 255);
            $config['white']        = array(70, 130, 180);
            $this->ciqrcode->initialize($config);

            $image_name = $this->input->post('nama_arsip') . '.png';
            $params['data'] = $this->input->post('nama_arsip');
            $params['level'] = 'H';
            $params['size'] = 10;
            $params['savename'] = FCPATH . $config['imagedir'] . $image_name;
            $this->ciqrcode->generate($params);
            /*end*/

            $cf['upload_path'] = 'assets/arsip/';
            $cf['file_name'] = 'arsip_' . time();
            $cf['allowed_types'] = 'zip|gif|jpg|png|jpeg|png|pdf|PDF|doc|docx|mp4|mp3|MP3';
            $this->upload->initialize($cf);
            if ($this->upload->do_upload('file_arsip') == TRUE) {
                $data = array(
                    'jumlah' => $this->input->post('jumlah'),
                    'id_satuan' => $this->input->post('id_satuan'),
                    'id_jenis' => $this->input->post('id_jenis', TRUE),
                    'id_pejabat' => $this->session->userdata('id_user'),
                    'nama_arsip' => $this->input->post('nama_arsip', TRUE),
                    'file_arsip' => $this->upload->file_name,
                    'lokasi' => $this->input->post('lokasi', TRUE),
                    'ket_isi' => $this->input->post('ket_isi', TRUE),
                    'tanggal' => date('Y-m-d'),
                    'permision' => $permision
                );
                //  print_r($_POST);
                $this->Arsip_model->insert($data);
                $respon = array(
                    'ket' => 1,
                    'respon' => 'data berhasil di simpan'
                );
                echo json_encode($respon);
            } else {
                $respon = array(
                    'ket' => 2,
                    'respon' => $this->upload->display_errors('<li>', '</li>')
                );
                echo json_encode($respon);
            }
        }
    }

    public function edit($id)
    {
        catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Edit arsip', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);

        $jenis = isset($_GET['jenis']) ? $_GET['jenis'] :  '';
        $jenArp = $this->db->get_where('arsip', array('id_jenis' => $jenis));
        $row = $this->Arsip_model->get_by_id($id);
        //if ($jenArp->num_rows() > 0) {

        if ($row) {
            $data = array(
                'judul' => 'Data Arsip',
                'button' => 'Update',
                'aksi' => 'edit',
                'action' => site_url('arsip/edit_data'),
                'id_arsip' => set_value('id_arsip', $row->id_arsip),
                'id_satuan' => set_value('id_arsip', $row->id_satuan),
                'jumlah' => set_value('id_arsip', $row->jumlah),
                'id_jenis' => set_value('id_jenis', $row->id_jenis),
                'nama_arsip' => set_value('nama_arsip', $row->nama_arsip),
                'file_arsip' => set_value('file_arsip', $row->file_arsip),
                'lokasi' => set_value('lokasi', $row->lokasi),
                'ket_isi' => set_value('ket_isi', $row->ket_isi),
                'tanggal' => set_value('tanggal', $row->tanggal),
                'permision' => set_value('permision', $row->permision),

            );
            $this->load->view('arsip/arsip_form', $data);
            //  } else {
            //   $this->session->set_flashdata('message', '<div class="callout callout-info fade-in">Data Tidak Di Temukan.</div>');
            // }
        } else {
            $this->session->set_flashdata('message', '<div class="callout callout-success fade-in"><i class="fa fa-check"></i>The Uri Signature Missmacth.</div>');
            //redirect(site_url('arsip'));
        }
    }

    public function edit_data()
    {

        if ($this->session->level == 'admin') {
            $permision = implode('.', $this->input->post('permision[]'));
        } else {
            $permision = "." . $this->session->level . ".";
        }


        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $respon = array(
                'ket' => 2,
                'respon' => validation_errors()
            );
            echo json_encode($respon);
        } else {
            $id_arsip = $this->input->post('id_arsip', TRUE);
            $rt = $this->db->get_where('arsip', array('id_arsip' => $id_arsip))->row_array();

            if ($_FILES['file_arsip']['name'] != '') {
                @unlink('assets/arsip/' . $rt['nama_arsip'] . '.png');

                $config['cacheable']    = true;
                $config['cachedir']     = './assets/';
                $config['errorlog']     = './assets/';
                $config['imagedir']     = './assets/qrarsip/';
                $config['quality']      = true;
                $config['size']         = '1024';
                $config['black']        = array(224, 255, 255);
                $config['white']        = array(70, 130, 180);
                $this->ciqrcode->initialize($config);

                $image_name = $this->input->post('nama_arsip') . '.png';
                $params['data'] = $this->input->post('nama_arsip');
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH . $config['imagedir'] . $image_name;
                $this->ciqrcode->generate($params);

                $cf['upload_path'] = 'assets/arsip/';
                $cf['file_name'] = 'arsip_' . time();
                $cf['allowed_types'] = 'zip|xlsx|xls|docx|ppt|jpg|png';
                $this->upload->initialize($cf);

                if ($this->upload->do_upload('file_arsip') == TRUE) {
                    @unlink('assets/arsip/' . $rt['file_arsip']);
                    $data = array(
                        'id_jenis' => $this->input->post('id_jenis'),
                        'id_pejabat' => $this->session->userdata('id_user'),
                        'jumlah' => $this->input->post('jumlah'),
                        'id_satuan' => $this->input->post('id_satuan'),
                        'nama_arsip' => $this->input->post('nama_arsip'),
                        'file_arsip' => $this->upload->file_name,
                        'lokasi' => $this->input->post('lokasi'),
                        'ket_isi' => $this->input->post('ket_isi'),
                        'tanggal' => date('Y-m-d'),
                        'permision' => $permision
                    );
                    $this->db->update('arsip', $data, array('id_arsip' => $this->input->post('id_arsip')));
                    $this->session->set_flashdata('message', '<div class="callout callout-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
                    redirect(site_url('arsip?jenis=' . $this->input->post('id_jenis')));
                } else {
                    $this->session->set_flashdata('message', $this->upload->display_errors('<div class="callout callout-success fade-in"><i class="fa fa-check"></i>', '</div>'));
                    redirect(site_url('arsip?jenis=' . $this->input->post('id_jenis')));
                }
            } else {

                @unlink('assets/arsip/' . $rt['nama_arsip'] . '.png');

                $config['cacheable']    = false;
                $config['cachedir']     = './assets/';
                $config['errorlog']     = './assets/';
                $config['imagedir']     = './assets/qrarsip';
                $config['quality']      = true;
                $config['size']         = '1024';
                $config['black']        = array(224, 255, 255);
                $config['white']        = array(70, 130, 180);

                $this->ciqrcode->initialize($config);
                $image_name = $this->input->post('nama_arsip') . '.png';
                $params['data'] = $this->input->post('nama_arsip');
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH . $config['imagedir'] . $image_name;
                $this->ciqrcode->generate($params);

                /*if the image is empty , then create qrcode */
                $data = array(
                    'id_jenis' => $this->input->post('id_jenis', TRUE),
                    'nama_arsip' => $this->input->post('nama_arsip', TRUE),
                    'id_pejabat' => $this->session->userdata('id_user'),
                    'id_satuan' => $this->input->post('id_satuan'),
                    'jumlah' => $this->input->post('jumlah'),
                    'lokasi' => $this->input->post('lokasi', TRUE),
                    'ket_isi' => $this->input->post('ket_isi', TRUE),
                    'tanggal' => date('Y-m-d'),
                    'permision' => $permision,
                );
                $this->Arsip_model->update($this->input->post('id_arsip', TRUE), $data);
                $respon = array(
                    'ket' => 1,
                    'respon' => 'data berhasil di edit'
                );
                echo json_encode($respon);
            }
        }
    }

    public function hapus()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $this->input->post('id_arsip');
            $row = $this->Arsip_model->get_by_id($id);

            @unlink('assets/arsip/' . $row->file_arsip);
            @unlink('assets/arsip/' . $row->nama_arsip . '.png');
            $this->Arsip_model->delete($id);
            //$this->session->set_flashdata('message', '<div class="callout callout-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            // redirect(site_url('arsip?jenis='.$row->id_jenis));
            //  echo $id;
            catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Menghapus data arsip', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
        } else {
            echo "{}";
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_jenis', 'Jenis', 'trim|required');
        $this->form_validation->set_rules('nama_arsip', 'nama arsip', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('id_arsip', 'id_arsip', 'trim');
        $this->form_validation->set_error_delimiters('<span>', '</span>');
    }

    function cetak($id)
    {
        $this->load->model('Instansi_model');
        $row = $this->Arsip_model->data_arsip(addslashes($id));


        if ($row->num_rows() != 1) {
            redirect(base_url('404'));
            exit();
        } else {
            $data = $row->row();
            $instansi = $this->db->get('instansi')->row();
            $x['id_arsip'] =  $data->id_arsip;
            $x['jenis_arsip'] =  $data->jenis_arsip;
            $x['logo'] =  $instansi->logo;
            $x['nama_arsip'] =  $data->nama_arsip;
            $x['file_arsip'] =  $data->file_arsip;
            $x['lokasi'] =  $data->nama_lokasi;
            $x['nama'] =  $data->nama;
            $x['ket_isi'] =  $data->ket_isi;
            $x['tanggal'] =  $data->tanggal;
            $x['judul'] = 'Detail :  Arsip - ' . $data->jenis_arsip;
            $x['nama_instansi'] = $instansi->nama_instansi;
            $x['alamat_instansi'] = $instansi->alamat_lengkap;
            $x['print'] = 'y';
            $this->load->view('arsip/arsip_read', $x);
            catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Cetak data arsip', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
        }
    }


    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "arsip.xls";
        $judul = "arsip";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Id Jenis");
        xlsWriteLabel($tablehead, $kolomhead++, "Nama Arsip");
        xlsWriteLabel($tablehead, $kolomhead++, "File Arsip");
        xlsWriteLabel($tablehead, $kolomhead++, "Lokasi");
        xlsWriteLabel($tablehead, $kolomhead++, "Ket Isi");
        xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");

        foreach ($this->Arsip_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->id_jenis);
            xlsWriteLabel($tablebody, $kolombody++, $data->nama_arsip);
            xlsWriteLabel($tablebody, $kolombody++, $data->file_arsip);
            xlsWriteLabel($tablebody, $kolombody++, $data->lokasi);
            xlsWriteLabel($tablebody, $kolombody++, $data->ket_isi);
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
        header("Content-Disposition: attachment;Filename=arsip.doc");

        $data = array(
            'arsip_data' => $this->Arsip_model->get_all(),
            'start' => 0
        );

        $this->load->view('arsip/arsip_doc', $data);
    }

    function  pengajuan_arsip($action = '', $id = '')
    {
        // if ($this->session->userdata('level') == 'admin') {
        //     redirect('akses_tidak_bisa');
        // };
        // catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Akses pengajuan arsip.', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
        $q = $this->db->get_where('pengajuan_arsip', array('id_pengajuan' => $id))->row_array();
        if ($id) {
            $x['id_pengajuan'] = $q['id_pengajuan'];
            $x['id_pejabat'] = $q['id_pejabat'];
            $x['nama_arsip'] = $q['nama_arsip'];
            $x['jumlah'] = $q['jumlah'];
            $x['satuan'] = $q['satuan'];
            $x['tanggal'] = $q['tanggal'];
            $x['tujuan'] = $q['tujuan'];
            $x['file'] = $q['file_arsip'];
        } else {
            $x['id_pengajuan'] = '';
            $x['id_pejabat'] = '';
            $x['nama_arsip'] = '';
            $x['jumlah'] = '';
            $x['satuan'] = '';
            $x['tanggal'] = '';
            $x['tujuan'] = '';
            $x['file'] = '';
        }
        if ($action == 'add') {
            // if ($this->session->level == 'admin') {
            //     $x['judul'] = 'halaman tidak boleh diakses ';
            //     $this->template->load('template', '404', $x);
            //     exit();
            // };

            if (isset($_POST['kirim'])) {
                $satuan = ($this->input->post('satuan')) ? $this->input->post('satuan') : 'kosong';
                creted_qr($this->input->post('nama_arsip'));
                $cf['upload_path'] = 'assets/arsip/';
                $cf['file_name'] = 'peng_' . time();
                $cf['allowed_types'] = 'gif|jpg|png|jpeg|PNG|pdf|PDF|doc|docx|mp4|mp3|MP3';
                $this->upload->initialize($cf);
                if ($this->upload->do_upload('file_pengajuan') == TRUE) {
                    $insert = [
                        'id_pejabat' => $this->session->id_user,
                        'id_satuan' => $this->input->post('id_satuan'),
                        'id_jenis' => $this->input->post('id_jenis'),
                        'nama_arsip' => $this->input->post('nama_arsip'),
                        'jumlah' => $this->input->post('jumlah'),
                        'satuan' => $satuan,
                        'file_arsip' => $this->upload->file_name,
                        'tanggal' => date('Y-m-d'),
                        'tujuan' => $this->input->post('tujuan'),
                    ];
                    $cek = $this->db->insert('pengajuan_arsip', $insert);
                    if ($cek) {
                        $this->session->set_flashdata('pesan', '<div class="callout callout-success"><i class="fa fa-check"></i>Data entri pegajuan arsip berhasil jika penambahan arsip, di setujui oleh bagian administrator maka data arsip akan tampil di master arsip data</div>');
                        redirect(base_url('arsip/pengajuan_arsip'));
                    } else {
                        $this->session->set_flashdata('pesan', '<div class="callout callout-danger">Data entri pegajuan arsip gagal</div>');
                        redirect(base_url('arsip/pengajuan_arsip'));
                    }
                } else {
                    $this->session->set_flashdata('pesan', $this->upload->display_errors('<div class="callout callout-danger">', '</div>'));
                    redirect(base_url('arsip/pengajuan_arsip'));
                }
            } else {
                $x['form'] = 'y';
                $x['judul'] = 'Data pegajuan arsip';
                $this->template->load('template', 'arsip/pengajuan_arsip', $x);
            }
        } elseif ($action == 'edit') {
            if (isset($_POST['kirim'])) {

                if ($_FILES['file_pengajuan']['name'] == '') {

                    $insert = [
                        'id_pejabat' => $this->session->id_user,
                        'id_jenis' => $this->input->post('id_jenis'),
                        'id_satuan' => $this->input->post('id_satuan'),
                        'nama_arsip' => $this->input->post('nama_arsip'),
                        'jumlah' => $this->input->post('jumlah'),
                        'satuan' => $this->input->post('satuan'),
                        'tanggal' => date('Y-m-d'),
                        'tujuan' => $this->input->post('tujuan'),
                    ];
                    $cek = $this->db->update('pengajuan_arsip', $insert, array('id_jenis' => $id));
                    if ($cek) {
                        redirect(base_url('arsip/pengajuan_arsip'));
                    } else {
                        $this->session->set_flashdata('pesan', '<div class="callout callout-danger">Data entri pegajuan arsip gagal');
                        redirect(base_url('arsip/pengajuan_arsip'));
                    }
                } else {
                    creted_qr($this->input->post('nama_arsip'));
                    $cf['upload_path'] = 'assets/arsip/';
                    $cf['file_name'] = 'peng_' . time();
                    $cf['allowed_types'] = 'gif|jpg|png|jpeg|PNG|pdf|PDF|doc|docx|mp4|mp3|MP3';
                    $this->upload->initialize($cf);
                    if ($this->upload->do_upload('file_pengajuan') == TRUE) {
                        $insert = [
                            'id_pejabat' => $this->session->id_user,
                            'id_jenis' => $this->input->post('id_jenis'),
                            'id_satuan' => $this->input->post('id_satuan'),
                            'nama_arsip' => $this->input->post('nama_arsip'),
                            'jumlah' => $this->input->post('jumlah'),
                            'satuan' => $this->input->post('satuan'),
                            'file_arsip' => $this->upload->file_name,
                            'tanggal' => date('Y-m-d'),
                            'tujuan' => $this->input->post('tujuan'),
                        ];
                        $cek = $this->db->update('pengajuan_arsip', $insert, array('id_jenis' => $id));
                        if ($cek) {
                            redirect(base_url('arsip/pengajuan_arsip'));
                        } else {
                            $this->session->set_flashdata('pesan', '<div class="callout callout-danger">Data entri pegajuan arsip gagal');
                            redirect(base_url('arsip/pengajuan_arsip'));
                        }
                    } else {
                        $this->session->set_flashdata('pesan', $this->upload->display_errors('<div class="callout callout-danger">', '</div>'));
                        redirect(base_url('arsip/pengajuan_arsip'));
                    }
                }
            } else {
                $x['form'] = 'y';
                $x['judul'] = 'Data pegajuan arsip';
                $this->template->load('template', 'arsip/pengajuan_arsip', $x);
            }
        } elseif ($action == 'delete') {
            if ($id == '') {
                $this->session->set_flashdata('pesan', '<div class="callout callout-danger">Error Token Missmacth</div>');
                redirect(base_url('arsip/pengajuan_arsip'));
            };
            $this->db->delete('pengajuan_arsip', array('id_pengajuan' => $id));
            if ($cek) {
                redirect(base_url('arsip/pengajuan_arsip'));
            } else {
                $this->session->set_flashdata('pesan', '<div class="callout callout-danger"><i class="fa fa-check"></i>Data berhasil di hapus</div>');
                redirect(base_url('arsip/pengajuan_arsip'));
            }
        } elseif ($action == 'detail') {
            if (empty($id)) {
                show_404();
                exit();
            };
            $cek =  $this->Arsip_model->pengajuan_arsip_id($id);
            if ($cek->num_rows() > 0) {

                $x['form'] = 'detail';
                $x['sql'] = $this->Arsip_model->pengajuan_arsip_id($id);
                $x['judul'] = 'Pegajuan Data Arsip';
                $this->template->load('template', 'arsip/pengajuan_arsip', $x);
            } else {
                show_404();
                exit();
            }
        } else {
            $x['form'] = 'n';
            $x['data'] = $this->Arsip_model->pengajuan_arsip($this->session->id_user);
            $x['judul'] = 'Pegajuan Data Arsip';
            $this->template->load('template', 'arsip/pengajuan_arsip', $x);
        }
    }


    function insert_pengajuan()
    {

        catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Menambahkan pegajuan arsip', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_pengajuan = $this->input->post('id_pengajuan');
            if (empty($id_pengajuan)) {
                echo "Pegajuan data gagal silahkan coba beberapa saat lagi..";
            } else {

                $data = $this->db->get_where('pengajuan_arsip', array('id_pengajuan' => $id_pengajuan))->row_array();
                $this->db->update('pengajuan_arsip', array('nonaktif' => 'y'), array('id_pengajuan' => $id_pengajuan));
                $id_jenis = ($data['id_jenis']) ? $data['id_jenis'] : '1';
                $file_arsip = ($data['file_arsip']) ? $data['file_arsip'] : '-';

                $config['cacheable']    = true;
                $config['cachedir']     = './assets/';
                $config['errorlog']     = './assets/';
                $config['imagedir']     = './assets/qrarsip/';
                $config['quality']      = true;
                $config['size']         = '1024';
                $config['black']        = array(224, 255, 255);
                $config['white']        = array(70, 130, 180);

                $this->ciqrcode->initialize($config);
                $image_name = $data['nama_arsip'] . '.png';
                $params['data'] = $data['nama_arsip'];
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH . $config['imagedir'] . $image_name;
                $this->ciqrcode->generate($params);

                $data = [
                    'id_jenis' => $id_jenis,
                    'id_satuan' => $data['id_satuan'],
                    'id_pejabat' => $data['id_pejabat'],
                    'nama_arsip' => $data['nama_arsip'],
                    'file_arsip' => $file_arsip,
                    'jumlah' => $data['jumlah'],
                    'tanggal' => date("Y-m-d"),
                ];
                $cara = $this->db->insert('arsip', $data);
                if ($cara) {
                    $this->session->set_flashdata("pesan", "<script>Swal('Informasi','Data pengajuan arsip berhasil di terima','success')</script>");
                } else {
                    echo "gagal";
                }
            }
        } else {
            echo "{ }";
        }
    }


    function download_file_arip($id)
    {
        if ($id) {
            $data = $this->db->get_where('arsip', array('id_arsip' => $id));
            if ($data->num_rows() > 0) {
                force_download('assets/arsip/' . $data->row()->file_arsip, NULL);
            } else {
                $this->session->set_flashdata('pesan', '<div class="callout callout-danger">Data download tidak di temukan silahkan coba kembali.</div>');
                redirect(base_url('admin/arsip'));
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="callout callout-danger">Data download tidak di temukan silahkan coba kembali.</div>');
            redirect(base_url('admin/arsip'));
        }
        catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Mendownload file arsip', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    }

    /*end bagian system information*/

    function cari_jenis_arsip()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jenis = $this->input->post('id_jenis');
            $data = $this->db->get_where('jenis_arsip', array('id_jenis' => $jenis));

            /*categori archive*/
            if ($data->num_rows() > 0) {
                $sql = $data->row_array();
                $encode = array('jenis_arsip' => $sql['jenis_arsip']);
                echo json_encode($encode);
            } else {
                echo '{"jenis_arsip":"kosong"}';
            }
        }
    }
}
