 <!--  -->
 <link href="<?= base_url() ?>/assets/template_lte/plugins/select2/select2.min.css" rel="stylesheet" />
 <script src="<?= base_url() ?>/assets/template_lte/plugins/select2/select2.min.js"></script>



 <script>
     $(function() {
         $('.js-example-basic-multiple').select2();
         
         $('#bawahan').select2();
         $('#atasan').select2();

         var url = '../sppd/selectPegawai';
         option = "<option value='0'>--Semua Data--</option>";
         $.get(url, {
             atasan: $(this).val()
         }, function(data) {
             $.each(data, function(index, value) {
                 option += "<option value='" + value.id + "'>" + value.nama + "</option>";
             });
             $('#atasan').html(option); 
         }, 'JSON');


         $('#atasan').on('change', function() {
             ll = "<option value='0'>--Semua Data--</option>";
             var atasan = $('#atasan option:selected').val();
             $.get(url, {
                     atasan: atasan
                 },
                 function(data) {
                     $.each(data, function(index, value) {
                         ll += "<option value='" + value.id + "'>" + value.nama + "</option>";
                     });
                     $('#bawahan').html(ll);
                     $('#j_pengikut').html(ll);
                 }, 'JSON');
         });
     });
     // });
 </script>


 <style type="text/css">
     .sc-date {
         text-align: center;
     }

     .sc-number {
         text-align: right;
     }
 </style>

 <div class='row'>
     <div class='col-md-12'>
         <div class='box-default'>
             <div class='panel-heading'><i class="fa fa fa-folder-open-o"></i><?= ucfirst($judul) ?></div>
             <div class='panel-wrapper collapse in' aria-expanded='true'>
                 <div class='panel-body'>
                     <div id="notifikasi"></div>
                     <form id="trsppd" action="<?= $action ?>" method="POST" class="form-horizontal">
                         <div class="card-body">
                             <div class="col-md-6">
                                 <label for="varchar" class='control-label col-md-4'><b>Kategori <?php echo form_error('sspdjeniss_id') ?></b></label>
                                 <div class='col-md-7'>
                                     <select id="sspdjeniss_id" name="sspdjeniss_id" class="form-control">
                                         <option value="">Pilih Jenis Surat</option>

                                         <?php foreach ($sppdjenis->result() as $sptjeniss) :

                                                $selected = ($sptjeniss->id == $sspdjeniss_id) ? "selected" : "";

                                                $namespd = str_replace('~', ' ', $sptjeniss->name);
                                                $ket     = str_replace('SPPD', 'SPT ', $namespd);

                                            ?>
                                             <option bdata="<?= $ket ?>" jsppd="<?= $namespd ?>" value="<?= $sptjeniss->id ?>"><?= $namespd ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>

                                 <br /> <br />
                                 <br />

                                 <div class="clearfix"></div>
                                 <div class="callout callout-info">
                                     Surat Perintah tugas(SPT)
                                 </div>
                                 <hr />
                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Nomor Surat Perintah Tugas<?php echo form_error('no_spt') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="text" name="no_spt" id="no_spt" class="form-control sc-input-required" placeholder="Nomor Surat Perintah Tugas" value="<?= $letter_code ?>">
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Tgl Berangkat<?php echo form_error('date_go') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="date" class="form-control" name="date_go" id="date_go" placeholder="Code" value="<?php echo $date_go; ?>" />
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="date" class='control-label col-md-4'><b>Tgl Kembali<?php echo form_error('date') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="date" class="form-control" name="date_back" id="date_back" placeholder="Date" value="<?php echo $date; ?>" />
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Pejabat yang di perintah<?php echo form_error('bawahan') ?></b></label>
                                     <div class='col-md-7'>

                                         <select id="bawahan" name="bawahan" class="form-control">
                                         </select>
                                     </div>

                                 </div>
                                 <!-- <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Lama Perjalanan<?php echo form_error('length_journey') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="number" class="form-control" name="length_journey" id="length_journey" placeholder="Lama jalan" value="<?php echo $length_journey; ?>" style="
    width: 60px;
    display: inline-flex;
