 
    <body>
        <h2>Tmjabatan List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Title</th>
		<th>Description</th>
		<th>Stat</th>
		<th>OtherString</th>
		
            </tr><?php
            foreach ($tmjabatan_data as $tmjabatan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tmjabatan->Title ?></td>
		      <td><?php echo $tmjabatan->Description ?></td>
		      <td><?php echo $tmjabatan->Stat ?></td>
		      <td><?php echo $tmjabatan->OtherString ?></td>	
                </tr>
                <?php
            }
            ?>
        