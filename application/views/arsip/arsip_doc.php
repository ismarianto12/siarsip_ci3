 
<body>

	<style>
		table,font { font-family:'Calibri'; line-height:100%; }
		.header,ttl{ font-family:'Calibri'; font-size:14px; line-height:90%; }
		.garis {height:0px; line-height:0px;}
		.text{
			mso-number-format:"\@";/*force text*/
		}
	</style>

	<h2>Arsip List</h2>
     <table class=bsc cellpadding="0" cellspacing="0" border="1"> 
		<tr>
			<th>No</th>
			<th>Id Jenis</th>
			<th>Nama Arsip</th>
			<th>File Arsip</th>
			<th>Lokasi</th>
			<th>Ket Isi</th>
			<th>Tanggal</th>

			</tr><?php
			foreach ($arsip_data as $arsip)
			{
				?>
				<tr>
					<td><?php echo ++$start ?></td>
					<td><?php echo $arsip->id_jenis ?></td>
					<td><?php echo $arsip->nama_arsip ?></td>
					<td><?php echo $arsip->file_arsip ?></td>
					<td><?php echo $arsip->lokasi ?></td>
					<td><?php echo $arsip->ket_isi ?></td>
					<td><?php echo $arsip->tanggal ?></td>	
				</tr>
				<?php
			}
			?>
