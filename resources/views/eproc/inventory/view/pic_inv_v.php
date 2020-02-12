<div class="row" ng-controller="form_pic">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>PIC PENERIMA</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">Lokasi Tujuan</label>
          <div class="col-md-3">
            <input type="radio" disabled ng-change="reloadpic()" name="lokasi" ng-model="data.lokasi" value="k"> Kantor 
            <input type="radio" disabled ng-change="reloadpic()" name="lokasi" ng-model="data.lokasi" value="d"> Departemen
          </div>
          <div class="col-md-6">
          <select name="kantor_inv" ng-show="data.lokasi == 'k'" id="kantor_inv" class="form-control" ng-model="data.kantor" disabled ng-change="reloadpic()">
          <option value="">Pilih</option>
              <option ng-repeat="option in list_kantor" ng-selected="(option.id == data.kantor)" value="{{option.id}}">{{option.name}}</option>
            </select>
            <select name="dept_inv" ng-show="data.lokasi == 'd'" id="dept_inv" class="form-control" ng-model="data.dept" disabled ng-change="reloadpic()">
            <option value="">Pilih</option>
              <option ng-repeat="option in list_dept" ng-selected="(option.id == data.dept)" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Nama *</label>
          <div class="col-md-8">

           <select name="pic_inv" id="pic_inv" disabled class="form-control" ng-model="data.pic">
           <option value="">Pilih</option>
            <option ng-repeat="option in data.list_pic" ng-selected="(option.id == data.pic)" value="{{option.id}}">{{option.name}}</option>
          </select>

        </div>
      </div>

    </div>
  </div>
</div>
</div>