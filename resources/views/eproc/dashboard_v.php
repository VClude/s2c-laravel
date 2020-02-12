<div class="wrapper wrapper-content">

  <div class="row">
    <div class="col-lg-3">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <!-- <h5>SPPBJ</h5> -->
          <h5><i class="fa fa-print"></i>&nbsp;&nbsp;&nbsp;PR Aktif</h5>
        </div>
        <div class="ibox-content">
          <h1 class="no-margins"><?php echo str_replace(',', '.',  number_format($total_pr)) ?></h1>
          <small></small>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5><i class="fa fa-send"></i>&nbsp;&nbsp;&nbsp;RFQ Aktif</h5>
        </div>
        <div class="ibox-content">
          <h1 class="no-margins"><?php echo str_replace(',', '.',  number_format($total_rfq)) ?></h1>
          <small></small>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5><i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;Kontrak Aktif</h5>
        </div>
        <div class="ibox-content">
          <h2 class="no-margins">IDR <?php echo inttomoney($total_contract) ?></h2>
          <small></small>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5><i class="fa fa-truck"></i>&nbsp;&nbsp;&nbsp;Vendor Aktif </h5>
        </div>
        <div class="ibox-content">
          <h1 class="no-margins"><?php echo str_replace(',', '.',  number_format($total_vendor)) ?></h1>
          <small></small>
        </div>
      </div>
    </div>

  </div>
  
  <?php if($userdata['pos_name'] == 'Administrator Application'){ ?>

  
  <div class="row">

    <div class="col-lg-6">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Integrasi Odoo </h5>
        </div>
        <div class="ibox-content">
          <h1 class="no-margins"><a href='<?php echo site_url() . 'administration/admin_tools/odoo_setting' ?>'><?php echo ($odooenable) ? 'Aktif' : 'Tidak Aktif' ?></a></h1>
          <small></small>
        </div>
      </div>
    </div>


  <div class="col-lg-6">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Server Odoo </h5>
        </div>
        <div class="ibox-content">
          <h1 class="no-margins"><a href='<?php echo site_url() . 'administration/admin_tools/odoo_setting' ?>'><?php echo ($odooenable) ? $odooconnect : 'Integrasi Tidak Aktif'; ?></a></h1>
          <small></small>
        </div>
      </div>
    </div>

  </div>

  <?php } ?>

  <div class="row">
    <div class="col-lg-7">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5 id="bar_chart_title"></h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
          </div>
        </div>
        <div class="ibox-content">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#efisiensi_chart" id="efisiensi">Efisiensi</a></li>
          <li><a data-toggle="tab" href="#terbesar_chart" id="terbesar">5 Belanja Terbesar <?= Date('Y'); ?></a></li>
          <li><a data-toggle="tab" href="#terbanyak_chart" id="terbanyak">5 Divisi Belanja Terbanyak <?= Date('Y'); ?></a></li>
          <li><a data-toggle="tab" href="#durasi_chart" id="durasi">Durasi</a></li>
        </ul>

        <div class="tab-content">
        <div id="efisiensi_chart" class="tab-pane fade in active">
        <!-- <canvas id="procurement_method_graph" width="540px" height="190px"></canvas> -->
        <div id="efisiensi_container"></div>
        </div>
        <div id="terbesar_chart" class="tab-pane fade">
        <div id="terbesar_container"></div>
        </div>
        <div id="terbanyak_chart" class="tab-pane fade">
        <div id="terbanyak_container"></div>
        </div>
        <div id="durasi_chart" class="tab-pane fade">
        <div id="durasi_container"></div>
        </div>
      </div>

        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5 id="pie_chart_title"></h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
          </div>
        </div>
        <div class="ibox-content">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#paket_chart" id="paket">Jumlah Paket</a></li>
            <li><a data-toggle="tab" href="#kontrak_chart" id = "kontrak">Jumlah Kontrak</a></li>
            <li><a data-toggle="tab" href="#status_chart" id = "status">Status Vendor</a></li>
          </ul>

          <div class="tab-content">
          <div id="paket_chart" class="tab-pane fade in active">
          
            <div id="paket_container"></div>
          
          </div>
          <div id="kontrak_chart" class="tab-pane fade">
            
            <div id="jumlah_kontrak_container"></div>
          
          </div>
          <div id="status_chart" class="tab-pane fade">

            <div id="status_vendor_container"></div>
          
          </div>
        </div>

          
        
        </div>
      </div>
    </div>
  </div>


