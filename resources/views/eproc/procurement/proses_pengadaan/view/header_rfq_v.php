<div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>HEADLINE</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div>
          <div class="ibox-content">

          <?php $curval = $permintaan['ptm_number']; ?>
           <div class="form-group">
            <label class="col-sm-2 control-label">No. Tender</label>
            <div class="col-sm-10">
             <p class="form-control-static"><?php echo $curval ?></p>
           </div>
         </div>

       <?php $curval = (isset($permintaan['pr_number'])) ? $permintaan['pr_number'] : "AUTO";
       $linkUrlPR = '/procurement/proses_pengadaan/daftar_permintaan_pengadaan/lihat/'.$curval; ?>

        <div class="form-group">
          <label class="col-sm-2 control-label">No. PR</label>
          <div class="col-sm-10">
            <p class="form-control-static"><a href="<?php echo site_url($linkUrlPR); ?>" target='_blank'><?php echo $curval; ?> </a></p>
          </div>
        </div>

           <?php $curval = $permintaan['ptm_requester_name']; ?>
           <div class="form-group">
            <label class="col-sm-2 control-label">User</label>
            <div class="col-sm-10">
             <p class="form-control-static"><?php echo $curval ?></p>
           </div>
         </div>

         <?php $curval = $permintaan['ptm_requester_pos_name']; ?>
         <div class="form-group">
          <label class="col-sm-2 control-label">Divisi/Departemen</label>
          <div class="col-sm-10">
            <p class="form-control-static"><?php echo $curval ?></p>
          </div>
        </div>

        <?php $curval = date(DEFAULT_FORMAT_DATETIME,strtotime($permintaan['ptm_created_date'])); ?>
           <div class="form-group">
            <label class="col-sm-2 control-label">Tanggal Pembuatan</label>
            <div class="col-sm-10">
             <p class="form-control-static"><?php echo $curval ?></p>
           </div>
         </div>

        <?php $curval = $permintaan["ptm_subject_of_work"]; ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Pekerjaan</label>
          <div class="col-sm-8">
            <p class="form-control-static" id="nama_pekerjaan"><?php echo $curval ?></p>
            
          </div>

        </div>

        <?php $curval = $permintaan["ptm_scope_of_work"]; ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Deskripsi Pekerjaan</label>
          <div class="col-sm-10">
            <p class="form-control-static" id="deskripsi_pekerjaan"><?php echo $curval ?></p>

          </div>
        </div>

        <?php $curval = $permintaan["ptm_mata_anggaran"]." - ".$permintaan["ptm_nama_mata_anggaran"]; ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Mata Anggaran</label>
          <div class="col-sm-10">
            <p class="form-control-static" id="mata_anggaran"><?php echo $curval ?></p>
          </div>
        </div>

        <?php $curval = $permintaan["ptm_sub_mata_anggaran"]." - ".$permintaan["ptm_nama_sub_mata_anggaran"]; ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Sub Mata Anggaran</label>
          <div class="col-sm-10">
            <p class="form-control-static" id="sub_mata_anggaran"><?php echo $curval ?></p>
          </div>
        </div>

        <?php $curval = $permintaan['ptm_currency']; ?>
           <div class="form-group">
            <label class="col-sm-2 control-label">Mata Uang</label>
            <div class="col-sm-10">
             <p class="form-control-static"><?php echo $curval ?></p>
           </div>
         </div>

        <?php $curval = inttomoney($permintaan["ptm_pagu_anggaran"]); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nilai Anggaran</label>
          <div class="col-sm-4">
            <p class="form-control-static" id="pagu_anggaran"><?php echo $curval ?></p>
          </div>
        </div>

        <?php $curval = inttomoney($permintaan["ptm_sisa_anggaran"]); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Sisa Anggaran</label>
          <div class="col-sm-4">
            <p class="form-control-static" id="sisa_anggaran"><?php echo $curval ?></p>
          </div>
        </div>

<?php /*
        <?php $curval = $permintaan["ptm_district_name"]; ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Lokasi Kebutuhan</label>
          <div class="col-sm-10">
            <p class="form-control-static" id="lokasi_kebutuhan"><?php echo $curval ?></p>
          </div>
        </div>
       */ ?>

        <?php $curval = $permintaan["ptm_delivery_point"]; ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Lokasi Pengiriman</label>
          <div class="col-sm-10">
            <p class="form-control-static" id="lokasi_pengiriman"><?php echo $curval ?></p>
          </div>
        </div>

        <!-- haqim -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Chatting</label>
            <div class="col-sm-10">
              <button type="button" id="chatBtn" class="btn btn-primary" data-toggle="modal" data-target="#chatModal">Chatting</button>
          </div>
        </div>
      <!-- end -->

        <?php 
        if($activity_id > 1031){ 
        $curval = $permintaan["ptm_contract_type"]; ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Jenis Kontrak</label>
          <div class="col-sm-10">
            <p class="form-control-static" id="jenis_kontrak"><?php echo $curval ?></p>
          </div>
        </div>

        <?php } ?>

        <?php if ($activity_id >= 1040) { ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">Tipe Pemenang</label>
            <div class="col-sm-10">
              <div class="checkbox">
                <?php 
                $curval = $permintaan["ptm_winner"]; 
                ?>
                <?php if($curval == "1"){
                  $mustCheckWinner = "checked";
                  $mustCheckWinner2 = "";
                } else if ($curval == "2") {
                  $mustCheckWinner = "";
                  $mustCheckWinner2 = "checked";
                } else {
                  $mustCheckWinner = "checked";
                  $mustCheckWinner2 = "";
                }?>
                <div class="i-checks col-lg-3">
                  <label class=""> <div class="iradio_square-green mustCheckWinner <?php echo $mustCheckWinner?>" style="position: relative;"><input type="radio" value="1" name="tipe_inp" style="position: absolute; opacity: 0;" checked=""><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i>&nbsp;&nbsp; Single Winner </label>
                </div>

                <div class="i-checks col-lg-3">
                  <label class=""> <div class="iradio_square-green mustCheckWinner2 <?php echo $mustCheckWinner2 ?> " style="position: relative;"><input type="radio" value="2" name="tipe_inp" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i>&nbsp;&nbsp; Multiple Winner </label>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
</div>
<script>

$( document ).ready(function() {
    let shown = <?php 
      $show = isset($_GET['showchat']) ? $_GET['showchat'] : 0;
      echo $show; ?>;
    if(shown == 1){
      let ori = window.location.href;
      let diedit = ilanginGet("showchat", ori);
      window.history.pushState('', '', diedit);
      $('#chatModal').modal('show');
      console.log(diedit);
    }
});

function ilanginGet(key, sumber) {
    var wkwk = sumber.split("?")[0],
        param,
        params_arr = [],
        queryString = (sumber.indexOf("?") !== -1) ? sumber.split("?")[1] : "";
    if (queryString !== "") {
        params_arr = queryString.split("&");
        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
            param = params_arr[i].split("=")[0];
            if (param === key) {
                params_arr.splice(i, 1);
            }
        }
        wkwk = wkwk + "?" + params_arr.join("&");
    }
    return wkwk;
}
</script>