<div class="wrapper wrapper-content">

  <div class="row hidden-print">
    <div class="form-group">
    <div class="col-xs-3">
      <label for="semua_tahun_aset" class="col-sm-5 control-label">Tahun Aset:</label>
      <select id="semua_tahun_aset" class="form-control">
        <!-- <?php //foreach ($semua_tahun_aset as $value) { ?>
            <option value="<?php //print_r($value['semua_tahun_aset']) ?>"><?php //print_r($value['semua_tahun_aset']) ?></option>
        <?php// } ?> -->
      </select>
    </div>
    </div>
  </div>
  <br/>

<!-- ============================================================================================= -->
 
 
  
    <div class="row text-center">

        <div class="col-lg-4">
          <div class="ibox float-e-margins">
            <div class="ibox-title">
             <h5>Jumlah Aset Aktif</h5>
            </div>
            <div class="ibox-content">

            <h1 class="no-margins"><?php print_r(number_format( $jumlahaset->jumlah , 0 , ',' , '.' )) ?></h1>
              <small></small>
            </div>
          </div>
        </div>
  
      <div class="col-lg-3">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5 id="title_jumlah_aset"></h5>
          </div>
          <div class="ibox-content">
          <!-- Tambah Id -->
            <h1 class="no-margins" id="jumlahast"></h1> 
            <small></small>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5 id="title_harga_aset"></h5>
          </div>
          <div class="ibox-content">
          <!-- Tambah Id -->
            <h1 class="no-margins" id="hargaaset"></h1>
            <small></small>
          </div>
        </div>
      </div>

    </div>


<!-- ============================================================================================ -->
  

<!-- ============================================================================================ -->
    <div class="row">

      <div class="col-md-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Monitor Jumlah Aset - Jenis ASDP</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div>
          <div class="ibox-content">

          <div id="container"></div>

          </div>
        </div>
      </div>
      
    </div>

<!-- =========================================================================================== -->
    





  
    



    
<!-- ======================================================================================== -->
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Monitor Jumlah Aset - Cabang</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
          </div>
        </div>
        <div class="ibox-content">

        <div id="container2"></div>

        <br/>
<!-- ======================================================================================== -->
          <div class="row">
            <div class="col-lg-12"  id="koleps">
              <div class="ibox float-e-margins">
                <div class="ibox-title">
                  <h5 id="title_container_table">Monitor Jumlah Aset</h5>
                  
                </div>
                <!-- Tambah DIV + Table ++ -->
                <div class="ibox-content">
                  
                  <div class="row">
                
                <div class="col-lg-4">
                  <div id="container_table" style="min-width: 310px; height: auto; margin: 5 auto">
                    <!-- <table id="tabel_kapal" class="display" style="width:100%"></table> -->
                    <!-- ==================================================== -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tabel_Terminal" aria-controls="tabel_Terminal" role="tab" data-toggle="tab">Terminal</a></li>
                        <li role="presentation"><a href="#tabel_kapal" aria-controls="tabel_kapal" role="tab" data-toggle="tab">Kapal</a></li>
                        <li role="presentation"><a href="#tabel_tanah" aria-controls="tabel_tanah" role="tab" data-toggle="tab">Tanah</a></li>
                    </ul>
                    <!-- =================================================== -->
                    <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tabel_Terminal">
                    <table id="Terminal-ss" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Terminal</th>
                          </tr>
                      </thead>
                      <tbody>
                          
                      </tbody>
                    </table>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade" id="tabel_kapal">
                    <!-- <table id="tabel_Terminal" class="display" style="width:100%"></table> -->
                    <table id="kapal-ss" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Kapal</th>
                          </tr>
                      </thead>
                      <tbody>
                          
                      </tbody>
                    </table>
                    </div>
                    
                   <div role="tabpanel" class="tab-pane fade" id="tabel_tanah">
                    <!-- <table id="tabel_Terminal" class="display" style="width:100%"></table> -->
                    <table id="tanah-ss" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Tanah</th>
                          </tr>
                      </thead>
                      <tbody>
                          
                      </tbody>
                    </table>
                  </div>
                  </div>
                  </div>
                </div>

                <div class="col-lg-8" style="height: 550px">
                  <!-- <div id="container_maps" style="min-width: 310px; height: 400px; margin: 5 auto">
                    <img id="maps-Terminal" />
                  </div> -->
                  <div class="carousel-container" id="carousel-map">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators" id="indicators">
                        </ol>
                        <div class="carousel-inner" id="homepageItems" role="listbox" style=" width:100%; height: auto !important;">
                        </div>
                        <div class="carousel-controls" id="carousel-map-ctrl"> 
                          <a class="carousel-control left" href="#myCarousel" data-slide="prev"> 
                            <span class="glyphicon glyphicon-chevron-left"></span> 
                          </a>
                          <a class="carousel-control right" href="#myCarousel" data-slide="next"> 
                            <span class="glyphicon glyphicon-chevron-right"></span> 
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
                
                  </div>
                </div>
                
              </div>
            </div>
              
          </div>
  <!-- ===================================================================================== -->
        </div>
      </div>
    </div>
  </div>
