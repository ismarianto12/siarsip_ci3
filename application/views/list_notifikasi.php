<li>
<div class='message-center'>
    <?php if($data->num_rows() > 0){  foreach($data->result_array() as $data): ?> 
    <a href='<?= base_url('tsuratmasuk') ?>'>
      <div class='mail-contnet'>
            <h5><?= $data['isi'] ?></h5>
            <span class='mail-desc'>No Surat : <?= $data['no_surat'] ?></span>
            <span class='time'><?= tgl_indonesia($data['tgl_diterima']) ?></span>
        </div>
    </a>
    <?php endforeach; }else{ ?>
 
 <div class="callout callout-danger">Tidak ada surat masuk terbaru</div>
    <?php } ?> 
</div>
</li>
