<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  function __construct(){
    parent::__construct();
    if ($this->session->userdata('id_user') != '' OR $this->session->userdata('Login') == TRUE) {
      redirect(base_url('dasboard?login=true')); 
      exit();
    };     
  }
  public function index()
  {
   $x['judul'] = 'Login Akses Sistem';	
   $this->load->view('Login',$x);	 
 }


 function login(){
  if ($this->input->post('username') == '' OR $this->input->post('username') == '') {
    redirect(base_url('?login=false'));
  }else{
   $username = $this->input->post('username'); 
   $password = $this->input->post('password');

   $cek = $this->db->limit(1)->get_where('login',array('username'=>$username,'password'=>md5($password)));

   if ($cek->num_rows() > 0) {
    $session = [ 
      'username'=>$cek->row()->username,
      'password'=>$cek->row()->password,
      'nama'=>$cek->row()->nama,
      'id_user'=>$cek->row()->id_user,
      'level'=>$cek->row()->level,
      'login'=>TRUE,
    ];
    $this->session->set_userdata($session);
    echo "y";
  }else{
    echo "n";
  }
}

}


function mac()
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
