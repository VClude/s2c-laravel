<div class="row" ng-controller="form_head_kondisi">
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
          <label class="col-md-2 control-label">Nomor</label>
          <div class="col-md-4">
            <p class="form-control-static" ng-bind="data.nomor"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Tanggal</label>
          <div class="col-md-3">
            <p class="form-control-static" ng-bind="data.tanggal | date:'dd/MM/yyyy'"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Nama Aset</label>
          <div class="col-md-8">
            <p class="form-control-static" ng-bind="data.barang.barcode+' - '+data.barang.nama_barang"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" hidden="hidden">Mitra Kerja</label>
          <div class="col-md-6">
            <p class="form-control-static" ng-bind="data.mitra" hidden="hidden"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-10">
            <p class="form-control-static" ng-bind="data.keterangan"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Kondisi</label>
          <div class="col-md-6">
            <p class="form-control-static" ng-bind="data.nama_kondisi"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Biaya</label>
          <div class="col-md-6">
            <p class="form-control-static" ng-bind="data.biaya | number"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>