<div class="row">

  <div class="col-md-6">

   <div class="ibox float-e-margins border-bottom">
    <div class="ibox-title">
      <!-- <h5>Daftar Pekerjaan SPPBJ</h5> -->
      <h5>Daftar Pekerjaan PR</h5>
      <div class="ibox-tools">
        <a class="collapse-link">
          <i class="fa fa-chevron-up"></i>
        </a>

      </div>
    </div>
    <div class="ibox-content">

      <div class="table-responsive">

        <table id="table_pekerjaan_pr" class="table table-bordered table-striped"></table>

      </div>

    </div>
  </div>

</div>

<div class="col-md-6">
  <div class="ibox float-e-margins border-bottom">
    <div class="ibox-title">
      <h5>Daftar Pekerjaan RFQ</h5>
      <div class="ibox-tools">
        <a class="collapse-link">
          <i class="fa fa-chevron-up"></i>
        </a>

      </div>
    </div>
    <div class="ibox-content">

      <div class="table-responsive">

        <table id="table_pekerjaan_rfq" class="table table-bordered table-striped"></table>

      </div>

    </div>
  </div>
</div>

</div>

  <script src="<?php echo base_url()?>/assets/js/highcharts/highcharts.js"></script>
  <script type="text/javascript">
var kinerja = [
   
  ]

console.log(kinerja);
function addCommas(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
  }

  Highcharts.setOptions({
    lang: {
        decimalPoint: ',',
        thousandsSep: '.',
        numericSymbols: null 
    }
  });

Highcharts.chart('paket_container', {
    chart:{
      type: 'pie',
      height: (13 / 16 * 100) + '%'
    },
    title: {
      text: null
    },
    credits: {
          enabled: false
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b></b><br/>Jumlah: <b>{point.y}<b/>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            },
            showInLegend: true,
            size: 200
        }
    },
    series: [{
        name: 'Persentase',
        colorByPoint: true,
        data: [
          <?php foreach ($top_proc_method as $key => $value) { ?>
            {
              name:"<?php echo $value['label'] ?>",
              y:<?php echo $value['total'] ?>
            },
          <?php } ?>
        ]
    }]
});

Highcharts.chart('jumlah_kontrak_container', {
    chart:{
      type: 'pie',
      height: (13 / 16 * 100) + '%'
    },
    title: {
      text: null
    },
    credits: {
          enabled: false
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b><br/>Jumlah: <b>{point.y}<b/>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            },
            showInLegend: true,
            size: 200
        }
    },
    series: [{
        name: 'Persentase',
        colorByPoint: true,
        data: [
          <?php foreach ($statistik_kontrak as $value) { ?>
            {
              name:"<?php echo $value['statistik_kontrak'] ?>",
              y: <?php echo $value['jml'] ?>
            },
          <?php } ?>
        ]
    }]
});

Highcharts.chart('status_vendor_container', {
    chart:{
      type: 'pie',
      height: (13 / 16 * 100) + '%'
    },
    title: {
      text: null
    },
    credits: {
          enabled: false
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b></b><br/>Jumlah: <b>{point.y}<b/>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            },
            showInLegend: true,
            size: 200
        }
    },
    series: [{
        name: 'Persentase',
        colorByPoint: true,
        data: [
          <?php foreach ($kinerja_vendor as $key => $value) { ?>
            {
              name:"<?php echo $value['vendor_status'] ?>",
              y:<?php echo $value['jml'] ?>
            },
          <?php } ?>
        ]
    }]
});


Highcharts.chart('efisiensi_container', {
    chart: {
        type: 'column',
        height: (9 / 16 * 100) + '%',
        marginTop: 30
    },
    title: {
        text: null
    },
    credits: {
          enabled: false
    },
    xAxis: {
        type: 'category',
        crosshair: false
    },
    yAxis: {
        min: 0,
        title: {
            text: 'IDR',
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'HPS',
        data: [
          <?php foreach ($efisiensi as $key => $value) { ?>
             {
              name:"<?php echo $value['metode'] ?>",
              y:<?php echo $value['total'] ?>
             },
          <?php } ?>
        ]

    }, {
        name: 'Realisasi',
        data: [
          <?php foreach ($efisiensi as $key => $value) { ?>
            {
              name:"<?php echo $value['metode'] ?>",
              y:<?php echo $value['total_contract'] ?>
            },
          <?php } ?>
        ]

    }]
});


