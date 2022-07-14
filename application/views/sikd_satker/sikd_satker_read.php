 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
         <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
   <div class='table-responsive'>  
        
        <table class="table">
	    <tr><td>Sikd Satker Type</td><td><?php echo $sikd_satker_type; ?></td></tr>
	    <tr><td>Sikd Satker Id</td><td><?php echo $sikd_satker_id; ?></td></tr>
	    <tr><td>Kode</td><td><?php echo $kode; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Singkatan</td><td><?php echo $singkatan; ?></td></tr>
	    <tr><td>Sikd Bidang Id</td><td><?php echo $sikd_bidang_id; ?></td></tr>
	    <tr><td>Kd Bidang Induk</td><td><?php echo $kd_bidang_induk; ?></td></tr>
	    <tr><td>Rek Konsolidasi Id</td><td><?php echo $rek_konsolidasi_id; ?></td></tr>
	    <tr><td>Nip Ka Satker</td><td><?php echo $nip_ka_satker; ?></td></tr>
	    <tr><td>Nm Ka Satker</td><td><?php echo $nm_ka_satker; ?></td></tr>
	    <tr><td>Jab Ka Satker</td><td><?php echo $jab_ka_satker; ?></td></tr>
	    <tr><td>Klasifikasi</td><td><?php echo $klasifikasi; ?></td></tr>
	    <tr><td>Satker Pendapatan</td><td><?php echo $satker_pendapatan; ?></td></tr>
	    <tr><td>Sotk Lama</td><td><?php echo $sotk_lama; ?></td></tr>
	    <tr><td>Npwp Satker</td><td><?php echo $npwp_satker; ?></td></tr>
	    <tr><td>Kd Skpd Bmd</td><td><?php echo $kd_skpd_bmd; ?></td></tr>
	    <tr><td>Created By</td><td><?php echo $created_by; ?></td></tr>
	    <tr><td>Creation Date</td><td><?php echo $creation_date; ?></td></tr>
	    <tr><td>Last Updated By</td><td><?php echo $last_updated_by; ?></td></tr>
	    <tr><td>Last Updated Date</td><td><?php echo $last_updated_date; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('sikd_satker') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>
</div>