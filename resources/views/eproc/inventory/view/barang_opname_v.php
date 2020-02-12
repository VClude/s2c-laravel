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
                {{$index+1}}.
               </td>
           <td>
             {{item.kode_brg}}
           </td>
           <td>

             {{item.nama_brg}}
           </td>
           <td ng-if="data.attr != 'B'">

             {{item.stok_brg}}
           </td>
           <td>

             {{item.so_brg}}
           </td>
           <td>

             {{item.satuan_brg}}
           </td>
           <td>

             {{item.kantor_brg}}
           </td>
           <td>

             {{item.gudang_brg}}
           </td>
           <td>

             {{item.keterangan_brg}}
           </td>

           <td>
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