Highcharts.chart('terbesar_container', {
    chart: {
        type: 'column',
        height: (9 / 16 * 100) + '%',
        marginTop: 30
    },
    title: {
        text: null
    },
    credits: {
          enabled: false
    },
    legend: {
           enabled: false
    },
    xAxis: {
        type: 'category',
        crosshair: false
    },
    yAxis: {
        min: 0,
        title: {
            text: 'IDR'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: false,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Nilai',
        colorByPoint: true,
        data: [
          <?php foreach ($terbesar as $key => $value) { ?>
            {
              name:"<?php echo $value['name'] ?>",
              y:<?php echo $value['nilai'] ?>
            },
          <?php } ?>
        ]
    }]
});


Highcharts.chart('terbanyak_container', {
    chart: {
        type: 'column',
        height: (9 / 16 * 100) + '%',
        marginTop: 30
    },
    title: {
        text: null
    },
    credits: {
          enabled: false
    },
    legend: {
           enabled: false
    },
    xAxis: {
        type: 'category',
        crosshair: false
    },
    yAxis: {
        min: 0,
        title: {
            text: 'IDR'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: false,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Nilai',
        colorByPoint: true,
        data: [
          <?php foreach ($terbanyak as $key => $value) { ?>
            {
              name:"<?php echo $value['dept_name'] ?>",
              y:<?php echo $value['nilai'] ?>
            },
          <?php } ?>
        ]
    }]
});

