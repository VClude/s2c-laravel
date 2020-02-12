<div class="row" ng-controller="form_header_hapus">
  <div class="col-lg-12">
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
        <label class="col-sm-2 control-label">Judul</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" ng-model="data.judul_hapus" id="judul_hapus" name="judul_hapus"/>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Keterangan</label>
        <div class="col-sm-6">
          <textarea type="text" class="form-control" ng-model="data.ket_hapus" id="ket_hapus" name="ket_hapus"></textarea>
        </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 control-label">Usulan Penghapusan</label>
          <div class="col-sm-3">
           <select name="usulan_hapus" required id="usulan_hapus" class="form-control" ng-model="data.usulan_hapus">
            <option ng-repeat="option in data.list_usulan_hapus" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>

      </div>

    </div>
  </div>
</div>
</div>