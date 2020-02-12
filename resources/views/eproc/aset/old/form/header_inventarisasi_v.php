<div class="row" ng-controller="form_header_inventarisasi">
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
          <label class="col-sm-2 control-label">No. Inisiasi Inventarisasi</label>
          <div class="col-sm-4">
           <input type="text" class="form-control" ng-model="data.no_invsi" id="no_invsi" name="no_invsi"/>
         </div>
       </div>

       <div class="form-group">
        <label class="col-sm-2 control-label">Judul</label>
        <div class="col-sm-7">
        <input type="text" class="form-control" ng-model="data.judul_invsi" id="judul_invsi" name="judul_invsi"/>
        </div>
      </div>


      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Mulai</label>
        <div class="col-sm-3">
           <input type="date" class="form-control" ng-model="data.tgl_mulai_invsi" id="tgl_mulai_invsi" name="tgl_mulai_invsi"/>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Berakhir</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" ng-model="data.tgl_berakhir_invsi" id="tgl_berakhir_invsi" name="tgl_berakhir_invsi"/>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Keterangan</label>
        <div class="col-sm-6">
          <textarea type="text" class="form-control" ng-model="data.ket_invsi" id="ket_invsi" name="ket_invsi"></textarea>
        </div>
      </div>


    </div>
  </div>
</div>
</div>