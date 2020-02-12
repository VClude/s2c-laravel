<div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>A.3 Kinerja Vendor</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div>
          <div class="ibox-content">
          <style>
          table th,td {
          text-align: center; !important
        }
          </style>
              <!-- //hlmifzi -->
           <table class="table table-bordered center">
          <thead>
            <tr>
            <th>Aksi</th>
              <th>Nama Perusahaan</th>
              <th>Invited</th>
              <th>Registered</th>
              <th>Quote</th>
              <th>Win</th>
              <th>Status</th>
            </tr>
          </thead>
          
          <tbody>
          <?php foreach ($kpi as $key => $value){ ?>
          <!-- hlmifzi -->
            <tr>
            <td><a target="_blank" class="btn btn-primary btn-xs action" href="<?php echo site_url('vendor/daftar_vendor') ?>/lihat_detail_vendor/<?php echo $value['vendor_id']?>">Lihat</a></td>
            <td><?php echo $value['vendor_name'] ?></td>
              <td><?php echo $value['invited'] ?></td>
              <td><?php echo $value['reg'] ?></td>
              <td><?php echo $value['quote'] ?></td>
              <td><?php echo $value['win'] ?></td>
              <td><?php echo $value['reg_status_name'] ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>