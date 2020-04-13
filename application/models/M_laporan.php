<?php 

/**
 * 
 */
class M_laporan extends CI_model
{
	function arsip($dari,$sampai,$jenis=''){ 
     $this->db->select('
		b.jenis_arsip,
		b.id_jenis,

		a.id_arsip,
		a.id_satuan,
		a.id_jenis,
		a.file_arsip,
		a.nama_arsip,
		a.file_arsip,
		a.lokasi,
		a.ket_isi,
		a.jumlah,
		a.tanggal,

		c.id_lokasi,
		c.nama_lokasi,

		d.id_user,
		d.username,
		d.password,
		d.nama,
		d.level,
		d.foto,
		d.email,

		e.id_satuan,
		e.nama_satuan,
		e.keterangan

		'); 

	$this->db->from('arsip a');
	$this->db->join('jenis_arsip b', 'b.id_jenis = a.id_jenis','left');
	$this->db->join('lokasi c', 'a.lokasi = c.id_lokasi','left');
	$this->db->join('login d', 'd.id_user = a.id_pejabat','left');
	$this->db->join('m_satuan e', 'e.id_satuan = a.id_satuan','left');
	if ($this->session->level !='admin') {
	  $this->db->where('a.id_pejabat',$this->session->id_user);
	}
    if ($jenis == '') {
    }else{
      $this->db->where('a.id_jenis',$this->input->post('id_jenis'));
    }   
	$this->db->where('a.tanggal between "'.$dari.'" AND "'.$sampai.'" '); 
	return $this->db->get(); 
  } 
}