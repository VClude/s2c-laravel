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
                  {{$index+1}}.
               </td>
               <td>
                 {{item.kode}}
               </td>
               <td>
                 {{item.deskripsi}}
               </td>
               <td>
                 {{item.stok}}
               </td>
               <td>
                 {{item.penyesuaian}}
               </td>
               <td>
                 {{item.batas}}
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
               <td>
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