 
    <body>
        <h2>Tdisposisi List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>No Disposisi</th>
		<th>No Agenda</th>
		<th>No Surat</th>
		<th>Kepada</th>
		<th>Keterangan</th>
		<th>Status Surat</th>
		<th>Tanggapan</th>
		<th>Waktu</th>
		
            </tr><?php
            foreach ($tdisposisi_data as $tdisposisi)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tdisposisi->no_disposisi ?></td>
		      <td><?php echo $tdisposisi->no_agenda ?></td>
		      <td><?php echo $tdisposisi->no_surat ?></td>
		      <td><?php echo $tdisposisi->kepada ?></td>
		      <td><?php echo $tdisposisi->keterangan ?></td>
		      <td><?php echo $tdisposisi->status_surat ?></td>
		      <td><?php echo $tdisposisi->tanggapan ?></td>
		      <td><?php echo $tdisposisi->waktu ?></td>	
                </tr>
                <?php
            }
            ?>
        