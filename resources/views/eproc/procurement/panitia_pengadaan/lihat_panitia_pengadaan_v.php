<div class="wrapper wrapper-content animated fadeInRight">
  <form method="post" action="<?php echo site_url($controller_name."/submit_edit_panitia_pengadaan");?>" class="form-horizontal">

    <input type="hidden" name="id" value="<?php echo $id ?>">

    <div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Lihat Panitia Pengadaan</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div>

          <div class="ibox-content">

            <?php $curval = $data["committee_name"]; ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Panitia</label>
              <div class="col-sm-10">
                <p class="form-control-static">
                  <?php echo $curval ?>
                </p>
              </div>
          </div>

            <?php $curval = $data['committee_doc']; ?>
            <div class="form-group">
              <label class="col-sm-2 control-label"><?php echo lang('attachment') ?></label>
              <div class="col-sm-6">
                <p class="form-control-static">
                  <a href="<?php echo INTRANET_UPLOAD_FOLDER."/$dir/$curval" ?>"><?= $curval ?></a>
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Posisi Panitia</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
          </div>
        </div>        

        <div class="ibox-content">

          <div class="table-responsive">             

            <table id="panitia_detail" class="table table-bordered table-striped"></table>

          </div>

        </div>
      </div>


    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div>
         <?php echo buttonback('procurement/procurement_tools/panitia_pengadaan',lang('back')) ?>
      </div>
    </div>
  </div>
</form>

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

    var mydata = $.getCustomJSON("<?php echo site_url('procurement') ?>/"+url);

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
    var link = "<?php echo site_url('procurement/procurement_tools/panitia_pengadaan') ?>";
    return [
    '<a class="btn btn-danger btn-xs action" onclick="return confirm(\'Anda yakin ingin menghapus data?\')" href="'+link+'/hapus_panitia_detail/'+value+'">',
    'Hapus',
    '</a>  ',
    ].join('');
  }

  function totalTextFormatter(data) {
    return 'Total';
  }
  function totalNameFormatter(data) {
    return data.length;
  }
  function totalPriceFormatter(data) {
    var total = 0;
    $.each(data, function (i, row) {
      total += +(row.price.substring(1));
    });
    return '$' + total;
  }

</script>

<script type="text/javascript">

  var $panitia_detail = $('#panitia_detail'),
  selections = [];

</script>

<script type="text/javascript">

  $(function () {

    $panitia_detail.bootstrapTable({

      url: "<?php echo site_url('procurement/data_panitia_detail/'.$id) ?>",
      cookieIdTable:"adm_bid_committee",
      idField:"team_order",
      <?php echo DEFAULT_BOOTSTRAP_TABLE_CONFIG ?>
      columns: [
      {
        field: 'fullname',
        title: 'Nama',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
      {
        field: 'committee_pos',
        title: 'Posisi',
        sortable:true,
        order:true,
        searchable:true,
        align: 'center',
        valign: 'middle'
      },
      ]

    });
    setTimeout(function () {
      $panitia_detail.bootstrapTable('resetView');
    }, 200);

    $panitia_detail.on('expand-row.bs.table', function (e, index, row, $detail) {
      $detail.html(detailFormatter(index,row,""));
    });

  });

</script>