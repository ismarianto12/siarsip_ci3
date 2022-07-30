<?php
require_once 'vendor/autoload.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tdisposisi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        $this->load->model('Tdisposisi_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $x['judul'] = 'Data Master Disposisi';
        $this->template->load('template', 'tdisposisi/tdisposisi_list', $x);
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Tdisposisi_model->json();
    }

    public function detail($id)
    {
        $row = $this->Tdisposisi_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_disposisi' => $row->id_disposisi,
                'tujuan' => $row->tujuan,
                'isi_disposisi' => $row->isi_disposisi,
                'sifat' => $row->sifat,
                'batas_waktu' => $row->batas_waktu,
                'catatan' => $row->catatan,
                'id_surat' => $row->id_surat,
                'id_user' => $row->id_user,

                'judul' => 'Detail Disposisis Surat',
            );
            $this->template->load('template', 'tdisposisi/tbl_disposisi_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('tdisposisi'));
        }
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Tambah Tdisposisi',
            'button' => 'Create',
            'action' => site_url('tdisposisi/tambah_data'),
            'id_disposisi' => set_value('id_disposisi'),
            'tujuan' => set_value('tujuan'),
            'isi_disposisi' => set_value('isi_disposisi'),
            'sifat' => set_value('sifat'),
            'batas_waktu' => set_value('batas_waktu'),
            'catatan' => set_value('catatan'),
            'id_surat' => set_value('id_surat'),
            'id_user' => set_value('id_user'),
        );
        $this->template->load('template', 'tdisposisi/tbl_disposisi_form', $data);
    }

    public function tambah_data()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $cek = $this->db->get_where('tbl_disposisi', array('id_surat' => $this->input->post('id_surat')));
            if ($cek->num_rows() > 0) :
                $data = array(
                    'tujuan' => $this->input->post('tujuan', TRUE),
                    'isi_disposisi' => $this->input->post('isi_disposisi', TRUE),
                    'sifat' => $this->input->post('sifat', TRUE),
                    'batas_waktu' => $this->input->post('batas_waktu', TRUE),
                    'catatan' => $this->input->post('catatan', TRUE),
                    'id_surat' => $this->input->post('id_surat', TRUE),
                    'id_user' => $this->session->id_user,
                );
                $this->db->update('tbl_disposisi', $data, array('id_surat' => $this->input->post('id_surat')));
            else :
                $data = array(
                    'tujuan' => $this->input->post('tujuan', TRUE),
                    'isi_disposisi' => $this->input->post('isi_disposisi', TRUE),
                    'sifat' => $this->input->post('sifat', TRUE),
                    'batas_waktu' => $this->input->post('batas_waktu', TRUE),
                    'catatan' => $this->input->post('catatan', TRUE),
                    'id_surat' => $this->input->post('id_surat', TRUE),
                    'id_user' => $this->session->id_user,
                );
                $this->db->insert('tbl_disposisi', $data);
            endif;
            $this->db->update('tbl_surat_masuk', array('disposisi' => 'y'), array('id_surat' => $this->input->post('id_surat')));
        }
    }

    public function edit($id)
    {
        $row = $this->Tdisposisi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul' => 'Data TDISPOSISI',
                'button' => 'Update',
                'action' => site_url('tdisposisi/edit_data'),
                'id_disposisi' => set_value('id_disposisi', $row->id_disposisi),
                'tujuan' => set_value('tujuan', $row->tujuan),
                'isi_disposisi' => set_value('isi_disposisi', $row->isi_disposisi),
                'sifat' => set_value('sifat', $row->sifat),
                'batas_waktu' => set_value('batas_waktu', $row->batas_waktu),
                'catatan' => set_value('catatan', $row->catatan),
                'id_surat' => set_value('id_surat', $row->id_surat),
                'id_user' => set_value('id_user', $row->id_user),
            );
            $this->template->load('template', 'tdisposisi/tbl_disposisi_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="callout callout-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('tdisposisi'));
        }
    }

    public function edit_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_disposisi', TRUE));
        } else {
            $data = array(
                'tujuan' => $this->input->post('tujuan', TRUE),
                'isi_disposisi' => $this->input->post('isi_disposisi', TRUE),
                'sifat' => $this->input->post('sifat', TRUE),
                'batas_waktu' => $this->input->post('batas_waktu', TRUE),
                'catatan' => $this->input->post('catatan', TRUE),
                'id_surat' => $this->input->post('id_surat', TRUE),
                'id_user' => $this->input->post('id_user', TRUE),
            );

            $this->Tdisposisi_model->update($this->input->post('id_disposisi', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="callout callout-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(site_url('tdisposisi'));
        }
    }

    public function hapus($id)
    {
        $row = $this->Tdisposisi_model->get_by_id($id);

        if ($row) {
            $this->Tdisposisi_model->delete($id);
            $this->session->set_flashdata('message', '<div class="callout callout-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(site_url('tdisposisi'));
        } else {
            $this->session->set_flashdata('message', '<div class="callout callout-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(site_url('tdisposisi'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('tujuan', 'tujuan', 'trim|required');
        $this->form_validation->set_rules('isi_disposisi', 'isi disposisi', 'trim|required');
        $this->form_validation->set_rules('sifat', 'sifat', 'trim|required');
        $this->form_validation->set_rules('batas_waktu', 'batas waktu', 'trim|required');
        $this->form_validation->set_rules('catatan', 'catatan', 'trim|required');
        $this->form_validation->set_rules('id_surat', 'id surat', 'trim|required');
        $this->form_validation->set_rules('id_user', 'id user', 'trim|required');

        $this->form_validation->set_rules('id_disposisi', 'id_disposisi', 'trim');
        $this->form_validation->set_error_delimiters('<span>', '</span>');
    }

    private function qrcode()
    {
        $config['cacheable']    = true;
        $config['cachedir']     = './assets/';
        $config['errorlog']     = './assets/';
        $config['imagedir']     = './assets/qr_disposisi/';
        $config['quality']      = true;
        $config['size']         = '1024';
        $config['black']        = array(224, 255, 255);
        $config['white']        = array(70, 130, 180);
        $this->ciqrcode->initialize($config);

        $image_name = strtolower(str_replace('-', ' ', identitas('nama_pejabat'))) . '.png';
        $params['data'] = strtolower(identitas('nama_pejabat'));
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH . $config['imagedir'] . $image_name;
        $gambar = $this->ciqrcode->generate($params);
        /*end*/
        return $gambar;
    }

    /*cetak lembar dispposisi*/
    function cetak_lembar_disposisi($id)
    {
        if ($id != '') :
            $data_db = $this->Tdisposisi_model->lembar_disposisi($id);
            if ($data_db->num_rows() > 0) {

                // var_dump($data_db->result_array());
                // die;
                $mpdf = new \Mpdf\Mpdf();

                $mpdf->SetTitle('Cetak Lembar disposisi Surat ' . $data_db->row()->no_agenda);

                $x = array(
                    'judul' => 'Cetak data disposisi surat',
                    'qrcode' => $this->qrcode(),
                    'data' => $data_db->row()
                );
                $render =  $this->load->view('disposisi/disposisi', $x, true);

                $mpdf->WriteHTML($render);
                $mpdf->Output();
            } else {
                // redirect(base_url('tsuratmasuk'));
            }
        else :
        endif;
    }
}
