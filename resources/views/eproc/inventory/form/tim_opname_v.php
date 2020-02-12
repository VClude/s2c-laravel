<div class="row" ng-controller="form_tim_opname">

  <div class="col-md-12">

    <div class="ibox float-e-margins">

      <div class="ibox-title">

        <h5>TIM OPNAME</h5>

        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>

      </div>

      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">Pelaksana</label>
          <div class="col-md-8">
            <select name="petugas_id_inp" id="petugas_id_inp" class="form-control" ng-model="data.petugas_id_inp">
              <option ng-repeat="option in data.list_petugas" ng-selected="(option.id == data.kantor)" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Posisi Pelaksana</label>
          <div class="col-md-3">
            <select name="posisi_id_inp" id="posisi_id_inp" class="form-control" ng-model="data.posisi_id_inp">
              <option ng-repeat="option in data.list_posisi_pelaksana" ng-selected="(option.id == data.kantor)" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-4">
            <textarea class="form-control" name="keterangan_inp" id="keterangan_inp" ng-model="data.keterangan_inp" ></textarea>
          </div>
        </div>

        <center>
          <a class="btn btn-primary action_opname" ng-click="tambahpetugas()">Simpan</a>
          <a class="btn btn-default empty_opname" ng-click="hapuspetugas()">Hapus</a>
          <input type="hidden" id="current_opname_inp" ng-model="data.current_opname_inp">
          <br>
        </center>

        <hr>

        <table class="table table-bordered" id="opname_petugas_table">

          <thead>
            <tr>
              <th>#</th>
              <th>Nama Petugas</th>
              <th>Posisi Pelaksana</th>
              <th>Keterangan</th>
            </tr>
          </thead>

          <tbody>

           <tr ng-repeat="item in data.list_tim_opname">
             <td>
               <button type='button' class='btn btn-primary btn-xs' ng-click="ubahpetugas(data.list_tim_opname,$index)" data-no='{{$index}}'>
                 <i class='fa fa-edit'></i>
               </button>
               <input type="hidden" name='item_id[{{$index}}]' value='{{item.id}}'>
               <input type="hidden" name='item_user[{{$index}}]' value='{{item.userid}}'>
             </td>
             <td>
               <input type='hidden' class='nama_item' data-no='{{$index}}' name='item_nama[{{$index}}]' value='{{item.nama}}'/>
               {{item.nama}}
             </td>
             <td>
               <input type='hidden' class='posisi_item' data-no='{{$index}}' name='item_posisi[{{$index}}]' value='{{item.posisi}}'/>
               {{item.posisi_nama}}
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