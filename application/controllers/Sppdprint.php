<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Sppdprint extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        $this->load->model(['Sppd_model', 'Pegawai_model']);
        $this->load->library(['form_validation', 'datatables', 'Cpdf']);
    }
    //action printdata 
    private function _datasppd($id)
    {
        return $this->db->select('
        sppd.pimpinan,
        sppd.kabag,
        sppd.kasubag, 


		sppd.id, 
		sppd.letter_code, 
		sppd.letter_subject, 
		sppd.letter_about, 
		sppd.letter_from, 
		sppd.jenis_surat_id, 
		sppd.city, 
		sppd.basic, 
		sppd.datetime_update, 
		sppd.datetime_insert, 
		sppd.username_update, 
		sppd.username, 
		sppd.`status`, 
		sppd.file_update, 
		sppd.file, 
		sppd.nip, 
		sppd.place_from, 
		sppd.place_to, 
		sppd.length_journey, 
		sppd.date_go, 
		sppd.date_back, 
		sppd.government, 
		sppd.budget, 
		sppd.budget_from, 
		sppd.description, 
		sppd.result_date, 
		sppd.result, 
		sppd.purpose, 
		sppd.transport, 
		sppd.result_username, 
		sppd.code, 
		sppd.date, 
		sppd.nip_pejabat, 
		sppd.nip_leader, 
		sppd.rate_travel, 
		sppd.letter_content, 
		sppd.letter_date, 
		jenis_surat.nama_jenis
		
		')
            ->from('sppd')
            ->join('jenis_surat', 'sppd.jenis_surat_id = jenis_surat.id_jenis')
            ->where('sppd.id', $id)
            ->get();
    }

    private function printsppd($id, $namaFile)
    {
        $data = $this->Sppd_model->cetak($id);
        $render = [
            'judul' => 'cetak data sspd',
            'sppd'  => $data->row_array(),
        ];
        $donwloadfl = 'SPPD-' . $data->row()->code;
        require_once 'vendor/autoload.php';
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('assets/template/doc/' . $namaFile . '.docx');

        // var_dump($templateProcessor);
        $no       = 1;
        $sc       = $this->properti->parsing($data->row()->nip);
        $pengikut = $this->Pegawai_model->getPengikut($sc);
        $no = 1;
        foreach ($pengikut->result_array() as $listp) {
            $replacements[] = array(
                'no' => $no,
                'nama' => $listp['nama'],
                'golongan_pengikut' => $listp['golongan_pengikut'],
                'nip' => $listp['nip'],
                'jabatan_pengikut' => $listp['jabatan'],
                'place_to' => $listp['place_to'],
                'length_journey' => $listp['length_journey'],
                'date_go' => $listp['date_go'],
                'date_back' => $listp['date_back'],
                'government' => $listp['government'],
                'description' => $listp['description']
            );
            $no++;
        }
        //the head section
        $logo = (file_exists("./assets/img/" . logo())) ? "assets/img/" . logo() : "assets/img/no_image.png";
        $templateProcessor->setImageValue('CompanyLogo', $logo);
        $templateProcessor->cloneBlock('block_name', 0, true, false, $replacements);

        $val = $this->_datasppd($id)->row_array();
        // get  nama pemberi tugas  
        $perintah  = $this->db->get_where('pegawai', ['nip' => $val['nip_pejabat']])->row_array();
        $diperintah  = $this->db->get_where('pegawai', ['nip' => $val['nip_leader']])->row_array();
        $jsurat  = $this->db->get_where('jenis_surat', ['id_jenis' => $val['jenis_surat_id']])->row_array();
        $jenissuratnya = explode('~', $jsurat['nama_jenis']);


        // var_dump($jenissuratnya);
        // exit();
        // custom value at document name
        $templateProcessor->setValue('jenis_surat', strtoupper($jenissuratnya[1]));
        $templateProcessor->setValue('letter_code', $val['letter_code']);
        $templateProcessor->setValue('basic', $val['basic']);
        $templateProcessor->setValue('date_go', tgl_indonesia($val['date_go']));
        $templateProcessor->setValue('date_back', tgl_indonesia($val['date_back']));
        $templateProcessor->setValue('nama_kota', $val['city']);

        $templateProcessor->setValue('purpose', $val['purpose']);
        $templateProcessor->setValue('date_back', tgl_indonesia($val['date_back']));
        $templateProcessor->setValue('city', $val['city']); //menyatakan dari mana surat itu di keluarkan
        $templateProcessor->setValue('basic', $val['basic']);
        $templateProcessor->setValue('letter_date', tgl_indonesia(date('Y-m-md')));
        $templateProcessor->setValue('nama_pemberi_tugas', $perintah['nama']);
        $templateProcessor->setValue('pangkat_pemberi_tugas', $perintah['jabatan']);
        $templateProcessor->setValue('nip_pemberi_tugas', $perintah['nip']);
        $templateProcessor->setValue('jabatan_pemberi_tugas',  $perintah['jabatan']);
        $templateProcessor->setValue('nama_yang_diperintah', $diperintah['nama']);
        $templateProcessor->setValue('nip_pegawai_yang_diperintah', $diperintah['nip']);
        $templateProcessor->setValue('jabatan_pegawai_yang_diperintah', $diperintah['jabatan']);
        $templateProcessor->setValue('pangkat_gol_pegawai_yang_diperintah', $diperintah['golongan']);
        $templateProcessor->setValue('kota_asal', $diperintah['place_from']);
        $templateProcessor->setValue('kota_tujuan', $diperintah['place_to']);
        $templateProcessor->setValue('transpotasi', $val['transport']);
        $templateProcessor->setValue('lama_hari', $val['length_journey']);
        $templateProcessor->setValue('tgl_perjalanan', tgl_indonesia($val['date_go']));
        $templateProcessor->setValue('purpose', $val['purpose']);
        $templateProcessor->setValue('atas_beban', $val['budget_from']);
        $templateProcessor->setValue('rekening', $val['rekening']);
        $templateProcessor->setValue('nama_penandatangan_sppd', $perintah['nama']);
        $templateProcessor->setValue('pangkat_penandatangan_sppd', $perintah['jabatan']);
        $templateProcessor->setValue('no_nip_penandatangan_sppd', $perintah['nip']);
        $templateProcessor->setValue('tgl_hari_ini', tgl_indonesia(date('Y-m-d')));
        //add line to approve that letter 
        $dpimpinan = $this->db->get_where('pegawai', [
            'nip' => $val['pimpinan']
        ])->row_array();
        $dkabag = $this->db->get_where('pegawai', [
            'nip' => $val['kabag']
        ])->row_array();
        $dkasubag = $this->db->get_where('pegawai', [
            'nip' => $val['kasubag']
        ])->row_array();
        // data spt 
        // end query 
        // data untuk sppd
        $templateProcessor->setValue('nama_pimpinan', $dpimpinan['nama']);
        $templateProcessor->setValue('nama_kabag', $dkabag['nama']);
        $templateProcessor->setValue('nama_kasubag', $dkasubag['nama']);
        $templateProcessor->setValue('pangkat_pimpinan', $dpimpinan['pangkat']);
        $templateProcessor->setValue('pangkat_kabag', $dkabag['pangkat']);
        $templateProcessor->setValue('pangkat_kasubag', $dkasubag['pangkat']);
        $templateProcessor->setValue('jabatan_pimpinan', $dpimpinan['jabatan']);
        $templateProcessor->setValue('jabatan_kabag', $dkabag['jabatan']);
        $templateProcessor->setValue('jabatan_kasubag', $dkasubag['jabatan']);
        $templateProcessor->setValue('nip_pimpinan', $dpimpinan['nip']);
        $templateProcessor->setValue('nip_kabag', $dkabag['nip']);
        $templateProcessor->setValue('nip_kasubag', $dkasubag['nip']);
        $templateProcessor->setValue('golongan_pimpinan', $dpimpinan['nip']);
        $templateProcessor->setValue('golongan_kabag', $dkabag['nip']);
        $templateProcessor->setValue('golongan_kasubag', $dkasubag['nip']);
        // end function data 
        // data untuk spt 

        //end function data 
        $sptpimpinan = $this->db->get_where('pegawai', [
            'nip' => $val['pimpinan_spt']
        ])->row_array();
        $sptkabag = $this->db->get_where('pegawai', [
            'nip' => $val['kabag_spt']
        ])->row_array();
        $sptkasubag = $this->db->get_where('pegawai', [
            'nip' => $val['kasubag_spt']
        ])->row_array();
        // exit();  

        //data untuk spt
        $templateProcessor->setValue('nama_pimpinan', $sptpimpinan['nama']);
        $templateProcessor->setValue('nama_kabag', $sptkabag['nama']);
        $templateProcessor->setValue('nama_kasubag', $sptkasubag['nama']);
        $templateProcessor->setValue('pangkat_pimpinan', $sptpimpinan['pangkat']);
        $templateProcessor->setValue('pangkat_kabag', $sptkabag['pangkat']);
        $templateProcessor->setValue('pangkat_kasubag', $sptkasubag['pangkat']);
        $templateProcessor->setValue('jabatan_pimpinan', $sptpimpinan['jabatan']);
        $templateProcessor->setValue('jabatan_kabag', $sptkabag['jabatan']);
        $templateProcessor->setValue('jabatan_kasubag', $sptkasubag['jabatan']);
        $templateProcessor->setValue('nip_pimpinan', $sptpimpinan['nip']);
        $templateProcessor->setValue('nip_kabag', $sptkabag['nip']);
        $templateProcessor->setValue('nip_kasubag', $sptkasubag['nip']);
        $templateProcessor->setValue('golongan_pimpinan', $sptpimpinan['nip']);
        $templateProcessor->setValue('golongan_kabag', $sptkabag['nip']);
        $templateProcessor->setValue('golongan_kasubag', $sptkasubag['nip']);
        //end data spt

        header("Content-Disposition: attachment; filename=$donwloadfl.docx");

        $templateProcessor->saveAs('php://output');
    }

    private function printspt($id, $namaFile)
    {

        $data = $this->Sppd_model->cetak($id);
        $render = [
            'judul' => 'cetak data sspd',
            'sppd'  => $data->row_array(),
        ];
        require_once 'vendor/autoload.php';
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('assets/template/doc/' . $namaFile . '.docx');
        $no       = 1;
        $sc       = $this->properti->parsing($data->row()->nip);
        $pengikut = $this->Pegawai_model->getPengikut($sc);

        $no = 1;


        foreach ($pengikut->result_array() as $listp) {
            $replacements[] = array(
                'no' => $no,
                'nama' => $listp['nama'],
                'golongan_pengikut' => $listp['golongan_pengikut'],
                'nip' => $listp['nip'],
                'jabatan_pengikut' => $listp['jabatan'],
                'place_to' => $listp['place_to'],
                'length_journey' => $listp['length_journey'],
                'date_go' => $listp['date_go'],
                'date_back' => $listp['date_back'],
                'government' => $listp['government'],
                'description' => $listp['description']
            );
            $no++;
        }
        //the head section
        $logo = (file_exists("./assets/img/" . logo())) ? "assets/img/" . logo() : "assets/img/no_image.png";
        $templateProcessor->setImageValue('CompanyLogo', $logo);
        $templateProcessor->cloneBlock('block_name', 0, true, false, $replacements);

        $val = $this->_datasppd($id)->row_array();
        // get  nama pemberi tugas  
        $perintah  = $this->db->get_where('pegawai', ['nip' => $val['nip_pejabat']])->row_array();
        $diperintah  = $this->db->get_where('pegawai', ['nip' => $val['nip_leader']])->row_array();
        $jsurat  = $this->db->get_where('jenis_surat', ['id_jenis' => $val['jenis_surat_id']])->row_array();
        $jenissuratnya = explode('~', $jsurat['nama_jenis']);
        // var_dump($jenissuratnya);
        // exit();
        // custom value at document name
        $templateProcessor->setValue('jenis_surat', strtoupper($jenissuratnya[1]));
        $templateProcessor->setValue('letter_code', $val['letter_code']);
        $templateProcessor->setValue('basic', $val['basic']);
        $templateProcessor->setValue('date_go', tgl_indonesia($val['date_go']));
        $templateProcessor->setValue('date_back', tgl_indonesia($val['date_back']));
        $templateProcessor->setValue('nama_kota', $val['city']);

        $templateProcessor->setValue('purpose', $val['purpose']);
        $templateProcessor->setValue('date_back', tgl_indonesia($val['date_back']));
        $templateProcessor->setValue('city', $val['city']); //menyatakan dari mana surat itu di keluarkan
        $templateProcessor->setValue('basic', $val['basic']);
        $templateProcessor->setValue('letter_date', tgl_indonesia(date('Y-m-md')));
        $templateProcessor->setValue('nama_pemberi_tugas', $perintah['nama']);
        $templateProcessor->setValue('pangkat_pemberi_tugas', $perintah['jabatan']);
        $templateProcessor->setValue('nip_pemberi_tugas', $perintah['nip']);
        $templateProcessor->setValue('jabatan_pemberi_tugas',  $perintah['jabatan']);
        $templateProcessor->setValue('nama_yang_diperintah', $diperintah['nama']);
        $templateProcessor->setValue('nip_pegawai_yang_diperintah', $diperintah['nip']);
        $templateProcessor->setValue('jabatan_pegawai_yang_diperintah', $diperintah['jabatan']);
        $templateProcessor->setValue('pangkat_gol_pegawai_yang_diperintah', $diperintah['golongan']);
        $templateProcessor->setValue('kota_asal', $diperintah['place_from']);
        $templateProcessor->setValue('kota_tujuan', $diperintah['place_to']);
        $templateProcessor->setValue('transpotasi', $val['transport']);
        $templateProcessor->setValue('lama_hari', $val['length_journey']);
        $templateProcessor->setValue('tgl_perjalanan', tgl_indonesia($val['date_go']));
        $templateProcessor->setValue('purpose', $val['purpose']);
        $templateProcessor->setValue('atas_beban', $val['budget_from']);
        $templateProcessor->setValue('rekening', $val['rekening']);
        $templateProcessor->setValue('nama_penandatangan_sppd', $perintah['nama']);
        $templateProcessor->setValue('pangkat_penandatangan_sppd', $perintah['jabatan']);
        $templateProcessor->setValue('no_nip_penandatangan_sppd', $perintah['nip']);
        $templateProcessor->setValue('tgl_hari_ini', tgl_indonesia(date('Y-m-d')));

        // add function data  more than after   
        $dpimpinan = $this->db->get_where('pegawai', [
            'nip' => $val['pimpinan']
        ])->row_array();
        $dkabag = $this->db->get_where('pegawai', [
            'nip' => $val['pimpinan']
        ])->row_array();
        $dkasubag = $this->db->get_where('pegawai', [
            'nip' => $val['pimpinan']
        ])->row_array();
        // end query 
        $templateProcessor->setValue('nama_pimpinan', $dpimpinan['nama']);
        $templateProcessor->setValue('nama_kabag', $dkabag['nama']);
        $templateProcessor->setValue('nama_kasubag', $dkasubag['nama']);

        $templateProcessor->setValue('pangkat_pimpinan', $dpimpinan['pangkat']);
        $templateProcessor->setValue('pangkat_kabag', $dkabag['pangkat']);
        $templateProcessor->setValue('pangkat_kasubag', $dkasubag['pangkat']);

        $templateProcessor->setValue('jabatan_pimpinan', $dpimpinan['jabatan']);
        $templateProcessor->setValue('jabatan_kabag', $dkabag['jabatan']);
        $templateProcessor->setValue('jabatan_kasubag', $dkasubag['jabatan']);

        $templateProcessor->setValue('nip_pimpinan', $dpimpinan['nip']);
        $templateProcessor->setValue('nip_kabag', $dkabag['nip']);
        $templateProcessor->setValue('nip_kasubag', $dkasubag['nip']);

        $templateProcessor->setValue('golongan_pimpinan', $dpimpinan['nip']);
        $templateProcessor->setValue('golongan_kabag', $dkabag['nip']);
        $templateProcessor->setValue('golongan_kasubag', $dkasubag['nip']);


        // exit(); 
        $filedownload = 'SPT' . date('Y-m-d H:i:s');
        header("Content-Disposition: attachment; filename=$filedownload.docx");

        $templateProcessor->saveAs('php://output');
    }
    // action print
    public function printdata($id, $jenis_spt, $jen)
    {
        if ($id != '' and $jenis_spt != '' and $jen != '') {

            $arr = [
                'sptwalikota' => ['file' => 'walikota/SPT_WALIKOTA', 'params' => 'spt'],
                'sppdwalikota' => ['file' => 'walikota/SPPD_WALIKOTA', 'params' => 'sppd'],
                'sppdwawako' => ['file' => 'wakilwali/SPPD_WAWAKO', 'params' => 'sppd'],
                'sptwawako' => ['file' => 'wakilwali/SPT_WAWAKO', 'params' => 'spt'],
                'sppdsekda' => ['file' => 'setda/SPPD_SETDA', 'params' => 'sppd'],
                'sptsekda' => ['file' => 'setda/SPT_SETDA', 'params' => 'spt'],
            ];
            // var_dump($arr[$jenis_spt]['file']);
            // var_dump($arr[$jenis_spt]['params']);
            // exit;
            $jenis = $arr[$jenis_spt]['params'];
            $namaFile = $arr[$jenis_spt]['file'];

            if ($jenis == 'sppd') {
                $this->printsppd($id, $namaFile);
            } else if ($jenis == 'spt') {
                $this->printspt($id, $namaFile);
            }
        }
    }
}
