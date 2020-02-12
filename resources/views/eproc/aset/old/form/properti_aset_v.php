<div class="row" ng-controller="form_properti_aset">

  <div class="col-lg-12">

    <div class="ibox float-e-margins">

      <div class="ibox-title">

        <h5>PROPERTI</h5>

        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>

      </div>

      <div class="ibox-content">

       <div class="form-group">
        <label class="col-sm-2 control-label">Properti</label>
        <div class="col-sm-3">
          <select name="properti" id="properti" class="form-control" ng-model="data.properti">
            <option ng-repeat="option in data.list_properti" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Tipe</label>
        <div class="col-sm-4">
          <select name="tipe" id="tipe" class="form-control" ng-model="data.tipe">
            <option ng-repeat="option in data.list_tipe" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Batas Waktu</label>
        <div class="col-sm-3">
          <select name="batas_waktu" id="batas_waktu" class="form-control" ng-model="data.batas_waktu">
            <option ng-repeat="option in data.list_batas_waktu" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Isi</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="isi" id="isi" ng-model="data.isi">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Keterangan</label>
        <div class="col-sm-8">
          <textarea class="form-control" name="keterangan" id="keterangan" ng-model="data.keterangan" ></textarea>
        </div>
      </div>

      <center>
        <a class="btn btn-primary action_opname" ng-click="tambah_item()">Simpan</a>
        <a class="btn btn-default empty_opname" ng-click="hapus_item()">Hapus</a>
        <input type="hidden" id="current_item" ng-model="data.current_item">
        <br>
      </center>

      <hr>

      <table class="table table-bordered" id="properti_aset">

        <thead>
          <tr>
            <th>#</th>
            <th>Properti</th>
            <th>Nilai</th>
            <th>Keterangan</th>
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
             <input type='hidden' class='kode_item' data-no='{{$index}}' name='item_kode[{{$index}}]' value='{{item.properti}}'/>
             {{item.properti}}
           </td>
           <td>
             <input type='hidden' class='nilai_item' data-no='{{$index}}' name='item_nilai[{{$index}}]' value='{{item.nilai}}'/>
             {{item.nilai}}
           </td>
           <td>
             <input type='hidden' class='keterangan_item' data-no='{{$index}}' name='item_keterangan[{{$index}}]' value='{{item.keterangan}}'/>
             {{item.keterangan}}
           </td>
         </tr>

       </tbody>

     </table>

   </div>

 </div>

</div>

</div>