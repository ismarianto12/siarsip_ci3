<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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

    }
    public function index()
    {
        if ($this->session->userdata('id_user') != '' or $this->session->userdata('Login') == true) {
            redirect(base_url('dasboard?login=true'));
            exit();
        };

        $x['judul'] = 'Login Akses Sistem';
        $this->load->view('Login', $x);
    }

    public function login()
    {

        if ($this->input->post('username') == '' or $this->input->post('username') == '') {
            redirect(base_url('?login=false'));
        } else {
            session_start();

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $cek = $this->db->limit(1)->get_where('login', array('username' => $username, 'password' => md5($password)));

            if ($cek->num_rows() > 0) {
                $session = [
                    'username' => $cek->row()->username,
                    'password' => $cek->row()->password,
                    'nama' => $cek->row()->nama,
                    'id_user' => $cek->row()->id_user,
                    'level' => $cek->row()->level,
                    'login' => true,
                ];
                $_SESSION['RF']['filemanager'] = '1';
                $_SESSION["username_rf"] = $cek->row()->username;

                $this->session->set_userdata($session);

                // setSESS
                echo "y";
            } else {
                http_response_code(500);
                echo "n";
            }
        }
    }

    public function mac()
    {
        // PHP code to get the MAC address of Client
        $MAC = exec('getmac');

        // Storing 'getmac' value in $MAC
        $MAC = strtok($MAC, ' ');

        // Updating $MAC value using strtok function,
        // strtok is used to split the string into tokens
        // split character of strtok is defined as a space
        // because getmac returns transport name after
        // MAC address
        echo "MAC address of client is: $MAC";
    }
}
