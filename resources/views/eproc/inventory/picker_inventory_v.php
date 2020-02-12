<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-md-12">

      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Daftar Seluruh Inventory</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>
        <div class="ibox-content">

          <div class="table-responsive">

            <table id="daftar_inv" class="table table-bordered table-striped"></table>

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

    var mydata = $.getCustomJSON("<?php echo site_url('inventory') ?>/"+url);

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

</script>

<script type="text/javascript">

  var $daftar_inv = $('#daftar_inv'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $daftar_inv.bootstrapTable({

      url: "<?php echo site_url('inventory/data_inventory') ?>",
      cookieIdTable:"daftar_inv",
      
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
        field: 'kode_barang',
        title: 'Kode',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      {
        field: 'nama_barang',
        title: 'Nama',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      {
        field: 'merk',
        title: 'Merek',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'part_number',
        title: 'Part Number',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
              {
          field: 'nama_satuan',
          title: 'Satuan',
          sortable:true,
          order:true,
          searchable:true,
          align: 'center',
          valign: 'middle',
        },
      <?php if(!in_array($activity, array(4000))){ ?>
        {
          field: 'jumlah_barang',
          title: 'Stok',
          sortable:true,
          order:true,
          searchable:true,
          align: 'right',
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
          <?php } ?>
          ]
        });
    setTimeout(function () {
      $daftar_inv.bootstrapTable('resetView');
    }, 200);

    $daftar_inv.on('expand-row.bs.table', function (e, index, row, $detail) {
      $detail.html(detailFormatter(index,row,"alias"));
    });

    $daftar_inv.on('check.bs.table  check-all.bs.table', function () {

      selections = getIdSelections();

      var param = "";

      $.each(selections,function(i,val){
        param += val+"=1&";
      });
      $.ajax({
        url:"<?php echo site_url('inventory/picker') ?>",
        data:param,
        type:"get"
      });

    });
    $daftar_inv.on('uncheck.bs.table uncheck-all.bs.table', function () {

      selections = getIdSelections();

      var param = "";

      $.each(selections,function(i,val){
        param += val+"=0&";
      });
      $.ajax({
        url:"<?php echo site_url('inventory/picker') ?>",
        data:param,
        type:"get"
      });

    });

    $daftar_inv.on('expand-row.bs.table', function (e, index, row, $detail) {
      $detail.html(detailFormatter(index,row));
    });

    $daftar_inv.on('all.bs.table', function (e, name, args) {
  //console.log(name, args);
});

  });
  function getIdSelections() {
    return $.map($daftar_inv.bootstrapTable('getSelections'), function (row) {
      return row.id;
    });
  }

</script>