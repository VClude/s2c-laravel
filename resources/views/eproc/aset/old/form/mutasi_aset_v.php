<div class="row" ng-controller="form_mutasi">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Mutasi</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">

          <label class="col-sm-2 control-label">Jenis Mutasi *</label>

          <div class="col-sm-8">

           <select name="jenis_mutasi" required id="jenis_mutasi" class="form-control" ng-model="data.jenis_mutasi">
            <option ng-repeat="option in data.list_jenis_mutasi" value="{{option.id}}">{{option.name}}</option>
          </select>

        </div>

      </div>

      <div class="form-group">

          <label class="col-sm-2 control-label">Kantor *</label>

          <div class="col-sm-8">

           <select name="kantor" required id="kantor" class="form-control" ng-model="data.kantor">
            <option ng-repeat="option in data.list_kantor" value="{{option.id}}">{{option.name}}</option>
          </select>

        </div>
        
      </div>

    </div>
  </div>
</div>
</div>