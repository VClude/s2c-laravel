<div class="row" ng-controller="form_head_pr">
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
          <label class="col-md-2 control-label">No. Permintaan</label>
          <div class="col-md-10">
            <p class="form-control-static">{{data.no_permintaan}}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-10">
            <textarea class="form-control" id="keterangan" ng-model="data.keterangan" name="keterangan"></textarea>
          </div>
        </div>
        <?php if($userdata['job_title'] != "PIC USER"){ ?>
        <div class="form-group">
          <label class="col-md-2 control-label">Lokasi Tujuan</label>
          <div class="col-md-6">
            <select name="kantor_inv" ng-if="data.lokasi == 'k'" id="kantor_inv" class="form-control" ng-model="data.kantor_tujuan" ng-change="reload_var()">
              <option ng-repeat="option in list_kantor" ng-selected="(option.id == data.kantor)" value="{{option.id}}">{{option.name}}</option>
            </select>
            <select name="dept_inv" ng-if="data.lokasi == 'd'" id="dept_inv" class="form-control" ng-model="data.dept_tujuan" ng-change="reload_var()">
              <option ng-repeat="option in list_dept" ng-selected="(option.id == data.dept)" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>