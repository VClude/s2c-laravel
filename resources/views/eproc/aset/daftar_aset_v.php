<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Klasifikasi Seluruh Aset</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="#">Config option 1</a>
              </li>
              <li><a href="#">Config option 2</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="ibox-content" style="">
          <form class="form-horizontal" action="<?php echo site_url($controller_name."/submit_report");?>" method="post">
            <div class="form-group">
              <label class="col-lg-1 control-label">Barcode</label>
              <div class="col-lg-3">
               <select name="barcode" data-id="barcode" class="searchChange form-control select2">
                <option value="">Pilih</option>
                <?php
                foreach ($rows as $row) {
                  ?>
                  <option class="<?php echo $row['barcode'] ?>" value="<?php echo $row['barcode'] ?>"><?php echo $row['barcode'] ?></option>
                  <?php
                }
                ?>
              </select>
            </div>

            <label class="col-lg-1 control-label">Nama</label>
            <div class="col-lg-3">
              <input class="form-control search" type="text" name="nama" data-id="nama">
            </div>

            <label class="col-lg-1 control-label">Pemegang</label>
            <div class="col-lg-3">
              <input class="form-control search" type="text" name="pemegang" data-id="pemegang">
            </div>
          </div>

          <div class="form-group">

            <label class="col-lg-1 control-label">Harga Perolehan</label>
            <div class="col-lg-3">
              <input class="form-control search" type="number" name="harga_perolehan" data-id="harga_perolehan">
            </div>

            <!-- belum -->
            <!-- <label class="col-lg-1 control-label">Umur Ekonomis</label>
            <div class="col-lg-3">
              <input class="form-control search" type="text" name="" data-id="nama_umur_ekonomis">
            </div> -->

           <!--  <label class="col-lg-1 control-label">Kantor</label>
            <div class="col-lg-3">
              <input class="form-control search" type="text" name="" data-id="kantor">
            </div>-->

             <label class="col-lg-1 control-label">Nama Kantor</label>
            <div class="col-lg-3">
              <input class="form-control search" type="text" name="" data-id="nama_kantor">
            </div>

            <label class="col-lg-1 control-label">Departemen</label>
            <div class="col-lg-3">
              <input class="form-control search" type="text" name="" data-id="dept_now">
            </div>


          </div>

          <div class="form-group">
            <label class="col-lg-1 control-label">Departemen Asal</label>
            <div class="col-lg-3">
              <input class="form-control search" type="text" name="" data-id="dept_from">
            </div>

             <label class="col-lg-1 control-label">Kondisi</label>
            <div class="col-lg-3">
             <select name="kondisi" data-id="kondisi" class="searchChange form-control select2">
                <option value="">Pilih</option>
                <?php
                foreach ($kondisi as $kon) {
                  ?>
                  <option value="<?php echo $kon['kondisi'] ?>"><?php echo $kon['kondisi'] ?></option>
                  <?php
                }
                ?>
              </select>

            </div>

            <label class="col-lg-1 control-label">Status</label>
            <div class="col-lg-3">
              <select name="status_search" class="searchChange form-control select2" data-id="status_search">
                <option value="">Pilih Status</option>  
                <option value="100">Aktif</option>    
                <option value="1">Tidak Aktif</option>
              </select>

            </div>

           <!--  <label class="col-lg-1 control-label">Gudang</label>
            <div class="col-lg-3">
              <input class="form-control" type="text" name="">
            </div> -->

            <!-- <label class="col-lg-1 control-label">Departemen</label>
            <div class="col-lg-3">
              <input class="form-control" type="text" name="">
            </div> -->


          </div>
        </form>
      </div>
    </div>
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
      '<option value="'+link+'/detail/'+value+'">Detail</option>',
      '<option value="'+link+'/lihat_barcode/'+row.barcode+'">Lihat Barcode</option>',
    /*
    
    '<option value="'+link+'/ubah_batas/'+value+'">Ubah Batas</option>',
    '<option value="'+link+'/ubah_status/'+value+'">Ubah Status</option>',
    */
    '</select>',
    ].join('');
  }


</script>

<script type="text/javascript">

  var $daftar = $('#daftar'),
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

    $daftar.bootstrapTable({

      url: "<?php echo site_url('aset/data_aset') ?>",
      cookieIdTable:"daftar",
      
      idField:"id",
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      columns: [
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
      // {
      //   field: 'jenis_asdp',
      //   title: 'Jenis(ASDP)',
      //   sortable:true,
      //   order:true,
      //   searchable:true,
      //   align: 'center',
      //   valign: 'middle',
      // },
      // {
      //   field: 'jenis',
      //   title: 'Jenis(BUMN)',
      //   sortable:true,
      //   order:true,
      //   searchable:true,
      //   align: 'center',
      //   valign: 'middle',
      // },
      // {
      //   field: 'tahun_perolehan',
      //   title: 'Tahun Perolehan',
      //   sortable:true,
      //   order:true,
      //   searchable:true,
      //   align: 'center',
      //   valign: 'middle',
      // },
      // {
      //   field: 'jumlah_unit_aset',
      //   title: 'Jumlah Unit Aset',
      //   sortable:true,
      //   order:true,
      //   searchable:true,
      //   align: 'center',
      //   valign: 'middle',
      // },
      /*
      {
        field: 'kategori',
        title: 'Kategori',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      */
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
        field: 'beban_penyusutan',
        title: 'Beban Penyusutan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'akumulasi_penyusutan',
        title: 'Akumulasi Penyusutan',
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
        field: 'nama_umur_ekonomis',
        title: 'Umur Ekonomis',
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
      // add departemen asal
      {
        field: 'dept_asal',
        title: 'Departemen Asal',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      // end
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
        field: 'nama_status',
        title: 'Status',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'id',
        title: '<?php echo DEFAULT_BOOTSTRAP_TABLE_FIRST_COLUMN_NAME ?>',
        align: 'center',
        width:'15%',
        valign: 'middle',
        formatter: operateFormatter,
      },
      ]
    });
    setTimeout(function () {
      $daftar.bootstrapTable('resetView');
    }, 200);

    $daftar.on('expand-row.bs.table', function (e, index, row, $detail) {
      $detail.html(detailFormatter(index,row,"alias"));
    });

  });



  $(document).on('change', '.searchChange', function() {
    var nama      = $(this).attr('data-id');
    var myfilter      = $(this).val();
    var url = "<?php echo site_url('aset/set_session')?>/"+nama;
    $.ajax({
      url : url+"/"+myfilter,
      success:function(data){
        $("#daftar").bootstrapTable('refresh');
      }
    });
  })




  $(document).on('keyup', '.search', function() {
    var nama      = $(this).attr('data-id');
    var myfilter      = $(this).val();
    var url = "<?php echo site_url('aset/set_session')?>/"+nama;
    $.ajax({
      url : url+"/"+myfilter,
      success:function(data){
        $("#daftar").bootstrapTable('refresh');
      }
    });
  })

</script>