Highcharts.chart('durasi_container', {
    chart: {
        type: 'column',
        height: (9 / 16 * 100) + '%',
        marginTop: 30
    },
    title: {
        text: null
    },
    credits: {
          enabled: false
    },
    legend: {
           enabled: false
    },
    xAxis: {
        type: 'category',
        crosshair: false
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Durasi Pengadaan (Hari)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: false,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Durasi (Hari)',
        colorByPoint: true,
        data: [
          <?php foreach ($durasi as $key => $value) { ?>
            {
              name:"<?php echo $value['metode'] ?>",
              y:<?php echo $value['av'] ?>
            },
          <?php } ?>
        ]
    }]
});

    $(function() {
//=================================================================================================
//           var lineOptions = {
//         scaleShowGridLines: true,
//         scaleGridLineColor: "rgba(0,0,0,.05)",
//         scaleGridLineWidth: 1,
//         bezierCurve: true,
//         bezierCurveTension: 0.4,
//         pointDot: true,
//         pointDotRadius: 4,
//         pointDotStrokeWidth: 1,
//         pointHitDetectionRadius: 20,
//         datasetStroke: true,
//         datasetStrokeWidth: 2,
//         datasetFill: true,
//         responsive: false,
//     };

// var lineData = {
//         labels: [
//         <?php //foreach ($top_proc_method as $key => $value) { ?>
//           "<?php //echo $value['label'] ?>",
//         <?php //} ?>
//         ],
//         datasets: [
         
//             {
//                 label: "Top Procurement by Method",
//                 fillColor: "rgba(220,220,220,0.5)",
//                 strokeColor: "rgba(220,220,220,1)",
//                 pointColor: "rgba(220,220,220,1)",
//                 pointStrokeColor: "#fff",
//                 pointHighlightFill: "#fff",
//                 pointHighlightStroke: "rgba(220,220,220,1)",
//                 color: "#756600",
//                 data: [
//                 <?php// foreach ($top_proc_method as $key => $value) { ?>
//                   <?php// echo $value['total'] ?>, 
//                   <?php// } ?>
//                   ],
//             }
            
//         ]
//     };


// Chart.defaults.global.elements.line.fill = false;
// var barChartData = {
//   labels: [
//     <?php //foreach ($top_proc_method as $key => $value) { ?>  
//     "<?php //echo $value['metode'] ?>",
//     <?php //} ?>
//   ],
//   datasets: [{
//     type: 'bar',
//     label: 'HPS',
//     yAxisID: "y-axis-0",
//     backgroundColor: "rgba(1, 49, 162, 1)",
//     data: [
//     <?php //foreach ($top_proc_method as $key => $value) { ?>  
//     <?php //echo $value['est'] / 1000000 ?> ,
//     <?php //} ?>
//     ]
//   }, {
//     type: 'bar',
//     label: 'Nilai Realisasi',
//     yAxisID: "y-axis-0",
//     backgroundColor: "rgba(47, 109, 254, 1)",
//     data: [
//       <?php //foreach ($top_proc_method as $key => $value) { ?>  
//         <?php //echo $value['amt'] / 1000000 ?>,
//         <?php //} ?>
//     ]
//   }, {
//     type: 'line',
//     label: 'Rata Hari',
//     yAxisID: "y-axis-1",
//     backgroundColor: "rgba(0, 12, 41, 1)",
//     data: [
//       <?php //foreach ($top_proc_method as $key => $value) { ?>  
//         <?php //echo $value['av'] ?>,
//         <?php //} ?>
//     ]
//   }]
  
// };


//     var ctx = $("#procurement_method_graph").get(0).getContext("2d");
//     var myNewChart = new Chart(ctx, {
//   type: 'bar',
//   data: barChartData,
//   options: {
//     title: {
//       display: false,
//       text: "Chart.js Bar Test"
//     },
//     legend: {
//       position: 'bottom',
//       labels: {
//         fontSize: 10,
//       },
//     },
//     tooltips: {
//       mode: 'label'
//     },
//     responsive: true,
//     scales: {
//       xAxes: [{
//         /* stacked: false */
//         ticks: {
//                 fontSize: 11
//         },
//         gridLines : {
//                 display : false
//             }
//       }],
//       yAxes: [{
//        /*  stacked: true, */
//        ticks: {
//                 beginAtZero: true,
//                 callback: function (value) {
//                             return numeral(value).format('0,0')
//                         }
//         },
//         gridLines:{
//                 display: false
//         },
//        scaleLabel: {
//                 display: true,
//                 labelString: 'Nilai IDR (Juta)',
//                 fontSize:10
//        },
//         position: "left",
//         id: "y-axis-0",
//       }, 
//       {
//         // stacked: true,
//         ticks: {
//                 beginAtZero: true
//         },
//         gridLines:{
//                 display: false
//         },
//        scaleLabel: {
//                 display: true,
//                 labelString: 'Rata Hari',
//                 fontSize:10
//         },
//         position: "right",
//         id: "y-axis-1",
//       }
//       ]
//     }
//   }
// });

// $("#procurement_method_graph").click(function(evt) {
//    var lined = myNewChart.getElementAtEvent(evt);
//    console.log(lined[0]._datasetIndex);
//    if (!lined.length) return; 
//    var index = lined[0]._datasetIndex;//._model.label;
//    switch (index) {
      
//     case 0:
//     //do nothing yet
//          break;

//     case 1  :
//     //do nothing yet
//          break;
      
//       case 2:
//          window.open("<?php // echo site_url()?>/laporan/rekap_analisa/report_durasi_proses");
//          break;
      
      
//    }
// })

//==============================================================================================
// var data = [

// <?php 
// $color = array("4f9dff","277de8","206dcc","1a5aa8","164987");
// foreach ($top_commodity as $key => $value)
//   {
//     $isi_total[] = $value['total']; 
//   }
// $total = array_sum($isi_total);
// foreach ($top_commodity as $key => $value) { ?>
//  {
//   label: "<?php// echo quotes_to_entities(round($value['total'] / $total * 100, 2) .'% (' .$value['total']. ') - ' .$value['code'].' - '.$value['short_description']) ?>",
//   data: <?php// echo $value['total'] ?>,
//   color: "#<?php// echo $color[$key] ?>",
// },
// <?php// } ?>

// ];
// console.log(data);  
// var plotObj = $.plot($("#top_five_graph"), data, {
//   series: {
//     pie: {
//       show: true,
//       radius: 1,
//       // label: {
//       //           show: true,
//       //           radius: 1/3,
//       //           background: {
//       //               opacity: 0.5,
//       //               color: '#000'
//       //           },
//       //           //formatter: labelFormatter,
//       //           //threshold: 0.1
//       //       }
//     }
//   },
//   legend: {
//     show: true,
//     position: 'sw',
//     container: $("#top_five_graph_legend")
//   },
//   grid: {
//     hoverable: true
//   },
//   tooltip: true,
//   tooltipOpts: {
//             content: function(label, xval, yval) {
//                     var content = "%s";//"%p.2% (" + yval +") - %s";
//                     return content;
//                   }, // show percentages, rounding to 2 decimal places
//             shifts: {
//               x: 20,
//               y: 0
//             },
//             defaultTheme: false
//           }
//         });

 });


</script>


