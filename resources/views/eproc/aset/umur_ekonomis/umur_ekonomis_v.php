<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Umur Ekonomis</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
          </div>
        </div>        
        <div class="ibox-content">
          <div class="table-responsive">
            <a class="btn btn-primary" href="<?php echo site_url('aset/add_umur_ekonomis') ?>" role="button">Tambah</a>               
            <table id="umur_ekonomis" class="table table-bordered table-striped"></table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  function operateFormatter(value, row, index) {
    var link = "<?php echo site_url('aset') ?>";
    return [
    '<a class="btn btn-primary btn-xs action" href="'+link+'/edit_umur_ekonomis/'+value+'">',
    'Ubah',
    '</a>  ',
    '<a class="btn btn-danger btn-xs action" onclick="return confirm(\'Anda yakin ingin menonaktifkan umur ekonomis?\')" href="'+link+'/delete_umur_ekonomis/'+value+'">',
    'Nonaktif',
    '</a>  ',
    ].join('');
  }

</script>

<script type="text/javascript">

  var $umur_ekonomis = $('#umur_ekonomis'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $umur_ekonomis.bootstrapTable({

      url: "<?php echo site_url('aset/data_umur_ekonomis/all') ?>",
      cookieIdTable:"adm_umur_ekonomis",
      idField:"id",
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      columns: [
      {
        field: 'id',
        title: '<?php echo DEFAULT_BOOTSTRAP_TABLE_FIRST_COLUMN_NAME ?>',
        align: 'center',
        width:'10%',
        formatter: operateFormatter,
      },
      {
        field: 'name',
        title: 'Jenis Aset',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
            {
        field: 'year',
        title: 'Tahun',
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
      $umur_ekonomis.bootstrapTable('resetView');
    }, 200);

    $umur_ekonomis.on('expand-row.bs.table', function (e, index, row, $detail) {
      $detail.html(detailFormatter(index,row,"alias_umur_ekonomis"));
    });

  });

</script>