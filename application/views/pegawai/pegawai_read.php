 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
         <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
   <div class='table-responsive'>  
        
        <table class="table">
	    <tr><td>Nip</td><td><?php echo $nip; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>No Hp</td><td><?php echo $no_hp; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Tanggal Lahir</td><td><?php echo $tanggal_lahir; ?></td></tr>
	    <tr><td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td></tr>
	    <tr><td>Golongan</td><td><?php echo $golongan; ?></td></tr>
	    <tr><td>Golongan Tanggal</td><td><?php echo $golongan_tanggal; ?></td></tr>
	    <tr><td>Jabatan</td><td><?php echo $jabatan; ?></td></tr>
	    <tr><td>Jabatan Tanggal</td><td><?php echo $jabatan_tanggal; ?></td></tr>
	    <tr><td>Kerja Tahun</td><td><?php echo $kerja_tahun; ?></td></tr>
	    <tr><td>Kerja Bulan</td><td><?php echo $kerja_bulan; ?></td></tr>
	    <tr><td>Latihan Jabatan</td><td><?php echo $latihan_jabatan; ?></td></tr>
	    <tr><td>Latihan Jabatan Tanggal</td><td><?php echo $latihan_jabatan_tanggal; ?></td></tr>
	    <tr><td>Latihan Jabatan Jam</td><td><?php echo $latihan_jabatan_jam; ?></td></tr>
	    <tr><td>Pendidikan</td><td><?php echo $pendidikan; ?></td></tr>
	    <tr><td>Pendidikan Lulus</td><td><?php echo $pendidikan_lulus; ?></td></tr>
	    <tr><td>Pendidikan Ijazah</td><td><?php echo $pendidikan_ijazah; ?></td></tr>
	    <tr><td>Catatan Mutasi</td><td><?php echo $catatan_mutasi; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $keterangan; ?></td></tr>
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Username Update</td><td><?php echo $username_update; ?></td></tr>
	    <tr><td>Datetime Insert</td><td><?php echo $datetime_insert; ?></td></tr>
	    <tr><td>Datetime Update</td><td><?php echo $datetime_update; ?></td></tr>
	    <tr><td>Status Deleted</td><td><?php echo $status_deleted; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pegawai') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>
</div>