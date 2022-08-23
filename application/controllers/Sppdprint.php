<?php


// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

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
        sppd.id,
        sppd.pimpinan,
        sppd.letter_code,
        sppd.letter_subject,
        sppd.letter_about,
        sppd.letter_from,
        sppd.letter_content,
        sppd.letter_date,
        sppd.code,
        sppd.date,
        sppd.bawahan,
        sppd.atasan,
        sppd.rate_travel,
        sppd.pengikut_nip,
        sppd.purpose,
        sppd.transport,
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
        sppd.result_username,
        sppd.file,
        sppd.jenis_surat_id,
        sppd.file_update,
        sppd.status,
        sppd.username,
        sppd.username_update,
        sppd.datetime_insert,
        sppd.datetime_update,
        sppd.basic,
        sppd.city,
        sppd.rekening,
        sppd.kabag,
        sppd.kasubag,
        sppd.pimpinan_spt,
        sppd.kabag_spt,
        sppd.kasubag_spt,
        sppd.letter_code_spt
		
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
        $donwloadfl = 'SPPD-Cetak' . date('Ymd');
        require_once 'vendor/autoload.php';
        // var_dump($namaFile . '.doc');
        // die;

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



        $templateProcessor->setValue('nip_pimpinan', $val['nip_pimpinan']);
        $templateProcessor->setValue('tgl_surat', tgl_indonesia(date('Y-m-d')));

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


        $data = $this->db->get_where('sppd', ['id' => $id])->row_array();

        $templateProcessor->setValue('nama_pimpinan', $dpimpinan['nama']);

        $templateProcessor->setValue('id', $data['id']);
        $templateProcessor->setValue('namapimpinan', $this->properti->getField($data['pimpinan']));
        $templateProcessor->setValue('jabatanpimpinan', $this->properti->getJabatan($data['pimpinan']));
        $templateProcessor->setValue('nippimpinan', $data['pimpinan']);
        //   nip_pimpinan 
        $templateProcessor->setValue('letter_code', $data['letter_code']);
        $templateProcessor->setValue('letter_subject', $data['letter_subject']);
        $templateProcessor->setValue('letter_about', $data['letter_about']);
        $templateProcessor->setValue('letter_from', $data['letter_from']);
        $templateProcessor->setValue('letter_content', $data['letter_content']);
        $templateProcessor->setValue('letter_date', $data['letter_date']);
        $templateProcessor->setValue('code', $data['code']);
        $templateProcessor->setValue('date', $data['date']);
        $templateProcessor->setValue('bawahan', $this->properti->getField($data['bawahan']));

        $templateProcessor->setValue('nip_bawahan', $data['bawahan']);

        $templateProcessor->setValue('atasan', $this->properti->getField($data['atasan']));
        $templateProcessor->setValue('atasan', $this->properti->getField($data['atasan']));


        $templateProcessor->setValue('rate_travel', $data['rate_travel']);
        $templateProcessor->setValue('pengikut_nip', $this->properti->get_pengikut($data['pengikut_nip']));
        $templateProcessor->setValue('purpose', $data['purpose']);
        $templateProcessor->setValue('transport', $data['transport']);
        $templateProcessor->setValue('place_from', $data['place_from']);
        $templateProcessor->setValue('place_to', $data['place_to']);
        $templateProcessor->setValue('length_journey', $data['length_journey']);
        $templateProcessor->setValue('date_go', $data['date_go']);
        $templateProcessor->setValue('date_back', $data['date_back']);
        $templateProcessor->setValue('government', $data['government']);
        $templateProcessor->setValue('budget', $data['budget']);
        $templateProcessor->setValue('budget_from', $data['budget_from']);
        $templateProcessor->setValue('description', $data['description']);
        $templateProcessor->setValue('result_date', $data['result_date']);
        $templateProcessor->setValue('result', $data['result']);
        $templateProcessor->setValue('result_username', $data['result_username']);
        $templateProcessor->setValue('file', $data['file']);
        $templateProcessor->setValue('jenis_surat_id', $data['jenis_surat_id']);
        $templateProcessor->setValue('file_update', $data['file_update']);
        $templateProcessor->setValue('status', $data['status']);
        $templateProcessor->setValue('username', $data['username']);
        $templateProcessor->setValue('username_update', $data['username_update']);
        $templateProcessor->setValue('datetime_insert', $data['datetime_insert']);
        $templateProcessor->setValue('datetime_update', $data['datetime_update']);
        $templateProcessor->setValue('basic', $data['basic']);
        $templateProcessor->setValue('city', $data['city']);
        $templateProcessor->setValue('rekening', $data['rekening']);
        $templateProcessor->setValue('kabag', $data['kabag']);
        $templateProcessor->setValue('kasubag', $data['kasubag']);
        $templateProcessor->setValue('pimpinan_spt', $data['pimpinan_spt']);
        $templateProcessor->setValue('kabag_spt', $data['kabag_spt']);
        $templateProcessor->setValue('kasubag_spt', $data['kasubag_spt']);
        $templateProcessor->setValue('letter_code_spt', $data['letter_code_spt']);


        // var_dump($data);
        // die;

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
        $donwloadfl = 'SPT-Cetak' . date('Ymd');
        require_once 'vendor/autoload.php';
        // var_dump($namaFile . '.doc');
        // die;

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('assets/template/doc/SPT_OUTIN.docx');

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



        $templateProcessor->setValue('nip_pimpinan', $val['nip_pimpinan']);
        $templateProcessor->setValue('tgl_surat', tgl_indonesia(date('Y-m-d')));

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


        $data = $this->db->get_where('sppd', ['id' => $id])->row_array();

        $templateProcessor->setValue('nama_pimpinan', $dpimpinan['nama']);

        $templateProcessor->setValue('id', $data['id']);
        $templateProcessor->setValue('namapimpinan', $this->properti->getField($data['pimpinan']));
        $templateProcessor->setValue('jabatanpimpinan', $this->properti->getJabatan($data['pimpinan']));
        $templateProcessor->setValue('nippimpinan', $data['pimpinan']);
        //   nip_pimpinan 
        $templateProcessor->setValue('letter_code', $data['letter_code']);
        $templateProcessor->setValue('letter_subject', $data['letter_subject']);
        $templateProcessor->setValue('letter_about', $data['letter_about']);
        $templateProcessor->setValue('letter_from', $data['letter_from']);
        $templateProcessor->setValue('letter_content', $data['letter_content']);
        $templateProcessor->setValue('letter_date', $data['letter_date']);
        $templateProcessor->setValue('code', $data['code']);
        $templateProcessor->setValue('date', $data['date']);
        $templateProcessor->setValue('bawahan', $this->properti->getField($data['bawahan']));

        $templateProcessor->setValue('nip_bawahan', $data['bawahan']);

        $templateProcessor->setValue('atasan', $this->properti->getField($data['atasan']));
        $templateProcessor->setValue('atasan', $this->properti->getField($data['atasan']));


        $templateProcessor->setValue('rate_travel', $data['rate_travel']);
        $templateProcessor->setValue('pengikut_nip', $this->properti->get_pengikut($data['pengikut_nip']));
        $templateProcessor->setValue('purpose', $data['purpose']);
        $templateProcessor->setValue('transport', $data['transport']);
        $templateProcessor->setValue('place_from', $data['place_from']);
        $templateProcessor->setValue('place_to', $data['place_to']);
        $templateProcessor->setValue('length_journey', $data['length_journey']);
        $templateProcessor->setValue('date_go', $data['date_go']);
        $templateProcessor->setValue('date_back', $data['date_back']);
        $templateProcessor->setValue('government', $data['government']);
        $templateProcessor->setValue('budget', $data['budget']);
        $templateProcessor->setValue('budget_from', $data['budget_from']);
        $templateProcessor->setValue('description', $data['description']);
        $templateProcessor->setValue('result_date', $data['result_date']);
        $templateProcessor->setValue('result', $data['result']);
        $templateProcessor->setValue('result_username', $data['result_username']);
        $templateProcessor->setValue('file', $data['file']);
        $templateProcessor->setValue('jenis_surat_id', $data['jenis_surat_id']);
        $templateProcessor->setValue('file_update', $data['file_update']);
        $templateProcessor->setValue('status', $data['status']);
        $templateProcessor->setValue('username', $data['username']);
        $templateProcessor->setValue('username_update', $data['username_update']);
        $templateProcessor->setValue('datetime_insert', $data['datetime_insert']);
        $templateProcessor->setValue('datetime_update', $data['datetime_update']);
        $templateProcessor->setValue('basic', $data['basic']);
        $templateProcessor->setValue('city', $data['city']);
        $templateProcessor->setValue('rekening', $data['rekening']);
        $templateProcessor->setValue('kabag', $data['kabag']);
        $templateProcessor->setValue('kasubag', $data['kasubag']);
        $templateProcessor->setValue('pimpinan_spt', $data['pimpinan_spt']);
        $templateProcessor->setValue('kabag_spt', $data['kabag_spt']);
        $templateProcessor->setValue('kasubag_spt', $data['kasubag_spt']);
        $templateProcessor->setValue('letter_code_spt', $data['letter_code_spt']);


        // var_dump($data);
        // die;

        header("Content-Disposition: attachment; filename=$donwloadfl.docx");

        $templateProcessor->saveAs('php://output');
    }
    // action print
    public function printdata($id = '', $jenis_spt = '', $jen = '')
    {

        // if($)

        // var_dump($id = '', $jenis_spt = '', $jen = '');
        if ($id != '' and $jenis_spt != '' and $jen != '') {

            $arr = [
                'luarkota' => ['file' => 'walikota/SPT_OUTIN', 'params' => 'spt'],
                'dalamkota' => ['file' => 'walikota/SPPD_OUTIN', 'params' => 'sppd'],

            ];
            // var_dump($arr[$jenis_spt]['file']);
            // var_dump($arr[$jenis_spt]['params']);
            // exit;
            $jenis = $arr[$jenis_spt]['params'];
            $namaFile = $arr[$jenis_spt]['file'];

            if ($jen == 'sppd') {
                $this->printsppd($id, 'SPPD_OUTIN');
            } else if ($jen == 'spt') {
                $this->printspt($id, 'SPT_OUTIN');
            } else {
                echo  json_encode([
                    'status' => 'parmeter mismatch'
                ]);
            }
        } else {
            echo  json_encode([
                'status' => 'parmeter mismatch'
            ]);
        }
    }

    function download()
    {
        $file = isset($_GET['file']) ? $_GET['file'] : '';
        // if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
        // }
    }
}
