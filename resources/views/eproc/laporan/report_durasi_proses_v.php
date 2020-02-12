<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">

      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Rekap Rata-Rata Durasi Proses Pengadaan</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>
        </div>
        <div class="ibox-content">

         <div class="table-responsive">

          <table class="table table-bordered table-striped">
            <thead style="text-align: center;">
              <tr>
                <td>Metode Pengadaan</td>
                <td>Rata-Rata</td>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($top_proc_method as $key => $value) {?>
              <tr>
                <td><?php echo $value['label'] ?></td>
                <td><?php echo $value['av'] ?></td>
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