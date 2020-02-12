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
              <div class="col-md-6">
                <p class="form-control-static" ng-bind="data.bastb"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Kode Barang</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.kode_barang"></p>
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
              <label class="col-md-2 control-label">Departemen</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.nama_dept"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Gudang</label>
              <div class="col-md-6">
                <p class="form-control-static" ng-bind="data.nama_gudang"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Nama</label>
              <div class="col-md-8">
                <p class="form-control-static" ng-bind="data.nama_barang"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Jumlah</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.jumlah_barang+' '+data.nama_satuan"></p>
              </div>
              <label class="col-md-2 control-label">Batas</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.batas_barang"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Keterangan</label>
              <div class="col-md-8">
                <p class="form-control-static" ng-bind="data.keterangan_pencatatan"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Status</label>
              <div class="col-md-6">
                <p class="form-control-static" ng-bind-html="data.nama_status"></p>
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
              <label class="col-md-2 control-label">Merk</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.merk"></p>
              </div>
              <label class="col-md-2 control-label">Part Number</label>
              <div class="col-md-3">
                <p class="form-control-static" ng-bind="data.part_number"></p>
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

</div>

<script type="text/javascript">localStorage.setItem('dialogshow', "");</script>