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
              {{$index+1}}
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