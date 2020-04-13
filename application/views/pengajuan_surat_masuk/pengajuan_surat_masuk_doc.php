 
    <body>
        <h2>Pengajuan_surat_masuk List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>No Agenda</th>
		<th>Jenis Surat</th>
		<th>Tanggal Kirim</th>
		<th>Tanggal Terima</th>
		<th>No Surat</th>
		<th>Pengirim</th>
		<th>Perihal</th>
		<th>Nama File</th>
		
            </tr><?php
            foreach ($pengajuan_surat_masuk_data as $pengajuan_surat_masuk)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pengajuan_surat_masuk->no_agenda ?></td>
		      <td><?php echo $pengajuan_surat_masuk->jenis_surat ?></td>
		      <td><?php echo $pengajuan_surat_masuk->tanggal_kirim ?></td>
		      <td><?php echo $pengajuan_surat_masuk->tanggal_terima ?></td>
		      <td><?php echo $pengajuan_surat_masuk->no_surat ?></td>
		      <td><?php echo $pengajuan_surat_masuk->pengirim ?></td>
		      <td><?php echo $pengajuan_surat_masuk->perihal ?></td>
		      <td><?php echo $pengajuan_surat_masuk->nama_file ?></td>	
                </tr>
                <?php
            }
            ?>
        