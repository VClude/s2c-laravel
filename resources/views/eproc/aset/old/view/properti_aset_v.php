<div class="row" ng-controller="form_properti_aset">

  <div class="col-lg-12">

    <div class="ibox float-e-margins">

      <div class="ibox-title">

        <h5>PROPERTI</h5>

        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>

      </div>

      <div class="ibox-content">

      <table class="table table-bordered" id="properti_aset">

        <thead>
          <tr>
            <th>#</th>
            <th>Properti</th>
            <th>Nilai</th>
            <th>Keterangan</th>
          </tr>
        </thead>

        <tbody>

         <tr ng-repeat="item in data.list_item">
           <td>
             <button type='button' class='btn btn-primary btn-xs' ng-click="ubah_item(data.list_item,$index)" data-no='{{$index}}'>
               <i class='fa fa-edit'></i>
             </button>
           </td>
           <td>
             <input type='hidden' class='kode_item' data-no='{{$index}}' name='item_kode[{{$index}}]' value='{{item.properti}}'/>
             {{item.properti}}
           </td>
           <td>
             <input type='hidden' class='nilai_item' data-no='{{$index}}' name='item_nilai[{{$index}}]' value='{{item.nilai}}'/>
             {{item.nilai}}
           </td>
           <td>
             <input type='hidden' class='keterangan_item' data-no='{{$index}}' name='item_keterangan[{{$index}}]' value='{{item.keterangan}}'/>
             {{item.keterangan}}
           </td>
         </tr>

       </tbody>

     </table>


   </div>

 </div>

</div>

</div>