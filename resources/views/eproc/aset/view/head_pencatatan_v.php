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
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Tanggal Perolehan</label>
          <div class="col-md-2">
            <p class="form-control-static" ng-bind="data.tanggal | date:'dd/MM/yyyy'"></p>
          </div>
        </div>

        <div class="form-group">
         <label class="col-md-2 control-label">Tipe</label>
         <div class="col-md-2">
          <p class="form-control-static" ng-bind="data.nama_tipe"></p>
          <input type="hidden" name="tipe" ng-value="data.tipe"/>
        </div>
        <label class="col-md-1 control-label">Jenis</label>
        <div class="col-md-2">
          <p class="form-control-static" ng-bind="data.nama_jenis"></p>
        </div>

        <!-- hlmifzi -->
        <label class="col-md-2 control-label">Jenis ASDP</label>
        <div class="col-md-2">
          <p class="form-control-static" ng-bind="data.nama_jenis_asdp"></p>
        </div>
        <!-- end -->
      </div> 

      <div class="form-group">
        <label class="col-md-2 control-label">No. Kontrak</label>
        <div class="col-md-6">
          <p class="form-control-static" ng-bind="data.no_kontrak"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Vendor</label>
        <div class="col-md-6">
          <p class="form-control-static" ng-bind="data.nama_vendor"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Keterangan</label>
        <div class="col-md-10">
          <p class="form-control-static" ng-bind="data.keterangan"></p>
        </div>
      </div>


             

      <div class="form-group">
        <label class="col-md-2 control-label">Aset Berkala</label>
        <div class="col-md-10">
          <div ng-if="data.isAsetBerkala == null">
             <input type="checkbox" name="" disabled="">
          </div>
          <div ng-if="data.isAsetBerkala >= 1">
             <input type="checkbox" name="" checked="" disabled="">
          </div>
        </div>
      </div>


    </div>
  </div>

</div>

</div>