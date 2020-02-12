<div class="row">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Riwayat Status</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">
        <div class="table-responsive">
          <table id="status_tbl" class="table table-bordered table-striped"></table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  var $status_tbl = $('#status_tbl'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $status_tbl.bootstrapTable({

      url: "<?php echo site_url('aset/data_pekerjaan') ?>",
      cookieIdTable:"daftar_pekerjaan",
      
      idField:"ppc_id",
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      columns: [
      {
        field: 'nama',
        title: 'Nama',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',
      },
      {
        field: 'posisi',
        title: 'Posisi',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle',

      },
      {
        field: 'proses',
        title: 'Proses',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',

      },
      {
        field: 'sblm_diubah',
        title: 'Sebelum Diubah',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      {
        field: 'ssdh_diubah',
        title: 'Sesudah Diubah',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      {
        field: 'tgl_pembuatan',
        title: 'Tanggal Pembuatan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      {
        field: 'aksi',
        title: 'Aksi',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      {
        field: 'komentar',
        title: 'Komentar',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      {
        field: 'dokumen',
        title: 'Dokumen',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle',
      },
      ]
    });
    
    setTimeout(function () {
      $status_tbl.bootstrapTable('resetView');
    }, 200);

  });

</script>