<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-md-12">

      <?php foreach ($list_table as $key => $value){ ?>

      <div class="ibox float-e-margins">

        <div class="ibox-title">

          <h5><?php echo $value['judul'] ?></h5>

          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>

        </div>

        <div class="ibox-content">

          <div class="table-responsive">

            <table id="<?php echo $value['id'] ?>" class="table table-bordered table-striped"></table>

          </div>

        </div>

      </div>

      <script type="text/javascript">

        $(function () {

         var $<?php echo $value['id'] ?> = $('#<?php echo $value['id'] ?>');

         $<?php echo $value['id'] ?>.bootstrapTable({
          url: "<?php echo $value['url'] ?>",
          cookieIdTable:"<?php echo $value['id'] ?>",
          idField:"id_pekerjaan",
          <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
          columns: [
          {
            field: 'id_pekerjaan',
            title: '<?php echo DEFAULT_BOOTSTRAP_TABLE_FIRST_COLUMN_NAME ?>',
            align: 'center',
            width:'10%',
            valign: 'middle',
            formatter: act_link,
          },
          {
            field: 'kode_pekerjaan',
            title: 'Kode',
            sortable:true,
            order:true,
            searchable:true,
            align: 'center',
            valign: 'middle',
            width:'15%',
          },
          {
            field: 'nama_pekerjaan',
            title: 'Nama Pekerjaan',
            sortable:true,
            order:true,
            searchable:true,
            align: 'left',
            valign: 'middle',
            width:'40%',
          },
          {
            field: 'tanggal_pekerjaan',
            title: 'Tanggal',
            sortable:true,
            order:true,
            searchable:true,
            align: 'center',
            valign: 'middle',
            width:'20%',
          },
          {
            field: 'aktifitas_pekerjaan',
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
          $<?php echo $value['id'] ?>.bootstrapTable('resetView');
        }, 200);

       });

     </script>

     <?php } ?>

  </div>
</div>
</div>

<script type="text/javascript">

  function act_link(value, row, index) {
    var link = "<?php echo site_url('inventory') ?>";
    return [
    '<a class="btn btn-primary btn-xs action" href="'+link+'/proses/'+value+'">',
    'Proses',
    '</a>  ',
    ].join('');
  }

</script>
