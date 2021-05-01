<?php $jenis = isset($_GET['jenis']) ? $_GET['jenis'] : '';  ?>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?= $this->session->flashdata('message') ?>
<div class='row'>
    <div class='col-xs-12 col-md-12'>
       <div class='widget'>
        <div class='widget-header'>

            <div class='widget-buttons'>
                <a href='#' data-toggle='maximize'>
                    <i class='fa fa-expand'></i>
                </a>
                <a href='#' data-toggle='collapse'>
                    <i class='fa fa-minus'></i>
                </a> 
            </div>


            <?php echo anchor(site_url('arsip/tambah'), 'Tambah data arsip ', 'class="btn bg-green btn-flat margin"'); ?>&nbsp;
            <?php echo anchor(site_url('laporan_arsip'), 'Excel', 'class="btn bg-green btn-flat margin"'); ?>&nbsp;
           
        </div> 
        <div class='widget-body'>
            <div class="col-md-5">

                <select class="form-control" name="jenis_arsip">
                    <option value="">Jenis Arsip</option>
                    <?php foreach($this->db->get('jenis_arsip')->result_array() as $dr): ?>
                    <option value="<?= $dr['id_jenis'] ?>" <?php if($jenis == $dr['id_jenis']) echo 'selected'; ?>><?= $dr['jenis_arsip'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br  /><br  />
        <br />


<?php
        if ($jenis =='') {
         echo '<div class="callout callout-warning">Silahkan pilih data di combo box untuk menampilkan data</div>';
     }else{
        if ($jenis !='') {
            $nama_arsip = $this->Arsip_model->get_jenis($jenis);
            echo '<div class="callout callout-info">Jenis arsip '.ucfirst($nama_arsip).'</div>';
        };
        ?>

       <button class="btn bg-green btn-flat margin" id="cari"><i class="fa fa-save"></i>Terima pegajuan.</button>
       <br />
       <br  /><br  />
       <?= $this->session->flashdata('pesan') ?>
        <table class="table" id="datatables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Arsip</th>
                    <th>Nama Arsip</th>
                    <th>File Arsip</th>
                    <th>Jumlah Arsip</th>
                    <th>Qrcode</th>
                    <?php if($this->session->level == 'admin'): ?>
                        <th width="200px">Action</th>
                    <?php endif ?>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($data->result_array() as $dt): ?>   
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $dt['jenis_arsip'] ?></td>
                    <td><?= $dt['nama_arsip'] ?></td>
                    <td>
                     <?php if(file_exists('assets/arsip/'.$dt['file_arsip'])){  ?>

                      <?php $jenis_file = substr($dt['file_arsip'], -4);

                        if($jenis_file == '.jpg' || $jenis_file == '.png'):  ?>
                        <button href="<?= base_url('arsip/download_file_arip/'.$dt['id_arsip']) ?>" onclick="return tampil_data('<?= $dt['file_arsip'] ?>') "class="btn bg-green btn-flat margin  btn-xs"><?= $dt['file_arsip'] ?></button>
                        <?php else: ?>
                      
                       <a href="<?= base_url('arsip/download_file_arip/'.$dt['id_arsip']) ?>" target="_blank" class="btn bg-green btn-flat margin"><i class="fa fa-list"></i>Download File</a>

                         <?php endif; ?> 

                    <?php }else{  ?>
                         <button class="btn btn-danger"><i class="fa fa-danger"></i>File kosong * )</button>
                   <?php } ?>
                    </td>
                    <td><?= $dt['jumlah'] ?> / <?= $dt['nama_satuan'] ?></td>
                    
                    <td><img src="<?= base_url('assets/img/'.$dt['nama_arsip'].'.png') ?>" class="img-responsive" onError="this.onerror=null;this.src='<?= base_url('assets/img/avatars/bing.png') ?>';" style="width: 100px;height: 100px"></td>  
                    <?php if($this->session->level == 'admin'): ?>
                     <td class=" text-center">
                        <a href="<?= base_url('arsip/detail/'.$dt['id_arsip']) ?>" class="btn btn-info btn-xs edit"><i class="fa fa-book"></i>Read</a>  

                        <a href="<?= base_url('arsip/edit/'.$dt['id_arsip'].'?jenis='.$jenis) ?>" class="btn btn-success btn-xs edit"><i class="fa fa-edit"></i> Update</a>

                        <a href="#" class="btn btn-danger btn-xs delete" onclick="javasciprt: return hapus(<?= $dt['id_arsip'] ?>)"><i class="fa fa-trash"></i> Delete</a></td>
                        <?php elseif($this->session->level == 'user'): ?> 
                           
                        <?php endif; ?> 

                    </tr>

                    <?php $no++; endforeach;
                }


                ?>    
            </tbody>

        </table>
  
  <small> * ) .Jika file masih  kosong silahkan tambahkan file arsip yang akan di arsipkan , atau arsip yang diajukan sebelumnya untuk di edit kembali file di arsipkan.</small>
        <script type="text/javascript"> 
         $(document).ready(function() {
             $('select[name="jenis_arsip"]').change(function(){
                var id = $(this).val();
                window.location.href="<?= base_url('arsip?jenis=') ?>"+id;
            });       
             $("#datatables").dataTable({
               'responsive' : true,

             });
         })


         function hapus(n){
            Swal({
                title: 'Konfirmasi Hapus',
                text: 'Apakah Anda Yakin Untuk Menghapus Data Ini?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Ya',
                closeOnConfirm: false
            },
            function(){
               Swal('Hapus Data', 'Data Berhasil Di Hapus', 'success'); 
               window.location.href='<?= base_url('arsip/hapus/') ?>'+n;
           });
        }
         

        $(function(){
          $("#datatables12").dataTable();
          $('#cari').click(function(){
            $('#tampilan_cari').modal('show'); 
        });  
        });
    </script>

