<div class="wrapper wrapper-content animated fadeInRight">
  <form method="post" action="<?php echo site_url($controller_name."/submit_add_divisi_departemen");?>"  class="form-horizontal">

    <div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Tambah Departemen</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div> 
          <div class="ibox-content">

           <?php $curval = set_value("dep_code_divbirnit_inp"); ?>
           <div class="form-group">
            <label class="col-sm-2 control-label">Kode</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="dep_code_divbirnit_inp" maxlength="50" name="dep_code_divbirnit_inp" value="<?php echo $curval ?>">
            </div>
          </div>

          <?php $curval = set_value("dept_name_divbirnit_inp"); ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="dept_name_divbirnit_inp" maxlength="255" name="dept_name_divbirnit_inp" value="<?php echo $curval ?>">
            </div>
          </div>

          <?php $curval = set_value("dist_id_divbirnit_inp"); ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kantor</label>
            <div class="col-sm-4">
             <select class="form-control" name="dist_id_divbirnit_inp">
              <option value="">Pilih</option>
              <?php 
              foreach($dist_name as $key => $val){
                $selected = ($val['district_id'] == $curval) ? "selected" : ""; 
                ?>
                <option <?php echo $selected ?> value="<?php echo $val['district_id'] ?>"><?php echo $val['district_name'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>


          <?php $curval = set_value("tipe_inp"); ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">Tipe</label>
            <div class="col-sm-3">
              <input type="radio" name="tipe_inp" value="direktorat"> Direktorat<br>
              <input type="radio" name="tipe_inp" value="divisi"> Divisi<br>
              <input type="radio" name="tipe_inp" value="departemen"> Departemen
            </div>
          </div>

          <?php $curval = set_value("div_id_divbirnit_inp"); ?>
          <div class="form-group" id="divCont">
            <label class="col-sm-2 control-label">Divisi</label>
            <div class="col-sm-4">
             <select class="form-control" name="div_id_divbirnit_inp">
              <option value="">Pilih</option>
              <?php 
              foreach($div as $key => $val){
                $selected = ($val['dept_id'] == $curval) ? "selected" : ""; 
                ?>
                <option <?php echo $selected ?> value="<?php echo $val['dept_id'] ?>"><?php echo $val['dept_name'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <?php $curval = set_value("dir_id_divbirnit_inp"); ?>
          <div class="form-group" id="dirCont">
            <label class="col-sm-2 control-label">Direktorat</label>
            <div class="col-sm-4">
             <select class="form-control" name="dir_id_divbirnit_inp">
              <option value="">Pilih</option>
              <?php 
              foreach($direktorat as $key => $val){
                $selected = ($val['dept_id'] == $curval) ? "selected" : ""; 
                ?>
                <option <?php echo $selected ?> value="<?php echo $val['dept_id'] ?>"><?php echo $val['dept_name'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
<!-- ==================================Tambah===================================================== -->
          <?php $curval = set_value("gambar_attachment"); ?>
          <div class="form-group" id="tempat_gambar">
            <label class="col-md-2 control-label">Gambar Maps</label>
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

          <div id="form_Terminal">
         <!--    <?php// $curval = set_value("no_sertifikat_inp"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">No. Sertifikat</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="no_sertifikat_inp" maxlength="255" name="no_sertifikat_inp" value="<?php// echo $curval ?>">
              </div>
            </div>

            <?php// $curval = set_value("tgl_penerbitan_inp"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Penerbitan</label>
              <div class="col-sm-4 input-group date">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" class="form-control datepicker" id="tgl_penerbitan_inp" name="tgl_penerbitan_inp" style="width: 95%" value="<?php// echo $curval ?>">
              </div>
            </div>

            <?php// $curval = set_value("luas_inp"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Luas (m<sup>2</sup>)</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" id="luas_inp" maxlength="64" name="luas_inp" value="<?php// echo $curval ?>">
              </div>
            </div>

            <?php// $curval = set_value("nama_pemegang_hak_inp"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Pemegang Hak</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="nama_pemegang_hak_inp" name="nama_pemegang_hak_inp" value="<?php// echo $curval ?>">
              </div>
            </div> -->
<!-- 
            <?php// $curval = set_value("status_inp"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Status</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="status_inp" maxlength="255" name="status_inp" value="<?php// echo $curval ?>">
              </div>
            </div>

            <?php //$curval = set_value("berlaku_inp"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Berlaku S/D</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="berlaku_inp" maxlength="255" name="berlaku_inp" value="<?php// echo $curval ?>">
              </div>
            </div>-->

            <!-- <?php// $curval = set_value("status_operasional_inp"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Status Operasional</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="status_operasional_inp" maxlength="255" name="status_operasional_inp" value="<?php// echo $curval ?>">
              </div>
            </div> -->
          </div> 
<!-- =============================================================================================== -->

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div style="margin-bottom: 60px;">
        <?php echo buttonsubmit('administration/master_data/divisi_departemen',lang('back'),lang('save')) ?>
      </div>
    </div>
  </div>

</form>
</div>

<script type="text/javascript">
$( document ).ready(function(){
  //$("#tempat_gambar").hide();

  check_metode();
  checkTipeDept('start');

    $("#tipe_inp").change(function(){
      check_metode();
    });

    function check_metode(){

    var tipe = parseInt($("#tipe_inp").val());
    var tempat_gambar = $("#tempat_gambar");
    var form_Terminal = $("#form_Terminal");
      //var panitia_pelelangan = $("#panitia_pelelangan_cont");
      if(tipe == 1){
        tempat_gambar.show();
        form_Terminal.show();
        //panitia_pelelangan.hide();
      } else {
        tempat_gambar.hide();
        form_Terminal.hide();
        //panitia_pelelangan.hide();
      }

    }

  $('input[name=tipe_inp]').change(function(){
    var $this = $(this);
    checkTipeDept($this.val());
  });
  
});

function checkTipeDept(val){
  switch (val) {
      case 'departemen':
        $('#divCont').show();
        $('#dirCont').hide();
        $("#divCont").prop('required',true);
        $("#dirCont").prop('required',false);
        break;
    
      case 'divisi':
        $('#divCont').hide();
        $('#dirCont').show();
        $("#divCont").prop('required',false);
        $("#dirCont").prop('required',true);
        break;

      default:
        $('#divCont').hide();
        $('#dirCont').hide();
        $("#divCont").prop('required',false);
        $("#dirCont").prop('required',false);
        break;
    }
}
    


</script>