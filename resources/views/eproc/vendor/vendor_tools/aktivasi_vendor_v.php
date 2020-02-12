<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Aktivasi Vendor</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>        

        <div class="ibox-content">

          <div class="table-responsive">             

            <table id="aktivasi_vendor" class="table table-bordered table-striped"></table>

          </div>

        </div>
      </div>


    </div>
  </div>

   <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <!-- <h5>Aktivasi Vendor Commodity</h5> -->
          <h5>Aktivasi Vendor e-Catalog</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>        

        <div class="ibox-content">

          <div class="table-responsive">             

            <table id="aktivasi_vendor_commodity" class="table table-bordered table-striped"></table>

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
    var link = "<?php echo site_url('vendor/vendor_tools') ?>";
    return [
    '<a class="btn btn-primary btn-xs action" href="'+link+'/aktivasi_vendor_form/'+value+'">',
    'Aktivasi',
    '</a>  '
    ].join('');
  }
  window.operateEvents = {
    'click .approval': function (e, value, row, index) {
    //alert('You click approval action, row: ' + JSON.stringify(row));
  },
  /*
  'click .remove': function (e, value, row, index) {
    $aktivasi_vendor.bootstrapTable('remove', {
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

  var $aktivasi_vendor = $('#aktivasi_vendor'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {
    
    $aktivasi_vendor.bootstrapTable({
      
      url: "<?php echo site_url('Vendor/data_aktivasi_vendor') ?>",
    
      cookieIdTable:"vnd_header",
      
      idField:"vendor_id",
      
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      
      columns: [
      {
        field: 'vendor_id',
        title: '<?php echo DEFAULT_BOOTSTRAP_TABLE_FIRST_COLUMN_NAME ?>',
        align: 'center',
        valign: 'middle',
        events: operateEvents,
        formatter: operateFormatter,
      },
     
      {
        field: 'vendor_name',
        title: 'Nama Vendor',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle'
      },
      {
        field: 'tipe_perusahaan',
        title: 'Tipe Perusahaan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'left',
        formatter: FormatJSONtoHuman,
      },
      {
        field: 'fin_class_name',
        title: 'Kualifikasi Perusahaan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
      {
        field: 'reg_isactivate',
        title: 'Status',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
      ]

    });
setTimeout(function () {
  $aktivasi_vendor.bootstrapTable('resetView');
}, 200);

$aktivasi_vendor.on('expand-row.bs.table', function (e, index, row, $detail) {
  $detail.html(detailFormatter(index,row,"alias_aktivasi_vendor"));
});

});

</script>

<script>
  function operateFormatterCommodity(value, row, index) {
    var link = "<?php echo site_url('vendor/vendor_tools') ?>";
    return [
    '<a class="btn btn-primary btn-xs action" href="'+link+'/aktivasi_vendor_commodity_form/'+value+'">',
    'Aktivasi',
    '</a>  '
    ].join('');
  }

  function FormatJSONtoHuman(value, row, index) {
    if (row.tipe_perusahaan == null){
      return [
    '-'
    ].join('');
    }
    else{
    var html = "";
    var yt = JSON.parse(row.tipe_perusahaan);
      $.each(yt, function(i, item) {
        html += '- ' + item.id.companyType + '<br/>';
  });
    return [
    html
    ].join('');
    }
  }

  window.operateEventsCommodity = {
    'click .approval': function (e, value, row, index) {
    //alert('You click approval action, row: ' + JSON.stringify(row));
  },
  /*
  'click .remove': function (e, value, row, index) {
    $aktivasi_vendor.bootstrapTable('remove', {
      field: 'id',
      values: [row.id]
    });
  }
  */
};

</script>



<script type="text/javascript">

  var $aktivasi_vendor_commodity = $('#aktivasi_vendor_commodity'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $aktivasi_vendor_commodity.bootstrapTable({

      url: "<?php echo site_url('Vendor/data_aktivasi_vendor_commodity') ?>",
    
      cookieIdTable:"vnd_header",
      
      idField:"vendor_id",
      
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      
      columns: [
      {
        field: 'ccp_id',
        title: '<?php echo DEFAULT_BOOTSTRAP_TABLE_FIRST_COLUMN_NAME ?>',
        align: 'center',
        events: operateEventsCommodity,
        formatter: operateFormatterCommodity,
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
        field: 'group_name',
        title: 'Nama Komoditas',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
      {
        field: 'status',
        title: 'Status',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
      ]

    });
setTimeout(function () {
  $aktivasi_vendor_commodity.bootstrapTable('resetView');
}, 200);

$aktivasi_vendor_commodity.on('expand-row.bs.table', function (e, index, row, $detail) {
  $detail.html(detailFormatter(index,row,"alias_aktivasi_vendor"));
});

});

</script>