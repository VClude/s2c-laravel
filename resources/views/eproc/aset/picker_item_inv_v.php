<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-md-12">

      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Daftar Item aset</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>
        <div class="ibox-content">

          <div class="table-responsive">

            <table id="daftar_item_inv" class="table table-bordered table-striped"></table>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">

  var $daftar_item_inv = $('#daftar_item_inv'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $daftar_item_inv.bootstrapTable({

      url: "<?php echo site_url('aset/data_aset') ?>",
      cookieIdTable:"daftar_item_inv",
      
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
        field: 'kode_brg',
        title: 'Kode',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'nama_grup',
        title: 'Grup',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      {
        field: 'nama_brg',
        title: 'Nama',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      ]
    });
    
    setTimeout(function () {
      $daftar_item_inv.bootstrapTable('resetView');
    }, 200);

    $daftar_item_inv.on('check.bs.table  check-all.bs.table', function () {

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
    $daftar_item_inv.on('uncheck.bs.table uncheck-all.bs.table', function () {

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

    $daftar_item_inv.on('expand-row.bs.table', function (e, index, row, $detail) {
      $detail.html(detailFormatter(index,row));
    });

    $daftar_item_inv.on('all.bs.table', function (e, name, args) {
  //console.log(name, args);
});

  });
  function getIdSelections() {
    return $.map($daftar_item_inv.bootstrapTable('getSelections'), function (row) {
      return row.id;
    });
  }

</script>