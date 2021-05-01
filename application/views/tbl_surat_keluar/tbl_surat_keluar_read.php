<div class='container'>

	<div class='col-sm-8'>
		<?= $this->session->userdata('message') ?>
		<div class='white-box'>
			<h3 class='box-title m-b-0'><i class="fa fa-list"></i> <?= ucfirst($judul) ?></h3>
			<div class='table-responsive'>

				<table class="table table-striped">
					<tr>
						<td>Tujuan</td>
						<td><?php echo $tujuan; ?></td>
					</tr>
					<tr>
						<td>No Surat</td>
						<td><?php echo $no_surat; ?></td>
					</tr>
					<tr>
						<td>Isi</td>
						<td><?php echo $isi; ?></td>
					</tr>
					<tr>
						<td>Kode</td>
						<td><?php echo $kode; ?></td>
					</tr>
					<tr>
						<td>Tgl Surat</td>
						<td><?php echo $tgl_surat; ?></td>
					</tr>
					<tr>
						<td>Tgl Catat</td>
						<td><?php echo $tgl_catat; ?></td>
					</tr>
					<tr>
						<td>File Surat</td>
						<td><a class="btn bg-green btn-flat margin" href="<?= base_url('asset/file_surat' . $file); ?>" target="_blank"><i class="fa fa-download"></i> Lihat file</a></td>
					</tr>
					<tr>
						<td>Keterangan</td>
						<td><?php echo $keterangan; ?></td>
					</tr>
					<tr>
						<td>User</td>
						<td><?php echo $username; ?></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="<?php echo site_url('tbl_surat_keluar') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>