<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-md-12">

      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Item Pencatatan</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>
        <div class="ibox-content">

          <div class="table-responsive">

            <table id="daftar_item_pencatatan" class="table table-bordered table-striped"></table>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">

  var $daftar_item_pencatatan = $('#daftar_item_pencatatan'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $daftar_item_pencatatan.bootstrapTable({

      url: "<?php echo site_url('aset/data_item_aset') ?>",
      cookieIdTable:"daftar_item_pencatatan",
      
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
        field: 'kode',
        title: 'Kode',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'deskripsi',
        title: 'Nama',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },

      {
        field: 'jumlah',
        title: 'Jumlah',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'satuan',
        title: 'Satuan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'harga_satuan',
        title: 'Harga',
        sortable:true,
        order:true,
        searchable:true,
        align: 'right',
        valign: 'middle',
      },
      {
        field: 'keterangan',
        title: 'Keterangan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      ]
    });
    
    setTimeout(function () {
      $daftar_item_pencatatan.bootstrapTable('resetView');
    }, 200);

    $daftar_item_pencatatan.on('check.bs.table check-all.bs.table', function () {

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

    $daftar_item_pencatatan.on('uncheck.bs.table uncheck-all.bs.table', function () {

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

  });
  function getIdSelections() {
    return $.map($daftar_item_pencatatan.bootstrapTable('getSelections'), function (row) {
      return row.id;
    });
  }

</script>