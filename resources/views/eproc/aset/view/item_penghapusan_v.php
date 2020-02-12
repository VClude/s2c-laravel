<div class="row" ng-controller="form_item_penghapusan">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ITEM PENGHAPUSAN</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="table-responsive overflowtable">

          <table class="table table-bordered" id="item_table">
            <thead>
              <tr>
                <th width="64px;">#</th>
                <th>Barcode</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Kantor</th>
                <th>Divisi</th>
                <th>Gudang</th>
                <th>Penyusutan</th>
                <th>Umur Ekonomis</th>
                <th>Lampiran</th>
              </tr>
            </thead>

            <tbody>

             <tr ng-repeat="item in data.list_item | orderBy:'id'"">
               <td width="64px;">
                 {{$index+1}}
               </td>
             </td>
             <td>
               {{item.barcode}}
             </td>
             <td>
               <center>
                 <a href="{{(item.gambar) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.gambar : 'assets/img/logo.png'}}" target="_blank">
                   <img ng-src="{{(item.gambar) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.gambar : 'assets/img/logo.png'}}" style="max-height: 64px;" class="img-responsive">
                 </a>
               </center>
             </td>
             <td>
               {{item.nama_barang}}
             </td>
             <td>
               {{item.harga_perolehan | number}}
             </td>
             <td>
               {{item.nama_kantor}}
             </td>
             <td>
               {{item.nama_dept}}
             </td>
             <td>
               {{item.nama_gudang}}
             </td>
             <td>
               {{item.akumulasi_penyusutan}}
             </td>
             <td>
               {{item.nama_umur_ekonomis}}
             </td>
             <td>
               <a href="<?php echo site_url('log/download_attachment/aset') ?>/{{item.attachment}}" target="_blank">{{item.attachment}}</a>

             </td>
           </tr>

         </tbody>

       </table>

     </div>

   </div>

 </div>
</div>
</div>

