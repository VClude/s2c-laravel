  <!-- hlmifzi -->
  <div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Header Aset</h5>
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
          <form class="form-horizontal" action="<?php echo site_url($controller_name."/submit_report");?>" method="post">
            <div class="form-group">
              <label class="col-md-2 control-label">Nomor</label>
              <div class="col-md-4">
                <p><?php echo $aset['nomor'] ?></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Tanggal Perolehan</label>
              <div class="col-md-2">
                <p class="form-control-static"><?php echo $aset['tanggal'] ?></p>
              </div>
            </div>

            <div class="form-group">
             <label class="col-md-2 control-label">Tipe</label>
             <div class="col-md-2">
              <p class="form-control-static"><?php echo $aset['nama_tipe'] ?></p>
            </div>
            <label class="col-md-1 control-label">Kode Barang</label>
            <div class="col-md-2">
              <p class="form-control-static"><?php echo $aset['nama_jenis'] ?></p>
            </div>

            <!-- hlmifzi -->
            <label class="col-md-2 control-label">Jenis ASDP</label>
            <div class="col-md-2">
              <p class="form-control-static"> <?php echo $aset['nama_jenis_asdp'] ?></p>
            </div>
            <!-- end -->
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">No. Kontrak</label>
            <div class="col-md-6">
              <p class="form-control-static"><?php echo $aset['no_kontrak'] ?></p>
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-2 control-label">Vendor</label>
            <div class="col-md-6">
              <p class="form-control-static"><?php echo $aset['nama_vendor'] ?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Keterangan</label>
            <div class="col-md-10">
              <p class="form-control-static ng-binding"><?php echo $aset['keterangan'] ?></p>
            </div>
          </div> 

          <div class="form-group">
            <label class="col-md-2 control-label">Aset Berkala</label>
            <div class="col-md-10">
             <?php if($aset['isAsetBerkala'] == null){?>
             <input type="checkbox" name="" disabled="">
             <?php } else if ($aset['isAsetBerkala'] >= 1) { ?>
             <input type="checkbox" name="" checked="" disabled="">
             <?php } ?>


           </div>
         </div>

       </form>
     </div>
   </div>
 </div>
</div>

<div class="row">
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

        <div class="table-responsive overflowtable" style="overflow-x: auto">

         <table class="table table-bordered" id="item_table">
          <thead>
            <tr>
              <th width="64px;">#</th>
              <th width="48px;">Kode</th>
              <th>Gambar</th>
              <th>Nama</th>
              <th>Harga</th>
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
            <?php 
            $no = 0;
            foreach ($item_aset as $iset) { $no++?>
            <tr>
              <td width="64px;" class="ng-binding">
               <?php echo $no; ?>
             </td>
             <td width="48px;" class="ng-binding">
              <?php echo $iset['id']?>
            </td>
            <td>
             <input type="hidden" class="item_gambar" data-no="0" name="item_gambar[0]" value="" autocomplete="off">
             <center>
               <a href="assets/img/logo.png" target="_blank">
                 <img ng-src="assets/img/logo.png" style="max-height: 64px;" class="img-responsive" src="assets/img/logo.png">
               </a>
             </center>
           </td>
           <td class="ng-binding">
            <?php echo $iset['nama_barang']?>
          </td>
          <td class="ng-binding">
            <?php echo $iset['harga_satuan']?>

          </td>
          <td class="ng-binding">
            <?php echo $iset['district_name']?>
          </td>
          <td class="ng-binding">
           <?php echo $iset['dept_name']?>
         </td>
         <td>
           <?php echo $iset['name_ship']?>
         </td>
         <td class="ng-binding">
          <?php echo $iset['latitude']?>
          x 
          <?php echo $iset['longitude']?>
        </td>

        <td class="ng-binding">
         <input type="hidden" class="item_umur_ekonomis" data-no="0" name="item_umur_ekonomis[0]" value="4" autocomplete="off">
         Bangunan (5 tahun)
       </td>
       <td width="200px;" class="ng-binding">
         <?php echo $iset['barcode']?>
       </td>
       <td class="ng-binding">
        <?php echo $iset['pemegang']?>

      </td>
      <!-- daftar gudang -->
      <td class="ng-binding">
       <input type="hidden" class="item_gudang" name="item_gudang[0]" value="" autocomplete="off">

     </td>
     <!-- end -->
   </tr>
   <?php } ?>

 </tbody>

</table>


</div>

</div>
</div>
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
                </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php
$i = 0;
include(VIEWPATH."/comment_view_attachment_v.php");
$back = buttonback($back_url,lang('back'));
?>


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
  $('.input_aset_berkala').find('input[name="id"]').val(id);
  $('select[name="id_barang"] option[value='+id_barang+']').prop('selected',true);
  $('select[name="id_aset_berkala"] option[value='+id_aset_berkala+']').prop('selected',true);
  $('.input_aset_berkala').find('input[name="akhir_berlaku"]').val(akhir_berlaku);
  $('.input_aset_berkala').find('input[name="mulai_berlaku"]').val(mulai_berlaku);
  $('.input_aset_berkala').find('input[name="keterangan"]').val(keterangan);

  $('.input_aset_berkala').find('button[name="tombol"]').attr('value', 'edit');;
  /* alert(id_barang)*/
})
</script>

