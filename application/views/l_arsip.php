 

<?= $this->session->flashdata('message') ?>
<br /><br />
<div class='row' style="background: #fff">
    <div class='col-xs-12 col-md-12'>
     <div class='widget'>
        <div class='widget-header'>

         
        </div> 
       
            <div class="col-md-5">
            	<form action="" method="POST"> 
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dari</label>
                        <div class="col-sm-10"> 
                            <input type="text" id="datepicker1" name="dari" class="form-control" required="" <?php if($this->input->post('dari') !='') echo 'value="'.$this->input->post('dari').'"'; ?>> 
                            <br />
                        </div> 
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Sampai</label>
                        <div class="col-sm-10"> 
                            <input type="text" id='datepicker2' name="sampai" class="form-control" required="" <?php if($this->input->post('sampai') !='') echo 'value="'.$this->input->post('sampai').'"'; ?>>
                        </div> 
                    </div> 
            		
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Arsip * )</label>
                        <div class="col-sm-10"> 
                            <br />
                            <select class="form-control" name="id_jenis">
                           <?php foreach($jenis_arsip->result_array() as $jenis): ?>
                              <option value="<?= $jenis['id_jenis'] ?>" <?php if($jenis['id_jenis'] == $this->input->post('id_jenis')){ echo 'selected'; } ?>><?= $jenis['jenis_arsip'] ?></option>
                           <?php endforeach; ?>   
                         </select>
                        </div>
                       
                    </div> 
                    <br  /><br  />
                    <div class="form-group"> 
            			 <div class="col-md-12"  style="margin-top: 20px">   
                             <button name="kirim" type="submit" class="btn bg-green btn-flat margin"><i class="fa fa-search"></i>Cari Data</button>
                             <button class="btn btn-warning" type="reset"><i class="fa fa-expand"></i>Batal</button> 
            		</div>
                    </div>
             	</form>

        </div>
        
    <br  /><br  />
    <br /><br /><br />

        <?php 
        if (isset($_POST['kirim'])) { 

           if($data->num_rows() > 0):

            ?>

        	<a href="<?= base_url('laporan_arsip/excel/'.$this->input->post('dari').'/'.$this->input->post('sampai').'/'.$this->input->post('id_jenis')) ?>" target="_blank" class="btn btn-danger"><i class="fa fa-print"></i>Cetak Excel</a> 
        	<a href="<?= base_url('laporan_arsip/pdf/'.$this->input->post('dari').'/'.$this->input->post('sampai').'/'.$this->input->post('id_jenis')) ?>" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i>Cetak PDF</a>
   <br /><br />
          <table class="table" id="datatables">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Jenis Arsip</th>
                    <th>Nama Arsip</th>
                    <th>File Arsip</th>
                    <th>Jumlah Arsip</th>
                    <th>Satuan Arsip</th>
                    <th>Lokasi</th>
                    <th>Ket Isi</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($data->result_array() as $dt): ?>   
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $dt['jenis_arsip'] ?></td>
                    <td><?= $dt['nama_arsip'] ?></td>
                    <td><a href="<?= base_url('assets/arsip/'.$dt['file_arsip']) ?>" class="btn bg-navy btn-flat margin btn-xs"><?= $dt['file_arsip'] ?></a></td>
                    <td><?= $dt['jumlah'] ?></td>
                    <td><?= $dt['nama_satuan'] ?></td>
                    <td><?= $dt['nama_lokasi'] ?></td>
                    <td><?= $dt['ket_isi'] ?></td>
                    <td><?= tgl_indonesia($dt['tanggal']) ?></td>
                 </tr>

                    <?php $no++; endforeach;
                 

                ?>    
            </tbody>

        </table>

    <?php
else:
    echo '<br /><br />   <div class="callout callout-danger">Maaf saat ini data tidak tersedia</div>'; 
endif;

    }

 
    ?>

        <script type="text/javascript"> 
           $(document).ready(function() {
                $("#datatables").dataTable();
                $( "#datepicker1" ).datepicker({

                  dateFormat:'yy-mm-dd',
                  changeMonth: true,
                  changeYear: true

                });
                $( "#datepicker2" ).datepicker({
                 dateFormat:'yy-mm-dd',
                 changeMonth: true,
                 changeYear: true
               });

           })
 
    </script>

</div>
</div>
</div>



 