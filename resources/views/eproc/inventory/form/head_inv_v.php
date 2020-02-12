<div class="row" ng-controller="form_header">
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
            <p class="form-control-static" ng-bind="data.no_inv"></p>
          </div>
        </div>

        <div class="form-group" ng-hide="!data.no_progress">
          <label class="col-md-2 control-label">Progress</label>
          <div class="col-md-8">
            <p class="form-control-static" ng-bind-html="data.progress"></p>
            <input type="hidden" name="no_progress" ng-model="data.no_progress" value="" id="no_progress">
          </div>
        <?php /*<div class="col-md-2">
          <button type="button" data-id="no_progress" data-url="<?php echo site_url('contract/monitor_progress/active/inv') ?>" class="btn btn-primary picker">
            <i class="fa fa-search"></i>
          </button> 
        </div>
        */ ?>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">No. Kontrak</label>
        <div class="col-md-6">
          <input type="text" class="form-control" ng-disabled="data.no_progress" ng-model="data.no_kontrak" id="no_kontrak" name="no_kontrak"/>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Vendor</label>
        <div class="col-md-6">
          <input type="text" class="form-control" ng-disabled="data.no_progress" ng-model="data.nama_vendor" id="nama_vendor" name="nama_vendor"/>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Tanggal Barang Masuk</label>
        <div class="col-md-3">
          <input type="date" class="form-control" ng-model="data.tgl_inv" id="tgl_inv" name="tgl_inv"/>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Keterangan</label>
        <div class="col-md-10">
          <textarea class="form-control" id="ket_inv" ng-model="data.ket_inv" name="ket_inv"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Tipe Inventory</label>
        <div class="col-md-3">
          <select name="tipe_inv" ng-change="reload_type()" id="tipe_inv" class="form-control" ng-model="data.tipe_inv">
            <option ng-repeat="option in data.list_tipe_inv" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div> 

      <div class="form-group">
        <label class="col-md-2 control-label">Status</label>
        <div class="col-md-3">
          <select name="jenis_inv" ng-change="reload_type()" id="jenis_inv" class="form-control" ng-model="data.jenis_inv">
            <option ng-repeat="option in data.list_jenis_inv" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div> 

    </div>
  </div>
</div>
</div>