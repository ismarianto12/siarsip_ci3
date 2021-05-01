<?php if ($print == 'y') :
	echo ' 
<script>window.print()</script>
<center><link href="' . base_url() . 'assets/css/bootstrap.min.css" rel="stylesheet" />';
	echo "<img src=" . base_url('/assets/img/' . identitas('logo')) . " style='display: block;
    max-width: 100%;
    height: auto;
    max-width: 300px;'><br />";
	echo '<tt><h3>' . $nama_instansi . '</h3></tt>';
	'<br />' . $alamat_instansi . '<br  /><br  /> </center>';

else : endif; ?>

<style type="text/css">
	th {
		text-align: right;
	}
</style>

<div class='col-lg-12'>
	<div class='widget'>

		<div class='widget-body'>
			<div class='form-title'>
				<h4><?= ucfirst($judul) ?> </h4>
			</div>
			<table class="table table-striped" style="align-content: right">
				<tr>
					<th><img src="<?= base_url('assets/img/' . $nama_arsip . '.png') ?>" class="img-responsive" onError="this.onerror=null;this.src='<?= base_url('assets/img/bing.png') ?>';" style="width: 100px;height: 100px"></th>
				</tr>
				<tr>
					<th>Jenis Arsip</th>
					<td><?php echo $jenis_arsip; ?></td>
				</tr>
				<tr>
					<th>Nama Arsip</th>
					<td><?php echo $nama_arsip; ?></td>
				</tr>
				<tr>
					<th>File Arsip</th>
					<td><?php echo $file_arsip; ?></td>
				</tr>
				<tr>
					<th>Jumlah File Arsip</th>
					<td><?php echo count($file_arsip); ?></td>
				</tr>
				<tr>
					<th>Jenis File Arsip</th>
					<td><?php echo substr($file_arsip, -4); ?></td>
				</tr>
				<tr>
					<th>Lokasi / Tempat</th>
					<td><?php echo $lokasi; ?></td>
				</tr>
				<tr>
					<th>Ket Isi</th>
					<td><?php echo $ket_isi; ?></td>
				</tr>
				<tr>
					<th>Tanggal</th>
					<td><?= tgl_indonesia($tanggal); ?></td>
				</tr>
				<tr>
					<th>Pejabat Pembuat Arsip</th>
					<td><?= $Nm = ($nama) ? $nama : 'Tidak ada nama'; ?></td>
				</tr>
				<?php if ($print == 'y') : ?>

				<?php else : ?>
					<tr>
						<th><a href="<?= base_url('arsip/cetak/' . $id_arsip) ?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i> Cetak Data</a></th>
						<td><a href="<?php echo site_url('arsip') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td>
					</tr>
				<?php endif; ?>

			</table>
		</div>
	</div>
</div>