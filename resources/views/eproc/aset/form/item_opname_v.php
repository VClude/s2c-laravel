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

        <div class="form-group">
          <label class="col-md-2 control-label">Barcode</label>
          <div class="col-md-6">
            <p class="form-control-static">{{data.input.barcode}}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Nama Barang</label>
          <div class="col-md-6">
            <p class="form-control-static">{{data.input.nama_barang}}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Kondisi</label>
          <div class="col-md-6">
            <select name="kondisi" id="kondisi" class="form-control" ng-model="data.input.kondisi_aset">
              <option ng-repeat="option in list_kondisi" ng-selected="(option.name == data.input.kondisi_aset)" value="{{option.name}}">{{option.name}}</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-8">
            <textarea class="form-control" id="keterangan" ng-model="data.input.komentar_kondisi" name="keterangan"></textarea>
          </div>
        </div>
        <!-- haqim -->
        <div class="form-group">
          <label class="col-md-2 control-label">Gambar Kondisi Terkini</label>
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

              <input readonly type="text" class="form-control" id="gambar_attachment" ng-model="data.input.gambar_update" name="gambar_attachment">

              <span class="input-group-btn">
                <button type="button" data-url="#" class="btn btn-primary preview_upload" id="gambar_file">
                  <i class="fa fa-share"></i>
                </button> 
              </span> 
              
            </div>
          </div>
        </div>
        <!-- end -->
        <hr>
        <!-- ==================Tambah===================================== -->
        <h4>Filter Berdasarkan Divisi</h4>
        
        <select class="form-control" ng-model="searchByDept" >
          <option value="" selected>--PILIH--</option>
          <option ng-repeat="option in list_divisi">{{option.name}}</option>
        </select>
        <hr>
        <!-- ============================================================== -->
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
              <th>Gambar Kondisi Terkini</th>
            </tr>
          </thead>

          <tbody>

           <tr ng-repeat="item in data.list_item_opname | orderBy:'id' | filter:{'nama_dept':searchByDept}">
             <td width="64px;">
               <button type='button' class='btn btn-primary btn-xs' ng-click="ubah(item,$index)" data-no='{{$index}}'>
                 <i class='fa fa-edit'></i>
               </button>
               <input type='hidden' class='item_id' data-no='{{$index}}' name='item_id[{{$index}}]' value='{{item.id}}'/>
               <!-- haqim -->
               <input type='hidden' class='item_id' data-no='{{$index}}' name='item_aset_id[{{$index}}]' value='{{item.id}}'/>
               <!-- end -->
             </td>
           </td>
           <td width="48px;">
             {{item.barcode}}
           </td>
           <td>
             <center>
              <!-- haqim // photo tadinya gambar -->
               <a href="{{(item.photo) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.photo : 'assets/img/logo.png'}}" target="_blank">
                 <img ng-src="{{(item.photo) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.photo : 'assets/img/logo.png'}}" style="max-height: 64px;" class="img-responsive">
               </a>
               <!-- end -->
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
           <!-- haqim -->
           <td>
               <input type='hidden' class='gambar_item' data-no='{{$index}}' name='item_photo_update[{{$index}}]' value='{{item.gambar_update}}'/>
               <center>
                 <a href="{{(item.photo_update) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.photo_update : (item.gambar_update ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.gambar_update : 'assets/img/logo.png') }}" target="_blank">
                   <img ng-src="{{(item.photo_update) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.photo_update : (item.gambar_update ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.gambar_update : 'assets/img/logo.png')}}" style="max-height: 64px;" class="img-responsive">
                 </a>
               </center>
            </td>
             <!-- end -->
         </tr>

       </tbody>

     </table>

   </div>

 </div>

</div>

</div>

</div>

