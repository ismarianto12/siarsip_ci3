<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?= $jum_arsip ?></h3>
                    <p>Total Arsip</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="<?= site_url('arsip') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?= $jum_s_masuk ?></h3>
                    <p>Total Surat Masuk</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?= $jum_s_keluar ?></h3>
                    <p>Jumlah Surat Keluar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?= $jum_disposisi ?></h3>
                    <p>Surat Masuk Disposisi</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->
    <!-- Main row -->
    <div class="callout callout-info">
        <marquee><i class="fa fa-info"></i>Hy <?= ucfirst($this->session->nama) ?> Selamat datang kembali, silahkan gunakan menu disamping untuk menggukan aplikasi</marquee>
    </div>

    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/series-label.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

            <figure class="highcharts-figure">
                <div id="container"></div>
            </figure>


        </section><!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">Data Surat Baru Ini</h3>

                </div><!-- /.box-header -->
                <div class="box-body">
                    <ul class="todo-list">
                        <?php
                        $i = 1;
                        foreach ($this->properti->archiveType(date('Y'), 10)->result_array() as $tr) {
                            $warna = ($i % 2) ? 'warning' : 'success';  ?>
                            <li>
                                <!-- drag handle -->
                                <span class="handle">
                                    <i class="fa fa-ellipsis-v"></i>
                                    <i class="fa fa-ellipsis-v"></i>
                                </span>
                                <!-- checkbox -->
                                <input type="checkbox" value="" name="">
                                <!-- todo text -->
                                <span class="text"><?= $tr['nama_arsip'] ?></span>
                                <!-- Emphasis label -->
                                <small class="label label-<?= $warna ?>"><i class="fa fa-clock-o"></i><?= tgl_indonesia($tr['tanggal']) ?></small>
                                <!-- General tools such as edit or delete-->
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                </div>
                            </li>
                        <?php $i++;
                        } ?>
                    </ul>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                    <button class="btn btn-default pull-right"><a href="<?= base_url('Tsuratmasuk') ?>"><i class="fa fa-plus"></i> Tambah</button></a>
                </div>
            </div>
        </section><!-- right col -->
    </div><!-- /.row (main row) -->

</section>
<script>
    <?php
    $arrType = [];
    foreach ($this->properti->getarsipByType(date('Y'))->result_array() as $char) {
        $arrType[] = "'" . $char['jenis_arsip'] . "'";
    }
    $Type = implode(',', $arrType);
    ?>

    Highcharts.chart('container', {
        title: {
            text: 'Persentasi Data Arsip Non Surat Per Tahun <?= date('Y-m-d') ?>'
        },
        xAxis: {
            categories: [<?= $Type ?>]
        },
        labels: {
            items: [{
                html: 'Arsip dengan jensi arsip bedasarkan tahun dari  <?= tgl_indonesia('2020-01-01') ?> S/d <?= tgl_indonesia(date('Y-m-d')) ?>',
                style: {
                    left: '50px',
                    top: '18px',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'black'
                }
            }]
        },
        series: [
            <?php
            foreach ($this->properti->getarsipByType(date('Y'))->result_array() as $char) {
                $Adata = $this->properti->getDataArsip($char['id_jenis']);
            ?> {
                    type: 'column',
                    name: '<?= $char['jenis_arsip'] ?>',
                    data: [
                        <?php
                        $no = 1;
                        foreach ($Adata->result_array() as $dat) {
                            echo $dat['count'] . ',';
                            $no++;
                        } ?>
                    ],
                },
            <?php } ?> {
                type: 'pie',
                name: 'Arsip dengan jensi arsip bedasarkan tahun dari  <?= tgl_indonesia('2020-01-01') ?> S/d <?= tgl_indonesia(date('Y-m-d')) ?>',
                data: [
                    <?php
                    $no = 0;
                    foreach ($this->properti->getarsipByType(date('Y'))->result_array() as $char) {
                    ?> {
                            name: '<?= $char['jenis_arsip'] ?>',
                            y: <?= ($char['jum']) ?>,
                            color: Highcharts.getOptions().colors[<?= $no ?>] // Jane's color
                        },
                    <?php $no++;
                    } ?>

                ],
                center: [100, 80],
                size: 100,
                showInLegend: false,
                dataLabels: {
                    enabled: false
                }
            }
        ]
    });
</script>