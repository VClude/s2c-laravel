<div class="wrapper wrapper-content animated fadeInRight" ng-controller="detail" >

  <form class="form-horizontal ajaxform" novalidate>

    <div class="row">
      <div class="col-md-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>HEADER</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div>
          <div class="ibox-content">

            <div class="form-group">
              <label class="col-md-2 control-label">Tanggal Dibuat</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.tanggal_dibuat | date:'dd/MM/yyyy'"></p>
              </div>
              <label class="col-md-2 control-label">Tanggal Diubah</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.tanggal_diubah | date:'dd/MM/yyyy' "></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">BASTB</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.bastb"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Kategori</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.nama_kategori"></p>
              </div>
              <label class="col-md-2 control-label">Barcode</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.barcode"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Kantor</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.nama_kantor"></p>
              </div>
              <label class="col-md-2 control-label">Divisi</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.nama_dept"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Gudang</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.nama_gudang"></p>
              </div>
              <label class="col-md-2 control-label">Pemegang</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.pemegang"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Nama</label>
              <div class="col-md-4">
                <p class="form-control-static" ng-bind="data.nama_barang"></p>
              </div>
                <label class="col-md-2 control-label">Pemegang</label>
              <div class="col-md-4">
                <p class="form-control-static" ng-bind="data.pemegang"></p>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label">Tanggal Perolehan</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.tanggal_perolehan | date:'dd/MM/yyyy'"></p>
              </div>
              <label class="col-md-2 control-label">Harga Perolehan</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.harga_perolehan"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Umur Ekonomis</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.nama_umur_ekonomis"></p>
              </div>
              <label class="col-md-2 control-label">Akumulasi Penyusutan</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.akumulasi_penyusutan"></p>
              </div>
            </div>

                        <div class="form-group">
              <label class="col-md-2 control-label">Status</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind-html="data.nama_status"></p>
                 <a href="<?php echo site_url('log/download_attachment/aset') ?>/{{data.lampiran_hapus}}" target="_blank">{{data.lampiran_hapus}}</a>
              </div>
              <label class="col-md-2 control-label">Kondisi</label>
              <div class="col-md-3 table-responsive">
                <p class="form-control-static" ng-bind="data.kondisi"></p>
                <!-- //haqim -->
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>tanggal</th>
                      <th>gambar kondisi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach ($kondisi as $k) { ?>
                      <tr>
                        <td>
                          <?= $no ?>
                        </td>
                        <td>
                         <?= $k['date'] ?> 
                        </td>
                        <td>
                          <?php if ( $k['photo_opname'] != null) { ?>
                            <a href="<?php echo site_url('log/download_attachment/'.$dir).'/'.$k['photo_opname']?>" target="_blank"> 
                              <img src= "<?php echo site_url('log/download_attachment/'.$dir).'/'.$k['photo_opname']?>"  style="max-height: 64px;" class="img-responsive"> 
                          </a>
                        <?php  } else { ?>
                          <img src= "assets/img/logo.png"  style="max-height: 64px;" class="img-responsive"> 
                       <?php } ?>
                        </td>
                      </tr>
                <?php $no++;   } ?>
                    
                  </tbody>
                </table>
                <!-- //end -->
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Keterangan</label>
              <div class="col-md-8">
                <p class="form-control-static" ng-bind="data.keterangan_pencatatan"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Lokasi</label>
              <div class="col-md-8">
              <p class="form-control-static" ng-bind="data.longitude+' x '+data.latitude"></p>
               <div id="map"></div>
             </div>
           </div>

         </div>
       </div>
     </div>
   </div>

   <?php if($readonly){
    $i = 0;
    $back = buttonback($back_url,lang('back'));
  } else {
    $i = 0;
    $back = buttonsubmit($back_url,lang('back'),lang('save'));
  }
  echo $back; ?>

</form>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrKEt8wxUNjcYnhnk9AkIYhtBvX1Qh7u0"></script>

<style>
 #map {
  height: 600px;
  width: 100%;
}
</style>

<script type="text/javascript">

  localStorage.setItem('dialogshow', "");

</script>

</div>

