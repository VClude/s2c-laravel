<div class="wrapper wrapper-content animated fadeInRight">

  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Monitor Proses Suspend/Blacklist Vendor</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>
        <div class="ibox-content">

          <div class="table-responsive">

            <table id="table_monitor_pr" class="table table-bordered table-striped"></table>

          </div>

        </div>
      </div>


    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Monitor Status Vendor</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>
        <div class="ibox-content">

          <div class="table-responsive">

            <table id="table_monitor_ac" class="table table-bordered table-striped"></table>

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
  function operateFormatter2(value, row, index) {
    var link = "<?php echo site_url('vendor/vendor_tools/monitor_vendor_form') ?>";
    return [
    '<a class="btn btn-primary btn-xs action" href="'+link+'/'+value+'">',
    'Lihat',
    '</a>  ',
    ].join('');
  }
  function operateFormattersc(value, row, index) {
    var link = "<?php echo site_url('vendor/vendor_tools/monitor_vendor_form') ?>";
    return [
    '<a class="btn btn-primary btn-xs action" href="'+link+'/'+value+'">',
    'Lihat',
    '</a>  ',
    ].join('');
  }
  function operateFormatterStatus(value, row, index) {
    if(row.last_status == "Approval Suspend Vendor" && row.reg_suspendfailed == '1'){
      return ['Approval Suspend Vendor Ditolak'].join('');
    }
    else{
      return ['Menunggu Approval Blacklist Vendor'].join('');
    }

  }
  function operateFormatter(value, row, index) {
    var link = "<?php echo site_url('vendor/vendor_tools/monitor_vendor_form') ?>";
    return [
    '<a class="btn btn-primary btn-xs action" href="'+link+'/'+value+'">',
    'Lihat',
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

  var $table_monitor_ac = $('#table_monitor_ac'),
  $table_monitor_pr = $('#table_monitor_pr'),
  selections = [];

</script>



<script type="text/javascript">

  $(function () {

    $table_monitor_pr.bootstrapTable({

      url: "<?php echo site_url('Vendor/data_monitor_vendor') ?>",
      cookieIdTable:"vnd_header",
      idField:"vendor_id",
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      columns: [
      {
        field: 'vendor_id',
        title: '<?php echo DEFAULT_BOOTSTRAP_TABLE_FIRST_COLUMN_NAME ?>',
        align: 'center',
        width:'10%',
        formatter: operateFormatter2,
        valign: 'middle'
      },{
        field: 'vendor_name',
        title: 'Nama Vendor',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
        width:'30%',
      },
      {
        field: 'last_status',
        title: 'Posisi saat Ini',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
        width:'25%',
      },
      ]

    });
    setTimeout(function () {
      $table_monitor_pr.bootstrapTable('resetView');
    }, 200);

    $table_monitor_pr.on('expand-row.bs.table', function (e, index, row, $detail) {
      $detail.html(detailFormatter(index,row,"alias"));
    });

  });



  $(function () {

$table_monitor_ac.bootstrapTable({

  url: "<?php echo site_url('Vendor/data_monitor_vendor_ac') ?>",
  cookieIdTable:"vnd_header",
  idField:"vendor_id",
  <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
  columns: [
  {
    field: 'vendor_id',
    title: '<?php echo DEFAULT_BOOTSTRAP_TABLE_FIRST_COLUMN_NAME ?>',
    align: 'center',
    width:'10%',
    formatter: operateFormattersc,
    valign: 'middle'
  },
  {
    field: 'vendor_name',
    title: 'Nama Vendor',
    sortable:true,
    order:true,
    searchable:true,
    align: 'center',
    valign: 'middle',
    width:'30%',
  },
  {
    field: '',
    title: 'Status Dari',
    sortable:true,
    order:true,
    searchable:true,
    align: 'center',
    valign: 'middle',
    width:'25%',
    formatter: 'Non-Aktif'
  },
  {
    field: 'reg_isactivate',
    title: 'Status Ke',
    sortable:true,
    order:true,
    searchable:true,
    align: 'center',
    valign: 'middle',
    width:'25%',
  },
  // {
  //   field: 'statusname',
  //   title: 'Status saat ini',
  //   sortable:true,
  //   order:true,
  //   searchable:true,
  //   align: 'center',
  //   valign: 'middle',
  //   width:'25%',
  // },
  ]

});
setTimeout(function () {
  $table_monitor_pr.bootstrapTable('resetView');
}, 200);

$table_monitor_pr.on('expand-row.bs.table', function (e, index, row, $detail) {
  $detail.html(detailFormatter(index,row,"alias"));
});

});


</script>