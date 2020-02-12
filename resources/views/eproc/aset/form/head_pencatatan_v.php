<div class="row" ng-controller="form_head_pencatatan">
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
            <p class="form-control-static" ng-bind="data.nomor"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Progress</label>
          <div class="col-md-8">
            <p class="form-control-static" ng-bind-html="data.progress"></p>
            <input type="hidden" name="no_progress" ng-model="data.no_progress" value="" id="no_progress">
          </div>
          <?php /*
          <div class="col-md-2">
            <button type="button" data-id="no_progress" data-url="<?php echo site_url('contract/monitor_progress/active/ast') ?>" class="btn btn-primary picker">
              <i class="fa fa-search"></i>
            </button> 
          </div>
          */ ?>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Tanggal Perolehan</label>
          <div class="col-md-3">
            <input type="date" class="form-control datepicker" ng-change="hitungpenyusutan()" ng-model="data.tanggal" id="tanggal" name="tanggal"/>
          </div>
        </div>

        <div class="form-group">
         <label class="col-md-2 control-label">Tipe</label>
         <div class="col-md-2">
          <select name="tipe" id="tipe" class="form-control" ng-model="tipe">
            <option ng-repeat="option in data.list_tipe" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
        <label class="col-md-1 control-label">Jenis BUMN</label>
        <div class="col-md-3">
          <select name="jenis" id="jenis" ng-change="hitungpenyusutan()" class="form-control" ng-model="data.jenis">
            <option ng-repeat="option in data.list_jenis" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>

        <!-- hlmifzi -->
        <label class="col-md-1 control-label">Jenis ASDP</label>
        <div class="col-md-3">
          <select name="jenis_asdp" id="jenis_asdp" ng-change="hitungpenyusutan()" class="form-control" ng-model="data.jenis_asdp">
            <option ng-repeat="option in data.list_jenis_asdp" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
        <!-- end -->
      </div> 

      <div class="form-group">
        <label class="col-md-2 control-label">No. Kontrak</label>
        <div class="col-md-4">
          <input type="text" class="form-control" ng-disabled="data.no_progress" ng-model="data.no_kontrak" id="no_kontrak" name="no_kontrak"/>
          <input type="hidden" name="contract_amount" ng-value="data.contract_amount">
        </div>

      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Vendor</label>
        <div class="col-md-6">
          <input type="text" class="form-control" ng-disabled="data.no_progress" ng-model="data.nama_vendor" id="nama_vendor" name="nama_vendor"/>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Keterangan</label>
        <div class="col-md-10">
          <textarea class="form-control" id="keterangan" ng-model="data.keterangan" name="keterangan"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Aset Berkala</label>
        <div class="col-md-10">
          <input type="checkbox" ng-model="data.isAsetBerkala" name="isAsetBerkala" id="isAsetBerkala" value="1">
        </div>
      </div>



    </div>
  </div>

</div>

</div>