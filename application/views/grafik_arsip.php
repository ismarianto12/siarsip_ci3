<div class="alert alert-warning">Data di bawah berdasarkan bulan dalam satu tahun.</div>

<script src="<?= base_url() ?>assets/js/charts/chartjs/Chart.js"></script>  

<script type="text/javascript">
  // $.noConflict();
  $(function(){
      //$('.date-picker').datepicker();
      InitiateChartJS.init();
      
    });
  
  </script>
  
  <script type="text/javascript">
   
    var gridbordercolor = "#eee";

    var InitiateChartJS = function () {
      return {
        init: function () {

          var doughnutData = [

          <?php $no=1; foreach($jum_bulan->result_array() as $bul): 
          $warna = ($bul['jum']%2) ? 'themeprimary' : '"red"';

          /*data untuk line chart*/
          $tgl[] = '"'.tgl_indonesia($bul['tanggal']).'"'; 
          $jum_line[] = $bul['jum'] ; 
          
          ?>
          {
            value: <?= $bul['jum'] ?>,
            label : 'Arsip <?= tgl_indonesia($bul['tanggal']) ?> ',
            color: <?= $warna ?>,
          },
          <?php  $no++; endforeach; 
          /*data line chart*/
          $hasil_tgl = implode(',', $tgl);
           $hasil_jum_line = implode(',', $jum_line);
          ?>      
          
          ];
          var lineChartData = {
            

            labels: [<?= $hasil_tgl ?>],
            datasets: [
            {
              fillColor: "rgba(93, 178, 255,.4)",
              strokeColor: "rgba(93, 178, 255,.7)",
              pointColor: "rgba(93, 178, 255,.7)",
              pointStrokeColor: "#fff",
              data: [<?= $hasil_jum_line ?>]
            },
        
            ]

          };


          var pieData = [
          <?php $no=1; foreach($jum_bulan->result_array() as $yt):  ?>
          {
            value: <?= $yt['jum'] ?>,
            color: themeprimary
          }, 

         <?php endforeach; ?>

          ];
          var barChartData = {
            labels: [<?= $hasil_tgl ?>],
            datasets: [
            {
              fillColor: themeprimary,
              strokeColor: themeprimary,
              data: [<?= $hasil_jum_line ?>]
            },
         
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
            labels: ["January", "", "", "", "", "", ""],
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
          new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
          new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

          }
        };
      }();

    </script>


    


<div class="row">
 
 <div class="col-xs-6">
   <div class="widget-header ">
    <span class="widget-caption">Data arsip perbulan </span>
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

 <div class="col-xs-6">
   <div class="widget-header ">
    <span class="widget-caption">Persentase arsip bar chart</span>
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
      <canvas id="bar" height="300"></canvas>
    </div>



  </div>
  <div class="horizontal-space"></div>


</div>

<div class="col-xs-6">
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
      <canvas id="line" height="300"></canvas>

    </div>



  </div>
  <div class="horizontal-space"></div>


</div>

<div class="col-xs-6">
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
      <canvas id="pie" height="300"></canvas>
    </div> 

  </div>
  <div class="horizontal-space"></div>


</div>

 

</div>


