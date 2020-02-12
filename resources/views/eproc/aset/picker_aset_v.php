<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-md-12">

      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Daftar Seluruh Aset</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>
        <div class="ibox-content">

          <div class="table-responsive">

            <table id="daftar" class="table table-bordered table-striped"></table>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">

  var $daftar = $('#daftar'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $daftar.bootstrapTable({

      url: "<?php echo site_url('aset/data_aset/active') ?>",
      cookieIdTable:"daftar",
      
      idField:"id",
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      columns: [

      {
        field: 'radio',
        radio:true,
        align: 'center',
        valign: 'middle'
      },

          {
        field: 'barcode',
        title: 'Barcode',
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
        field: 'kategori',
        title: 'Kategori',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'pemegang',
        title: 'Pemegang',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'harga_perolehan',
        title: 'Harga Perolehan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'nama_kantor',
        title: 'Kantor',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'nama_gudang',
        title: 'Gudang',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'nama_dept',
        title: 'Departemen',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        // untuk picker
        field: 'dept_asal',
        title: 'Departemen Asal',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'nama_status',
        title: 'Status',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      //==================================TAMBAH==========================================
      {
        field: 'nama_kondisi',
        title: 'Kondisi',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      //==================================================================================
          ]
        });

    setTimeout(function () {
      $daftar.bootstrapTable('resetView');
    }, 200);

    $daftar.on('check.bs.table  check-all.bs.table', function () {

      selections = getIdSelections();

      var param = "";

      $.each(selections,function(i,val){
        param += val+"=1&";
      });
      $.ajax({
        url:"<?php echo site_url('aset/picker') ?>",
        data:param,
        type:"get"
      });

    });
    $daftar.on('uncheck.bs.table uncheck-all.bs.table', function () {

      selections = getIdSelections();

      var param = "";

      $.each(selections,function(i,val){
        param += val+"=0&";
      });
      $.ajax({
        url:"<?php echo site_url('aset/picker') ?>",
        data:param,
        type:"get"
      });

    });

    $daftar.on('expand-row.bs.table', function (e, index, row, $detail) {
      $detail.html(detailFormatter(index,row));
    });

    $daftar.on('all.bs.table', function (e, name, args) {
  //console.log(name, args);
});

  });
  function getIdSelections() {
    return $.map($daftar.bootstrapTable('getSelections'), function (row) {
      return row.id;
    });
  }

</script>