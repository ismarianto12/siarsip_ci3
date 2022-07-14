 
    <body>
        <h2>Sikd_satker List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Sikd Satker Type</th>
		<th>Sikd Satker Id</th>
		<th>Kode</th>
		<th>Nama</th>
		<th>Singkatan</th>
		<th>Sikd Bidang Id</th>
		<th>Kd Bidang Induk</th>
		<th>Rek Konsolidasi Id</th>
		<th>Nip Ka Satker</th>
		<th>Nm Ka Satker</th>
		<th>Jab Ka Satker</th>
		<th>Klasifikasi</th>
		<th>Satker Pendapatan</th>
		<th>Sotk Lama</th>
		<th>Npwp Satker</th>
		<th>Kd Skpd Bmd</th>
		<th>Created By</th>
		<th>Creation Date</th>
		<th>Last Updated By</th>
		<th>Last Updated Date</th>
		
            </tr><?php
            foreach ($sikd_satker_data as $sikd_satker)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $sikd_satker->sikd_satker_type ?></td>
		      <td><?php echo $sikd_satker->sikd_satker_id ?></td>
		      <td><?php echo $sikd_satker->kode ?></td>
		      <td><?php echo $sikd_satker->nama ?></td>
		      <td><?php echo $sikd_satker->singkatan ?></td>
		      <td><?php echo $sikd_satker->sikd_bidang_id ?></td>
		      <td><?php echo $sikd_satker->kd_bidang_induk ?></td>
		      <td><?php echo $sikd_satker->rek_konsolidasi_id ?></td>
		      <td><?php echo $sikd_satker->nip_ka_satker ?></td>
		      <td><?php echo $sikd_satker->nm_ka_satker ?></td>
		      <td><?php echo $sikd_satker->jab_ka_satker ?></td>
		      <td><?php echo $sikd_satker->klasifikasi ?></td>
		      <td><?php echo $sikd_satker->satker_pendapatan ?></td>
		      <td><?php echo $sikd_satker->sotk_lama ?></td>
		      <td><?php echo $sikd_satker->npwp_satker ?></td>
		      <td><?php echo $sikd_satker->kd_skpd_bmd ?></td>
		      <td><?php echo $sikd_satker->created_by ?></td>
		      <td><?php echo $sikd_satker->creation_date ?></td>
		      <td><?php echo $sikd_satker->last_updated_by ?></td>
		      <td><?php echo $sikd_satker->last_updated_date ?></td>	
                </tr>
                <?php
            }
            ?>
        