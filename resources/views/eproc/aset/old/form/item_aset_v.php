<div class="row" ng-controller="form_item_aset">

  <div class="col-lg-12">

    <div class="ibox float-e-margins">

      <div class="ibox-title">

        <h5>ITEM</h5>

        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>

      </div>

      <div class="ibox-content">

       <div class="form-group">
        <label class="col-sm-2 control-label">Kode Item</label>
        <div class="col-sm-4">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="button" data-id="kode_item" data-url="<?php echo site_url('aset/picker_item_aset') ?>" class="btn btn-primary picker barang_btn">...</button> 
            </span>

            <input readonly type="text" class="form-control" id="kode_item" ng-change="ambil_item()" ng-model="data.kode_item" name="kode_item" >
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Item</label>
        <div class="col-sm-10">
          <p class="form-control-static" id="nama_item" ng-bind="data.nama_item"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Kategori</label>
        <div class="col-sm-10">
          <p class="form-control-static" id="kategori_item" ng-bind="data.kategori_item"></p>
          <input type="hidden" name="kategori_item" id="kategori_item" ng-model="data.kategori_item_id">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Satuan</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" maxlength="12" name="satuan_item" id="satuan_item" ng-model="data.satuan_item">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Jumlah</label>
        <div class="col-sm-2">
          <input type="text" class="form-control money" maxlength="40" name="jumlah_item" id="jumlah_item" ng-model="data.jumlah_item">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Kategori Pajak</label>
        <div class="col-sm-3">
          <select name="kategori_pajak_item" id="kategori_pajak_item" class="form-control" ng-model="data.kategori_pajak_item">
            <option ng-repeat="option in data.list_kategori_pajak" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Kode Program &amp; Akun</label>
        <div class="col-sm-4">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="button" data-id="akun_item" data-url="<?php echo site_url('administration/picker_anggaran') ?>" class="btn btn-primary picker">...</button> 
            </span>
            <input readonly type="text" class="form-control" id="akun_item" ng-model="data.akun_item" ng-change="ambil_akun()" name="akun_item" >
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Nilai Perolehan</label>
        <div class="col-sm-4">
          <input type="text" class="form-control money" maxlength="12" name="nilai_item" id="nilai_item" ng-model="data.nilai_item">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Comptable</label>
        <div class="col-sm-3">
          <select name="comptable_item" id="comptable_item" class="form-control" ng-model="data.comptable_item">
            <option ng-repeat="option in data.list_comptable" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Keterangan</label>
        <div class="col-sm-6">
          <textarea class="form-control" name="keterangan_item" id="keterangan_item" ng-model="data.keterangan_item" ></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Merk</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" ng-model="data.merk" id="merk_inp" name="merk_inp"/>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Part Number</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" ng-model="data.partnumber" id="part_number_inp" name="part_number_inp"/>
        </div>
      </div>

      <center>
        <a class="btn btn-primary" ng-click="tambah_item()">Simpan</a>
        <a class="btn btn-default" ng-click="hapus_item()">Hapus</a>
        <input type="hidden" id="current_item" ng-model="data.current_item">
        <br>
      </center>

      <hr>

      <table class="table table-bordered">

        <thead>
          <tr>
            <th>#</th>
            <th>Kode</th>
            <th>Item</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Pajak</th>
            <th>Akun</th>
            <th>Keterangan</th>
            <th>Comptable</th>
            <th>Merk</th>
            <th>Part Number</th>
          </tr>
        </thead>

        <tbody>

         <tr ng-repeat="item in data.list_item">
           <td>
             <button type='button' class='btn btn-primary btn-xs' ng-click="ubah_item(data.list_item,$index)" data-no='{{$index}}'>
               <i class='fa fa-edit'></i>
             </button>
           </td>
           <td>
             <input type='hidden' class='kode_item' data-no='{{$index}}' name='item_kode[{{$index}}]' value='{{item.kode}}'/>
             {{item.kode}}
           </td>
           <td>
             <input type='hidden' class='nama_item' data-no='{{$index}}' name='item_nama[{{$index}}]' value='{{item.nama}}'/>
             {{item.nama}}
           </td>
           <td>
             <input type='hidden' class='kategori_item' data-no='{{$index}}' name='item_kategori_id[{{$index}}]' value='{{item.kategori_id}}'/>
             {{item.kategori_nama}}
           </td>
           <td>
             <input type='hidden' class='jumlah_item' data-no='{{$index}}' name='item_jumlah[{{$index}}]' value='{{item.jumlah}}'/>
             {{item.jumlah}}
           </td>
           <td>
             <input type='hidden' class='satuan_item' data-no='{{$index}}' name='item_satuan[{{$index}}]' value='{{item.satuan}}'/>
             {{item.satuan}}
           </td>
           <td>
             <input type='hidden' class='kategori_pajak_item' data-no='{{$index}}' name='item_kategori_pajak[{{$index}}]' value='{{item.kategori_pajak_id}}'/>
             {{item.kategori_pajak_nama}}
           </td>
           <td>
             <input type='hidden' class='costcenter_item' data-no='{{$index}}' name='item_costcenter[{{$index}}]' value='{{item.costcenter_id}}'/>
             {{item.costcenter}}
           </td>
           <td>
             <input type='hidden' class='keterangan_item' data-no='{{$index}}' name='item_keterangan[{{$index}}]' value='{{item.keterangan}}'/>
             {{item.keterangan}}
           </td>
           <td>
             <input type='hidden' class='comptable_item' data-no='{{$index}}' name='item_comptable[{{$index}}]' value='{{item.comptable_id}}'/>
             {{item.comptable}}
           </td>
           <td>
             <input type='hidden' class='merk_item' data-no='{{$index}}' name='item_merk[{{$index}}]' value='{{item.merk}}'/>
             {{item.merk}}
           </td>
           <td>
             <input type='hidden' class='partnumber_item' data-no='{{$index}}' name='item_partnumber[{{$index}}]' value='{{item.partnumber}}'/>
             {{item.partnumber}}
           </td>
         </tr>

       </tbody>

     </table>

   </div>

 </div>

</div>

</div>