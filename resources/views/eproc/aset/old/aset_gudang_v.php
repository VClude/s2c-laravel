<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">

      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Daftar Aset Gudang</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>
        <div class="ibox-content">

          <div class="table-responsive">

            <table id="aset_gudang" class="table table-bordered table-striped"></table>

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

    var mydata = $.getCustomJSON("<?php echo site_url('aset') ?>/"+url);

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
    var link = "<?php echo site_url('aset') ?>";
    return [
    '<a class="btn btn-success btn-xs action" href="'+link+'/proses_inv/'+value+'">',
    'Proses',
    '</a>  ',
    ].join('');
  }

</script>

<script type="text/javascript">

  var $aset_gudang = $('#aset_gudang'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $(document.body).on("change",".change_req",function(){

      var url = $(this).find("option:selected").val();
      var title = $(this).find("option:selected").html();
      if(url != ""){
        window.open(url, '_blank');
      } 

    });

    $aset_gudang.bootstrapTable({
      url: "<?php echo site_url('aset/data_aset') ?>",
      cookieIdTable:"aset_gudang",
      idField:"id",
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      columns: [
      {
        field: 'id',
        title: '<?php echo DEFAULT_BOOTSTRAP_TABLE_FIRST_COLUMN_NAME ?>',
        align: 'center',
        width:'15%',
        valign: 'middle',
        formatter: operateFormatter,
      },
      {
        field: 'kode_aset',
        title: 'Kode Aset',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'kode_lokasi',
        title: 'Kode Lokasi',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      {
        field: 'kode_inventaris',
        title: 'Kode Inventaris',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'kode_barang',
        title: 'Kode Barang',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'nama_barang',
        title: 'Nama',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'kategori_barang',
        title: 'Kategori',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      ]
    });
    setTimeout(function () {
      $aset_gudang.bootstrapTable('resetView');
    }, 200);

    $aset_gudang.on('expand-row.bs.table', function (e, index, row, $detail) {
      $detail.html(detailFormatter(index,row,"alias"));
    });

  });

</script>