<!-- ========================================================================================= -->
  <div align="center">
    <btn class="btn btn-info hidden-print" onclick="printToPdf()">Print to PDF</btn>
  </div> 

</div>

 

    <!-- Modal -->
  <div class="modal fade" id="modal_det_Terminal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 850px; height: 800px auto; overflow:auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="title_Terminal"></h4>
        </div>
        <div class="modal-body">
         <!-- <div class="form-group">
          <label class="col-md-4 control-label">Cabang:</label>
            <p class="form-control-static" style="overflow: auto;" id="Terminal_det_cabang"></p>
          </div>
         <div class="form-group">
          <label class="col-md-4 control-label">Lokasi:</label>
            <p class="form-control-static" style="overflow: auto;" id="Terminal_det_lokasi"></p>
          </div> -->
         <!-- <div class="form-group">
          <label class="col-md-4 control-label">No. Sertipikat:</label>
            <p class="form-control-static" style="overflow: auto;" id="Terminal_det_sertifikat"></p>
        </div> -->
         <!-- <div class="form-group">
          <label class="col-md-4 control-label">Tanggal Penerbitan:</label>
            <p class="form-control-static" style="overflow: auto;" id="Terminal_det_tgl"></p>
        </div> -->
         <!-- <div class="form-group">
          <label class="col-md-4 control-label">Luas:</label>
            <p class="form-control-static" style="overflow: auto;" id="Terminal_det_luas"></p>
        </div>
         <div class="form-group">
          <label class="col-md-4 control-label">Nama Pemegang Hak:</label>
            <p class="form-control-static" style="overflow: auto;" id="Terminal_det_pemegang_hak"></p>
        </div>
         <div class="form-group">
          <label class="col-md-4 control-label">Status:</label>
            <p class="form-control-static" style="overflow: auto;" id="Terminal_det_status"></p>
        </div> -->
         <!-- <div class="form-group">
          <label class="col-md-4 control-label">Berlaku S/D:</label>
            <p class="form-control-static" style="overflow: auto;" id="Terminal_det_berlaku"></p>
        </div> -->
         <!-- <div class="form-group">
          <label class="col-md-4 control-label">Status Operasional:</label>
            <p class="form-control-static" style="overflow: auto;" id="Terminal_det_operasional"></p>
        </div> -->
<!-- =========================================================================================== -->
          <table id="Terminal-detail" class="table table-bordered table-striped nowrap" width="100%">
              <thead>
                  <tr>
                      <th>Cabang</th>

                      <th>No. Sertipikat</th>
                  
                      <th>Tanggal Penerbitan</th>
                  
                      <th>Berlaku S/D</th>

                      <th>Lokasi</th>

                      <th>Luas (m<sup>2</sup>)</th>

                      <th>Nama Pemegang Hak</th>

                      <th>Status</th>

                      <th>Status Operasional</th>
                  </tr>
              </thead>
              <tbody>
                          
              </tbody>
          </table>
<!-- =============================================================================================== -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
   <!-- Modal -->
