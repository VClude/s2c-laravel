<div class="row" ng-controller="form_head_manual">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Header</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div> 
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-sm-2 control-label">Kelompok</label>
          <div class="col-sm-5">
            <select name="kelompok_aset" id="kelompok_aset" class="form-control" ng-model="data.kelompok_aset">
              <option ng-repeat="option in data.list_kelompok" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Sub Kelompok</label>
          <div class="col-sm-5">
            <select name="subkelompok_aset" id="subkelompok_aset" class="form-control" ng-model="data.subkelompok_aset">
              <option ng-repeat="option in data.list_subkelompok" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Kode Kategori</label>
          <div class="col-sm-5">
            <select name="kategori_aset" id="kategori_aset" class="form-control" ng-model="data.kategori_aset">
              <option ng-repeat="option in data.list_kategori" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Kategori</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" ng-model="data.nama_kategori" id="nama_kategori" name="nama_kategori"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Aset</label>
          <div class="col-sm-5">
           <input type="text" class="form-control" ng-model="data.nama_aset" id="nama_aset" name="nama_aset"/>
         </div>
       </div>

       <div class="form-group">
        <label class="col-sm-2 control-label">Satuan</label>
        <div class="col-sm-3">
          <select name="satuan_aset" id="satuan_aset" class="form-control" ng-model="data.satuan_aset">
            <option ng-repeat="option in data.list_satuan" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Jumlah</label>
        <div class="col-sm-4">
         <input type="text" class="form-control money" ng-model="data.jumlah_aset" id="jumlah_aset" name="jumlah_aset"/>
       </div>
     </div>

     <div class="form-group">
      <label class="col-sm-2 control-label">Program Dan Akun</label>
      <div class="col-sm-4">
        <div class="input-group">
          <span class="input-group-btn">
            <button type="button" data-id="akun_aset" data-url="<?php echo site_url('aset/picker_item_inv') ?>" class="btn btn-primary picker barang_btn">...</button> 
          </span>
          <input readonly type="text" class="form-control" ng-model="data.akun_aset" id="akun_aset" name="akun_aset" >
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Harga Perolehan</label>
      <div class="col-sm-4">
        <input type="text" class="form-control money" ng-model="data.harga_aset" id="harga_aset" name="harga_aset"/>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Akumulasi Penyusutan</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" ng-model="data.penyusutan_aset" id="penyusutan_aset" name="penyusutan_aset"/>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Unit Kerja</label>
      <div class="col-sm-3">
        <select name="unit_kerja_aset" id="unit_kerja_aset" class="form-control" ng-model="data.unit_kerja_aset">
          <option ng-repeat="option in data.list_unit_kerja" value="{{option.id}}">{{option.name}}</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Tanggal Perolehan</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" ng-model="data.tgl_perolehan_aset" id="tgl_perolehan_aset" name="tgl_perolehan_aset"/>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Kondisi</label>
      <div class="col-sm-3">
        <select name="kondisi_aset" id="kondisi_aset" class="form-control" ng-model="data.kondisi_aset">
          <option ng-repeat="option in data.list_kondisi" value="{{option.id}}">{{option.name}}</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Comptable</label>
      <div class="col-sm-3">
        <select name="comptable_aset" id="comptable_aset" class="form-control" ng-model="data.comptable_aset">
          <option ng-repeat="option in data.list_comptable" value="{{option.id}}">{{option.name}}</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Keterangan</label>
      <div class="col-sm-6">
        <textarea class="form-control" id="keterangan_aset" ng-model="data.keterangan_aset" name="keterangan_aset"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Latitude (*)</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" ng-model="data.latitude_aset" id="latitude_aset" name="latitude_aset"/>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Longitude (*)</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" ng-model="data.longitude_aset" id="longitude_aset" name="longitude_aset"/>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Foto (*)</label>
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-btn">
            <button type="button" data-id="foto_aset" data-folder="<?php echo $dir ?>" data-preview="preview_file" class="btn btn-primary upload">
              <i class="fa fa-cloud-upload"></i>
            </button>
            <button type="button" data-id="foto_aset" data-folder="<?php echo $dir ?>" data-preview="preview_file" class="btn btn-danger removefile">
              <i class="fa fa-remove"></i>
            </button> 
          </span> 
          <input readonly type="text" class="form-control" ng-model="data.foto_aset" id="foto_aset" name="foto_aset" value="">
          <span class="input-group-btn">
            <button type="button" data-url="" class="btn btn-primary preview_upload" id="preview_file">
              <i class="fa fa-share"></i>
            </button> 
          </span> 
        </div>
      </div>
    </div>

  </div>
</div>
</div>
</div>