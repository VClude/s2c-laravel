<div class="row" ng-controller="form_head_opname">
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

        <div class="form-group">
          <label class="col-md-2 control-label">Pelaksana</label>
          <div class="col-md-6">
            <input type="text" class="form-control" ng-model="data.pelaksana" id="pelaksana" name="pelaksana"/>
          </div>
        </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Atribut</label>
        <div class="col-md-4">
          <select name="attr" required id="attr" class="form-control" ng-model="data.attr">
            <option ng-repeat="option in data.list_attr" ng-selected="(option.id == data.attr)" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>