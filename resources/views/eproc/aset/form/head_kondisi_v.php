<div class="row" ng-controller="form_head_kondisi">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>HEADER</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">Nomor</label>
          <div class="col-md-4">
            <p class="form-control-static" ng-bind="data.nomor"></p>
          </div>
        </div>

        <?php if($activity_id == 9300){ ?>

        <div class="form-group">
          <label class="col-md-2 control-label">Tanggal</label>
          <div class="col-md-3">
            <input type="date" class="form-control" ng-model="data.tanggal" id="tanggal" name="tanggal"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Aset</label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-btn">
                <button type="button" data-id="aset_id" data-url="<?php echo site_url('aset/picker_aset') ?>" class="btn btn-primary picker barang_btn">...</button> 
              </span>
              <input readonly type="text" class="form-control" id="aset_id" ng-change="ambil_item()" ng-model="data.aset_id" name="aset_id" >
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Nama Aset</label>
          <div class="col-md-8">
            <p class="form-control-static" ng-bind="data.barang.barcode+' - '+data.barang.nama_barang"></p>
          </div>
        </div>
        <!-- hidden -shan -->
        <div class="form-group">
          <label class="col-md-2 control-label"  hidden="hidden">Mitra Kerja</label>
          <div class="col-md-6">
            <input type="hidden" class="form-control" ng-model="data.mitra" id="mitra" name="mitra"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-10">
            <textarea class="form-control" id="keterangan" ng-model="data.keterangan" name="keterangan"></textarea>
          </div>
        </div>

        <?php } else { ?>

        <div class="form-group">
          <label class="col-md-2 control-label">Tanggal</label>
          <div class="col-md-3">
            <p class="form-control-static" ng-bind="data.tanggal | date:'dd/MM/yyyy'"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Nama Aset</label>
          <div class="col-md-8">
            <p class="form-control-static" ng-bind="data.barang.barcode+' - '+data.barang.nama_barang"></p>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-2 control-label">Nilai Buku</label>
          <div class="col-md-8">
            <p class="form-control-static nilai_lama" ng-bind="data.barang.nilai_buku+' IDR'" data-nilai-buku="<?php echo $nilai_buku?>"> </p>
            <input type="hidden" class="form-control biaya_total" name="biaya_sebelum" value="<?php echo $nilai_buku?>" >
          </div>
        </div>


<!-- hidden -shan -->
        <div class="form-group">
          <label class="col-md-2 control-label"  hidden="hidden">Mitra Kerja</label>
          <div class="col-md-6">
            <p class="form-control-static" ng-bind="data.mitra" hidden="hidden"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Keterangan</label>
          <div class="col-md-10">
            <p class="form-control-static" ng-bind="data.keterangan"></p>
          </div>
        </div>

        <?php } ?>

        <?php if($activity_id == 9302){ ?>

        <div class="form-group">
          <label class="col-md-2 control-label">Kondisi</label>
          <div class="col-md-6">
            <select name="kondisi" id="kondisi" class="form-control" ng-model="data.kondisi">
              <option ng-repeat="option in list_kondisi" ng-selected="(option.id == data.kondisi)" value="{{option.id}}">{{option.name}}</option>
            </select>
          </div>
        </div>

        <!-- hlmifzi -->
<!-- ubah biaya jadi nilai -shan -->
        <div class="form-group">
          <label class="col-md-2 control-label">Nilai Revaluasi</label>
          <div class="col-md-6">
          
          <div class="input-group">
            <span class="input-group-btn">
             <label class="btn btn-primary "> <i class="fa fa-minus"></i>  </label> 
            </span>
            <input type="number" class="form-control revaluasi"  id="biaya" name="biaya">
          </div>
          </div>
        </div>
<!-- tambah form lokasi dan pemegang aset -sil -->
       <div class="form-group">
         <label class="col-md-2 control-label">Nilai Kapitalisasi</label>
         <div class="col-md-6">

         <div class="input-group">
           <span class="input-group-btn">
             <label class="btn btn-primary">  <i class="fa fa-plus"></i> </label> 
           </span>
           <input  type="number" class="form-control kapitalisasi" id="biaya" name="biaya_tambah" >
         </div>

         </div>
       </div>


        <div class="form-group">
         <label class="col-md-2 control-label">Nilai Buku Setelah revaluasi/kapitalisasi</label>
         <div class="col-md-8">
           <input type="hidden" class="form-control biaya_total" name="biaya_total">
           <p class="form-control-static nilai_buku_change" > <?php echo inttomoney($nilai_buku)?> IDR</p>
         </div>
       </div>

       <div class="form-group">
          <label class="col-md-2 control-label">Lokasi</label>
          <div class="col-md-3">
            <div class="radio-inline">
             <input type="radio" name="lokasi" ng-model="data.lokasi_ktr" value="ktr"> Kantor 
           </div>
           <div class="radio-inline">
            <input type="radio" name="lokasi" ng-model="data.lokasi_ktr" value="kpl"> Kapal
          </div>
        </div>
      </br>
        <div class="col-md-4" ng-if="data.lokasi_ktr == 'ktr'">
          <select name="lokasi_ktr" id="lokasi_ktr" ng-change="reloaddept(data.kantor_item[0])" class="form-control" ng-model="data.kantor_item">
            <option ng-repeat="option in list_kantor" ng-selected="(option.id == data.kantor_item)" value="{{option.id}}">{{option.name}}</option>
          </select>
          <select name="dept" id="dept" class="form-control" ng-model="data.div_id">
          <option ng-repeat="option in list_dept" ng-selected="(option.id == data.divisi_item)" value="{{option.id}}">{{option.name}}</option>
        </select>
        </div>
        <div class="col-md-4" ng-if="data.lokasi_ktr == 'kpl'">
          <select name="lokasi_kpl" id="lokasi_kpl" class="form-control" ng-model="data.lokasi_kpl">
            <option ng-repeat="option in list_kapal" ng-selected="(option.id == data.kapal_item)" value="{{option.id}}">{{option.name}}</option>
          </select>
        </div>
      </div>
         <div class="form-group">
          <label class="col-md-2 control-label">Pemegang Aset</label>
          <div class="col-md-6">
          <input type="text" class="form-control" ng-model="data.pemegang" id="pemegang" name="pemegang"/>
          </div>
        </div>

        <?php } else { ?>

        <div class="form-group">
          <label class="col-md-2 control-label">Kondisi</label>
          <div class="col-md-6">
            <p class="form-control-static" ng-bind="data.nama_kondisi"></p>
          </div>
        </div>
<!-- ubah biaya jadi nilai -shan -->
        <div class="form-group">
          <label class="col-md-2 control-label">Nilai</label>
          <div class="col-md-6">
            <p class="form-control-static" ng-bind="data.biaya"></p>
          </div>
        </div>

        <?php } ?>

      </div>
    </div>
  </div>
