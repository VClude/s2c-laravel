<div class="row" ng-controller="form_item_hapus_aset">

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

      <hr>

      <table class="table table-bordered" id="opname_item_table">

        <thead>
          <tr>
            <th>#</th>
            <th>Barcode</th>
            <th>Tanggal Perolehan</th>
            <th>Nilai Perolehan</th>
            <th>Nama Barang</th>
            <th>Kantor</th>
            <th>Comptable</th>
            <th>Nilai Buku</th>
          </tr>
        </thead>

        <tbody>

         <tr ng-repeat="item in data.list_item">
           <td>
             <button type='button' class='btn btn-danger btn-xs' ng-click="hapus_item(data.list_item,$index)" data-no='{{$index}}'>
               <i class='fa fa-remove'></i>
             </button>
           </td>
           <td>
             <input type='hidden' class='barcode_item' data-no='{{$index}}' name='item_barcode[{{$index}}]' value='{{item.kode_barcode}}'/>
             {{item.kode_barcode}}
           </td>
           <td>
             <input type='hidden' class='tgl_item' data-no='{{$index}}' name='item_tgl[{{$index}}]' value='{{item.tgl_perolehan}}'/>
             {{item.tgl_perolehan}}
           </td>
           <td>
             <input type='hidden' class='nilai_perolehan_item' data-no='{{$index}}' name='item_nilai_perolehan[{{$index}}]' value='{{item.nilai_perolehan}}'/>
             {{item.nilai_perolehan}}
           </td>
           <td>
             <input type='hidden' class='nama_item' data-no='{{$index}}' name='item_nama[{{$index}}]' value='{{item.nama_brg}}'/>
             {{item.nama_brg}}
           </td>
           <td>
             <input type='hidden' class='kantor_item' data-no='{{$index}}' name='item_kantor[{{$index}}]' value='{{item.kantor}}'/>
             {{item.kantor}}
           </td>
           <td>
             <input type='hidden' class='comptable_item' data-no='{{$index}}' name='item_comptable[{{$index}}]' value='{{item.comptable}}'/>
             {{item.comptable}}
           </td>
            <td>
             <input type='hidden' class='nilai_buku_item' data-no='{{$index}}' name='item_nilai_buku[{{$index}}]' value='{{item.nilai_buku}}'/>
             {{item.nilai_buku}}
           </td>
         </tr>

       </tbody>

     </table>

   </div>

 </div>

</div>

</div>