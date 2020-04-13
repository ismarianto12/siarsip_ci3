<?php 

Class Notifikasi_surat_model extends CI_model{

	function jumlah_surat_masuk(){
		$this->db->select('id_suratmasuk as j_surat_masuk,id_user');
		$this->db->from('tsuratmasuk');
		$this->db->where('disposisi','n');
		if ($this->session->level !='admin') { 
			$this->db->where('id_user',$this->session->id_user);		
		}
		return $this->db->get()->num_rows();
	}

	function jumlah_surat_keluar(){
		$this->db->select('id_agenda as j_surat_keluar,id_user');
		$this->db->from('tsuratkeluar');
		$this->db->where('disposisi','n');
		if ($this->session->level !='admin') { 
			$this->db->where('id_user',$this->session->id_user);		
		}
		return  $this->db->get()->num_rows();
	} 

	/*list notifikasi */

	function l_surat_masuk(){
		$this->db->select('*');
		$this->db->from('tsuratmasuk');
		if ($this->session->level != 'admin') { 
			$this->db->where('id_user',$this->session->id_user);		
		}
		$this->db->where('disposisi','n');
		return $this->db->get();

	}

	function l_surat_keluar(){
		$this->db->select('*');
		$this->db->from('tsuratkeluar');
		if ($this->session->level !='admin') { 
			$this->db->where('id_user',$this->session->id_user);		
		}
		$this->db->where('disposisi','n');
		return $this->db->get();
	}



}