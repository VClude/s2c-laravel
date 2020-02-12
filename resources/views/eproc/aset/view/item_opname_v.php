<div class="row" ng-controller="form_item_opname">

  <div class="col-md-12">

    <div class="ibox float-e-margins">

      <div class="ibox-title">

        <h5>DAFTAR BARANG</h5>

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
              <th width="64px;">#</th>
              <th width="48px;">Barcode</th>
              <th>Gambar</th>
              <th>Nama</th>
              <th>Harga</th>
              <th>Kategori</th>
              <th>Kantor</th>
              <th>Divisi</th>
              <th>Gudang</th>
              <th>Kondisi</th>
              <th>Keterangan Kondisi</th>
              <!-- haqim -->
              <th>Gambar Kondisi Terkini</th>
              <!-- end -->
            </tr>
          </thead>

          <tbody>

           <tr ng-repeat="item in data.list_item_opname | orderBy:'id'"">
             <td width="64px;">
              {{$index+1}}
             </td>
           </td>
           <td width="48px;">
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
             {{item.kategori}}
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
             {{item.kondisi_aset}}
             <input type='hidden' class='item_kondisi' data-no='{{$index}}' name='item_kondisi[{{$index}}]' value='{{item.kondisi_aset}}'/>
           </td>
           <td>
             {{item.komentar_kondisi}}
             <input type='hidden' class='item_keterangan_kondisi' data-no='{{$index}}' name='item_keterangan_kondisi[{{$index}}]' value='{{item.komentar_kondisi}}'/>
           </td>
           <td>
             <!-- {{item.photo_update}} -->
             <!-- <img src="uploads/aset/{{item.photo_update}}"> -->
             <!-- haqim -->
             <a href="{{(item.photo_update) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.photo_update : 'assets/img/logo.png' }}" target="_blank">
             <img ng-src="{{(item.photo_update) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.photo_update : 'assets/img/logo.png'}}" style="max-height: 64px;" class="img-responsive">
           </a>
             <!-- end -->
           </td>
         </tr>

       </tbody>

     </table>

     </div>

   </div>

 </div>

</div>

</div>