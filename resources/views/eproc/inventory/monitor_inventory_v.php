<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-md-12">

      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Data Monitor</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>
        <div class="ibox-content">

          <div class="table-responsive">

            <table id="monitor_inv" class="table table-bordered table-striped"></table>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">

  function act_link(value, row, index) {
    var link = "<?php echo site_url('inventory') ?>";
    return [
    '<a class="btn btn-primary btn-xs action" href="'+link+'/lihat/'+value+'">',
    'Lihat',
    '</a>  ',
    ].join('');
  }

</script>

<script type="text/javascript">

  var $monitor_inv = $('#monitor_inv'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $monitor_inv.bootstrapTable({
      url: "<?php echo site_url('inventory/data_monitor/'.$dataurl) ?>",
      cookieIdTable:"<?php echo $dataurl ?>",
      idField:"id",
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      columns: [
      {
            field: 'id_monitor',
            title: '<?php echo DEFAULT_BOOTSTRAP_TABLE_FIRST_COLUMN_NAME ?>',
            align: 'center',
            width:'10%',
            valign: 'middle',
            formatter: act_link,
          },
          {
            field: 'kode_monitor',
            title: 'Kode',
            sortable:true,
            order:true,
            searchable:true,
            align: 'center',
            valign: 'middle',
            width:'15%',
          },
          {
            field: 'nama_monitor',
            title: 'Nama',
            sortable:true,
            order:true,
            searchable:true,
            align: 'left',
            valign: 'middle',
            width:'40%',
          },
          {
            field: 'tanggal_monitor',
            title: 'Tanggal',
            sortable:true,
            order:true,
            searchable:true,
            align: 'center',
            valign: 'middle',
            width:'20%',
          },
          {
            field: 'aktifitas_monitor',
            title: 'Aktifitas',
            sortable:true,
            order:true,
            searchable:true,
            align: 'center',
            valign: 'middle',
            width:'15%',
          },
  
      ]
    });
    setTimeout(function () {
      $monitor_inv.bootstrapTable('resetView');
    }, 200);

  });

</script>