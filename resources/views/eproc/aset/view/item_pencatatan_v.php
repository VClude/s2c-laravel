<div class="row" ng-controller="form_item_pencatatan">
  <div class="col-md-12">

    <div class="ibox float-e-margins" >
      <div class="ibox-title">
        <h5>ITEM</h5>
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
              <!-- haqim -->
              <th>Gudang</th>
              <!-- end -->
            </tr>
          </thead>

          <tbody>

           <tr ng-repeat="item in list_item_progress | orderBy:'id'">
                  <td width="64px;">
       {{$index+1}}.
       </td>
             <td>
               <button  ng-if="data.tipe == 'K'" type='button' class='btn btn-default btn-xs' data-toggle="modal" data-target="#komponisasimodal" ng-click="ubah_komponisasi(list_item_progress,item.kode)" data-no='{{$index}}'>
                 <i class="fa fa-cogs" aria-hidden="true"></i>
               </button>
              <a class='btn btn-default btn-xs' target="_blank" href="<?php echo site_url('aset/lihat_barcode') ?>/{{item.barcode}}"><i class="fa fa-print" aria-hidden="true"></i></a>
             </td>
           <td width="48px;">
             <input type='hidden' class='komponisasi_item' data-no='{{$index}}' name='item_komponisasi[{{$index}}]' value='{{item.komponisasi}}'/>
             <input type='hidden' class='item_kode_barang' data-no='{{$index}}' name='item_kode_barang[{{$index}}]' value='{{item.kode_barang}}'/>
             <input type='hidden' class='item_kode' data-no='{{$index}}' name='item_kode[{{$index}}]' value='{{item.kode}}'/>
             <input type='hidden' class='item_status' data-no='{{$index}}' name='item_status[{{$index}}]' value='{{item.status}}'/>
             {{item.kode}}
           </td>
           <td>
             <input type='hidden' class='item_gambar' data-no='{{$index}}' name='item_gambar[{{$index}}]' value='{{item.gambar}}'/>
             <center>
               <a href="{{(item.gambar) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.gambar : 'assets/img/logo.png'}}" target="_blank">
                 <img ng-src="{{(item.gambar) ? '<?php echo site_url('log/download_attachment/'.$dir) ?>/'+item.gambar : 'assets/img/logo.png'}}" style="max-height: 64px;" class="img-responsive">
               </a>
             </center>
           </td>
           <td>
             <input type='hidden' class='item_nama' data-no='{{$index}}' name='item_nama[{{$index}}]' value='{{item.nama}}'/>
             {{item.nama}}
           </td>
           <td>
             <input type='hidden' class='item_harga' data-no='{{$index}}' name='item_harga[{{$index}}]' value='{{item.harga}}'/>
             {{item.harga | number}}
           </td>
           <?php /*<td>
             <input type='hidden' class='item_kategori' data-no='{{$index}}' name='item_kategori[{{$index}}]' value='{{item.kategori}}'/>
             {{item.kategori}}
           </td>*/ ?>
           <td>
             <input type='hidden' class='item_kantor' data-no='{{$index}}' name='item_kantor[{{$index}}]' value='{{item.kantor}}'/>
             {{item.kantor_nama}}
           </td>
           <td>
             <input type='hidden' class='item_divisi' data-no='{{$index}}' name='item_divisi[{{$index}}]' value='{{item.divisi}}'/>
             {{item.divisi_nama}}
           </td>
           <td>
             <input type='hidden' class='item_kapal' data-no='{{$index}}' name='item_kapal[{{$index}}]' value='{{item.kapal}}'/>
             {{item.kapal_nama}}
           </td>
           <td>
             <input type='hidden' class='longitude_item' data-no='{{$index}}' name='item_longitude[{{$index}}]' value='{{item.longitude}}'/>
             <input type='hidden' class='latitude_item' data-no='{{$index}}' name='item_latitude[{{$index}}]' value='{{item.latitude}}'/>
             {{item.longitude}} x {{item.latitude}}
           </td>

           <td>
             <input type='hidden' class='item_umur_ekonomis' data-no='{{$index}}' name='item_umur_ekonomis[{{$index}}]' value='{{item.umur_ekonomis}}'/>
             {{item.umur_ekonomis_nama}}
           </td>
           <td width="200px;">
             <input type='hidden' class='barcode_item' data-no='{{$index}}' name='item_barcode[{{$index}}]' value='{{item.barcode}}'/>
             {{item.barcode}}
           </td>
           <td>
       <input type='hidden' class='pemegang_item' data-no='{{$index}}' name='item_pemegang[{{$index}}]' value='{{item.pemegang}}'/>
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
            <div ui-tree id="tree-root" data-drag-enabled="false">
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