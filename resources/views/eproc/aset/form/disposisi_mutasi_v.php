<div class="row" ng-controller="form_head_mutasi">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>DISPOSISI</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">Petugas</label>
          <div class="col-md-5">
            <select name="petugas" id="petugas" class="form-control" ng-model="data.petugas">
              <option ng-repeat="option in data.list_petugas" ng-selected="(option.id == data.id_petugas)" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div> 

      </div>
    </div>
  </div>
</div>