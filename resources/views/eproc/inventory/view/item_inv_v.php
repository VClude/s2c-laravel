<div class="row" ng-controller="form_item_inv">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ITEM INVENTORY</h5>
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
                <th>Kode</th>
                <th>Item</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Harga Satuan</th>
                <th>Keterangan</th>
                <th>Merk</th>
                <th>Part Number</th>
              </tr>
            </thead>

            <tbody>

             <tr ng-repeat="item in data.list_item">
               <td>
                {{$index+1}}.
               </td>
               <td>

                 {{item.kode}}
               </td>
               <td>

                 {{item.deskripsi}}
               </td>
               <td>

                 {{item.jumlah}}
               </td>
               <td>

                 {{item.satuan}}
               </td>
               <td>

                 {{item.harga_satuan}}
               </td>
               <td>

                 {{item.keterangan}}
               </td>
               <td>

                 {{item.merk}}
               </td>
               <td>
                 {{item.part_number}}
               </td>
             </tr>

           </tbody>

         </table>

       </div>

     </div>

   </div>

 </div>
 
</div>