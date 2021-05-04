 <?php if ($data->num_rows() > 0) {
        foreach ($data->result_array() as $data) : ?>
         <li>
             <!-- start message -->
             <a href="#">
                 <div class="pull-left">
                     <img src="<?= base_url('assets/img/' . icon()) ?>" class="img-circle" alt="User Image" style="width:30px;height:30px" onerror="this.onerror=null;this.src='<?= base_url('assets/img/no_image.jpg') ?>';">
                 </div>
                 <h4>
                     <h5><?= tgl_indonesia($data['tgl_diterima']) ?></h5>
                     <small><i class="fa fa-clock-o"></i>No Surat : <?= $data['no_surat'] ?></small>
                 </h4>
                 <p>
                     <?= $data['isi'] ?></p>
             </a>
             <hr />
         </li>
     <?php endforeach;
    } else { ?>

     <li>

         <a href="#">
             <div class="pull-left">
                 <img src="<?= base_url('assets/img/' . icon()) ?>" class="img-circle" alt="User Image" style="width:30px;height:30px" onerror="this.onerror=null;this.src='<?= base_url('assets/img/no_image.jpg') ?>';">
             </div>

             <p> Tidak ada Surat Masuk terbaru</p>
         </a>
     </li>
 <?php } ?>