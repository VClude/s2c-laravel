<div class="row" ng-controller="form_item_adj">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ITEM PENYESUAIAN</h5>
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
                <button type="button" data-id="kode_item" ng-click="pilihtipeitem('INV')" data-url="<?php echo site_url('inventory/picker_inv') ?>" class="btn btn-primary picker">Pilih Inventory</button> 
              </span>
              
              <input readonly="" type="text" class="form-control" id="kode_item" name="kode_item" ng-change="ambil_item()" ng-model="data.kode">

            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Deskripsi</label>
          <div class="col-md-10">
            <p class="form-control-static" id="deskripsi_item" ng-bind="data.deskripsi"></p>
          </div>
        </div>

        <div class="form-group">
         <label class="col-md-2 control-label">Stok Batas</label>
          <div class="col-md-2">
            <input type="text" class="form-control money" ng-model="data.batas" name="batas_item_inp" id="batas_item_inp" >
          </div>
        </div>

        <div class="form-group">
         <label class="col-md-2 control-label">Stok Penyesuaian</label>
          <div class="col-md-2">
            <input type="text"  class="form-control money" ng-model="data.penyesuaian" name="penyesuaian_item_inp" id="penyesuaian_item_inp" >
          </div>
          <label class="col-md-2 control-label">Stok Sekarang</label>
          <div class="col-md-2">
             <p class="form-control-static" id="stok_item" ng-bind="data.stok"></p>
          </div>
          
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-4">
            <textarea class="form-control" name="keterangan_inp" ng-model="data.keterangan" id="keterangan_inp" ></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Merk</label>
          <div class="col-md-4">
             <p class="form-control-static" id="merk_item" ng-bind="data.merk"></p>

          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Part Number</label>
          <div class="col-md-4">
            <p class="form-control-static" id="part_number_item" ng-bind="data.part_number"></p>
          </div>
        </div>

        <div class="form-group">
        <label class="col-md-2 control-label">Status</label>
        <div class="col-md-3">
        <select name="status_inv" id="status_inv" class="form-control" ng-model="data.status">
            <option ng-repeat="option in data.list_status_inv" ng-selected="(option.id == data.status)" value="{{option.id}}">{{option.name}}</option>
          </select>
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

          <table class="table table-bordered" id="item_table">
            <thead>
              <tr>
                <th rowspan="2">#</th>
                <th rowspan="2">Kode</th>
                <th rowspan="2">Item</th>
                <th colspan="3">Stok</th>
                <th rowspan="2">Keterangan</th>
                <th rowspan="2">Merk</th>
                <th rowspan="2">Part Number</th>
                <th rowspan="2">Status</th>
              </tr>
              <tr>
                <th>Sekarang</th>
                <th>Penyesuaian</th>
                <th>Batas</th>
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
                 <input type='hidden' class='id_item' data-no='{{$index}}' name='item_id[{{$index}}]' value='{{item.id}}'/>
                 {{item.kode}}
               </td>
               <td>
                 <input type='hidden' class='nama_item' data-no='{{$index}}' name='item_nama[{{$index}}]' value='{{item.deskripsi}}'/>
                 {{item.deskripsi}}
               </td>
               <td>
                 <input type='hidden' class='stok_item' data-no='{{$index}}' name='item_stok[{{$index}}]' value='{{item.stok}}'/>
                 {{item.stok}}
               </td>
               <td>
                 <input type='hidden' class='penyesuaian_item' data-no='{{$index}}' name='item_penyesuaian[{{$index}}]' value='{{item.penyesuaian}}'/>
                 {{item.penyesuaian}}
               </td>
               <td>
                 <input type='hidden' class='batas_item' data-no='{{$index}}' name='item_batas[{{$index}}]' value='{{item.batas}}'/>
                 {{item.batas}}
               </td>
               <td>
                 <input type='hidden' class='keterangan_item' data-no='{{$index}}' name='item_keterangan[{{$index}}]' value='{{item.keterangan}}'/>
                 {{item.keterangan}}
               </td>
               <td>
                 <input type='hidden' class='merk_item' data-no='{{$index}}' name='item_merk[{{$index}}]' value='{{item.merk}}'/>
                 {{item.merk}}
               </td>
               <td>
                 <input type='hidden' class='part_number_item' data-no='{{$index}}' name='item_part_number[{{$index}}]' value='{{item.part_number}}'/>
                 {{item.part_number}}
               </td>

               <td>
                 <input type='hidden' class='status_item' data-no='{{$index}}' name='item_status[{{$index}}]' value='{{item.status}}'/>
                 {{item.status_name}}
               </td>

             </tr>

           </tbody>

         </table>

       </div>

     </div>

   </div>

 </div>
 
</div>