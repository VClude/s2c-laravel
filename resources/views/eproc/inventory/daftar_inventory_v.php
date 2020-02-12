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
          <!-- //y add filter tipe -->
           <label class="col-md-1 control-label">Tipe</label>
              <div class="form-group center">
                <form>
                  <?php $curval = $tipe; ?>
                  <div class="col-md-2">
                   <select name="tipe" id="tipe" class="form-control">
                    <option value="">Semua</option>
                    <?php $pilihan=array(
                      "TKT" => 'Tiket',
                      "SP" => 'Sparepart',
                      "NSP" => 'Non Sparepart',
                      );
                    foreach($pilihan as $key => $val){
                      $selected = ($key == $curval) ? "selected" : ""; 
                      ?>
                      <option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $val ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </form>
              </div>
              <hr>
          <!-- //y end filter tipe -->

          <div class="table-responsive">

            <table id="daftar_inv" class="table table-bordered table-striped"></table>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">

  function operateFormatter(value, row, index) {
    var link = "<?php echo site_url('inventory') ?>";
    return [
    '<select name="change_req" class="form-control change_req">',
    '<option value="">Pilih</option>',
    '<option value="'+link+'/detail/'+value+'">Detail</option>',
    //'<option value="'+link+'/buat_sppbj/'+value+'">Buat SPPBJ</option>',
    //'<option value="'+link+'/ubah_batas/'+value+'">Ubah Batas</option>',
    //'<option value="'+link+'/ubah_status/'+value+'">Ubah Status</option>',
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
      window.open(url,'_self');
    } 

    });

    $daftar_inv.bootstrapTable({

      url: "<?php echo site_url('inventory/data_inventory') ?>",
      cookieIdTable:"daftar_inv",
      
      idField:"id",
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      columns: [
      {
        field: 'kode_barang',
        title: 'Kode',
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
        field: 'batas_barang',
        title: 'Batas Min',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },

      {
        field: 'jumlah_barang',
        title: 'Jumlah',
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
        field: 'merk',
        title: 'Merk',
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
      $daftar_inv.bootstrapTable('resetView');
    }, 200);

  });

  //y add tipe
  $("#tipe").change(function(){
      var myfilter = $(this).val();
      var url = "<?php echo site_url('inventory/set_session/tipe') ?>";
      $.ajax({
        url : url+"/"+myfilter,
        success:function(data){
          $("#daftar_inv").bootstrapTable('refresh');
        }
    });   
  });
  //y end
</script>