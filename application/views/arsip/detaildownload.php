<ul class="list-group list-group-unbordered">

    <?php
    $j = 1;
    $datanya = explode(',', $data->row()->file_arsip);

    foreach ($datanya as $ll) {
    ?>

        <li class="list-group-item">File yang Ke <?= $j ?> <a href="<?= base_url('sppdprint/download?file=' . str_replace(['[', ']', '"'], '', $ll)) ?>" class="btn btn-primary"><i class="fa fa-download"></i>Download </a></li>

    <?php
        $j++;
    }

    ?>

</ul>