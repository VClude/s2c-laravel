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

        <div class="form-group">
          <label class="col-md-2 control-label">Gambar</label>
          <div class="col-md-6">
            <div class="input-group">

              <span class="input-group-btn">
                <button type="button" data-id="gambar_attachment" data-folder="<?php echo $dir ?>" data-preview="gambar_file" class="btn btn-primary upload">
                  <i class="fa fa-cloud-upload"></i>
                </button> 
                <button type="button" data-id="gambar_attachment" data-folder="<?php echo $dir ?>" data-preview="gambar_file" class="btn btn-danger removefile">
                  <i class="fa fa-remove"></i>
                </button> 
              </span> 

              <input readonly type="text" class="form-control" id="gambar_attachment" ng-model="data.input.gambar" name="gambar_attachment">

              <span class="input-group-btn">
                <button type="button" data-url="#" class="btn btn-primary preview_upload" id="gambar_file">
                  <i class="fa fa-share"></i>
                </button> 
              </span> 
              
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-8">
           <textarea class="form-control" id="keterangan" ng-model="data.input.keterangan" name="keterangan"></textarea>
         </div>
       </div>

       <center>
        <a class="btn btn-primary" ng-click="tambah_item()">Simpan</a>
        <input type="hidden" id="current_item" ng-model="data.current_item">
        <br>
      </center>

      <hr>

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
               <button type='button' class='btn btn-danger btn-xs' ng-click="ubah_item(data.list_item,$index)" data-no='{{$index}}'>
                 <i class='fa fa-remove'></i>
               </button>
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