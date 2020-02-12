<div class="row" ng-controller="form_tim_opname">

  <div class="col-md-12">

    <div class="ibox float-e-margins">

      <div class="ibox-title">

        <h5>ANGGOTA TIM</h5>

        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>

      </div>

      <div class="ibox-content">

        <table class="table table-bordered" id="opname_petugas_table">

          <thead>
            <tr>
              <th>#</th>
              <th>Nama Petugas</th>
              <th>Posisi Pelaksana</th>
              <th>Lokasi</th>
              <th>Keterangan</th>
            </tr>
          </thead>

          <tbody>

           <tr ng-repeat="item in list_tim_opname">
             <td>
               {{$index+1}}
             </td>
             <td>
               {{item.nama}}
             </td>
             <td>
               {{item.posisi_nama}}
             </td>
             <td>
                {{item.lokasi_nama}} ({{item.lokasi_tipe}})
             </td>
             <td>
               {{item.keterangan}}
             </td>

           </tr>

         </tbody>

       </table>

     </div>

   </div>

 </div>

</div>