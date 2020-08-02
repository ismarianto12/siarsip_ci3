 <br /><br /><br /><br />

 <script type="text/javascript">
     $(function() {
         $('#batal').click(function(e) {
             e.preventDefault();
             $('.main_app').hide().slideUp();
             $('#cari').show();
             $('#tambah').show();
             $('#notifikasi').hide();
         });
     });

     /* action add or edit */
     $(function() {
         $('#simpan').submit(function(e) {
             e.preventDefault();
             var action = $(this).attr('to');
             var datastring = new FormData(this);

             $.ajax({
                 url: action,
                 type: 'post',
                 data: datastring,
                 cache: false,
                 contentType: false,
                 processData: false,
                 dataType: 'json',
                 beforeSend: function() {
                     $('form').attr("disabled", "disabled");
                     $('form').css("opacity", ".5");
                 },
                 success: function(data) {
                     if (data.ket == 1) {
                         swal('Keterangan', 'Data berhasill di simpan', 'success');
                         $('form').css("opacity", "");
                         $("form").removeAttr("disabled");
                         $('.main_app').hide().slideUp();
                         $('#datatables').DataTable().ajax.reload();
                     } else if (data.ket == 2) {
                         $('#notifikasi').html(data.respon);
                         $('form').css("opacity", "");
                         $("form").removeAttr("disabled");
                         $('#datatables').DataTable().ajax.reload();
                     }
                 },
                 error: function(data) {
                     swal('Keterangan', 'server belum bisa respon', 'warning');
                 }
             });
         });
     });
 </script>


 <div class='row'>
     <div class='col-md-12'>
         <div class='panel panel-info'>
             <div class='panel-heading'><?= ucfirst($judul) ?></div>
             <br />
             <div class='panel-wrapper collapse in' aria-expanded='true'>
                 <div class='panel-body'>
                     <?= $this->session->flashdata('message') ?>
                     <form to="<?php echo $action; ?>" id="simpan" method="post" class="form-horizontal" enctype="multipart/form-data">
                         <div class='form-body'>
                             ** ) Harap Isikan data yang di butuhkan pada form.
                             <br /><br /><br /><br />
                             <div class="form-group">
                                 <label for="int" class='control-label col-md-3'><b>No Agenda<?php echo form_error('no_agenda') ?></b></label>
                                 <div class='col-md-9'>
                                     <input type="number" class="form-control" name="no_agenda" id="no_agenda" placeholder="No Agenda" value="<?php echo $no_agenda; ?>" />
                                 </div>
                             </div>

                              <div class="form-group">
                                 <label for="varchar" class='control-label col-md-3'><b>No Surat<?php echo form_error('no_surat') ?></b></label>
                                 <div class='col-md-9'>
                                     <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="No Surat" value="<?php echo $no_surat; ?>" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="varchar" class='control-label col-md-3'><b>Asal Surat<?php echo form_error('asal_surat') ?></b></label>
                                 <div class='col-md-9'>
                                     <input type="text" class="form-control" name="asal_surat" id="asal_surat" placeholder="Asal Surat" value="<?php echo $asal_surat; ?>" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="mediumtext" class='control-label col-md-3'><b>Isi<?php echo form_error('isi') ?></b></label>
                                 <div class='col-md-9'>
                                     <input type="text" class="form-control" name="isi" id="isi" placeholder="Isi" value="<?php echo $isi; ?>" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="varchar" class='control-label col-md-3'><b>Kode<?php echo form_error('kode') ?></b></label>
                                 <div class='col-md-9'>
                                     <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode" value="<?php echo $kode; ?>" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="varchar" class='control-label col-md-3'><b>Indeks<?php echo form_error('indeks') ?></b></label>
                                 <div class='col-md-9'>
                                     <input type="text" class="form-control" name="indeks" id="indeks" placeholder="Indeks" value="<?php echo $indeks; ?>" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="date" class='control-label col-md-3'><b>Tgl Surat<?php echo form_error('tgl_surat') ?></b></label>
                                 <div class='col-md-9'>
                                     <input type="text" class="date-picker1 form-control" name="tgl_surat" id="tgl_surat" placeholder="Tgl Surat" value="<?php echo $tgl_surat; ?>" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="date" class='control-label col-md-3'><b>Tgl Diterima<?php echo form_error('tgl_diterima') ?></b></label>
                                 <div class='col-md-9'>
                                     <input type="text" class="date-picker2 form-control" name="tgl_diterima" id="tgl_diterima" placeholder="Tgl Diterima" value="<?php echo $tgl_diterima; ?>" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="varchar" class='control-label col-md-3'><b>File<?php echo form_error('file') ?></b></label>
                                 <div class='col-md-9'>

                                     <?php if ($this->uri->segment(2) == 'edit') : ?>
                                         <a href="<?= base_url('assets/file_surat/' . $file) ?>" target="_blank">Detail File Surat</a>
                                     <?php endif; ?>
                                     <input type="file" class="form-control" name="file" id="file" placeholder="File" value="<?php echo $file; ?>" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="varchar" class='control-label col-md-3'><b>Keterangan<?php echo form_error('keterangan') ?></b></label>
                                 <div class='col-md-9'>
                                     <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" />
                                 </div>
                             </div>

                             <input type="hidden" name="id_surat" value="<?php echo $id_surat; ?>" />


                             <div class='form-actions'>
                                 <div class='row'>
                                     <div class='col-md-12'>
                                         <div class='row'>
                                             <div class='col-md-offset-3 col-md-9'>
                                                 <br /><br />
                                                 <button type="submit" id="simpan" class="btn btn-primary btn-xs shiny"><i class='fa fa-save'></i><?php echo $button ?></button>
                                                 <button class="btn btn-warning btn-xs shiny" id="batal"><i class='fa fa-share'></i>Cancel</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <script type="text/javascript">
     $(function() {
         $('.date-picker1').datepicker();
         $('.date-picker2').datepicker();
     });
 </script>