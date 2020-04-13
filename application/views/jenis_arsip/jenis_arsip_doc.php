 
    <body>
        <h2>Jenis_arsip List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Jenis Arsip</th>
		<th>Create Id</th>
		<th>Create Date</th>
		
            </tr><?php
            foreach ($jenis_arsip_data as $jenis_arsip)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $jenis_arsip->jenis_arsip ?></td>
		      <td><?php echo $jenis_arsip->create_id ?></td>
		      <td><?php echo $jenis_arsip->create_date ?></td>	
                </tr>
                <?php
            }
            ?>
        