<div class="row" ng-controller="form_head_mutasi">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>HEADER MUTASI</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">Nomor</label>
          <div class="col-md-10">
            <p class="form-control-static" ng-bind="data.nomor"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Jenis</label>
          <div class="col-md-3">
           <p class="form-control-static" ng-bind="data.nama_jenis"></p>
         </div>
       </div> 

       <div ng-if="data.jenis == 'B'">

        <div class="form-group" >
          <label class="col-md-2 control-label">Tipe</label>
          <div class="col-md-3">
            <p class="form-control-static" ng-bind="data.nama_tipe"></p>
          </div>
        </div> 

        <div class="form-group">
          <label class="col-md-2 control-label">Lokasi Tujuan</label>
          <div class="col-md-3">
            <p class="form-control-static" ng-bind="data.nama_kantor"></p>
          </div>
          <div class="col-md-6">
            <p class="form-control-static" ng-bind="data.nama_dept"></p>
          </div>
        </div>

      </div>

      <div ng-if="data.jenis == 'K'">

       <div class="form-group">
        <label class="col-md-2 control-label">Lokasi Tujuan</label>
        <div class="col-md-8">

          <p class="form-control-static" ng-bind="data.nama_kapal"></p>
          
        </div>
      </div>

    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Tahun</label>
      <div class="col-md-2">
       <p class="form-control-static" ng-bind="data.tahun"></p>
     </div>
   </div>

   <div class="form-group">
    <label class="col-md-2 control-label">Gudang</label>
    <div class="col-md-8">
     <p class="form-control-static" ng-bind="data.nama_gudang"></p>
   </div>
 </div>

 <div class="form-group">
  <label class="col-md-2 control-label">Keterangan</label>
  <div class="col-md-8">
   <p class="form-control-static" ng-bind="data.keterangan"></p>
 </div>
</div>

</div>
</div>
</div>
</div>