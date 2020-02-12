<div class="row" ng-controller="form_item_mutasi">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ITEM MUTASI</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">


        <div class="form-group">
          <label class="col-md-2 control-label">Aset</label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-btn">
                <button type="button" data-id="aset_id" data-url="<?php echo site_url('aset/picker_aset') ?>" class="btn btn-primary picker barang_btn">...</button> 
              </span>
              <input readonly type="text" class="form-control" id="aset_id" ng-change="ambil_item()" ng-model="data.aset_id" name="aset_id" >
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Nama</label>
          <div class="col-md-8">
            <p class="form-control-static" ng-bind="data.barang.nama_barang"></p>
          </div>
        </div>

                <div class="form-group">
          <label class="col-md-2 control-label">Barcode</label>
          <div class="col-md-8">
            <p class="form-control-static" ng-bind="data.barang.barcode"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Deskripsi</label>
          <div class="col-md-10">
            <p class="form-control-static" ng-bind="data.barang.keterangan_pencatatan"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Divisi</label>
          <div class="col-md-2">
           <p class="form-control-static" ng-bind="data.barang.nama_dept"></p>
         </div>
       </div>

       <div class="form-group">
        <label class="col-md-2 control-label">Kantor</label>
        <div class="col-md-4">
          <p class="form-control-static" ng-bind="data.barang.nama_kantor"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Kategori</label>
        <div class="col-md-4">
          <p class="form-control-static" ng-bind="data.barang.nama_kategori"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Umur Ekonomis</label>
        <div class="col-md-4">
          <p class="form-control-static" ng-bind="data.barang.nama_umur_ekonomis"></p>
        </div>
      </div>

      <center>
        <a class="btn btn-primary" ng-click="tambah_item()">Simpan</a>
        <input type="hidden" id="current_item" ng-model="data.current_item">
        <br>
      </center>

      <hr>

      <div class="table-responsive">

        <table class="table table-bordered" id="item_table">
          <thead>
            <tr>
              <th>#</th>
              <th>Barcode</th>
              <th>Nama</th>
              <th>Kantor</th>
            </tr>
          </thead>

          <tbody>

           <tr ng-repeat="item in data.list_item">
             <td>
               <button type='button' class='btn btn-danger btn-xs' ng-click="ubah_item(data.list_item,$index)" data-no='{{$index}}'>
                 <i class='fa fa-remove'></i>
               </button>
               <input type="hidden" name="item_id[{{$index}}]" value="{{item.id}}">
             </td>
             <td>
               <input type='hidden' class='kode_item' data-no='{{$index}}' name='item_barcode[{{$index}}]' value='{{item.barcode}}'/>
               {{item.barcode}}
             </td>
             <td>
               <input type='hidden' class='nama_item' data-no='{{$index}}' name='item_nama[{{$index}}]' value='{{item.nama_barang}}'/>
               {{item.nama_barang}}
             </td>
             <td>
               <input type='hidden' class='jumlah_item' data-no='{{$index}}' name='item_jumlah[{{$index}}]' value='{{item.nama_kantor}}'/>
               {{item.nama_kantor}}
             </td>

           </tr>

         </tbody>

       </table>

     </div>

   </div>

 </div>

</div>

</div>