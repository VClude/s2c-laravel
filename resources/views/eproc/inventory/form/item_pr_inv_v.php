<div class="row" ng-controller="form_item_pr_inv">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ITEM PERMINTAAN</h5>
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

              <span class="input-group-btn"  ng-show="(list_item_progress.length > 0)">
                <button type="button" ng-click="pilihtipeitem('CTR')" data-id="kode_item" data-url="<?php echo site_url('contract/picker_progress_wo') ?>" class="btn btn-primary picker">Pilih Kontrak Item</button> 
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
          <label class="col-md-2 control-label">Satuan</label>
          <div class="col-md-2">
           <p class="form-control-static" id="satuan_item_inp" ng-bind="data.satuan"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Merk</label>
          <div class="col-md-4">
              <p class="form-control-static" id="merk_inp" ng-bind="data.merk_pick.title"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Part Number</label>
          <div class="col-md-4">
          <p class="form-control-static" id="part_number_inp" ng-bind="data.part_number_pick.title"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-4">
            <textarea class="form-control" name="keterangan_inp" ng-model="data.keterangan" id="keterangan_inp" ></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Jumlah</label>
          <div class="col-md-2">
            <input type="text" class="form-control money" ng-model="data.jumlah" name="jumlah_item_inp" id="jumlah_item_inp" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Tanggal Kebutuhan</label>
          <div class="col-md-3">
            <input type="date" class="form-control" ng-model="data.tgl_butuh" name="tgl_butuh_inp" id="tgl_butuh_inp" >
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
                <th>#</th>
                <th>Kode</th>
                <th>Item</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Keterangan</th>
                <th>Merk</th>
                <th>Part Number</th>
                <th>Tanggal Kebutuhan</th>
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
                 <input type='hidden' class='nama_item' data-no='{{$index}}' name='item_nama[{{$index}}]' value='{{item.deskripsi}}'/>
                 {{item.deskripsi}}
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
                 <input type='hidden' class='tgl_butuh_item' data-no='{{$index}}' name='item_tgl_butuh[{{$index}}]' value='{{item.tgl_butuh | date:"yyyy-MM-dd"}}'/>
                 {{item.tgl_butuh | date:"dd/MM/yyyy"}}
               </td>

             </tr>

           </tbody>

         </table>

       </div>

     </div>

   </div>

 </div>
 
</div>