<div class="modal fade" id="modal_det_tanah" role="dialog" aria-hidden="true">
    <div class="modal-dialog">

   <!-- Modal content-->
      <div class="modal-content" style="width: 850px; height: 800px auto; overflow:auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="title_tanah"></h4>
        </div>
        <div class="modal-body">
         <div class="form-group">
          <label class="col-md-4 control-label">Volume:</label>
            <p class="form-control-static" style="overflow: auto;" id="tanah_det_volume"></p>
          </div>
         <div class="form-group">
          <label class="col-md-4 control-label">Satuan:</label>
            <p class="form-control-static" style="overflow: auto;" id="tanah_det_satuan"></p>
          </div>
         <div class="form-group">
          <label class="col-md-4 control-label">Tahun Perolehan:</label>
            <p class="form-control-static" style="overflow: auto;" id="tanah_det_tahun_perolehan"></p>
        </div>
         <div class="form-group">
          <label class="col-md-4 control-label">Harga Perolehan:</label>
            <p class="form-control-static" style="overflow: auto;" id="tanah_det_harga_perolehan"></p>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Cabang:</label>
            <p class="form-control-static" style="overflow: auto;" id="tanah_det_cabang"></p>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Lokasi:</label>
            <p class="form-control-static" style="overflow: auto;" id="tanah_det_lokasi"></p>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">No. Sertipikat:</label>
            <p class="form-control-static" style="overflow: auto;" id="tanah_det_sertifikat"></p>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Tanggal Penerbitan:</label>
            <p class="form-control-static" style="overflow: auto;" id="tanah_det_tgl"></p>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Nama Pemegang Hak:</label>
            <p class="form-control-static" style="overflow: auto;" id="tanah_det_pemegang_hak"></p>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Status:</label>
            <p class="form-control-static" style="overflow: auto;" id="tanah_det_status"></p>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Berlaku S/D:</label>
            <p class="form-control-static" style="overflow: auto;" id="tanah_det_berlaku"></p>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</div>


  
  <!--<script src="https://code.highcharts.com/stock/highstock.js"></script>-->
  <script src="<?php echo base_url()?>/assets/js/highcharts/highcharts.js"></script>
  <script src="<?php echo base_url()?>/assets/js/highcharts/data.js"></script>
  <script src="<?php echo base_url()?>/assets/js/highcharts/drilldown.js"></script>


  <script type="text/javascript">
  
  function printToPdf(){
  var css = '@page {size: auto; margin: 0 auto;}',
      head = document.head || document.getElementsByTagName('head')[0],
      style = document.createElement('style');

  style.type = 'text/css';
  style.media = 'print';

  if (style.styleSheet){
    style.styleSheet.cssText = css;
  } else {
    style.appendChild(document.createTextNode(css));
  }

  head.appendChild(style);

  window.print();
}
  
  function pembulatanNilaiBuku(y){
    var xy = y / 1000000000;
    
    //if (xy > 1) {
      var yy = Math.trunc(xy);
    
    //} else {
      //var yy = xy;
    
    //}

    return yy;
  }

  function addCommas(nStr) {
    
    if (nStr == null) {
      nStr = 0;
      console.log(nStr);
    }

    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
  }


  function HCdrilldown(chartdepan, drilldown1, semua_tahun_aset){

  var data = [];
  var drillDown = [];

  var urlDasar = "<?php echo base_url(); ?>";
  if (chartdepan.length > 0) {
    //console.log(data);
    // for (var i = 0; i < chartdepan.length; i++) {

    //   var y = pembulatanNilaiBuku(chartdepan[i].y);
      
    //   data[i] = {
    //     name: chartdepan[i].name,
    //     y: y,
    //     drilldown: chartdepan[i].name,
    //     ownURL: '#'
    //   }
    // }
//console.log(data);  
    $.each(chartdepan, function (key, value){
      
      var y = pembulatanNilaiBuku(value.y);
        //console.log(y);
        data.push({name: value.name, y: y, drilldown: value.name, ownURL: '#'});
    })


    $.each(drilldown1, function (key, value){
      var satad = [];
      $.each(value, function (k, v){
        //console.log(k, v);
        var y = pembulatanNilaiBuku(v.y);
        if (v.jenis_asdp_id == 15 || v.jenis_asdp_id == 7 || v.jenis_asdp_id == 3) {

          satad.push({name: v.name, y: y, asdp_id:v.district_id, ownURL: urlDasar+"aset/submit_report?id_district_inp=&id_dept_inp=&id_jenis_asdp_inp="+v.jenis_asdp_id+"&id_ship="+v.district_id})
        
        } else {
          
          if (v.district_id == 1) {
          
          satad.unshift({name: v.name, y: y, asdp_id:v.district_id, ownURL: urlDasar+"aset/submit_report?id_district_inp="+v.district_id+"&id_dept_inp=&id_jenis_asdp_inp="+v.jenis_asdp_id+"&id_ship="})  
          
          }else{
          
          satad.push({name: v.name, y: y, asdp_id:v.district_id, ownURL: urlDasar+"aset/submit_report?id_district_inp="+v.district_id+"&id_dept_inp=&id_jenis_asdp_inp="+v.jenis_asdp_id+"&id_ship="})
          }
        }
      })
      //console.log(satad);
       drillDown.push({'name': key, 'id': key, 'data':satad})
     })
    // $.each(drilldown2, function (key, value){
    //    drillDown.push({'name': key, 'id': key, 'data':value})
    //  })

  } else {
    data = 0;
    drillDown = 0;
  }  
  
  Highcharts.setOptions({
    lang: {
        decimalPoint: ',',
        thousandsSep: '.',
        numericSymbols: null 
    }
  });
  //console.log(drillDown);
   Highcharts.chart('container', {
       chart: {
           //tambah
           marginLeft: 100,
           marginRight: 100, 
           type: 'column',
           events: {
            drilldown: function(e) {
                this.setTitle({ text: e.point.name });
                $('#koleps').hide();
                $('.zoom_out').remove();
                $('.right').remove();
                $('.left').remove();
                $('.zoom_in').show();
                //var _self = this.xAxis[0];
                    //console.log(e.target.userOptions);
                // if(this.options.asdp_id == 3 || this.options.asdp_id == 15 || this.options.asdp_id == 7){
                  
                // }
            },
            drillup: function(e) {
                this.setTitle({ text: 'Nilai Buku ' + semua_tahun_aset });
                $('#koleps').hide();
                $('.zoom_out').remove();
                $('.right').remove();
                $('.left').remove();
                $('.zoom_in').show();
            },
            // load: function(e){

            // }
          }
       },
       title: {
           text: 'Nilai Buku ' + semua_tahun_aset
       },
       // scrollbar: {
       //      enabled: true
       //},
       xAxis: {
           type: 'category',
           labels: {
                style: {
                  //color: 'red',
                  font: 'Arial, sans-serif'
              },

              // softMin: 0,
              // softMax: 5,
            },

            showEmpty: true,
            
       },
       yAxis: {
           title: {
               text: 'Milyar'
           },
       },
       credits: {
          enabled: false
       },
      //  point: {
      //   events: {
      //     click: function() {
      //       if (this.link) {
      //         window.open(
      //           this.link,
      //           '_blank'
      //         );
      //       }
      //     }
      //   }
      // },
       legend: {
           enabled: false
       },
       plotOptions: {
           series: {
               borderWidth: 0,
               dataLabels: {
                   enabled: true,
                   format: '{point.y:,.0f}'
               },
               point: {
                events: {
                  click: function() {
                    if (this.options.ownURL != null) {
                      window.open(this.options.ownURL)
                    }
                  }

                  // load: function() {
                  //   if (this.options.asdp_id == 15 || this.options.asdp_id == 7 || this.options.asdp_id == 3) {
                  //     setScrollbar({enabled: false});
                  //   }
                  // }

                }
              }
           }
       },

       tooltip: {
           headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
           pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
       },

         series: [{
            name: 'Nilai Buku',
            //colorByPoint: true,
            data: data
        }],



        drilldown: {
          activeAxisLabelStyle: {
                cursor: 'pointer',
                color: '#666666',
                fontWeight: 'bold',
                textDecoration: 'none'          
            },
            drillUpButton: {
            relativeTo: 'spacingBox',
            position: {
                y: 0,
                x: 0
            },
            theme: {
                fill: 'white',
                'stroke-width': 1,
                stroke: 'silver',
                r: 0,
                states: {
                    hover: {
                        fill: '#a4edba'
                    },
                    select: {
                        stroke: '#039',
                        fill: '#a4edba'
                    }
                }
            }

        },
            series: drillDown
        }
   }, 
   function(chart) { // on complete
    
    function noop(){};
    
    chart.renderer.button('Zoom In', chart.marginLeft + chart.marginWidth , chart.marginTop + chart.marginHeight + 30, noop).addClass('zoom_in').add();


      $('.zoom_in').click(function() {
        var jkjk = 0;
        var jkjkj = 3;
        $('.zoom_in').hide();
        chart.xAxis[0].setExtremes(jkjk, jkjk + 3);

        chart.renderer.button('Zoom Out', chart.marginLeft + chart.marginWidth , chart.marginTop + chart.marginHeight + 30, noop).addClass('zoom_out').add();

        chart.renderer.button('<', chart.plotLeft - 60, chart.plotHeight + chart.plotTop, noop).addClass('left').add();


        chart.renderer.button('>', chart.plotLeft + chart.plotWidth + 30, chart.plotHeight + chart.plotTop, noop).addClass('right').add();

        $('.left').click(function() {
          if (jkjk == 0) { jkjk = jkjkj } else { jkjk = jkjk }
          chart.xAxis[0].setExtremes(jkjk - jkjkj, jkjk);
          jkjk = jkjk - jkjkj;
        });
        $('.right').click(function() {
          jkjk = jkjk + jkjkj;
          chart.xAxis[0].setExtremes(jkjk, jkjk + jkjkj);
        });
        $('.zoom_out').click(function() {
          chart.xAxis[0].setExtremes(null, null);
          $('.zoom_out').remove();
          $('.right').remove();
          $('.left').remove();
          $('.zoom_in').show();
        });
      
      });

      
  })
}