</div>
</div> 
<!--  -->
 

<div class="modal modal-primary" id="tampilan_cari">
    <div class="modal-dialog" style="width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Judul arsip yang di ajukan operator.</h4>
            </div>
            <div class="modal-body">
                 <table class="table" id="datatables12">
        <thead>
            <tr>
                <th>#</th>
                <th>Arsip</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Tanggal</th>
                <th>Tujuan</th>
                <th>User</th>
                <?php if($this->session->level == 'admin'): ?>
                        <th width="200px">Action</th>
                    <?php endif ?>
            </tr>
        </thead>    
        <tbody> 
        <?php $no=1;foreach($this->Arsip_model->pengajuan_arsip()->result_array() as  $dt): ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $dt['nama_arsip'] ?></td>
                <td><?= $dt['jumlah'] ?></td>
                <td><?= $dt['nama_satuan'] ?></td>
                <td><?= $dt['tanggal'] ?></td>
                <td><?= $dt['tujuan'] ?></td>
                <td><?= $dt['nama'] ?></td>
                <?php if($this->session->level == 'user'): ?>
                <?php elseif($this->session->level == 'admin'): ?>
                 <td><button id="<?= $dt['id_pengajuan'] ?>" class="terima btn btn-success">Terima</button> 
                    <a href="<?= base_url('arsip/pengajuan_arsip/detail/'.$dt['id_pengajuan']) ?>" class="btn btn-success" target="_blank">Detail</a> 
                    <a href="<?= base_url('arsip/pengajuan_arsip/hapus/'.$dt['id_pengajuan']) ?>" class="btn btn-danger">Hapus</a> 
                 </td>
             <?php endif; ?>
            </tr>
        <?php $no++;endforeach; ?> 
        </tbody>
     </table> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <button type="button" class="btn bg-green btn-flat margin">Save</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
 $(function(){    
     $('.terima').click(function(){    
         var id = $(this).attr('id');   
         $.post("<?= base_url('arsip/insert_pengajuan') ?>", {id:id},function(data){
         Swal('Informasi','Data pengajuan arsip berhasil di terima','success');
         window.location.href='<?= base_url('arsip?jenis='.$jenis) ?>';
      });  
  });
});
</script>


<script type="text/javascript">

  function tampil_data(id){ 
    var SplitText = "Arsip Gambar"
    var $dialog = $('<div></div>')
    .html(SplitText )
    .dialog({
      height: 500,
      width: 600,
      title: 'Arsip gambar'});

    $dialog.dialog('open');

    $dialog.html('<img src ="<?= base_url() ?>/assets/arsip/'+id+'">');
}

</script>