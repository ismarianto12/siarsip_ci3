 <script src="<?= base_url() ?>assets/js/charts/chartjs/Chart.js"></script>  
 <script type="text/javascript">
   
  // $.noConflict();
  $(function(){
      //$('.date-picker').datepicker();
      InitiateChartJS.init();
      
    }); 
   
var gridbordercolor = "#eee";

var InitiateChartJS = function () {
    return {
        init: function () {

            var doughnutData = [

             <?php $no=1; foreach($jum_bulan->result_array() as $bul): 
                    $warna = ($bul['jum']%2) ? 'themeprimary' : '"red"';
             ?>
                    {
                        value: <?= $bul['jum'] ?>,
                        label : 'Arsip <?= tgl_indonesia($bul['tanggal']) ?> ',
                        color: <?= $warna ?>,
                    },
              <?php  $no++; endforeach; ?>      
             

            ];
            var lineChartData = {
                labels: ["", "", "", "", "", "", ""],
                datasets: [
                    {
                        fillColor: "rgba(93, 178, 255,.4)",
                        strokeColor: "rgba(93, 178, 255,.7)",
                        pointColor: "rgba(93, 178, 255,.7)",
                        pointStrokeColor: "#fff",
                        data: [65, 59, 90, 81, 56, 55, 40]
                    },
                    {
                        fillColor: "rgba(215, 61, 50,.4)",
                        strokeColor: "rgba(215, 61, 50,.6)",
                        pointColor: "rgba(215, 61, 50,.6)",
                        pointStrokeColor: "#fff",
                        data: [28, 48, 40, 19, 96, 27, 100]
                    }
                ]

            };
            var pieData = [
                    {
                        value: 30,
                        color: themeprimary
                    },
                    {
                        value: 50,
                        color: themesecondary
                    },
                    {
                        value: 100,
                        color: themefourthcolor
                    }

            ];
            var barChartData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        fillColor: themeprimary,
                        strokeColor: themeprimary,
                        data: [65, 59, 90, 81, 56, 55, 40]
                    },
                    {
                        fillColor: themethirdcolor,
                        strokeColor: themethirdcolor,
                        data: [28, 48, 40, 19, 96, 27, 100]
                    }
                ]

            };
            var chartData = [
                    {
                        value: Math.random(),
                        color: themeprimary
                    },
                    {
                        value: Math.random(),
                        color: themesecondary
                    },
                    {
                        value: Math.random(),
                        color: themethirdcolor
                    },
                    {
                        value: Math.random(),
                        color: themefourthcolor
                    },
                    {
                        value: Math.random(),
                        color: themefifthcolor
                    },
                    {
                        value: Math.random(),
                        color: "#ed4e2a"
                    }
            ];
            var radarChartData = {
                labels: ["", "", "", "", "", "", ""],
                datasets: [
                    {
                        fillColor: "rgba(140,196,116,0.5)",
                        strokeColor: "rgba(140,196,116,.7)",
                        pointColor: "rgba(140,196,116,.7)",
                        pointStrokeColor: "#fff",
                        data: [65, 59, 90, 81, 56, 55, 40]
                    },
                    {
                        fillColor: "rgba(215,61,50,0.5)",
                        strokeColor: "rgba(215,61,50,.7)",
                        pointColor: "rgba(215,61,50,.7)",
                        pointStrokeColor: "#fff",
                        data: [28, 48, 40, 19, 96, 27, 100]
                    }
                ]

            };
            new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
            new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
            new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
            new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
            new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
            new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

        }
    };
}();

 </script>

 <div class="page-body">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="databox bg-white radius-bordered">
            <div class="databox-left bg-themesecondary">
              <div class="databox-piechart">
                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">50%</span></div>
              </div>
            </div>
            <div class="databox-right">
              <span class="databox-number themesecondary"><?= $lokasi_arsip ?></span>
              <div class="databox-text darkgray">Data Lokasi Arsip</div>
              <div class="databox-stat themesecondary radius-bordered">
                <i class="stat-icon icon-lg fa fa-tasks"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="databox bg-white radius-bordered">
            <div class="databox-left bg-themethirdcolor">
              <div class="databox-piechart">
                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="15" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.2)"><span class="white font-90">15%</span></div>
              </div>
            </div>
            <div class="databox-right">
              <span class="databox-number themethirdcolor"><?= $jumlah_data ?></span>
              <div class="databox-text darkgray">JUMLAH DATA DENGAN FILE ARSIP</div>
              <div class="databox-stat themethirdcolor radius-bordered">
                <i class="stat-icon  icon-lg fa fa-envelope-o"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="databox bg-white radius-bordered">
            <div class="databox-left bg-themeprimary">
              <div class="databox-piechart">
                <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">76%</span></div>
              </div>
            </div>
            <div class="databox-right">
              <span class="databox-number themeprimary"><?= $jenis_arsip ?></span>
              <div class="databox-text darkgray">DATA KATEGORI ARSIP</div>
              <div class="databox-state bg-themeprimary">
                <i class="fa fa-check"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="databox bg-white radius-bordered">
            <div class="databox-left bg-themeprimary">
              <div class="databox-piechart">
                <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">76%</span></div>
              </div>
            </div>
            <div class="databox-right">
              <span class="databox-number themeprimary"><?= $arsip_data ?></span>
              <div class="databox-text darkgray">DATA ARSIP KESELURUHAN</div>
              <div class="databox-state bg-themeprimary">
                <i class="fa fa-check"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end -->

    <div class="col-md-6">

<div class="widget-header bg-blue">
        <span class="widget-caption">Informasi Login</span>
    </div>
     <table class="table table-striped">

      <tr><td>Username</td><td><?= $data->row()->username ?></td></tr> 
      <tr><td>Nama</td><td><?= $data->row()->nama ?></td></tr>
      <tr><td>Level</td><td><?= $data->row()->username ?></td></tr>
      <tr><td>Foto</td><td><img src="<?= base_url('assets/img/foto/'.$data->row()->foto) ?>" class="img-responsive" style="width: 120px;height: 120px" onError="this.onerror=null;this.src='<?= base_url('assets/img/avatars/bing.png') ?>';"></td></tr>
      <tr><td>Email</td><td><?= $data->row()->email ?></td></tr>
      <tr><td>Log</td><td><?= $data->row()->log ?></td></tr>
      <tr><td>Aktif</td><td><?= $aktif = ($data->row()->aktif == 'y') ? 'Aktif' : 'Tidak Aktif'; ?></td></tr>

    </table>
  </div> 

   <div class="col-md-6">

  <div class="col-xs-8">
           <div class="widget-header ">
            <span class="widget-caption">Persentase arsip</span>
            <div class="widget-buttons">
              <a href="#" data-toggle="collapse">
                <i class="fa fa-minus"></i>
              </a>
              <a href="#" data-toggle="dispose">
                <i class="fa fa-times"></i>
              </a>
            </div>
          </div>
          <div class="widget-body">

            <div class="chartcontainer">
              <canvas id="doughnut" height="300"></canvas>

            </div>



          </div>
          <div class="horizontal-space"></div>


        </div>


   </div>
</div>
</div> 

