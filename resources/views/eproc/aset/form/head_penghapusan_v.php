<div class="row" ng-controller="form_head_penghapusan">
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
        <label class="col-md-2 control-label">Usulan</label>
        <div class="col-md-6">
          <input type="text" class="form-control" ng-model="data.usulan" id="usulan" name="usulan"/>
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