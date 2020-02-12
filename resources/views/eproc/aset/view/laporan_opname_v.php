<div class="row" ng-controller="form_laporan_opname">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Laporan</h5>
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
              <th>Keterangan</th>
              <th>Foto</th>
            </tr>
          </thead>

          <tbody>

           <tr ng-repeat="item in data.list_item">
             <td>
               {{$index+1}}
             </td>
             <td>
               <input type='hidden' class='keterangan_item' data-no='{{$index}}' name='item_keterangan[{{$index}}]' value='{{item.keterangan}}'/>
               {{item.keterangan}}
             </td>
             <td>
               <input type='hidden' class='gambar_item' data-no='{{$index}}' name='item_gambar[{{$index}}]' value='{{item.gambar}}'/>
               <center>
                 <a href="{{(item.gambar) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.gambar : 'assets/img/logo.png'}}" target="_blank">
                   <img ng-src="{{(item.gambar) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.gambar : 'assets/img/logo.png'}}" style="max-height: 64px;" class="img-responsive">
                 </a>
               </center>
             </td>

           </tr>

         </tbody>

       </table>

     </div>

   </div>

 </div>

</div>

</div>