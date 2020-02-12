<div class="row" ng-controller="form_item_pencatatan">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ITEM</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div ng-if="tipekontrak != 'wo'">
          <!-- haqim -->
          <?php if (isset($activity_id) AND $activity_id == 9000) { ?>
          <!-- end -->

          <div class="form-group">
            <label class="col-md-2 control-label">Kode</label>
            <div class="col-md-9">
              <div class="input-group">

                <span class="input-group-btn">
                  <?php /*<button type="button" data-id="kode_item" ng-click="pilihtipeitem('AST')" data-url="<?php echo site_url('aset/picker_aset') ?>" class="btn btn-primary picker">Pilih Aset</button> */ ?>
                  <button type="button" ng-click="pilihtipeitem('PRC')" data-id="kode_item" data-url="<?php echo site_url('procurement/picker_item_proc') ?>" class="btn btn-primary picker">Pilih Item Pengadaan</button> 
                  <button type="button" data-id="kode_item" ng-click="pilihtipeitem('BRG')" data-url="<?php echo site_url(COMMODITY_KATALOG_BARANG_PATH.'/picker') ?>" class="btn btn-primary picker barang_btn">Pilih Barang</button>
                  <button type="button" ng-show="urlpickercontract" ng-click="pilihtipeitem('CTR')" data-id="kode_item" data-url="{{urlpickercontract}}" class="btn btn-primary picker">Pilih Item Kontrak</button> 
                </span>



                <input type="text" class="form-control" id="kode_item" name="kode_item" ng-change="ambil_item()" ng-readonly="true" ng-model="data.kode_item">

              </div>

            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Deskripsi</label>
            <div class="col-md-8">
              <p class="form-control-static" ng-bind="data.deskripsi"></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Satuan</label>
            <div class="col-md-2">
              <p class="form-control-static" ng-bind="data.satuan"></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Harga Satuan</label>
            <div class="col-md-4">
              <p class="form-control-static" ng-show="(list_item_progress_head.length > 0)" ng-bind="data.harga_satuan"></p>
              <input type="text" class="form-control" ng-hide="(list_item_progress_head.length > 0)" id="harga_satuan" name="harga_satuan" ng-change="ambil_item()" ng-readonly="true" ng-model="data.harga_satuan">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Jumlah Stock</label>
            <div class="col-md-3">

              <div class="input-group">
                <input type="text" class="form-control money" ng-model="data.jumlah_penerimaan" id="jumlah_penerimaan" name="jumlah_penerimaan">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button" ng-click="insert_item()">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                  </button>
                </span>
              </div><!-- /input-group -->

            </div>
          </div>
          <hr>
          <!-- haqim -->
           <?php  } ?>
           <!-- end -->
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Kode</label>
          <div class="col-md-3">
            <p class="form-control-static" ng-bind="data.kode_item"></p>
          </div>
        </div>

        <?php if($activity_id == 9002){ ?>

        <div class="form-group">
          <label class="col-md-2 control-label">Barcode</label>
          <div class="col-md-3">
            <input type="text" class="form-control" 
            ng-model="data.barcode_item" id="barcode" name="barcode"/>
          </div>
        </div>

        <?php } else if($activity_id == 9003){ ?>

            <div class="form-group">
          <label class="col-md-2 control-label">Lokasi</label>
          <div class="col-md-3">
            <div class="radio-inline">
             <input type="radio" name="lokasi" ng-model="data.lokasi" value="ktr"> Kantor 
           </div>
           <div class="radio-inline">
            <input type="radio" name="lokasi" ng-model="data.lokasi" value="kpl"> Kapal
          </div>
        </div>
        <div class="col-md-4" ng-if="data.lokasi == 'ktr'">
          <select name="kantor" id="kantor" ng-change="reloaddept(data.kantor_item[0])" class="form-control" ng-model="data.kantor_item">
            <option ng-repeat="option in list_kantor" ng-selected="(option.id == data.kantor_item)" value="{{option.id}}">{{option.name}}</option>
          </select>
          <select name="dept" id="dept" class="form-control" ng-model="data.divisi_item">
          <option ng-repeat="option in list_dept" ng-selected="(option.id == data.divisi_item)" value="{{option.id}}">{{option.name}}</option>
        </select>
        </div>
        <div class="col-md-4" ng-if="data.lokasi == 'kpl'">
          <select name="kapal_inp" id="kapal_inp" class="form-control" ng-model="data.kapal_item">
            <option ng-repeat="option in list_kapal" ng-selected="(option.id == data.kapal_item)" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Koordinat</label>
      <div class="col-md-2">
        <input type="text" class="form-control" placeholder="Longitude" ng-model="data.longitude_item" name="longitude_item" id="longitude_item" >
      </div>
      <div class="col-md-2">
        <input type="text" class="form-control" placeholder="Latitude" ng-model="data.latitude_item" name="latitude_item" id="latitude_item" >
      </div>
    </div>

    <?php } else if($activity_id == 9004){ ?>

        <div class="form-group">
          <label class="col-md-2 control-label">Pemegang</label>
          <div class="col-md-3">
            <input type="text" class="form-control" ng-model="data.pemegang" id="pemegang" name="pemegang"/>
          </div>
        </div>

        <!-- daftar gudang -->

        <div class="form-group">
            <label class="col-md-2 control-label">Pilih Gudang</label>
            <div class="col-md-3">
             <select name="gudang" id="gudang" class="form-control" ng-model="data.gudang_item">
              <option ng-repeat="option in list_gudang" ng-selected="(option.id == data.gudang_item)" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
          </div>

        <?php } else { ?>

    <?php /*<div class="form-group">
      <label class="col-md-2 control-label">Kategori</label>
      <div class="col-md-3">
       <input type="text" class="form-control" ng-model="data.kategori_item" id="kategori_item" name="kategori_item"/>
     </div>
   </div>*/ ?>

   <div class="form-group">
    <label class="col-md-2 control-label">Nama</label>
    <div class="col-md-6">
     <input type="text" class="form-control" ng-model="data.nama_item" id="nama_item" name="nama_item"/>
   </div>
 </div>

 <div class="form-group">
  <label class="col-md-2 control-label">Umur Ekonomis</label>
  <div class="col-md-6">
   <select name="umur_ekonomis" id="umur_ekonomis" class="form-control" ng-model="data.umur_ekonomis_item">
    <option ng-repeat="option in list_umur_ekonomis" ng-selected="(option.id == data.umur_ekonomis_item)" value="{{option.id}}">{{option.name}}</option>
  </select>
</div>
</div>

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
      <input readonly type="text" class="form-control" id="gambar_attachment" ng-model="data.gambar_item" name="gambar_attachment">
      <span class="input-group-btn">

        <button type="button" data-url="#" class="btn btn-primary preview_upload" id="gambar_file">
          <i class="fa fa-share"></i>
        </button> 
      </span> 
    </div>
  </div>
</div>


<?php } ?>

