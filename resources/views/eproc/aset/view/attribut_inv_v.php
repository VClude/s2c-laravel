 <div class="row" ng-controller="form_atr_opname">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ATTRIBUT</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

       <div class="form-group">
        <label class="col-md-2 control-label">Gudang</label>
        <div class="col-md-4">
          <select name="gudang_inv" disabled id="gudang_inv" class="form-control" ng-model="data.gudang">
            <option ng-repeat="option in list_gudang" ng-selected="(option.id == data.gudang)" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Atribut</label>
        <div class="col-md-4">
          <select name="attr_inv" disabled id="attr_inv" class="form-control" ng-model="data.attr">
            <option ng-repeat="option in data.list_attr" ng-selected="(option.id == data.attr)" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>

    </div>
  </div>
</div>
</div>