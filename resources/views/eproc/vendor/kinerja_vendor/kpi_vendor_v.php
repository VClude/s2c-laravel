<?php if($dt == null){$dt = 0;}if($st == null){$st = 0;} ?>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Generate Bidder List</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>

        <div class="ibox-content">

          <form method="get" class="form-horizontal">

           <div class="form-group">
            <label class="col-sm-2 control-label">Item</label>
            <div class="col-sm-6">
              <div class="input-group">
                <span class="input-group-btn">
                 <button type="button" data-id="kode_item" data-url="<?php echo site_url(COMMODITY_KATALOG_BARANG_PATH.'/picker') ?>" class="btn btn-primary picker barang_btn">Barang</button> 
                 <button type="button" data-id="kode_item" data-url="<?php echo site_url(COMMODITY_KATALOG_JASA_PATH.'/picker') ?>" class="btn btn-primary picker jasa_btn">Jasa</button> 
               </span>
               <?php $curval = $this->session->userdata("item_gbl"); ?>
               <input type="text" class="form-control" id="kode_item" name="kode_item" value="<?php echo $curval ?>">

             </div>

           </div>

         </div>

         <div class="form-group">
         <?php $curval = $klasifikasi_gbl; ?>
           <label class="col-md-2 control-label">Klasifikasi</label>
           <div class="col-md-4">
             <select name="klasifikasi" id="klasifikasi" class="form-control">
             <option value="">Semua</option>
                <?php $pilihan=array(
                  "K" => 'Kecil',
                  "NK" => 'Non-Kecil',
                  );
                foreach($pilihan as $key => $val){
                  $selected = ($key == $curval) ? "selected" : ""; 
                  ?>
                  <option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $val ?></option>
                  <?php } ?>
              </select>
            </div>

            <div class="col-md-2">
              <span>Filter Berdasarkan :
                  <div class="checkbox">
                    <label><input type="checkbox" id="domtoggle" value="" <?php 
                  if($dt == 1){
                    echo "checked";
                  } ?>>Domisili Tanggal Kadaluarsa</label>
                </div>

                  <div class="checkbox">
                    <label><input type="checkbox" id="siuptoggle" value="" <?php 
                  if($st == 1){
                    echo "checked";
                  } ?>>Surat Izin Kadaluarsa</label>
                </div>
           </div>

          </div>
        

        </form>

        <div class="table-responsive">            

          <table id="kpi_vendor" class="table table-bordered table-striped"></table>

        </div>

      </div>
    </div>


  </div>
</div>
</div>

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

    var mydata = $.getCustomJSON("<?php echo site_url('Vendor') ?>/"+url);

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
    var link1 = "<?php echo site_url('vendor/view_kpi_vendor') ?>";
    var link = "<?php echo site_url('vendor/info_kpi_vendor') ?>";
    return [
    '<a class="btn btn-primary btn-xs action" target="_blank" href="'+link+'/'+value+'">',
    'Lihat',
    '</a>  ',
    '<a class="btn btn-primary btn-xs action" target="_blank" href="'+link1+'/'+value+'">',
    'Info',
    '</a>  ',
    ].join('');
  }

  function klasifikasiFormatter(value, row, index) {
    if(row['fin_class_name'] == 'Menengah' || row['fin_class_name'] == 'Besar'){
      return ['Non-Kecil'].join('');
    }
    else{
      return ['Kecil'].join('');
    }

  }
  window.operateEvents = {
    'click .approval': function (e, value, row, index) {
    //alert('You click approval action, row: ' + JSON.stringify(row));
  },
  /*
  'click .remove': function (e, value, row, index) {
    $kpi_vendor.bootstrapTable('remove', {
      field: 'id',
      values: [row.id]
    });
  }
  */
};
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
    let st = <?php echo $st ?>;
    let dt = <?php echo $dt ?>;
  var $kpi_vendor = $('#kpi_vendor'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

   $("#klir").click(function(){
    window.location.assign('<?php echo site_url('vendor/daftar_vendor/kpi_vendor/1'); ?>');
  });

   $("#kode_item").change(function(){

    var myfilter = $(this).val();
    var url = "<?php echo site_url('procurement/set_session/item_gbl') ?>";
    $.ajax({
      url : url+"/"+myfilter,
      success:function(data){
        $("#kpi_vendor").bootstrapTable('refresh');
      }
    });

  });


   $("#klasifikasi").change(function(){

    var myfilter = $(this).val();
    var url = "<?php echo site_url('procurement/set_session/klasifikasi_gbl') ?>";
    $.ajax({
      url : url+"/"+myfilter,
      success:function(data){
        $("#kpi_vendor").bootstrapTable('refresh');
      }
    });


  });


  $("#siuptoggle").click(function(){

if(st == 0){
 st = 1;
 var url = "<?php echo site_url('procurement/set_session/st') ?>";
   $.ajax({
     url : url+"/"+st,
     success:function(data){
       $("#kpi_vendor").bootstrapTable('refresh');
     }
   });
}
else{
  st = 0;
  var url = "<?php echo site_url('procurement/set_session/st') ?>";
   $.ajax({
     url : url+"/"+st,
     success:function(data){
       $("#kpi_vendor").bootstrapTable('refresh');
     }
   });
}

});

$("#domtoggle").click(function(){
if(dt == 0){
 dt = 1;
 var url = "<?php echo site_url('procurement/set_session/dt') ?>";
   $.ajax({
     url : url+"/"+dt,
     success:function(data){
       $("#kpi_vendor").bootstrapTable('refresh');
     }
   });
}
else{
  dt = 0;
  var url = "<?php echo site_url('procurement/set_session/dt') ?>";
   $.ajax({
     url : url+"/"+dt,
     success:function(data){
       $("#kpi_vendor").bootstrapTable('refresh');
     }
   });
}

});


   $kpi_vendor.bootstrapTable({

    url: "<?php echo site_url('Vendor/data_kpi_vendor') ?>",

    cookieIdTable:"vw_prc_bidder_list",

    idField:"vendor_id",

    <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>

    columns: [
    {
      field: 'vendor_id',
      title: '<?php echo DEFAULT_BOOTSTRAP_TABLE_FIRST_COLUMN_NAME ?>',
      align: 'center',
      width: '10%',
      events: operateEvents,
      formatter: operateFormatter,
    },
    {
      field: 'prefix',
      title: 'Tipe',
      sortable:true,
      order:true,
      searchable:true,
      align: 'center',
      valign: 'middle'
    },
    {
      field: 'vendor_name',
      title: 'Nama Vendor',
      sortable:true,
      order:true,
      searchable:true,
      align: 'center',
      valign: 'middle'
    },
    {
      field: 'fin_class_name',
      title: 'Status Flag',
      sortable:true,
      order:true,
      searchable:true,
      align: 'center',
      formatter: klasifikasiFormatter,
      valign: 'middle'
    },
    ]

  });
   setTimeout(function () {
    $kpi_vendor.bootstrapTable('resetView');
  }, 200);

   $kpi_vendor.on('expand-row.bs.table', function (e, index, row, $detail) {
    $detail.html(detailFormatter(index,row,"alias_kpi_vendor"));
  });

 });

</script>