<center>
  <a class="btn btn-primary" ng-click="tambah_item()">Simpan</a>
  <input type="hidden" id="current_item" ng-model="data.current_item">
  <br>
</center>

<hr>

<div class="table-responsive overflowtable">

  <table class="table table-bordered" id="item_table">
    <thead>
      <tr>
      <th width="64px;">#</th>
        <th>Aksi</th>
        <th width="48px;">Kode</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Harga</th>
        <?php /*<th>Kategori</th>*/ ?>
        <th>Kantor</th>
        <th>Divisi</th>
         <th>Kapal</th>
        <th>Koordinat Lokasi</th>
        <th>Umur Ekonomis</th>
        <th width="200px;">Barcode</th>
         <th>Pemegang</th>
         <!-- daftar gudang -->
         <th>Gudang</th>
         <!-- end -->
      </tr>
    </thead>

    <tbody>

     <tr ng-repeat="item in list_item_progress | orderBy:'id'"">
       <td width="64px;">
       {{$index+1}}.
       </td>
       <td>
         <button type='button' ng-if="item.status != 1" class='btn btn-primary btn-xs' ng-click="ubah_item(list_item_progress,item.kode)">
           <i class='fa fa-edit'></i>
         </button>
         <button type='button' ng-if="tipekontrak != 'wo'" class='btn btn-danger btn-xs' ng-click="remove_item($index)">
           <i class='fa fa-remove'></i>
         </button>
         <button  ng-if="data.tipe == 'K'" type='button' class='btn btn-default btn-xs' data-toggle="modal" data-target="#komponisasimodal" ng-click="ubah_komponisasi(list_item_progress,item.kode)">
           <i class="fa fa-cogs" aria-hidden="true"></i>
         </button>
          <a class='btn btn-default btn-xs' target="_blank" href="<?php echo site_url('aset/lihat_barcode') ?>/{{item.barcode}}"><i class="fa fa-print" aria-hidden="true"></i></a>
       </td>
     <td width="48px;">
       <input type='hidden' class='komponisasi_item' name='item_komponisasi[{{$index}}]' value='{{item.komponisasi}}'/>
       <input type='hidden' class='item_kode_barang' name='item_kode_barang[{{$index}}]' value='{{item.kode_barang}}'/>
       <input type='hidden' class='item_kode' name='item_kode[{{$index}}]' value='{{item.kode}}'/>
       <input type='hidden' class='item_status' name='item_status[{{$index}}]' value='{{item.status}}'/>
       {{item.kode}}
     </td>
     <td>
       <input type='hidden' class='item_gambar' name='item_gambar[{{$index}}]' value='{{item.gambar}}'/>
       <center>
         <a href="{{(item.gambar) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.gambar : 'assets/img/logo.png'}}" target="_blank">
           <img ng-src="{{(item.gambar) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.gambar : 'assets/img/logo.png'}}" style="max-height: 64px;" class="img-responsive">
         </a>
       </center>
     </td>
     <td>
       <input type='hidden' class='item_nama' name='item_nama[{{$index}}]' value='{{item.nama}}'/>
       {{item.nama}}
     </td>
     <td>
       <input type='hidden' class='item_harga' name='item_harga[{{$index}}]' value='{{item.harga}}'/>
       {{item.harga | number}}
     </td>
     <?php /*<td>
       <input type='hidden' class='item_kategori' name='item_kategori[{{$index}}]' value='{{item.kategori}}'/>
       {{item.kategori}}
     </td>*/ ?>
     <td>
       <input type='hidden' class='item_kantor' name='item_kantor[{{$index}}]' value='{{item.kantor}}'/>
       {{item.kantor_nama}}
     </td>
     <td>
       <input type='hidden' class='item_divisi' name='item_divisi[{{$index}}]' value='{{item.divisi}}'/>
       {{item.divisi_nama}}
     </td>
     <td>
             <input type='hidden' class='item_kapal' name='item_kapal[{{$index}}]' value='{{item.kapal}}'/>
             {{item.kapal_nama}}
           </td>
     <td>
       <input type='hidden' class='longitude_item' name='item_longitude[{{$index}}]' value='{{item.longitude}}'/>
       <input type='hidden' class='latitude_item' name='item_latitude[{{$index}}]' value='{{item.latitude}}'/>
       {{item.longitude}} x {{item.latitude}}
     </td>

     <td>
       <input type='hidden' class='item_umur_ekonomis' name='item_umur_ekonomis[{{$index}}]' value='{{item.umur_ekonomis}}'/>
       {{item.umur_ekonomis_nama}}
     </td>
     <td width="200px;">
       <input type='hidden' class='barcode_item' name='item_barcode[{{$index}}]' value='{{item.barcode}}'/>
       {{item.barcode}}
     </td>
     <td>
       <input type='hidden' class='pemegang_item' name='item_pemegang[{{$index}}]' value='{{item.pemegang}}'/>
       {{item.pemegang}}
     </td>
     <!-- daftar gudang -->
     <td>
       <input type='hidden' class='item_gudang' name='item_gudang[{{$index}}]' value='{{item.gudang}}'/>
       {{item.gudang_nama}}
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

