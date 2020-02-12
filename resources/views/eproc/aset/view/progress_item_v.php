<div class="row" ng-controller="form_head_pencatatan" ng-show="(list_item_progress_head.length > 0)">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ITEM PROGRESS</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">
        <div class="table-responsive">
         <table class="table table-bordered">

          <thead>

            <tr>
              <th>No</th>
              <th>Kode Barang</th>
              <th>Deskripsi</th>
              <th>Satuan</th>
              <th>Harga Satuan<br/>(Sebelum Pajak)</th>
              <th>Jumlah</th>
              <th>Order Minimum</th>
              <th>Order Maksimum</th>
            </tr>

          </thead>

          <tbody>

           <tr ng-repeat="item in list_item_progress_head">
           <td>{{$index + 1}}</td>
             <td>{{item.kode}}</td>
             <td>{{item.deskripsi}}</td>
             <td>{{item.satuan}}</td>
             <td class="text-right">{{item.harga_satuan}}</td>
             <td class="text-right">{{item.jumlah}}</td>
             <td class="text-right">{{item.order_minimum}}</td>
             <td class="text-right">{{item.order_maksimum}}</td>
           </tr>

         </tbody>

       </table>
     </div>
   </div>
 </div>
</div>
</div>