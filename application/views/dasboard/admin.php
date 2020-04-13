 <div class="row">
     <div class="alert alert-warning">
         <h3 style="color:#fff"><i class="icon-paper-plane  fa-fw"></i>Selamat datang di halaman administrator
     </div>
     <div class="col-md-3 col-sm-6 info-box">
         <div class="media">
             <div class="media-left">
                 <span class="icoleaf bg-primary text-white"><i class="mdi mdi-checkbox-marked-circle-outline"></i></span>
             </div>
             <div class="media-body">
                 <h3 class="info-count text-blue"><?= $jum_arsip ?></h3>
                 <p class="info-text font-12">Total Arsip</p>
                 <span class="hr-line"></span>
             </div>
         </div>
     </div>
     <div class="col-md-3 col-sm-6 info-box">
         <div class="media">
             <div class="media-left">
                 <span class="icoleaf bg-primary text-white"><i class="mdi mdi-comment-text-outline"></i></span>
             </div>
             <div class="media-body">
                 <h3 class="info-count text-blue"><?= $jum_s_masuk ?></h3>
                 <p class="info-text font-12">Surat masuk</p>
                 <span class="hr-line"></span>
             </div>
         </div>
     </div>
     <div class="col-md-3 col-sm-6 info-box">
         <div class="media">
             <div class="media-left">
                 <span class="icoleaf bg-primary text-white"><i class="mdi mdi-coin"></i></span>
             </div>
             <div class="media-body">
                 <h3 class="info-count text-blue"><?= $jum_s_keluar ?></h3>
                 <p class="info-text font-12">Surat Keluar</p>
                 <span class="hr-line"></span>
             </div>
         </div>
     </div>

     <div class="col-md-3 col-sm-6 info-box">
         <div class="media">
             <div class="media-left">
                 <span class="icoleaf bg-primary text-white"><i class="mdi mdi-coin"></i></span>
             </div>
             <div class="media-body">
                 <h3 class="info-count text-blue"><?= $jum_disposisi ?></h3>
                 <p class="info-text font-12">Surat masuk disposisi</p>
                 <span class="hr-line"></span>
             </div>
         </div>
     </div>
 </div>

 <!-- row -->
 <div class="row">
     <div class="col-md-6 col-sm-12 col-xs-12">
         <div class="white-box">
             <div class="alert alert-success">
                 <h4 class="box-title">Data Surat keluar </h4>
             </div>
             <div id="morris-area-chart"></div>
         </div>
     </div>
     <div class="col-md-6 col-sm-12 col-xs-12">
         <div class="white-box">
             <div class="alert alert-success">
                 <h4 class="box-title">Data Surat Masuk </h4>
             </div>
             <ul class="list-inline text-right">
                 <li>
                     <h5><i class="fa fa-circle text-info m-r-5"></i>Disposisi </h5>
                 </li>
                 <li>
                     <h5><i class="fa fa-circle text-info m-r-5"></i>Belum Disposisi</h5>
                 </li>
             </ul>
             <div id="morris-area-chart2"></div>
         </div>
     </div>
 </div>


 <script type="text/javascript">
     $(function() {

         "use strict";

         // Dashboard 1 Morris-chart

         Morris.Area({
             element: 'morris-area-chart',
             data: [

                 <?php foreach ($surat_keluar->result_array() as $agen_by) : ?> {
                         period: '<?= $agen_by['tgl_surat'] ?>',
                         jumlah: <?= $agen_by['jumlah'] ?>,
                     },
                 <?php endforeach; ?>

             ],
             xkey: 'period',
             ykeys: ['jumlah'],
             labels: ['jumlah'],
             pointSize: 3,
             fillOpacity: 0,
             pointStrokeColors: ['#00bbd9', '#ffb136', '#4a23ad'],
             behaveLikeLine: true,
             gridLineColor: '#e0e0e0',
             lineWidth: 1,
             hideHover: 'auto',
             lineColors: ['#00bbd9', '#ffb136', '#4a23ad'],
             resize: true

         });

         Morris.Area({
             element: 'morris-area-chart2',
             data: [

                 <?php foreach ($surat_masuk->result_array() as $dataqr) : ?> {
                         period: '<?= $dataqr['tgl_diterima'] ?>',
                         sopen: <?= $dataqr['y_disposisi'] ?>,
                         sclosed: <?= $dataqr['no_disposisi'] ?>,
                     },
                 <?php endforeach; ?>
             ],
             xkey: 'period',
             ykeys: ['sopen', 'sclosed'],
             labels: ['Disposisi', 'Belum disposisi'],
             pointSize: 0,
             fillOpacity: 0.4,
             pointStrokeColors: ['#ffb136', '#00bbd9'],
             behaveLikeLine: true,
             gridLineColor: '#e0e0e0',
             lineWidth: 0,
             smooth: false,
             hideHover: 'auto',
             lineColors: ['#ffb136', '#00bbd9'],
             resize: true

         });
     });
 </script>