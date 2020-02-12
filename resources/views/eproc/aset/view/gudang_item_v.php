<div class="row" ng-controller="form_item_gudang">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ITEM GUDANG PENYIMPANAN</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="table-responsive">

          <table class="table table-bordered" id="gudang_item_gdg">
            <thead>
              <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Item</th>
                <th>Satuan</th>
                <th>Jumlah dimasukkan</th>
                <th>Harga Satuan</th>
                <th>Keterangan</th>
                <th>Kantor</th>
                <th>Gudang</th>
              </tr>
            </thead>
            
            <tbody>

             <tr ng-repeat="item in data.list_item_gudang">
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

                 {{item.satuan}}
               </td>
               <td>

                 {{item.jumlah}}
               </td>
               
               <td>
 
                 {{item.harga_satuan}}
               </td>

               <td>
                 {{item.keterangan}}
               </td>

               <td>
                 {{item.kantor_nama}}
               </td>

               <td>
                 {{item.gudang_nama}}
               </td>

             </tr>

           </tbody>

         </table>

       </div>

     </div>

   </div>
 </div>
</div>