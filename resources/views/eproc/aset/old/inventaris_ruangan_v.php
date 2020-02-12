<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">

      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Daftar Inventaris Ruangan</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>
        <div class="ibox-content">

          <div class="table-responsive">

            <table id="inventaris_ruangan" class="table table-bordered table-striped"></table>

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

  var $inventaris_ruangan = $('#inventaris_ruangan'),
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

    $inventaris_ruangan.bootstrapTable({
      url: "<?php echo site_url('aset/y') ?>",
      cookieIdTable:"inventaris_ruangan",
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
        field: 'nomor',
        title: 'Nomor',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'judul_perencanaan',
        title: 'Judul Perencanaan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      {
        field: 'tgl_mulai',
        title: 'Tanggal Mulai',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'tgl_berakhir',
        title: 'Tanggal Berakhir',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'keterangan',
        title: 'Keterangan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'satuan_kerja',
        title: 'Kerja',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      ]
    });
    setTimeout(function () {
      $inventaris_ruangan.bootstrapTable('resetView');
    }, 200);

    $inventaris_ruangan.on('expand-row.bs.table', function (e, index, row, $detail) {
      $detail.html(detailFormatter(index,row,"alias"));
    });

  });

</script>