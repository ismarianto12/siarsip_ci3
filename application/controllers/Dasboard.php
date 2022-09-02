<?php

/*developed by ismarianto putra
you can visit my site in ismarianto.com
for more complain anda more information.
 */
class Dasboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
            header('Access-Control-Allow-Headers: token, Content-Type');
            header('Access-Control-Max-Age: 1728000');
            header('Content-Length: 0');
            header('Content-Type: text/plain');
            die();
        }
        login_access();

        // hak_akses();
        $this->load->model('Dasboard_model');
    }

    private function session_id()
    {
        return $this->session->userdata('id_user');
    }

    public function index()
    {
        catat_log($this->session->id_user, $_SERVER['REQUEST_URI'], 'Akses dasboard web', $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
        /*indeks untuk jumlah dasboard*/
        $x['jum_arsip'] = $this->db->get('arsip')->num_rows();
        $x['jum_disposisi'] = $this->Dasboard_model->j_surat_masuk()->num_rows();
        $x['jum_s_masuk'] = $this->db->get('tbl_surat_masuk')->num_rows();
        $x['jum_s_keluar'] = $this->db->get('tbl_surat_keluar')->num_rows();
        /*end */
        /*data surata masuk graph*/
        $x['grap_surat_masuk'] = $this->Dasboard_model->grap_surat_masuk();
        $x['grap_surat_keluar'] = $this->Dasboard_model->grap_surat_keluar();
        $x['grap_arsip'] = $this->Dasboard_model->grap_arsip();
        /*end tsurat masuk graph*/

        $x['judul'] = 'Halaman administrator';
        $x['surat_masuk'] = $this->Dasboard_model->surat_masuk();
        $x['surat_keluar'] = $this->Dasboard_model->surat_keluar();
        $x['data'] = $this->db->get_where('login', array('id_user' => $this->session->userdata('id_user')));
        $this->template->load('template', 'dasboard/admin', $x);
    }

    public function ganti_foto($action = '')
    {
        $foto = $this->db->get_where('login', array('id_user' => $this->session->userdata('id_user')));

        if ($action == 'save') {

            $config['file_name'] = 'foto' . time();
            $config['upload_path'] = 'assets/img/foto';
            $config['allowed_types'] = 'jpg|png|png';

            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto') == true) {

                $update = ['foto' => $this->upload->file_name];
                $this->db->update('login', $update, array('id_user' => $this->session_id()));
                @unlink('assets/img/foto/' . $foto->row()->foto);
            } else {
                echo $this->upload->display_errors('<div class="callout callout-danger">', '</div>');
            }
        } else {
            $x['judul'] = "edit foto profil";
            $x['data'] = $this->db->get_where('login', array('id_user' => $this->session_id()));
            $this->template->load('template', 'dasboard/foto', $x);
        }
    }

    public function ganti_password($action = '')
    {
        if ($action == 'simpan') {
            $password = $this->input->post('password_baru');
            $data = ['password' => md5($password)];
            $this->db->update('login', $data, array('id_user' => $this->session_id()));
        } else {
            $x['data'] = $this->db->get_where('login', array('id_user' => $this->session_id()));
            $x['judul'] = "Ganti Password";
            $this->template->load('template', 'dasboard/profil', $x);
        }
    }

    public function select($level = 'admin')
    {
        $cek = $this->db->order_by('urutan')
            ->where('aktif', 'Ya')
            ->where('position', 'Bottom')
            ->where('locate("' . $level . '",level) > 0')
            ->get('menu');
        echo $cek->num_rows();
    }

    public function logout()
    {
        session_start();
        session_destroy();

        $this->session->sess_destroy();

        redirect(base_url('?log=true'));
    }

    public function page_sc()
    {
        $cari = $this->input->post('page');
        if ($cari != '') {
            redirect(base_url($cari));
            unset($cari);
        } else {
            redirect(base_url('dasboard?false=search-not-found'));
        }
    }

    public function _404()
    {
        $x['judul'] = 'Not Found';
        $this->template->load('template', 'dasboard/404', $x);
    }

    public function backup_db()
    {
        $this->load->dbutil();
        // Backup your entire database and assign it to a variable
        $backup = $this->dbutil->backup();
        // Load the file helper and write the file to your server
        $this->load->helper('file');
        write_file('/assets/backup/data' . date('y-m-d h:i:s') . 'sql.gz', $backup);
        // Load the download helper and send the file to your desktop
        $this->load->helper('download');
        force_download('mybackup.gz', $backup);
    }
}
