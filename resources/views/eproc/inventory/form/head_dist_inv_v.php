<div class="row" ng-controller="form_header_dist">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>HEADER DISTRIBUSI</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">No. Distribusi Barang</label>
          <div class="col-md-10">
            <p class="form-control-static">{{data.no_distribusi}}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-8">
            <textarea class="form-control" id="keterangan" ng-model="data.keterangan" name="keterangan"></textarea>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>