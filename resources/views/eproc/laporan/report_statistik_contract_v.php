<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">

      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Statistik Kontrak</h5>
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
                <td>Statistik Kontrak</td>
                <td>Jumlah</td>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach ($total as $key => $value) { 
                  if ($value['statistik_kontrak'] == 'Kontrak Aktif') {
                    $isi = 'k1';
                  } elseif ($value['statistik_kontrak'] == 'Kontrak Expired < 3 Bulan') {
                    $isi = 'k2';
                  } elseif ($value['statistik_kontrak'] == 'Kontrak Expired < 1 Bulan') {
                    $isi = 'k3';
                  } elseif ($value['statistik_kontrak'] == 'Kontrak Expired') {
                    $isi = 'k4';
                  }
              ?>

              
              <tr>
                <td><?php echo $value['statistik_kontrak'] ?></td>
                <td>
                  <a href="laporan/detail_rfq/lap_proc_value/<?php echo $isi ?>"><?php echo $value['jml'] ?>
                  </a>
                </td>
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