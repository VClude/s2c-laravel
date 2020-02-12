<div class="row" ng-controller="form_header_adj">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>HEADER PENYESUAIAN</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">No. Penyesuaian</label>
          <div class="col-md-10">
            <p class="form-control-static">{{data.no_penyesuaian}}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-8">
            <p class="form-control-static">{{data.keterangan}}</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>