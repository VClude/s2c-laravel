<div class="row" ng-controller="form_item_inv">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>ITEM INVENTORY</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">Kode</label>
          <div class="col-md-8">
            <div class="input-group">

              <?php $c = (in_array($activity_id,array(5000,4000)));

              if($c){ ?>

              <span class="input-group-btn">
                <button type="button" data-id="kode_item" ng-click="pilihtipeitem('INV')" data-url="<?php echo site_url('inventory/picker_inv') ?>" class="btn btn-primary picker">Pilih Inventory</button> 
                <button type="button" ng-show="(list_item_progress.length > 0) && urlpickercontract" ng-click="pilihtipeitem('CTR')" data-id="kode_item" data-url="{{urlpickercontract}}" class="btn btn-primary picker">Pilih Item Kontrak</button> 
                <button type="button"  ng-if="(last_progress)" ng-click="pilihtipeitem('PRC')" data-id="kode_item" data-url="<?php echo site_url('procurement/picker_item_proc') ?>" class="btn btn-primary picker">Pilih Item Pengadaan</button> 
                <button type="button" data-id="kode_item" ng-click="pilihtipeitem('BRG')" data-url="<?php echo site_url(COMMODITY_KATALOG_BARANG_PATH.'/picker_inv') ?>" class="btn btn-primary picker barang_btn">Pilih Barang</button> 
              </span>
              <!-- tambah /picker jadi /picker_inv -->
              <?php } ?>

              <input type="text" class="form-control" id="kode_item" name="kode_item" ng-change="<?php echo ($c) ? "ambil_item()" : "" ?>" ng-readonly="<?php echo ($c) ? "true" : "false" ?>" ng-model="data.kode">

            </div>

          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Deskripsi</label>
          <div class="col-md-8">
            <p class="form-control-static" ng-show="last_progress" id="deskripsi_item" ng-bind="data.deskripsi"></p>
            <textarea class="form-control" ng-hide="last_progress" ng-model="data.deskripsi"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Jumlah</label>
          <div class="col-md-2">
            <input type="text" class="form-control money" ng-model="data.jumlah" name="jumlah_item_inp" id="jumlah_item_inp">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Satuan</label>
          <div class="col-md-2">
            <?php /*<input type="text" <?php echo (in_array($activity_id, array(5000)) ? "disabled" : "") ?> class="form-control" ng-model="data.satuan" name="satuan_item_inp" id="satuan_item_inp" >*/ ?>
            <p class="form-control-static" ng-bind="data.satuan"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Harga Satuan</label>
          <div class="col-md-4">
            <input type="text" <?php echo (in_array($activity_id, array(5000)) ? "disabled" : "") ?> class="form-control money" ng-model="data.harga_satuan" name="harga_satuan_item_inp" id="harga_satuan_item_inp" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-4">
            <textarea class="form-control" name="keterangan_inp" ng-model="data.keterangan" id="keterangan_inp" ></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Merk</label>
          <div class="col-md-4">
            <angucomplete-alt <?php echo (in_array($activity_id, array(5000)) ? "disable-input='true'" : "") ?> id="merk_inp" override-suggestions="true" 
              input-name="merk_inp"
              placeholder="Cari merk"
              pause="400"
              selected-object="data.merk_pick"
              remote-url="<?php echo site_url('inventory/data_inventory/autocomplete?search=') ?>"
              remote-url-data-field="rows"
              title-field="merk"
              input-class="form-control "/>

            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Part Number</label>
            <div class="col-md-4">
              <angucomplete-alt <?php echo (in_array($activity_id, array(5000)) ? "disable-input='true'" : "") ?> id="part_number_inp" override-suggestions="true" 
                input-name="part_number_inp"
                placeholder="Cari part number"
                pause="400"
                selected-object="data.part_number_pick"
                remote-url="<?php echo site_url('inventory/data_inventory/autocomplete?search=') ?>"
                remote-url-data-field="rows"
                title-field="part_number"
                input-class="form-control "/>
              </div>
            </div>

            <center>
              <a class="btn btn-primary" ng-click="tambah_item()">Simpan</a>
              <a class="btn btn-default" ng-click="hapus_item()">Hapus</a>
              <input type="hidden" id="current_item" ng-model="data.current_item">
              <br>
            </center>

            <hr>

            <div class="table-responsive">

              <table class="table table-bordered" id="item_table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Kode</th>
                    <th>Item</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Keterangan</th>
                    <th>Merk</th>
                    <th>Part Number</th>
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
                     <input type='hidden' class='kode_item' data-no='{{$index}}' name='item_kode[{{$index}}]' value='{{item.kode}}'/>
                     {{item.kode}}
                   </td>
                   <td>
                     <input type='hidden' class='nama_item' data-no='{{$index}}' name='item_nama[{{$index}}]' value='{{item.deskripsi}}'/>
                     {{item.deskripsi}}
                   </td>
                   <td>
                     <input type='hidden' class='jumlah_item' data-no='{{$index}}' name='item_jumlah[{{$index}}]' value='{{item.jumlah}}'/>
                     {{item.jumlah}}
                   </td>
                   <td>
                     <input type='hidden' class='satuan_item' data-no='{{$index}}' name='item_satuan[{{$index}}]' value='{{item.satuan}}'/>
                     {{item.satuan}}
                   </td>
                   <td>
                     <input type='hidden' class='harga_satuan_item' data-no='{{$index}}' name='item_harga_satuan[{{$index}}]' value='{{item.harga_satuan}}'/>
                     {{item.harga_satuan}}
                   </td>
                   <td>
                     <input type='hidden' class='keterangan_item' data-no='{{$index}}' name='item_keterangan[{{$index}}]' value='{{item.keterangan}}'/>
                     {{item.keterangan}}
                   </td>
                   <td>
                     <input type='hidden' class='merk_item' data-no='{{$index}}' name='item_merk[{{$index}}]' value='{{item.merk}}'/>
                     {{item.merk}}
                   </td>
                   <td>
                     <input type='hidden' class='part_number_item' data-no='{{$index}}' name='item_part_number[{{$index}}]' value='{{item.part_number}}'/>
                     {{item.part_number}}
                   </td>
                 </tr>

               </tbody>

             </table>

           </div>

         </div>

       </div>

     </div>

   </div>