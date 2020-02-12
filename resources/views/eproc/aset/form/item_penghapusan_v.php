<div class="row" ng-controller="form_item_penghapusan" ng-init="roleInit('<?php echo $this->Administration_m->getLogin()['job_title']; ?>')"><!-- tambah ng-init -->
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

       <div class="form-group">
        <label class="col-sm-2 control-label">Kode Item</label>
        <div class="col-sm-8">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="button" data-id="kode_item" data-url="<?php echo site_url('aset/picker_aset') ?>" class="btn btn-primary picker barang_btn">...</button> 
            </span>

            <input readonly type="text" class="form-control" id="kode_item" ng-change="ambil_item()" ng-model="data.kode_item" name="kode_item" >
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Lampiran Penghapusan</label>
        <div class="col-sm-6">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="button" data-id="attachment_inp" data-folder="<?php echo $dir ?>" data-preview="preview_file" class="btn btn-primary upload">...</button> 
            </span> 
            <input readonly type="text" class="form-control" ng-model="data.attachment" id="attachment_inp" name="attachment_inp">
            <span class="input-group-btn">
              <button type="button" data-url="" class="btn btn-primary preview_upload" id="preview_file">Preview</button> 
            </span> 
          </div>
        </div>
      </div>

      <center>
        <a class="btn btn-primary" ng-click="tambah_item()">Simpan</a>
        <a class="btn btn-default" ng-click="hapus_item()">Hapus</a>
        <input type="hidden" id="current_item" ng-model="data.current_item">
        <br>
      </center>

      <hr>

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
               <button type='button' class='btn btn-primary btn-xs' ng-click="ubah_item(item)" data-no='{{$index}}'>
                 <i class='fa fa-edit'></i>
               </button>
               <input type='hidden' class='item_lampiran' data-no='{{$index}}' name='item_lampiran[{{$index}}]' value='{{item.attachment}}'/>

               <input type='hidden' class='item_id' data-no='{{$index}}' name='item_id[{{$index}}]' value='{{item.id}}'/>
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

