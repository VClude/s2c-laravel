<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">

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

                  <a class="btn btn-primary" href="<?php echo site_url('aset/tambah_aset_manual') ?>" role="button">
            Tambah
            </a>  

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
    '<select name="change_req" class="form-control change_req">',
    '<option value="">Pilih</option>',
    '<option value="'+link+'/tambah_properti/'+value+'">Tambah Properti</option>',
    '<option value="'+link+'/tambah_mutasi/'+value+'">Tambah Mutasi</option>',
    '<option value="'+link+'/barcode/'+value+'">Barcode</option>',
    '<option value="'+link+'/ubah/'+value+'">Ubah</option>',
    '<option value="'+link+'/ubah_dir/'+value+'">Ubah DIR</option>',
    '<option value="'+link+'/detail/'+value+'">Detail Aset</option>',
    '<option value="'+link+'/tambah_penghapusan/'+value+'">Penghapusan</option>',
    '</select>',
    ].join('');
  }


</script>

<script type="text/javascript">

  var $daftar_inv = $('#daftar_inv'),
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

    $daftar_inv.bootstrapTable({
      url: "<?php echo site_url('aset/data_aset') ?>",
      cookieIdTable:"daftar_inv",
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
        field: 'kode_barcode',
        title: 'Barcode',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'nama_brg',
        title: 'Nama Barang',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      {
        field: 'tgl_perolehan',
        title: 'Tgl Perolehan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'nilai_perolehan',
        title: 'Nilai',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'nilai_buku',
        title: 'Nilai Buku',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'kondisi',
        title: 'Kondisi',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'kantor',
        title: 'Kantor',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
       {
        field: 'comptable',
        title: 'Comptable',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'status',
        title: 'Status',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      ]
    });
    setTimeout(function () {
      $daftar_inv.bootstrapTable('resetView');
    }, 200);

    $daftar_inv.on('expand-row.bs.table', function (e, index, row, $detail) {
      $detail.html(detailFormatter(index,row,"alias"));
    });

  });

</script>