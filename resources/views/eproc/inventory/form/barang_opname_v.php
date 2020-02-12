<div class="row" ng-controller="form_item_opname">

  <div class="col-md-12">

    <div class="ibox float-e-margins">

      <div class="ibox-title">

        <h5>DAFTAR BARANG STOK OPNAME</h5>

        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>

      </div>

      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">Kode Barang</label>
          <div class="col-md-6">
            <p class="form-control-static">{{data.kode_brg}}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Barcode</label>
          <div class="col-md-6">
            <p class="form-control-static">{{data.barcode}}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Nama Barang</label>
          <div class="col-md-6">
            <p class="form-control-static">{{data.nama_brg}}</p>
          </div>
        </div>

        <div class="form-group" ng-if="data.attr != 'B'">
          <label class="col-md-2 control-label">Jumlah Barang di Gudang</label>
          <div class="col-md-3">
            <p class="form-control-static">{{data.jumlah_brg}}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Jumlah Aktual</label>
          <div class="col-md-3">
           <input type="text" class="form-control money" ng-model="data.aktual_brg">
         </div>
       </div>

       <div class="form-group">
        <label class="col-md-2 control-label">Keterangan</label>
        <div class="col-md-5">
          <textarea class="form-control" ng-model="data.keterangan_brg"></textarea>
        </div>
      </div>

      <center>
        <a class="btn btn-primary action_opname" ng-click="simpan()">Simpan</a>
        <input type="hidden" ng-model="data.current_brg">
        <br>
      </center>

      <hr>

       <div class="table-responsive">

      <table class="table table-bordered" id="opname_item_table">

        <thead>
         <tr>
            <th>#</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th ng-if="data.attr != 'B'">Jumlah Sebelum SO</th>
            <th>Jumlah Setelah SO</th>
            <th>Satuan</th>
            <th>Kantor</th>
            <th>Gudang</th>
            <th>Keterangan</th>
            <th>Barcode</th>
          </tr>
        </thead>

        <tbody>

         <tr ng-repeat="item in data.list_item_opname">

           <td>
             <button type='button' class='btn btn-primary btn-xs' ng-click="ubah(data.list_item_opname,$index)" data-no='{{$index}}'>
               <i class='fa fa-edit'></i>
             </button>
             <input type="hidden" name='item_id[{{$index}}]' value='{{item.id}}'>
           </td>
           <td>
             <input type='hidden' class='kode_item' data-no='{{$index}}' name='item_kode[{{$index}}]' value='{{item.kode_brg}}'/>
             {{item.kode_brg}}
           </td>
           <td>
             <input type='hidden' class='nama_item' data-no='{{$index}}' name='item_nama[{{$index}}]' value='{{item.nama_brg}}'/>
             {{item.nama_brg}}
           </td>
           <td ng-if="data.attr != 'B'">
             <input type='hidden' class='stock_item' data-no='{{$index}}' name='item_stock[{{$index}}]' value='{{item.stok_brg}}'/>
             {{item.stok_brg}}
           </td>
           <td>
             <input type='hidden' class='so_item' data-no='{{$index}}' name='item_so[{{$index}}]' value='{{item.so_brg}}'/>
             {{item.so_brg}}
           </td>
           <td>
             <input type='hidden' class='satuan_item' data-no='{{$index}}' name='item_satuan[{{$index}}]' value='{{item.satuan_brg}}'/>
             {{item.satuan_brg}}
           </td>
           <td>
             <input type='hidden' class='kantor_item' data-no='{{$index}}' name='item_kantor[{{$index}}]' value='{{item.kantor_brg}}'/>
             {{item.kantor_brg}}
           </td>
           <td>
             <input type='hidden' class='gudang_item' data-no='{{$index}}' name='item_gudang[{{$index}}]' value='{{item.gudang_brg}}'/>
             {{item.gudang_brg}}
           </td>
           <td>
             <input type='hidden' class='keterangan_item' data-no='{{$index}}' name='item_keterangan[{{$index}}]' value='{{item.keterangan_brg}}'/>
             {{item.keterangan_brg}}
           </td>

           <td>
             <input type='hidden' class='barcode_item' data-no='{{$index}}' name='item_barcode[{{$index}}]' value='{{item.barcode}}'/>
             {{item.barcode}}
           </td>

         </tr>

       </tbody>

     </table>

     </div>

   </div>

 </div>

</div>

</div>