<!-- Modal -->
<div class="modal fade" ng-controller="form_tree_komponisasi" id="komponisasimodal" tabindex="-1" role="dialog" aria-labelledby="komponisasimodalLabel">
  <div class="modal-dialog" style="width: 80%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="komponisasimodalLabel">{{komponisasi.kode}} | {{komponisasi.nama}} : {{komponisasi.harga | number}}</h4>
      </div>
      <div class="modal-body">

        <script type="text/ng-template" id="nodes_renderer.html">
          <div ui-tree-handle class="tree-node tree-node-content">
            <a class="btn btn-success btn-xs" ng-if="node.nodes && node.nodes.length > 0" data-nodrag ng-click="toggle(this)"><span
              class="glyphicon"
              ng-class="{
              'glyphicon-chevron-right': collapsed,
              'glyphicon-chevron-down': !collapsed
            }"></span></a>
            {{node.title}} ({{val[node.id]}}% : {{komponisasi.harga*(val[node.id]/100) | number}})

            <?php if($activity_id == 9000){ ?>
            <a class="pull-right btn btn-danger btn-xs" data-nodrag ng-click="year(this)">
              <i class="fa fa-calendar" aria-hidden="true"></i>
            </a>
            <a class="pull-right btn btn-primary btn-xs hidden" data-nodrag ng-click="newSubItem(this)" style="margin-right: 8px;">
              <span class="glyphicon glyphicon-plus"></span>
            </a>
            <a class="pull-right btn btn-success btn-xs" data-nodrag ng-click="percent(this)">
              %
            </a>
            <?php } ?>

          </div>
          <ol ui-tree-nodes="" ng-model="node.nodes" ng-class="{hidden: collapsed}">
            <li ng-repeat="node in node.nodes" ui-tree-node ng-include="'nodes_renderer.html'">
            </li>
          </ol>
        </script>

        <div class="row" style="margin-bottom: 16px;">
          <div class="col-sm-12">
            <button class="btn btn-success btn-sm" type="button" ng-click="expandAll()">Expand all</button>
            <button class="btn btn-success btn-sm" type="button" ng-click="collapseAll()">Collapse all</button>
            <br/>
          </div>
        </div>

        <div class="row" style="height: 360px; overflow-y: scroll;">
          <div class="col-sm-12">
            <div ui-tree id="tree-root">
              <ol ui-tree-nodes ng-model="data">
                <li ng-repeat="node in data" ui-tree-node ng-include="'nodes_renderer.html'"></li>
              </ol>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

