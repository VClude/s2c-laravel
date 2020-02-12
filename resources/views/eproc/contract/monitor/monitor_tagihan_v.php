<div class="wrapper wrapper-content animated fadeInRight">

  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Daftar Tagihan</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>
        <div class="ibox-content">

          <div class="table-responsive">

            <table class="table table-bordered table-striped datatabless">
              <thead>

                <tr>
                  <th>No</th>
                  <th>Nama Vendor</th>
                  <th>Nomor Kontrak</th>
                  <th>Nomor Tagihan</th>
                  <th>Tanggal Dibuat</th>
                  <th>Tanggal Tagihan</th>
                  <th>Bank</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 0 ?>
                <?php foreach($list as $row) { $no++?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row["vendor_name"]; ?></td>
                  <td><?php echo $row["contract_number"]; ?></td>
                  <td><?php echo $row["invoice_number"]; ?></td>
                  <td><?php echo date('Y-m-d', strtotime($row["created_date"])) ?></td>
                  <td><?php echo date('Y-m-d', strtotime($row["invoice_date"])) ?></td>
                  <td><?php echo $row["bank_account"]; ?></td>
                  <td><?php echo $row["status"]; ?></td>
                </form>
              </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>

      </div>
    </div>


  </div>
</div>
</div>

<script>
  $(document).ready(function() {
    $('.datatabless').DataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
  });
</script>

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

  function operateFormatter(value, row, index) {
    var link = "<?php echo site_url('contract') ?>";
    return [
    '<a class="btn btn-primary btn-xs dialog" data-url="'+link+'/lihat_tagihan/'+value+'">',
    'Lihat',
    '</a>  ',
    ].join('');
  }

</script>

<script type="text/javascript">

  var $table_monitor_tagihan = $('#table_monitor_tagihan'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $table_monitor_tagihan.bootstrapTable({

      url: "<?php echo site_url('contract/data_tagihan') ?>",

      cookieIdTable:"table_monitor_tagihan",

      idField:"invoice_id",
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      
      columns: [
      {
        field: 'invoice_id',
        title: '#',
        align: 'center',
        formatter: operateFormatter,
        width:'8%'
      },

      {
        field: 'contract_number',
        title: 'No. Kontrak',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },

      {
        field: 'invoice_number',
        title: 'No. Penagihan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle'
      },

      {
        field: 'invoice_date',
        title: 'Tanggal Penagihan',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },

      {
        field: 'vendor_name',
        title: 'Vendor',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
      
      {
        field: 'bank_account',
        title: 'Rekening Bank',
        sortable:true,
        order:true,
        searchable:true,
        align: 'left',
        valign: 'middle'
      },
      
      {
        field: 'created_date',
        title: 'Dibuat Tanggal',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
      
      ]

    });

    setTimeout(function () {
      $table_monitor_tagihan.bootstrapTable('resetView');
    }, 200);

  });

</script>