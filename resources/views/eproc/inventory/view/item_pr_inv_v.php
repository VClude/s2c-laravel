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
                 {{$index+1}}.
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