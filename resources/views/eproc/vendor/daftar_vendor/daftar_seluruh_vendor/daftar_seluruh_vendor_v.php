<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
    <?=$this->session->flashdata('pesan')?>
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Daftar Seluruh Vendor</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>        

        <div class="ibox-content">
          <div>
          <a class="btn btn-primary btn-xs action" id="sinkron" data-toggle="modal" data-target="#GSCCModal"><i class="fa fa-exchange"></i>&nbsp;Sinkron Pengadaan.com</a> 
          <div class="loader" id="loader-4">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <center><span id="loadert">Database sedang Disinkronisasi, Mohon Tunggu...</span></center>
        </div>
          <div class="table-responsive">            

            <table id="daftar_seluruh_vendor" class="table table-bordered table-striped"></table>

          </div>

        </div>
      </div>


    </div>
  </div>
</div>


<div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
        <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
      </div>
      <div class="modal-body">
        <?php echo $tss; ?> Vendor akan disinkronisasi, Lanjutkan ? (Estimasi <?php echo $estimasi; ?> menit waktu Sinkron)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <a type="button" class="btn btn-primary" data-dismiss="modal" onclick="goLoad()" href="<?php echo site_url('vendor/daftar_vendor/sinkron_vendor') ?>">Lanjutkan</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $("#loader-4").hide();
    $("#loadert").hide();
});
  function goLoad(){
    $("#sinkron").fadeOut(100);
    $("#daftar_seluruh_vendor").fadeOut(100);
    $("#table-responsive").fadeOut(100);
    $("#loader-4").show();
    $("#loadert").show();
    window.location = '<?php echo site_url('vendor/daftar_vendor/sinkron_vendor') ?>';
  }

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
    var link = "<?php echo site_url('vendor/daftar_vendor') ?>";
    var link_vendor = "<?php echo site_url('vendor/sinkron_vendor') ?>";
    return [
    '<a target="_blank" class="btn btn-primary btn-xs action" href="'+link+'/lihat_detail_vendor/'+value+'">',
    'Lihat',
    '</a>  ',
    '<a class="btn btn-primary btn-xs action" href="'+link_vendor+'/'+value+'">',
    'Sync',
    '</a>  '
    ].join('');
  }
  window.operateEvents = {
    'click .approval': function (e, value, row, index) {
    //alert('You click approval action, row: ' + JSON.stringify(row));
  },
  /*
  'click .remove': function (e, value, row, index) {
    $daftar_seluruh_vendor.bootstrapTable('remove', {
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

  var $daftar_seluruh_vendor = $('#daftar_seluruh_vendor'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $daftar_seluruh_vendor.bootstrapTable({

      url: "<?php echo site_url('Vendor/data_daftar_seluruh_vendor') ?>",
      
      cookieIdTable:"vnd_header",
      
      idField:"vendor_id",
      
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      
      columns: [
      {
        field: 'vendor_id',
        title: '<?php echo DEFAULT_BOOTSTRAP_TABLE_FIRST_COLUMN_NAME ?>',
        align: 'center',
        valign: 'middle',
        width: '10%',
        events: operateEvents,
        formatter: operateFormatter,
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
        field: 'vendor_id',
        title: 'Kode Vendor',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
      {
        field: 'address_street',
        title: 'Alamat',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
      {
        field: 'email_address',
        title: 'Email',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
            {
        field: 'district_name',
        title: 'Lokasi',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        width: '10%',
        valign: 'middle'
      },
       {
        field: 'reg_status_name',
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
  $daftar_seluruh_vendor.bootstrapTable('resetView');
}, 200);

$daftar_seluruh_vendor.on('expand-row.bs.table', function (e, index, row, $detail) {
  $detail.html(detailFormatter(index,row,"alias_daftar_seluruh_vendor"));
});

});
</script>