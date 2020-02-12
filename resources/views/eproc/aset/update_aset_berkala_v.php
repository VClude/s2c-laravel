  <!-- hlmifzi -->
  <div class="wrapper wrapper-content animated fadeInRight" id="page">




    <div class="row" ng-controller="form_item_pencatatan">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Pembuatan Aset Berkala</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
              <ul class="dropdown-menu dropdown-user">
                <li><a href="#">Config option 1</a>
                </li>
                <li><a href="#">Config option 2</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="ibox-content" style="">
            <form class="form-horizontal input_aset_berkala" action="<?php echo site_url($controller_name."/submit_list_aset_berkala");?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="">

              <div class="form-group">
               <label class="col-md-2 control-label">Kode</label>
               <div class="col-md-9">
                 <div class="input-group">

                   <span class="input-group-btn">
                     <button type="button" data-id="kode_item" ng-click="pilihtipeitem('AST')" data-url="<?php echo site_url('aset/picker_aset') ?>" class="btn btn-primary picker">Pilih Aset</button> 
                      <!-- <button type="button" ng-click="pilihtipeitem('PRC')" data-id="kode_item" data-url="<?php echo site_url('procurement/picker_item_proc') ?>" class="btn btn-primary picker">Pilih Item Pengadaan</button> 
                       <button type="button" data-id="kode_item" ng-click="pilihtipeitem('BRG')" data-url="<?php echo site_url(COMMODITY_KATALOG_BARANG_PATH.'/picker') ?>" class="btn btn-primary picker barang_btn">Pilih Barang</button>
                       <button type="button" ng-show="urlpickercontract" ng-click="pilihtipeitem('CTR')" data-id="kode_item" data-url="{{urlpickercontract}}" class="btn btn-primary picker">Pilih Item Kontrak</button>  -->
                     </span>
                     <input type="text" class="form-control" id="kode_item" name="id_barang" ng-change="ambil_item()" ng-readonly="true" ng-model="data.kode_item">

                   </div>

                 </div>
               </div>

               <div class="form-group">
                 <label class="col-md-2 control-label">Deskripsi</label>
                 <div class="col-md-8">
                   <p class="form-control-static" ng-bind="data.deskripsi" id="nama_barang"></p>
                 </div>
               </div>

               <div class="form-group">
                <label class="col-md-2 control-label">Jenis Perizinan</label>
                <div class="col-md-4">
                 <select name="id_aset_berkala" id="tipe" class="form-control">
                   <option  value="" ">Pilih</option>
                   <?php foreach ($item_aset_berkala as $ias) {?>
                   <option  value="<?php echo $ias['id'] ?>"><?php echo $ias['nama_aset_berkala'] ?></option>
                   <?php } ?>
                 </select>
              </div>
            </div>


            <div class="form-group">
              <div class="col-md-12">
                <label class="col-md-2 control-label">Tanggal Mulai Berlaku</label>
                <div class="col-md-4">
                  <input type="date" class="form-control" name="mulai_berlaku">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <label class="col-md-2 control-label">Tanggal Akhir Berlaku</label>
                <div class="col-md-4">
                  <input type="date" class="form-control" name="akhir_berlaku">
                </div>

                <label class="col-md-2 control-label">Berlaku Selamanya</label>
                <div class="col-md-1">
                  <input type="checkbox" name="selamanya" id="selamanya" class="checkbox">
                </div>

                 <label class="col-md-2 control-label">Selama Dipakai</label>
                <div class="col-md-1">
                  <input type="checkbox" name="selama_dipakai" id="selama_dipakai" class="checkbox">
                </div>

              </div>
            </div>




            <div class="form-group">
              <label class="col-md-2 control-label">Lampiran Surat</label>
              <div class="col-md-4">
                <input type="file" id="attach" name="attach">
              </div>

              <label class="col-md-2 control-label">Keterangan</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="keterangan">
              </div>
            </div>






            <div class="form-group">
              <div class="col-md-3 col-md-offset-9">
                <button class="btn btn-primary pull-right" name="tombol" value="tambah" type="submit"><i class="fa fa-check"></i>&nbsp;Submit</button>
              </div>

            </div>

          </form>
        </div>
      </div>





      <div class="row">
        <div class="col-lg-12">
          <div class="ibox float-e-margins">
            <div class="ibox-title">
              <h5>List Aset Berkala</h5>
              <div class="ibox-tools">
                <a class="collapse-link">
                  <i class="fa fa-chevron-up"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                  <li><a href="#">Config option 1</a>
                  </li>
                  <li><a href="#">Config option 2</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="ibox-content" style="overflow-x: auto">
              <table  id="datatables-ss" class="table table-bordered bootstrap-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Jenis Perizinan</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Mulai Berlaku</th>
                    <th>Tanggal Akhir Berlaku</th>
                    <th>Remaining</th>
                    <th>Lampiran</th>
                    <th>Keterangan</th>
                    <th>Aksi

                    </th>
                  </tr>
                </thead>
                <tbody>


                  <?php 
                  $no = 0;
                  foreach ($list_item_berkala as $lib) { $no++?>

                  <?php 
                  if($lib['akhir_berlaku'] >= '1000-00-00' && $lib['diffdate'] != null && $lib['diffdate'] <= 0) {
                   $color = '#e74c3c';
                   $txtcol = '#fff';
                   $pesan = 'Waktu Habis';
                 } else if($lib['akhir_berlaku'] >= '1000-00-00' && $lib['diffdate'] != null && $lib['diffdate'] >= 180 && $lib['id_aset_berkala'] != 1)  {
                   $color = '#2ecc71';
                   $txtcol = '#fff';
                   $pesan = $lib['diffdate'].'&nbsp;Hari lagi';
                 } else if($lib['akhir_berlaku'] >= '1000-00-00' && $lib['diffdate'] != null && $lib['diffdate'] <= 180 && $lib['id_aset_berkala'] != 1) {
                   $color = '#e74c3c';
                   $txtcol = '#fff';
                   $pesan = $lib['diffdate'].'&nbsp;Hari lagi';
                 } else if($lib['akhir_berlaku'] >= '1000-00-00' && $lib['diffdate'] != null && $lib['diffdate'] >= 365 && $lib['id_aset_berkala'] == 1)  {
                   $color = '#2ecc71';
                   $txtcol = '#fff';
                   $pesan = $lib['diffdate'].'&nbsp;Hari lagi';
                 } else if($lib['akhir_berlaku'] >= '1000-00-00' && $lib['diffdate'] != null && $lib['diffdate'] <= 365 && $lib['id_aset_berkala'] == 1) {
                   $color = '#e74c3c';
                   $txtcol = '#fff';
                   $pesan = $lib['diffdate'].'&nbsp;Hari lagi';
                 } elseif ($lib['akhir_berlaku'] == '0001-01-01') {
                  $color = '#2ecc71';
                  $txtcol = '#fff';
                  $pesan = 'Tanpa Batas';
                }  else if ($lib['akhir_berlaku'] == '0002-02-02') {
                  $color = '#2ecc71';
                  $txtcol = '#fff';
                  $pesan = 'Selama Dipakai Menjadi Terminal';
                } 

                if($lib['akhir_berlaku'] == '0001-01-01'){
                   $akhir_berlaku = 'Tanpa Batas';
                } else if ($lib['akhir_berlaku'] == '0002-02-02'){
                  $akhir_berlaku = 'Selama Dipakai Menjadi Terminal';
                } else{
                  $akhir_berlaku = date('d M Y',strtotime($lib['akhir_berlaku']));
                }
                ?>


                <tr>
                  <td><?php echo $no ?></td>
                  <td width="15%"><?php echo $lib['kode_barang']; ?> </td>
                  <td width="10%"><?php echo $lib['nama_aset_berkala']; ?></td>
                  <td width="30%"><?php echo $lib['nama_barang']; ?></td>
                  <td><?php echo date('d M Y',strtotime($lib['mulai_berlaku'] ))?></td>
                  <td><?php echo $akhir_berlaku ?></td>
                  <td style="background-color: <?php echo $color?>;color: <?php echo $txtcol;?>; text-align: center;" ><b><?php echo $pesan ;?><b></td>
                    <td><a target="_blank" href="<?php echo ASET_BERKALA_LAMPIRAN;?>/<?php echo $lib['attach']; ?>"><?php echo $lib['attach']; ?></a></td>
                    <td><?php echo $lib['keterangan']; ?></td>
                    <td><button class="btn btn-primary btn-xs edit" 
                      data-id="<?php echo $lib['id'];?>"
                      data-id_barang="<?php echo $lib['aset_id'];?>"
                      data-id_aset_berkala="<?php echo $lib['id_aset_berkala'];?>"
                      data-nama_barang="<?php echo $lib['nama_barang'];?>"
                      data-akhir_berlaku="<?php echo $lib['akhir_berlaku'];?>"
                      data-mulai_berlaku="<?php echo $lib['mulai_berlaku'];?>"
                      data-keterangan="<?php echo $lib['keterangan'];?>"
                      ><span class="fa fa-pencil "></span> Edit</button></a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


      </div>



<script>
 $(document).ready(function() {
  $('#datatables-ss').DataTable();
});

 $(document).on('click','.edit', function(){
  var id   = $(this).attr('data-id'); 
  var id_barang   = $(this).attr('data-id_barang'); 
  var id_aset_berkala   = $(this).attr('data-id_aset_berkala'); 
  var akhir_berlaku   = $(this).attr('data-akhir_berlaku');
  var mulai_berlaku   = $(this).attr('data-mulai_berlaku'); 
  var keterangan   = $(this).attr('data-keterangan'); 
  var type = "edit";

 $('html, body').animate({
   scrollTop: $("#page").offset().top
 });
 
/* if(akhir_berlaku == '0001-01-01'){
   $('.input_aset_berkala').find('input[name="selamanya"]').prop('checked',true);
 } else if (){
   $('.input_aset_berkala').find('input[name="selama_dipakai"]').prop('checked',true);
 } else {
   
 }*/
  $('.input_aset_berkala').find('input[name="id"]').val(id);
  $('select[name="id_barang"] option[value='+id_barang+']').prop('selected',true);
  $('select[name="id_aset_berkala"] option[value='+id_aset_berkala+']').prop('selected',true);
  $('.input_aset_berkala').find('input[name="mulai_berlaku"]').val(mulai_berlaku);
  $('.input_aset_berkala').find('input[name="keterangan"]').val(keterangan);
  $('.input_aset_berkala').find('input[name="akhir_berlaku"]').val(akhir_berlaku);
  alert(akhir_berlaku);
  if (akhir_berlaku == '0002-02-02') {
     $('.input_aset_berkala').find('input[name="selama_dipakai"]').prop('checked',true);
  } else if (akhir_berlaku == '0001-01-01'){
     $('.input_aset_berkala').find('input[name="selamanya"]').prop('checked',true);
  }
 

  $('.input_aset_berkala').find('button[name="tombol"]').attr('value', 'edit');;
  /* alert(id_barang)*/
})

 $(document).on('click','#selamanya', function(){  
  if ($(this).is(':checked')) {
   $('.input_aset_berkala').find('input[name="akhir_berlaku"]').prop('disabled',true);
   $('.input_aset_berkala').find('input[name="selama_dipakai"]').prop('disabled',true);
   /*  $('.input_aset_berkala').find('input[name="mulai_berlaku"]').prop('disabled',true);*/
 } else{
      $('.input_aset_berkala').find('input[name="akhir_berlaku"]').prop('disabled',false);
      $('.input_aset_berkala').find('input[name="selama_dipakai"]').prop('disabled',false);/*
      $('.input_aset_berkala').find('input[name="mulai_berlaku"]').prop('disabled',false);*/
    } 

  })

 $(document).on('click','#selama_dipakai', function(){  
  if ($(this).is(':checked')) {
   $('.input_aset_berkala').find('input[name="akhir_berlaku"]').prop('disabled',true);
   $('.input_aset_berkala').find('input[name="selamanya"]').prop('disabled',true);
   $('.input_aset_berkala').find('input[name="selamanya"]').prop('checked',false);
   /*  $('.input_aset_berkala').find('input[name="mulai_berlaku"]').prop('disabled',true);*/
 } else{
      $('.input_aset_berkala').find('input[name="akhir_berlaku"]').prop('disabled',false);
      $('.input_aset_berkala').find('input[name="selamanya"]').prop('disabled',false);/*
      $('.input_aset_berkala').find('input[name="mulai_berlaku"]').prop('disabled',false);*/
    } 

  })
</script>