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
            <p class="form-control-static">{{data.keterangan}}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Lokasi Tujuan</label>
          <?php /*<div class="col-md-3">
            <input disabled type="radio" ng-change="reloadpic()" name="lokasi" ng-model="data.lokasi" value="k"> Kantor 
            <input disabled type="radio" ng-change="reloadpic()" name="lokasi" ng-model="data.lokasi" value="d"> Departemen
          </div>*/ ?>
          <div class="col-md-6">
          <select disabled name="kantor_inv" ng-show="data.lokasi == 'k'" id="kantor_inv" class="form-control" ng-model="data.kantor_tujuan" ng-change="reloadpic()">
          <option value="">Pilih</option>
              <option ng-repeat="option in list_kantor" ng-selected="(option.id == data.kantor_tujuan)" value="{{option.id}}">{{option.name}}</option>
            </select>
            <select disabled name="dept_inv" ng-show="data.lokasi == 'd'" id="dept_inv" class="form-control" ng-model="data.dept_tujuan" ng-change="reloadpic()">
            <option value="">Pilih</option>
              <option ng-repeat="option in list_dept" ng-selected="(option.id == data.dept_tujuan)" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>