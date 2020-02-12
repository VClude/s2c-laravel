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
            <p class="form-control-static" ng-bind="data.judul"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Tanggal Mulai</label>
          <div class="col-md-3">
            <p class="form-control-static">{{data.tgl_mulai | date:'dd/MM/yyyy'}}</p>

          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Tanggal Selesai</label>
          <div class="col-md-3">
           <p class="form-control-static">{{data.tgl_selesai | date:'dd/MM/yyyy'}}</p>
         </div>
       </div>

       <div class="form-group">
        <label class="col-md-2 control-label">Keterangan</label>
        <div class="col-md-10">
          <p class="form-control-static" ng-bind="data.keterangan"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Pelaksana</label>
        <div class="col-md-6">
          <p class="form-control-static" ng-bind="data.pelaksana"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Attribut</label>
        <div class="col-md-6">
          <p class="form-control-static" ng-bind="data.nama_attr"></p>
        </div>
      </div>

    </div>
  </div>
</div>
</div>