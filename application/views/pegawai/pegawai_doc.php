 
    <body>
        <h2>Pegawai List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nip</th>
		<th>Nama</th>
		<th>No Hp</th>
		<th>Alamat</th>
		<th>Tanggal Lahir</th>
		<th>Tempat Lahir</th>
		<th>Golongan</th>
		<th>Golongan Tanggal</th>
		<th>Jabatan</th>
		<th>Jabatan Tanggal</th>
		<th>Kerja Tahun</th>
		<th>Kerja Bulan</th>
		<th>Latihan Jabatan</th>
		<th>Latihan Jabatan Tanggal</th>
		<th>Latihan Jabatan Jam</th>
		<th>Pendidikan</th>
		<th>Pendidikan Lulus</th>
		<th>Pendidikan Ijazah</th>
		<th>Catatan Mutasi</th>
		<th>Keterangan</th>
		<th>Username</th>
		<th>Username Update</th>
		<th>Datetime Insert</th>
		<th>Datetime Update</th>
		<th>Status Deleted</th>
		
            </tr><?php
            foreach ($pegawai_data as $pegawai)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pegawai->nip ?></td>
		      <td><?php echo $pegawai->nama ?></td>
		      <td><?php echo $pegawai->no_hp ?></td>
		      <td><?php echo $pegawai->alamat ?></td>
		      <td><?php echo $pegawai->tanggal_lahir ?></td>
		      <td><?php echo $pegawai->tempat_lahir ?></td>
		      <td><?php echo $pegawai->golongan ?></td>
		      <td><?php echo $pegawai->golongan_tanggal ?></td>
		      <td><?php echo $pegawai->jabatan ?></td>
		      <td><?php echo $pegawai->jabatan_tanggal ?></td>
		      <td><?php echo $pegawai->kerja_tahun ?></td>
		      <td><?php echo $pegawai->kerja_bulan ?></td>
		      <td><?php echo $pegawai->latihan_jabatan ?></td>
		      <td><?php echo $pegawai->latihan_jabatan_tanggal ?></td>
		      <td><?php echo $pegawai->latihan_jabatan_jam ?></td>
		      <td><?php echo $pegawai->pendidikan ?></td>
		      <td><?php echo $pegawai->pendidikan_lulus ?></td>
		      <td><?php echo $pegawai->pendidikan_ijazah ?></td>
		      <td><?php echo $pegawai->catatan_mutasi ?></td>
		      <td><?php echo $pegawai->keterangan ?></td>
		      <td><?php echo $pegawai->username ?></td>
		      <td><?php echo $pegawai->username_update ?></td>
		      <td><?php echo $pegawai->datetime_insert ?></td>
		      <td><?php echo $pegawai->datetime_update ?></td>
		      <td><?php echo $pegawai->status_deleted ?></td>	
                </tr>
                <?php
            }
            ?>
        