function HCdrilldown2(chartdepan, drilldown1, semua_tahun_aset){

  var data = [];
  var drillDown = [];
  var urlDasar = "<?php echo base_url('uploads/administration/')?>" ;
  console.log(data);


  if (chartdepan.length > 0) {

    // for (var i = 0; i < chartdepan.length; i++) {
    //     var y = pembulatanNilaiBuku(chartdepan[i].y);
    //   data[i] = {
    //     name: chartdepan[i].name,
    //     y: y,
    //     drilldown: chartdepan[i].name,
    //     cabang: chartdepan[i].district_id
    //   }
    // }

    $.each(chartdepan, function (key, value){
      // console.log(value);
      var y = pembulatanNilaiBuku(value.y);
      if(value.district_id == 1){
        data.unshift({name: value.name, y: y, drilldown: value.name, cabang: value.district_id})
      }else {
        data.push({name: value.name, y: y, drilldown: value.name, cabang: value.district_id})
      }
    })


    $.each(drilldown1, function (key, value){
      var atasd = [];
      $.each(value, function (k, v){
          var y = pembulatanNilaiBuku(v.y);
          atasd.push({name:v.name, y:y});
        });

       drillDown.push({'name': key, 'id': key, 'data':atasd})
     })
    // $.each(drilldown2, function (key, value){
    //    drillDown.push({'name': key, 'id': key, 'data':value})
    //  })

  } else {
    data = 0;
    drillDown = 0;
  }

  Highcharts.setOptions({
    lang: {
        decimalPoint: ',',
        thousandsSep: '.',
        numericSymbols: null 
    }
  });

   Highcharts.chart('container2', {
       chart: {
           marginLeft: 100,
           marginRight: 100,
           type: 'column',
           events: {
            drilldown: function(e) {
                this.setTitle({ text: e.point.name });
                $('#title_container_table').html('Monitor Jumlah Aset - '+e.point.name);
                //console.log(e.point.cabang);
                $('#koleps').show();
                $('.zoom_out1').remove();
                $('.right1').remove();
                $('.left1').remove();
                $('.zoom_in1').show();

                  // $("#mytable").dataTable({...
                                         
                  //         });
                $.ajax({
                        url : "<?php echo base_url().'log/kapal_Terminal_maps'?>",
                        type : "POST",
                        data : {cabang: e.point.cabang, aset_per_tahun: semua_tahun_aset},
                        beforeSend: function(){
                          if ($.fn.DataTable.isDataTable("#kapal-ss")) {
                            $('#kapal-ss').DataTable().clear().destroy();
                              }
                            
                          if ($.fn.DataTable.isDataTable("#Terminal-ss")) {
                            $('#Terminal-ss').DataTable().clear().destroy();
                              }

                          if ($.fn.DataTable.isDataTable("#tanah-ss")) {
                            $('#tanah-ss').DataTable().clear().destroy();
                              }
                         
                            //$("#myCarousel").remove();
                            }

                          }).done(function(data) {
                        // success : function(data) {
                            
                            var data = JSON.parse(data);
                            //console.log(data);
                            var lat;
                            var lng;
                            var kpl = [];
                            var plbhn = [];
                            var tnh = [];

                            var response = '';
                            var indicator = '';

                            $.each(data.kapal, function(key, value){
                              kpl.push(value);
                            })

                            $.each(data.Terminal, function(key, value){
                              plbhn.push(value);
                            })

                            $.each(data.tanah, function(key, value){
                              tnh.push(value);
                            })

                           // console.log(kpl.Kapal);
                           var DTKapal = $('#kapal-ss').DataTable({
                              //"sPaginationType": "bootstrap",
                              autoWidth: false,
                              pageLength: 10,
                              "searching": false,
                              "bPaginate": true,
                              "bLengthChange": false,
                              "bFilter": true,
                              "bInfo": false,
                              responsive: true,
                              "columnDefs": [   ////define column 1 , make searchable false 
                                {
                                    "searchable": false,
                                    "targets": 0,
                                    "width": "6%",


                                },
                              ],
                              "data": kpl,
                              "columns": [
                                 { 'data': "Kapal" },]
                            });

                            $('#kapal-ss tbody > tr ').on('click', function () {
                                var data = DTKapal.row( this ).data();
                               // console.log('<img src="'+urlDasar+'/'+data.detail+'">"</img>');
                                if (data.detail !== null) {

                                  window.open(urlDasar+'/'+data.detail, '_blank');
                                
                                } else {
                                  alert('Tidak Ada Detail');
                                
                                }
                            } );

                            var DTTerminal = $('#Terminal-ss').DataTable({
                              //"sPaginationType": "bootstrap",
                              autoWidth: false,
                              pageLength: 10,
                              "searching": false,
                              "bPaginate": true,
                              "bLengthChange": false,
                              "bFilter": true,
                              "bInfo": false,
                              responsive: true,
                              "columnDefs": [   ////define column 1 , make searchable false 
                                {
                                    "searchable": false,
                                    "targets": 0,
                                    "width": "6%",


                                },
                              ],
                              "data": plbhn,
                              "columns": [
                                 { 'data': "Terminal" },]
                            });

                            var response = '',
                                indicator = '';
                                //console.log(data.id);
                            $('#Terminal-ss tbody > tr ').on('click', function () {
                                var data = DTTerminal.row( this ).data();
                               // console.log('<img src="'+urlDasar+'/'+data.detail+'">"</img>');
                                if (data.id !== null) {
                                  //console.log(data.id);
                                  $.ajax({
                                    url: "<?php echo base_url().'log/detail_Terminal'?>",
                                    type : "POST",
                                    data : {id: data.id, aset_per_tahun: semua_tahun_aset},
                                    beforeSend: function(){
                                        if ($.fn.DataTable.isDataTable("#Terminal-detail")) {
                                          $('#Terminal-detail').DataTable().clear().destroy();
                                            }
                                      },
                                    success: function(res){

                                      var res = JSON.parse(res);
                                      // var title;
                                      // var cabang;
                                      // var luas;
                                      // var pemegang_hak;
                                      // var operasional;
                                      // var det_pel;

                                      // $.each(res, function(k, v){
                                      //   console.log(v.title);
                                      //   title = v.title;
                                      //   pemegang_hak = v.pemegang_hak;
                                        // if (res[0].status == 1) 
                                        // {
                                        //   status = 'Aktif';
                                        // } else if (v.status == 0) 
                                        // {
                                        //   status = 'Tidak Aktif'
                                        // } else 
                                        // {
                                        //   status == 'Tidak Tercantum'
                                        // }

                                        // if (res[0].satuan != null) {
                                        //   satuan = res[0].satuan;
                                        // } else {
                                        //   satuan = ' ';
                                        // }
                                      //   cabang = v.cabang;
                                      //   operasional = v.operasional;
                                      //   luas = v.luas;
                                      //   det_pel = v.det_pel;
                                      // })

                                    //console.log(data);
                                       $("#title_Terminal").html(data.Terminal);
                                      // $("#Terminal_det_cabang").html(res[0].cabang);
                                      // $("#Terminal_det_lokasi").html(res[0].title);
                                      // // $("#Terminal_det_sertifikat").html(res[0].sertifikat);
                                      // // $("#Terminal_det_tgl").html(res[0].tgl);
                                      // $("#Terminal_det_luas").html(addCommas(res[0].luas) +' '+satuan); //+' m<sup>2</sup>');
                                      // $("#Terminal_det_pemegang_hak").html(res[0].pemegang_hak);
                                      // $("#Terminal_det_status").html(status);
                                      // //$("#Terminal_det_berlaku").html(res[0].berlaku);
                                      // $("#Terminal_det_operasional").html(res[0].operasional);
//=================================================================================================
                                      $('#Terminal-detail').DataTable({
                                        //"sPaginationType": "bootstrap",
                                        autoWidth: false,
                                        pageLength: 10,
                                        "searching": false,
                                        "bPaginate": true,
                                        "bLengthChange": false,
                                        "bFilter": true,
                                        "bInfo": false,
                                        responsive: true,
                                        
                                        "data": res,
                                        "columns": [
                                           { 'data': "title" },
                                           { 'data': "sertifikat" },
                                           { 'data': "tgl" },
                                           { 'data': "berlaku" },
                                           { 'data': "cabang" },
                                           { 'data': "luas" },
                                           { 'data': "pemegang_hak" },
                                           { 'data': "status" },
                                           { 'data': "operasional" },]
                                      });
//================================================================================================
                                      $("#modal_det_Terminal").modal('show');
                                    }
                                  })
                                
                                } else {
                                  alert('Tidak Ada Detail');
                                
                                }
                            } );


                            var DTTanah = $('#tanah-ss').DataTable({
                              //"sPaginationType": "bootstrap",
                              autoWidth: false,
                              pageLength: 10,
                              "searching": false,
                              "bPaginate": true,
                              "bLengthChange": false,
                              "bFilter": true,
                              "bInfo": false,
                              responsive: true,
                              "columnDefs": [   ////define column 1 , make searchable false 
                                {
                                    "searchable": false,
                                    "targets": 0,
                                    "width": "6%",


                                },
                              ],
                              "data": tnh,
                              "columns": [
                                 { 'data': "Tanah" },]
                            });

                            $('#tanah-ss tbody > tr ').on('click', function () {
                                var data = DTTanah.row( this ).data();
                               // console.log(data);

                                if (data.id !== null) {

                                  $.ajax({
                                    url: "<?php echo base_url().'log/detail_tanah'?>",
                                    type : "POST",
                                    data : {id: data.id, aset_per_tahun: semua_tahun_aset},
                                    success: function(pon){
                                      var pon = JSON.parse(pon);
                                    // console.log(pon[0].pemegang);
                                      $("#title_tanah").html(pon[0].title);
                                      $("#tanah_det_volume").html(pon[0].volume);
                                      $("#tanah_det_satuan").html(pon[0].satuan);
                                      $("#tanah_det_tahun_perolehan").html(pon[0].tahun_perolehan);
                                      $("#tanah_det_harga_perolehan").html('Rp. '+addCommas(pon[0].harga_perolehan)+',-');
                                      $("#tanah_det_cabang").html(pon[0].cabang);
                                      $("#tanah_det_lokasi").html(pon[0].lokasi);
                                      $("#tanah_det_sertifikat").html(pon[0].sertifikat);
                                      $("#tanah_det_tgl").html(pon[0].tgl);
                                      //$("#tanah_det_luas").html(pon[0].volume);
                                      $("#tanah_det_pemegang_hak").html(pon[0].pemegang);
                                      $("#tanah_det_status").html(pon[0].status);
                                      $("#tanah_det_berlaku").html(pon[0].berlaku);
                                      $("#modal_det_tanah").modal('show');
                                    }
                                  })
                                
                                } else {
                                  alert('Tidak Ada Detail');
                                
                                }
                            } );


                            //console.log(urlDasar+'/'+ data.gambar[0].gambar_maps);
                            if (data.gambar.length > 0) {
                            $('#carousel-map').show();
                            for (var i = 0; i < data.gambar.length; i++) {
                                  response += '<div class="item"><img src="'+urlDasar+'/'+ data.gambar[i].gambar_maps + '" ><div class="carousel-caption" style="position: absolute; top: 0;"><h3>' + data.gambar[i].name + '</h3></div></div>';
                                  indicator += '<li data-target="#myCarousel" data-slide-to="'+i+'"></li>';}
                              $('#homepageItems').html(response);
                              $('#indicators').html(indicator);
                              $('.item').first().addClass('active');
                              $('.carousel-indicators > li').first().addClass('active');
                              $("#myCarousel").carousel({
                                interval: 3000
                              });
                            }
                            // $('#kapal-Terminal').remove();
                            // $('#Terminal-kapal').remove();
                            //console.log(data);
                            // $.each(data.koordinat, function(key, val){
                            //   lat = val.lat;
                            //   lng = val.lng;
                            // });
                            // if (lat != null && lng != null) {
                              
                            //   $('#container_maps').show();
                            //   initMap(lat, lng);

                            // } else {
                            //   $('#container_maps').hide();
                            // }
                           //makeTabelKapal(data.kapal);
                            // var dataTerminal = eval(data.Terminal);
                            // var tableTerminal = $.makeTableTerminal(dataTerminal);
                            // $(tableTerminal).appendTo("#tabel_Terminal"); 
                            
                            
                            // var datakapal = eval(data.kapal);
                            // var tablekapal = $.makeTableKapal(datakapal);
                            // $(tablekapal).appendTo("#tabel_kapal");
                          });
                        
            },
            drillup: function(e) {
                this.setTitle({ text: 'Nilai Buku ' + semua_tahun_aset });
                $('#koleps').hide();
                $('.zoom_out1').remove();
                $('.right1').remove();
                $('.left1').remove();
                $('.zoom_in1').show();
            }}
       },
       title: {
           text: 'Nilai Buku ' + semua_tahun_aset
       },


       xAxis: {
           type: 'category',
           endOnTick: true,
           labels: {
                style: {
                  //color: 'red',
                  font: 'Arial, sans-serif'
              }
            },
       },
       
       credits: {
          enabled: false
       },
       

       yAxis: {
           title: {
               text: 'Milyar'
           },
       },
       legend: {
           enabled: false
       },
       plotOptions: {
           series: {
               borderWidth: 0,
               dataLabels: {
                   enabled: true,
                   format: '{point.y:,.0f}'
               },
               bar: {
                size: 100
               }
           }
       },

       tooltip: {
           headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
           pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b><br/>'
       },

         series: [{
            name: 'Nilai Buku',
            //colorByPoint: true,
            data: data
        }],



        drilldown: {
            activeAxisLabelStyle: {
                cursor: 'pointer',
                color: '#666666',
                fontWeight: 'bold',
                textDecoration: 'none'          
            },
            drillUpButton: {
            relativeTo: 'spacingBox',
            position: {
                y: 0,
                x: 0
            },
            theme: {
                fill: 'white',
                'stroke-width': 1,
                stroke: 'silver',
                r: 0,
                states: {
                    hover: {
                        fill: '#a4edba'
                    },
                    select: {
                        stroke: '#039',
                        fill: '#a4edba'
                    }
                }
            }

        },
            series: drillDown
        }
   }, 
   function(chart) { // on complete
    
    function noop(){};
    
    chart.renderer.button('Zoom In', chart.marginLeft + chart.marginWidth , chart.marginTop + chart.marginHeight + 30, noop).addClass('zoom_in1').add();


      $('.zoom_in1').click(function() {
        var kjkj = 0;
        var kjkjk = 3;
        $('.zoom_in1').hide();
        chart.xAxis[0].setExtremes(kjkj, kjkj + kjkjk);

        chart.renderer.button('Zoom Out', chart.marginLeft + chart.marginWidth , chart.marginTop + chart.marginHeight + 30, noop).addClass('zoom_out1').add();

        chart.renderer.button('<', chart.plotLeft - 60, chart.plotHeight + chart.plotTop, noop).addClass('left1').add();


        chart.renderer.button('>', chart.plotLeft + chart.plotWidth + 30, chart.plotHeight + chart.plotTop, noop).addClass('right1').add();

        $('.left1').click(function() {
          if (kjkj == 0) { kjkj = kjkjk } else { kjkj = kjkj } 
          chart.xAxis[0].setExtremes(kjkj - kjkjk, kjkj);
          kjkj = kjkj - kjkjk;
        });
        $('.right1').click(function() {
          kjkj = kjkj + kjkjk;
          chart.xAxis[0].setExtremes(kjkj, kjkj + kjkjk);
        });
        $('.zoom_out1').click(function() {
          chart.xAxis[0].setExtremes(null, null);
          $('.zoom_out1').remove();
          $('.right1').remove();
          $('.left1').remove();
          $('.zoom_in1').show();
        });
      
      });

      
  });
}

