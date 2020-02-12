<div class="row" ng-controller="form_head_mutasi">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>HEADER MUTASI</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">Nomor</label>
          <div class="col-md-10">
            <p class="form-control-static">{{data.nomor}}</p>
          </div>
        </div>

        <div class="form-group" >
          <label class="col-md-2 control-label">Tipe</label>
          <div class="col-md-3">
            <p class="form-control-static" ng-bind="data.nama_tipe"></p>
          </div>
        </div> 

        <?php if($activity_id == 9403){ ?>


        <div class="form-group">
          <label class="col-md-2 control-label">Jenis</label>
          <div class="col-md-3">
           <p class="form-control-static" ng-bind="data.nama_jenis"></p>
         </div>
       </div> 

       <div ng-if="data.jenis == 'B'">

        <div class="form-group" >
          <label class="col-md-2 control-label">Tipe</label>
          <div class="col-md-3">
            <p class="form-control-static" ng-bind="data.nama_tipe"></p>
          </div>
        </div> 

        <div class="form-group">
          <label class="col-md-2 control-label">Lokasi Tujuan</label>
          <div class="col-md-3">
            <p class="form-control-static" ng-bind="data.nama_kantor"></p>
          </div>
          <div class="col-md-6">
            <p class="form-control-static" ng-bind="data.nama_dept"></p>
          </div>
        </div>

      </div>

      <div ng-if="data.jenis == 'K'">

       <div class="form-group">
        <label class="col-md-2 control-label">Lokasi Tujuan</label>
        <div class="col-md-8">

          <p class="form-control-static" ng-bind="data.nama_kapal"></p>
          
        </div>
      </div>

    </div>
<!-- tambhkan tujuan/dir -shan -->
    <!-- <div class="form-group">
  <label class="col-md-2 control-label">Gudang Tujuan/DIR</label>
  <div class="col-md-8">
   <p class="form-control-static" ng-bind="data.nama_gudang"></p>
 </div>
</div> hide by hlmifzi-->


    <div class="form-group">
      <label class="col-md-2 control-label">Tahun</label>
      <div class="col-md-2">
       <p class="form-control-static" ng-bind="data.tahun"></p>
     </div>
   </div>

   <div class="form-group">
    <label class="col-md-2 control-label">Keterangan</label>
    <div class="col-md-8">
     <p class="form-control-static" ng-bind="data.keterangan"></p>
   </div>
 </div>

<?php } else { ?>

<div class="form-group">
  <label class="col-md-2 control-label">Jenis</label>
  <div class="col-md-3">
    <select name="jenis" id="jenis" class="form-control" ng-model="data.jenis">
      <option ng-repeat="option in data.list_jenis" ng-selected="(option.id == data.jenis)" value="{{option.id}}">{{option.name}}</option>
    </select>
  </div>
</div> 

<div ng-if="data.jenis == 'B'">

  <div class="form-group">
    <label class="col-md-2 control-label">Lokasi Tujuan</label>
    <div class="col-md-4" ng-if="data.tipe != 1">
      <select name="kantor" id="kantor" class="form-control" ng-change="reloaddept(data.kantor[0])" ng-model="data.kantor">
        <option ng-repeat="option in list_kantor" ng-selected="(option.id == data.kantor)" value="{{option.id}}">{{option.name}}</option>
      </select>
    </div>
    <div class="col-md-6">

      <select name="dept" id="dept" class="form-control" ng-model="data.dept">
        <option ng-repeat="option in list_dept" ng-selected="(option.id == data.dept)" value="{{option.id}}">{{option.name}}</option>
      </select>

    </div>
  </div>

</div>

<div ng-if="data.jenis == 'K'">

 <div class="form-group">
  <label class="col-md-2 control-label">Lokasi Tujuan</label>
  <div class="col-md-8">

    <select name="kapal" id="kapal" class="form-control" ng-model="data.kapal">
      <option ng-repeat="option in list_kapal" ng-selected="(option.id == data.kapal)" value="{{option.id}}">{{option.name}}</option>
    </select>

  </div>
</div>

</div>

<div class="form-group">
  <label class="col-md-2 control-label">Tahun</label>
  <div class="col-md-2">
    <input type="text" class="form-control" maxlength="4" name="tahun" value="<?php echo date("Y") ?>"/>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Keterangan</label>
  <div class="col-md-8">
    <textarea class="form-control" id="keterangan" ng-model="data.keterangan" name="keterangan"></textarea>
  </div>
</div>
<!-- tambahkan kata gudang tujuan dan dir -shan -->
<!--  <div class="form-group">
   <label class="col-md-2 control-label">Gudang Tujuan/DIR</label>
   <div class="col-md-4"> -->
   <!-- tambahkan style : "visibility: hidden" -shan -->
    <!-- <select style="visibility: hidden" name="gudang" id="gudang" class="form-control" ng-model="data.gudang" ng-change="pilihgudang()"> -->
      <!-- end -shan -->
   <!--  <option ng-repeat="option in list_gudang" ng-selected="(option.id == data.gudang)" value="{{option.id}}">{{option.name}}</option>
    </select>
  </div>
</div> -->


<?php } ?>

</div>
</div>
</div>
</div>