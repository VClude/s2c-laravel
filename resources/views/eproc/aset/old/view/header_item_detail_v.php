<div class="row" ng-controller="form_item_detail">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ITEM DETAIL</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

       <div class="form-group">
        <label class="col-sm-2 control-label">Barcode</label>
        <div class="col-sm-7">
          <p class="form-control-static" ng-bind="data.kode_barcode"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Kode Lokasi</label>
        <div class="col-sm-6">
          <p class="form-control-static" ng-bind="data.kode_lokasi"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Kode Inventaris</label>
        <div class="col-sm-6">
          <p class="form-control-static" ng-bind="data.kode_inventaris"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Aset</label>
        <div class="col-sm-6">
          <p class="form-control-static" ng-bind="data.nama_aset"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Kategori</label>
        <div class="col-sm-6">
          <p class="form-control-static" ng-bind="data.kategori"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Jumlah</label>
        <div class="col-sm-6">
          <p class="form-control-static" ng-bind="data.jumlah"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Harga Perolehan</label>
        <div class="col-sm-6">
          <p class="form-control-static" ng-bind="data.harga_perolehan"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Nilai Perolehan</label>
        <div class="col-sm-6">
          <p class="form-control-static" ng-bind="data.nilai_perolehan"></p>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
