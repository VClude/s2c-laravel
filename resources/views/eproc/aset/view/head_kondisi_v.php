<div class="row" ng-controller="form_head_kondisi">
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
          <label class="col-md-2 control-label">Tanggal</label>
          <div class="col-md-3">
            <p class="form-control-static" ng-bind="data.tanggal | date:'dd/MM/yyyy'"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Nama Aset</label>
          <div class="col-md-8">
            <p class="form-control-static" ng-bind="data.barang.barcode+' - '+data.barang.nama_barang"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" hidden="hidden">Mitra Kerja </label>
          <div class="col-md-6">
            <p class="form-control-static" ng-bind="data.mitra" hidden="hidden"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-10">
            <p class="form-control-static" ng-bind="data.keterangan"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Kondisi</label>
          <div class="col-md-6">
            <p class="form-control-static" ng-bind="data.nama_kondisi"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Biaya</label>
          <div class="col-md-6">
            <p class="form-control-static" ng-bind="data.biaya | number"></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Lokasi</label>
          <div class="col-md-3">
            <div class="radio-inline" readonly="readonly">
             <input type="radio" name="lokasi" ng-model="data.lokasi_ktr" value="ktr" disabled="disabled"> Kantor 
           </div>
           <div class="radio-inline">
            <input type="radio" name="lokasi" ng-model="data.lokasi_ktr" value="kpl" disabled="disabled"> Kapal
          </div>
        </div>
      </br>
        <div class="col-md-4" ng-if="data.lokasi_ktr == 'ktr'">
          <select name="lokasi_ktr" id="lokasi_ktr" ng-change="reloaddept(data.kantor_item[0])" class="form-control static" ng-model="data.location_id" disabled="disabled">
            <option ng-repeat="option in list_kantor" ng-selected="(option.id == data.kantor_item)" value="{{option.id}}">{{option.name}}</option>
          </select>
          <select name="dept" id="dept" class="form-control static" ng-model="data.div_id" disabled="disabled">
          <option ng-repeat="option in list_dept" ng-selected="(option.id == data.divisi_item)" value="{{option.id}}">{{option.name}}</option>
        </select>
        </div>
        <div class="col-md-4" ng-if="data.lokasi_ktr == 'kpl'">
          <select name="lokasi_kpl" id="lokasi_kpl" class="form-control static" ng-model="data.lokasi_kpl" disabled="disabled">
            <option ng-repeat="option in list_kapal" ng-selected="(option.id == data.kapal_item)" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>
         <div class="form-group">
          <label class="col-md-2 control-label">Pemegang Aset</label>
          <div class="col-md-6">
          <p class="form-control-static" ng-bind="data.pemegang"></p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>