</div>

<!-- hlmifzi -->
<script>
   $(document).on('change','.revaluasi', function(){
      var nilai_revaluasi = $(this).val();
      var nilai_lama  = $("p.nilai_lama").attr("data-nilai-buku");
      var new_nilai = nilai_lama - nilai_revaluasi;
      
      var rupiah = new_nilai.toLocaleString(
        undefined, // leave undefined to use the browser's locale,
                   // or use a string like 'en-US' to override it.
        { minimumFractionDigits: 2 }
      );
   
      alert('Nilai Setelah revaluasi Rp '+ rupiah);
       if ($(this).is(':disabled')) {
           alert('hai');
     } else{
          $(".kapitalisasi").attr("disabled", 'disabled');
     }
      $("p.nilai_buku_change").html(rupiah+' IDR');
      $('input[name="biaya_total"]').val(new_nilai);
   });


   $(document).on('change','.kapitalisasi', function(){
      var nilai_kapitalisasi = $(this).val();
      var nilai_lama  = $("p.nilai_lama").attr("data-nilai-buku");
      var new_nilai = Math.abs(-nilai_lama) + Math.abs(-nilai_kapitalisasi);

       var rupiah = new_nilai.toLocaleString(
        undefined, // leave undefined to use the browser's locale,
                   // or use a string like 'en-US' to override it.
        { minimumFractionDigits: 2 }
      );
      
      alert('Nilai Setelah kapitalisasi Rp'+ rupiah);
     if ($(this).is(':disabled')) {
           alert('hai')
     } else{
          $(".revaluasi").attr("disabled", 'disabled');
     }
     
      $("p.nilai_buku_change").html(rupiah+' IDR');
      $('input[name="biaya_total"]').val(new_nilai);
   });

</script>