"> / Hari
                                    </div>
                                </div> -->
                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Pengikut<?php echo form_error('pengikut_nip') ?></b></label>
                                     <div class='col-md-7'>

                                         <select name="pengikut_nip[]" class="js-example-basic-multiple form-control" id="j_pengikut" multiple="multiple">
                                             
                                         </select>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="nip" class='control-label col-md-4'><b>Instansi (Pembebanan Anggaran)<?php echo form_error('nip') ?></b></label>

                                     <div class='col-md-7'>
                                         <input type="text" name="government" id="government" class="form-control sc-input-required" placeholder="Instansi (Pembebanan Anggaran)" value="<?= $government ?>">
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="nip" class='control-label col-md-4'><b>Rekening Anggaran<?php echo form_error('rekening') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="text" name="rekening" id="rekening" class="form-control sc-input-required" placeholder="" value="<?= $rekening ?>">
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="budget_from" class='control-label col-md-4'><b>Mata Aggaran<?php echo form_error('budget_from') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="text" name="budget_from" id="budget_from" class="form-control sc-input-required" placeholder="Mata Aggaran" value="<?= $budget_from ?>">
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Keterangan<?php echo form_error('description') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="text" name="description" id="description" value="<?= $description ?>" class="form-control" placeholder="Keterangn Lain">

                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Dasar Surat<?php echo form_error('place_from') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="text" name="letter_content" id="letter_content" class="form-control  sc-input-required" placeholder="Dasar Surat" value="<?= $letter_content ?>">

                                     </div>
                                 </div>


                                 <h4><i class="fa fa fa-files"></i>Data Tambahan Tebusan Surat</h4>
                                 <hr />

                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Pimpinan (Walikota ,Sekda, Wakil Walikota)<?php echo form_error('pimpinan_spt') ?></b></label>
                                     <div class='col-md-7'>
                                         <select name="pimpinan_spt" id="pimpinan_spt" class="form-control">
                                         </select>
                                     </div>
                                 </div>


                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Kepala Bagian UMUM<?php echo form_error('kabag') ?></b></label>
                                     <div class='col-md-7'>

                                         <select name="kabag_spt" id="kabag_spt" class="form-control">
                                         </select>

                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Kepala sub bagian<?php echo form_error('kasubag') ?></b></label>
                                     <div class='col-md-7'>
                                         <select name="kasubag_spt" id="kasubag_spt" class="form-control">
                                         </select>
                                     </div>
                                 </div>
                             </div>


                             <div class="col-md-6">

                                 <br /> <br />
                                 <br />

                                 <div class="callout callout-info">
                                     Surat Peritah Perjalanan dinas</div>
                                 <hr />
                                 <div class="form-group">

                                     <div class="form-group">
                                         <label for="varchar" class='control-label col-md-4'><b>Nomor Surat Perjalanan Dinas (SPPD)<?php echo form_error('letter_code') ?></b></label>
                                         <div class='col-md-7'>
                                             <input type="text" name="letter_code" id="letter_code" class="form-control sc-input-required" placeholder="Nomor Surat Perjalanan Dinas" value="<?= $letter_code ?>">
                                         </div>
                                     </div>

                                 </div>
                                 <!-- <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>JENIS SPPD</b></label>
                                    <div class='col-md-7'>
                                        <input type="text" name="jenisspdata" value="" class="form-control" readonly>
                                    </div>
                                </div> -->
                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Pejabat yang memberi perintah<?php echo form_error('atasan') ?></b></label>
                                     <div class='col-md-7'>

                                         <select id="atasan" name="atasan" class="form-control">
                                         </select>
                                     </div>
                                 </div>


                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Maksud Perjalanan Dinas<?php echo form_error('purpose') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="text" name="purpose" id="purpose" class="form-control sc-input-required" placeholder="Maksud Perjalanan Dinas" value="<?= $purpose ?>">
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Dasar Perjalanan Dinas <?php echo form_error('basic') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="text" name="basic" id="basic" class="form-control sc-input-required" placeholder="Dasar Perjalanan Dinas" value="<?= $basic ?>">
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Alat Angkut yang dipergunakan<?php echo form_error('transport') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="text" value="<?= $transport ?>" name="transport" id="transport" class="form-control sc-input-required" placeholder="Alat Angkut yang dipergunakan">

                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Tempat Berangkat<?php echo form_error('letter_from') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="text" class="form-control" name="place_from" id="place_from" placeholder="Letter From" value="<?php echo $place_from; ?>" />
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="letter_content" class='control-label col-md-4'><b>Tempat Tujuan<?php echo form_error('letter_content') ?></b></label>

                                     <div class='col-md-7'>
                                         <textarea class="form-control" rows="3" name="place_to" id="place_to" placeholder="Tempat Tujuan"><?php echo $place_to; ?></textarea>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Kota<?php echo form_error('city') ?></b></label>
                                     <div class='col-md-7'>
                                         <input type="text" class="form-control" name="city" id="city" placeholder="Kota asal" value="<?php echo $city; ?>" />
                                     </div>
                                 </div>
                                 <h4><i class="fa fa fa-files"></i>Data Tambahan Tebusan Surat</h4>
                                 <hr />

                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Pimpinan (Walikota ,Sekda, Wakil Walikota)<?php echo form_error('pimpinan') ?></b></label>
                                     <div class='col-md-7'>
                                         <select name="pimpinan" id="pimpinan" class="form-control select2">
                                         </select>
                                     </div>
                                 </div>


                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Kepala Bagian UMUM<?php echo form_error('kabag') ?></b></label>
                                     <div class='col-md-7'>

                                         <select name="kabag" id="kabag" class="form-control">
                                         </select>

                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="varchar" class='control-label col-md-4'><b>Kepala sub bagian<?php echo form_error('kasubag') ?></b></label>
                                     <div class='col-md-7'>
                                         <select name="kasubag" id="kasubag" class="form-control">
                                         </select>
                                     </div>
                                 </div>
                             </div>

                         </div>

                         <div class="card-action">
                             <div class="row">
                                 <div class="col-md-12">
                                     <hr />
                                     <button class="btn btn-success" type="submit"><i class="fa fa-save"></i>Simpan</button>
                                     <a href="<?= base_url('sppd') ?>" class="btn btn-info"><i class="fa fa-list"></i>Back </a>
                                     <button class="btn btn-danger" type="reset">Batal</button>
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
     $('.multiplepegawai').select2();
     $(document).ready(function() {
         $('#trsppd').submit(function(e) {
             //    alert('haha');
             e.preventDefault();
             $.ajax({
                 url: $(this).attr('action'),
                 method: "POST",
                 data: $(this).serialize(),
                 dataType: 'json',
                 chace: false,
                 success: function(data) {
                     if (data.response == 'y') {
                         redirect();
                     } else if (data.response == 'n') {
                         $('#notifikasi').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><ul style="display: grid;">' + data.message + '</ul></div>');
                     }
                 },
                 error: function(data, xhr, status) {
                     swal.fire('Keterangan', 'data tidak response dengan baik' + status, 'error');
                 }
             });
         })
         // if event click on selected leetter of name category
         $('#sspdjeniss_id').on('change', function() {
             data = $('option:selected', this).attr('bdata');
             namespd = $('option:selected', this).attr('jsppd');

             $('input[name="jenisspt_id"]').val(data);
             $('input[name="jenisspdata"]').val(namespd);


         });

         $(".js-example-basic-single").select2();
     })


     ///after data clicked in button 
     function redirect() {


         Swal({
                 title: 'Data berhasil di input ',
                 text: 'Anda kembali kembali kehalamn awal ? , Klik ok  untuk melanjutkan ?',
                 type: 'warning',
                 showCancelButton: true,
                 confirmButtonColor: '#3085d6',
                 cancelButtonColor: '#d33',
                 confirmButtonText: 'Konfirmasi',
                 closeOnConfirm: false
             },
             function() {
                 Swal('Mengalihkan .. ', 'Data Sedang di alihkan', 'success');
                 window.location.href = '<?= base_url('sppd') ?>';
             });
     }
 </script>