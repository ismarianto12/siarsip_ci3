<?php


class Laporan_sppd extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('Sppd_model');
        $this->load->library(['Properti', 'Datatables']);
    }

    function index()
    {
        $x = ['judul' => 'Laporan Surat Perjalana Dinas (SPPD)'];
        $this->template->load('template', 'laporan_surat/laporan_surat_sppd', $x);
    }

    function json_data()
    {
        echo $this->Sppd_model->laporan_json();
    }
}
