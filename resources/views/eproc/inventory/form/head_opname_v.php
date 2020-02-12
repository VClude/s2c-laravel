<div class="row" ng-controller="form_header_opname">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>HEADER SO</h5>
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
            <p class="form-control-static" ng-bind="data.no_opname"></p>
          </div>
        </div>

        <div class="form-group">
        <label class="col-md-2 control-label">Judul</label>
          <div class="col-md-6">
            <input type="text" class="form-control" ng-model="data.judul" id="judul" name="judul"/>
          </div>
        </div>

        <div class="form-group">
        <label class="col-md-2 control-label">Tanggal Mulai</label>
          <div class="col-md-3">
            <input type="date" class="form-control" ng-model="data.tgl_mulai" id="tgl_mulai" name="tgl_mulai"/>
          </div>
        </div>

        <div class="form-group">
        <label class="col-md-2 control-label">Tanggal Selesai</label>
          <div class="col-md-3">
            <input type="date" class="form-control" ng-model="data.tgl_selesai" id="tgl_selesai" name="tgl_selesai"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-10">
            <textarea class="form-control" id="keterangan" ng-model="data.keterangan" name="keterangan"></textarea>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>