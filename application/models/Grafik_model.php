<?php 

class Grafik_model extends CI_model{
    
    public $tahun_sekarang = '2019'; 
	function grafik_surat_masuk($disposisi=''){

		$this->db->select('*,date_format(tanggal_terima,"%M") as tanggal,count(tanggal_terima) as tr');
		$this->db->from('tsuratmasuk');
		$this->db->where('tanggal_terima >',$this->tahun_sekarang.'-01-01');
		$this->db->where('tanggal_terima <',$this->tahun_sekarang.'-12-31');
		
		if (empty($disposisi)) {
		}else{ 
			$this->db->where('disposisi',$disposisi); 
		}  
		if ($this->session->level != 'admin') {
  			$this->db->where('id_user',$this->session->id_user);
		}
		$this->db->group_by('tanggal_terima');
		return $this->db->get(); 
	}

	function grafik_surat_keluar($disposisi=''){

		$this->db->select('*,date_format(tanggal_kirim,"%M") as tanggal,count(tanggal_kirim) as tr');
		$this->db->from('tsuratkeluar');
		$this->db->where('tanggal_kirim >',$this->tahun_sekarang.'-01-01');
		$this->db->where('tanggal_kirim <',$this->tahun_sekarang.'-12-31');
		if (empty($disposisi)) {
		}else{ 
			$this->db->where('disposisi',$disposisi); 
		}  
		if ($this->session->level != 'admin') {
			$this->db->where('id_user',$this->session->id_user);
		}

		$this->db->group_by('tanggal_kirim');
		return $this->db->get(); 
	}   

	function grafik_surat_masuk($value='')
	{
		 
	}
 

}