<script type="text/javascript">


  jQuery.extend({
    getCustomJSON: function(url) {
      var result = null;
      $.ajax({
        url: url,
        type: 'get',
        dataType: 'json',
        async: false,
        success: function(data) {
          result = data;
        }
      });
      return result;
    }
  });

  function detailFormatter(index, row, url) {

    var mydata = $.getCustomJSON("<?php echo site_url('Procurement') ?>/"+url);

    var html = [];
    $.each(row, function (key, value) {
     var data = $.grep(mydata, function(e){ 
       return e.field == key; 
     });

     if(typeof data[0] !== 'undefined'){

       html.push('<p><b>' + data[0].alias + ':</b> ' + value + '</p>');
     }
   });

    return html.join('');

  }

  function operateFormatter(value, row, index) {
    var link = "<?php echo site_url('procurement/daftar_pekerjaan') ?>";
    return [
    '<a class="btn btn-primary btn-xs action" href="'+link+'/proses/'+value+'">',
    'Proses',
    '</a>  ',
    ].join('');
  }

  function operateFormatter2(value, row, index) {
    var link = "<?php echo site_url('procurement/daftar_pekerjaan') ?>";
    return [
    '<a class="btn btn-primary btn-xs action" href="'+link+'/proses_tender/'+value+'">',
    'Proses',
    '</a>  ',
    ].join('');
  }


  function totalTextFormatter(data) {
    return 'Total';
  }
  function totalNameFormatter(data) {
    return data.length;
  }
  function totalPriceFormatter(data) {
    var total = 0;
    $.each(data, function (i, row) {
      total += +(row.price.substring(1));
    });
    return '$' + total;
  }

</script>


<script type="text/javascript">

  var $table_pekerjaan_pr = $('#table_pekerjaan_pr'),
  $table_pekerjaan_rfq = $('#table_pekerjaan_rfq'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $table_pekerjaan_pr.bootstrapTable({

      url: "<?php echo site_url('Procurement/data_pekerjaan_pr') ?>",
      striped:true,
      selectItemName:"list",
      sidePagination:"server",
      smartDisplay:false,
      cookie:true,
      cookieExpire:"1h",
      cookieIdTable:"daftar_pekerjaan_pr",
      showExport:false,
      exportTypes:['json', 'xml', 'csv', 'txt', 'excel'],
      showFilter:true,
      flat:true,
      keyEvents:false,
      showMultiSort:false,
      
      reorderableColumns:false,
      resizable:false,
      pagination:true,
      cardView:false,
      detailView:false,
      search:true,
      showRefresh:true,
      showToggle:true,
      idField:"ppc_id",
      
      showColumns:true,
      columns: [
      {
        field: 'ppc_id',
        title: '#',
        align: 'center',
        width:'8%',
        valign: 'middle',
        formatter: operateFormatter,
      },
      {
        field: 'pr_number',
        title: 'No. PR',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
        width:'20%',
      },

      {
        field: 'pr_subject_of_work',
        title: 'Nama Pekerjaan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
        width:'30%',
      },
     
      {
        field: 'activity',
        title: 'Aktifitas',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
        width:'20%',
      },
      ]

    });
setTimeout(function () {
  $table_pekerjaan_pr.bootstrapTable('resetView');
}, 200);

$table_pekerjaan_pr.on('expand-row.bs.table', function (e, index, row, $detail) {
  $detail.html(detailFormatter(index,row,"alias_pr"));
});

});

</script>

<script type="text/javascript">

  $(function () {

    $table_pekerjaan_rfq.bootstrapTable({

      url: "<?php echo site_url('Procurement/data_pekerjaan_rfq') ?>",
      striped:true,
      selectItemName:"list",
      sidePagination:"server",
      smartDisplay:false,
      cookie:true,
      cookieExpire:"1h",
      cookieIdTable:"daftar_pekerjaan_rfq",
      showExport:false,
      exportTypes:['json', 'xml', 'csv', 'txt', 'excel'],
      showFilter:true,
      flat:true,
      keyEvents:false,
      showMultiSort:false,
      
      reorderableColumns:false,
      resizable:true,
      pagination:true,
      cardView:false,
      detailView:false,
      search:true,
      showRefresh:true,
      showToggle:true,
      idField:"ptc_id",
      
      showColumns:true,
      columns: [
      {
        field: 'ptc_id',
        title: '#',
        align: 'center',
        width:'8%',
        valign: 'middle',
        formatter: operateFormatter2,
      },
      {
        field: 'ptm_number',
        title: 'No. Tender',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
        width:'20%',
      },
       {
        field: 'ptm_subject_of_work',
        title: 'Nama Pekerjaan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
        width:'30%',
      },
     
      {
        field: 'activity',
        title: 'Aktifitas',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
        width:'20%',
      },
      ]

    });
setTimeout(function () {
  $table_pekerjaan_rfq.bootstrapTable('resetView');
}, 200);

$table_pekerjaan_rfq.on('expand-row.bs.table', function (e, index, row, $detail) {
  $detail.html(detailFormatter(index,row,"alias_rfq"));
});

});

 <?=$this->session->flashdata('welcome')?>

</script>