<div class="row" ng-controller="form_item_gudang">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ITEM GUDANG PENYIMPANAN</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">Kode</label>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-btn">
                <button type="button" data-id="kode_item_gdg" data-url="<?php echo site_url('inventory/picker_item_acquisition') ?>" class="btn btn-primary picker barang_btn">...</button> 
              </span>
              <input readonly="" ng-change="ambil_item()" ng-model="data.kode" type="text" class="form-control" id="kode_item_gdg" name="kode_item_gdg" >
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Jumlah Keseluruhan</label>
          <div class="col-md-10">
            <p class="form-control-static" ng-bind="data.list_batas[data.kode] - data.list_jumlah[data.kode] | number" id="jml_keseluruhan"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Jumlah Dimasukkan</label>
          <div class="col-md-2">
            <input type="text" class="form-control money" ng-model="data.jumlah_masuk" name="jumlah_item_gdg_inp" id="jumlah_item_gdg_inp" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Barcode</label>
          <div class="col-md-3">
            <input type="text" class="form-control" ng-model="data.barcode" name="barcode_inp" id="barcode_inp">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Kantor</label>
          <div class="col-md-5">
            <select name="kantor_inv" id="kantor_inv" class="form-control" ng-change="reloadgudang(this.value)" ng-model="data.kantor">
              <option ng-repeat="option in list_kantor" ng-selected="(option.id == data.kantor)" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div>

        <div class="form-group" ng-show="data.kantor">
          <label class="col-md-2 control-label">Gudang</label>
          <div class="col-md-5">
            <select name="gudang_inv" required id="gudang_inv" class="form-control" ng-model="data.gudang">
              <option ng-repeat="option in data.list_gudang" ng-selected="(option.id == data.gudang)" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-4">
            <textarea class="form-control" ng-model="data.keterangan" name="keterangan_gdg_inp" id="keterangan_gdg_inp" ></textarea>
          </div>
        </div>

        <center>
          <a class="btn btn-primary" ng-click="tambah_item()">Simpan</a>
          <a class="btn btn-default" ng-click="hapus_item()">Hapus</a>
          <input type="hidden" id="current_item" ng-model="data.current_item">
          <br>
        </center>

        <hr>

        <div class="table-responsive">

          <table class="table table-bordered" id="gudang_item_gdg">
            <thead>
              <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Barcode</th>
                <th>Item</th>
                <th>Satuan</th>
                <th>Jumlah dimasukkan</th>
                <th>Harga Satuan</th>
                <th>Keterangan</th>
                <th>Kantor</th>
                <th>Gudang</th>
              </tr>
            </thead>
            
            <tbody>

             <tr ng-repeat="item in data.list_item_gudang">
               <td>
                 <button type='button' class='btn btn-primary btn-xs' ng-click="ubah_item(data.list_item_gudang,$index)" data-no='{{$index}}'>
                   <i class='fa fa-edit'></i>
                 </button>
               </td>

               <td>
                 <input type='hidden' class='kode_item' data-no='{{$index}}' name='item_kode[{{$index}}]' value='{{item.kode}}'/>
                 <input type='hidden' class='id_item' data-no='{{$index}}' name='item_id[{{$index}}]' value='{{item.id}}'/>
                 {{item.kode}}
               </td>

               <td>
                 <input type='hidden' class='barcode_item' data-no='{{$index}}' name='item_barcode[{{$index}}]' value='{{item.barcode}}'/>
                 {{item.barcode}}
               </td>

               <td>
                 <input type='hidden' class='nama_item' data-no='{{$index}}' name='item_nama[{{$index}}]' value='{{item.deskripsi}}'/>
                 {{item.deskripsi}}
               </td>

               <td>
                 <input type='hidden' class='satuan_item' data-no='{{$index}}' name='item_satuan[{{$index}}]' value='{{item.satuan}}'/>
                 {{item.satuan}}
               </td>

               <td class="text-right">
                 <input type='hidden' class='jumlah_masuk_item' data-no='{{$index}}' name='item_jumlah_masuk[{{$index}}]' value='{{item.jumlah_masuk}}'/>
                 <input type='hidden' class='jumlah_item' data-no='{{$index}}' name='item_jumlah[{{$index}}]' value='{{item.jumlah}}'/>
                 {{item.jumlah_masuk}}
               </td>

               <td>
                 <input type='hidden' class='harga_satuan_item' data-no='{{$index}}' name='item_harga_satuan[{{$index}}]' value='{{item.harga_satuan}}'/>
                 {{item.harga_satuan}}
               </td>

               <td>
                 <input type='hidden' class='keterangan_item' data-no='{{$index}}' name='item_keterangan[{{$index}}]' value='{{item.keterangan}}'/>
                 {{item.keterangan}}
               </td>

               <td>
                 <input type='hidden' class='kantor_item' data-no='{{$index}}' name='item_kantor[{{$index}}]' value='{{item.kantor}}'/>
                 {{item.kantor_nama}}
               </td>

               <td>
                 <input type='hidden' class='gudang_item' data-no='{{$index}}' name='item_gudang[{{$index}}]' value='{{item.gudang}}'/>
                 {{item.gudang_nama}}
               </td>

             </tr>

           </tbody>

         </table>

       </div>

     </div>

   </div>
 </div>
</div>