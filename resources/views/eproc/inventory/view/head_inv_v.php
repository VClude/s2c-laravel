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

       <div class="form-group" ng-show="data.no_progress">
        <label class="col-md-2 control-label">Progress</label>
        <div class="col-md-8">
          <p class="form-control-static" ng-bind-html="data.progress"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">No. Kontrak</label>
        <div class="col-md-10">
          <p class="form-control-static">{{data.no_kontrak}}</p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Vendor</label>
        <div class="col-md-10">
          <p class="form-control-static">{{data.nama_vendor}}</p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Nomor</label>
        <div class="col-md-4">
          <p class="form-control-static">{{data.no_inv}}</p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Tanggal Barang Masuk</label>
        <div class="col-md-3">
          <p class="form-control-static">{{data.tgl_inv | date:'dd/MM/yyyy'}}</p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Keterangan</label>
        <div class="col-md-10">
         <p class="form-control-static">{{data.ket_inv}}</p>
       </div>
     </div>

     <div class="form-group">
      <label class="col-md-2 control-label">Tipe Inventory</label>
      <div class="col-md-3">
       <p class="form-control-static">{{data.nama_tipe_inv}}</p>
     </div>
   </div>

   <div class="form-group">
    <label class="col-md-2 control-label">Status</label>
    <div class="col-md-3">
      <p class="form-control-static">{{data.nama_jenis_inv}}</p>
    </div>
  </div> 

</div>
</div>
</div>
</div>