</script>


<script>

$( document ).ready(function(){
  //var myTable = $('#kapal-ss').DataTable();
  //var dataTable = [];
  
  $('#container_maps').hide();
  $('#koleps').hide();
  $('#carousel-map').hide();

  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
         .columns.adjust();
   });  

  var semua_tahun_aset = new Date().getFullYear();
  
  var tahunTahunAset = new Date().getFullYear();
    for(i = 0; i < 5; i++){
    
    if(tahunTahunAset >= 2017){
     $("#semua_tahun_aset").get(0).options[$("#semua_tahun_aset").get(0).options.length] = new Option(tahunTahunAset, tahunTahunAset);
    }
        tahunTahunAset=tahunTahunAset-1;
    }

  //console.log(semua_tahun_aset);
  $('#semua_tahun_aset option[value='+semua_tahun_aset+']').attr("selected","selected");
  $.ajax({
          url : "<?php echo base_url().'log/aset_per_tahun'?>",
          type : "POST",
          data : {aset_per_tahun: semua_tahun_aset},
          success : function(data) {
              var arai = JSON.parse(data);
              console.log(arai);
              $('#title_harga_aset').html('Nilai Buku Aset Total Per 31 Desember'+ ' ' + semua_tahun_aset +':');
              $('#title_jumlah_aset').html('Jumlah Aset ' + semua_tahun_aset);
              $('#jumlahast').html(addCommas(arai.jumlahaset));
              $('#hargaaset').html('Rp' + ' ' +arai.hargaaset);
              HCdrilldown(arai.chartdepan, arai.drilldown1, semua_tahun_aset);
              //HCdrilldown2(arai.chartdepan2, arai.drilldown1, arai.drilldown2, semua_tahun_aset);
            }
          
      });

  $.ajax({
          url : "<?php echo base_url().'log/aset_per_tahun'?>",
          type : "POST",
          data : {aset_per_tahun: semua_tahun_aset},
          success : function(data) {
              var arai = JSON.parse(data);
              //console.log(arai);
              HCdrilldown2(arai.chartdepan2, arai.drilldown1_chart2, semua_tahun_aset);
            }
          
      });




  $('#semua_tahun_aset').change(function(e){
    e.preventDefault();
    semua_tahun_aset = $('#semua_tahun_aset').val();
    $.ajax({
            url : "<?php echo base_url().'log/aset_per_tahun'?>",
            type : "POST",
            data : {aset_per_tahun: semua_tahun_aset},
            success : function(data) {
              var arai = JSON.parse(data);
              //console.log(arai);
              $('#title_harga_aset').html('Nilai Buku Aset Total Per 31 Desember'+ ' ' + semua_tahun_aset +':');
              $('#title_jumlah_aset').html('Jumlah Aset ' + semua_tahun_aset);
              $('#jumlahast').html(addCommas(arai.jumlahaset));
              $('#hargaaset').html('Rp' + ' ' +arai.hargaaset);
              HCdrilldown(arai.chartdepan, arai.drilldown1, semua_tahun_aset);
              //HCdrilldown2(arai.chartdepan, arai.drilldown1, arai.drilldown2, semua_tahun_aset);
              }
            
        });

    $.ajax({
          url : "<?php echo base_url().'log/aset_per_tahun'?>",
          type : "POST",
          data : {aset_per_tahun: semua_tahun_aset},
          success : function(data) {
              var arai = JSON.parse(data);
              //console.log(arai);
              HCdrilldown2(arai.chartdepan2, arai.drilldown1_chart2, semua_tahun_aset);
            }
          
      });

    $('#container_maps').hide();
    $('#koleps').hide();
    $('#carousel-map').hide();

    });


  // $('#cabang_aset').change(function(e){
  //   e.preventDefault();    
  //   var cabang_ast = $('#cabang_aset').val();
    
    // $.ajax({
    //   url : "<?php echo base_url().'log/kapal_Terminal_maps'?>",
    //   type : "POST",
    //   data : {cabang: cabang_ast},
    //   success : function(data) {
          
    //       var data = JSON.parse(data);
    //       var lat;
    //       var lng;
          
    //       $('#kapal-Terminal').remove();
    //       $('#Terminal-kapal').remove();
    //       //console.log(data);
    //       $.each(data.koordinat, function(key, val){
    //         lat = val.lat;
    //         lng = val.lng;
    //       });
    //       if (lat != null && lng != null) {
            
    //         $('#container_maps').show();
    //         initMap(lat, lng);

    //       } else {
    //         $('#container_maps').hide();
    //       }
                    
          
    //       var dataTerminal = eval(data.Terminal);
    //       var tableTerminal = $.makeTableTerminal(dataTerminal);
    //       $(tableTerminal).appendTo("#tabel_Terminal"); 
          
          
    //       var datakapal = eval(data.kapal);
    //       var tablekapal = $.makeTableKapal(datakapal);
    //       $(tablekapal).appendTo("#tabel_kapal");
    //     }
    //   });
    
    });

  
  
  // $.makeTableKapal = function (mydata) {
      
  //       var table = $("<table border=1 style='width: 250px; height: 40px;' id='kapal-Terminal'>");
  //       var tblHeader = "<tr>";
  //       for (var k in mydata[0]) tblHeader += "<th>" + k + "</th>";
  //       tblHeader += "</tr>";
  //       $(tblHeader).appendTo(table);
  //       $.each(mydata, function (index, value) {
  //           var TableRow = "<tr>";
  //           $.each(value, function (key, val) {
  //               TableRow += "<td>" + val + "</td>";
  //           });
  //           TableRow += "</tr>";
  //           $(table).append(TableRow);
  //       });
        
        

  //       return ($(table));
  //     };

  //     $.makeTableTerminal = function (mydata) {
      
  //       var table = $("<table border=1 style='width: 250px; height: 40px;' id='Terminal-kapal'>");
  //       var tblHeader = "<tr>";
  //       for (var k in mydata[0]) tblHeader += "<th>" + k + "</th>";
  //       tblHeader += "</tr>";
  //       $(tblHeader).appendTo(table);
  //       $.each(mydata, function (index, value) {
  //           var TableRow = "<tr>";
  //           $.each(value, function (key, val) {
  //               TableRow += "<td>" + val + "</td>";
  //           });
  //           TableRow += "</tr>";
  //           $(table).append(TableRow);
  //       });
  //       return ($(table));
  //     };
 // });
</script>

