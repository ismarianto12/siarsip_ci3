 <body>
     <h2>Lokasi List</h2>
     <table class="word-table" style="margin-bottom: 10px">
         <tr>
             <th>No</th>
             <th>Nama Lokasi</th>
             <th>Tanggal</th>

         </tr><?php
                foreach ($lokasi_data as $lokasi) {
                ?>
             <tr>
                 <td><?php echo ++$start ?></td>
                 <td><?php echo $lokasi->nama_lokasi ?></td>
                 <td><?php echo $lokasi->tanggal ?></td>
             </tr>
         <?php
                }
            ?>