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

            <?php $curval = $userdata['complete_name']; ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">User *</label>
              <div class="col-sm-10">
                <input type="text" disabled class="form-control" required name="user_inp" value="<?php echo $curval ?>">
              </div>
            </div>

            <?php $curval = $pos['dept_name']; ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Divisi/Departemen *</label>
              <div class="col-sm-10">
                <input type="text" disabled class="form-control" required name="birounit_inp"
                  value="<?php echo $curval ?>" maxlength="10">
              </div>
            </div>

            <?php $curval = (isset($perencanaan['ppm_subject_of_work'])) ? $perencanaan['ppm_subject_of_work'] : set_value("nama_rencana_pekerjaan_inp"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Rencana Pekerjaan *</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required maxlength="120" name="nama_rencana_pekerjaan_inp"
                  value="<?php echo $curval ?>">
              </div>
            </div>

            <?php $curval = (isset($perencanaan['ppm_scope_of_work'])) ? $perencanaan['ppm_scope_of_work'] : set_value("deskripsi_rencana_pekerjaan_inp"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Deskripsi Rencana Pekerjaan *</label>
              <div class="col-sm-10">
                <textarea class="form-control" required maxlength="1000"
                  name="deskripsi_rencana_pekerjaan_inp"><?php echo $curval ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Mata Anggaran *</label>
              <div class="col-sm-3">

                <?php $curval = (isset($perencanaan['ppm_mata_anggaran'])) ? $perencanaan['ppm_mata_anggaran'] : set_value("mata_anggaran_code_inp"); ?>
                <input readonly type="text" required class="form-control" id="mata_anggaran_code_inp"
                  name="mata_anggaran_code_inp" value="<?php echo $curval ?>">

              </div>
              <div class="col-sm-6">

                <?php $curval = (isset($perencanaan['ppm_nama_mata_anggaran'])) ? $perencanaan['ppm_nama_mata_anggaran'] : set_value("mata_anggaran_label_inp"); ?>
                <input readonly type="text" required class="form-control" id="mata_anggaran_label_inp"
                  name="mata_anggaran_label_inp" value="<?php echo $curval ?>">

              </div>
              <div class="col-sm-1">

                <?php $curval = set_value("mata_anggaran_inp"); ?>
                <input readonly required type="hidden" class="form-control" id="mata_anggaran_inp"
                  name="mata_anggaran_inp" value="<?php echo $curval ?>">
                <button type="button" data-id="mata_anggaran_inp"
                  data-url="<?php echo site_url('administration/picker_anggaran') ?>" class="btn btn-primary picker">
                  <i class="fa fa-search"></i>
                </button>

              </div>
            </div>

            <?php $curval = (isset($perencanaan['ppm_sub_mata_anggaran'])) ? $perencanaan['ppm_sub_mata_anggaran'] : set_value("sub_mata_anggaran_code_inp"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Sub Mata Anggaran *</label>
              <div class="col-sm-3">

                <input readonly required type="text" class="form-control" id="sub_mata_anggaran_code_inp"
                  name="sub_mata_anggaran_code_inp" value="<?php echo $curval ?>">

              </div>
              <div class="col-sm-6">
                <?php $curval = (isset($perencanaan['ppm_nama_sub_mata_anggaran'])) ? $perencanaan['ppm_nama_sub_mata_anggaran'] : set_value("sub_mata_anggaran_label_inp"); ?>
                <input readonly required type="text" class="form-control" id="sub_mata_anggaran_label_inp"
                  name="sub_mata_anggaran_label_inp" value="<?php echo $curval ?>">

              </div>
            </div>

            <?php $curval = (!empty(set_value("mata_uang_inp"))) ? set_value("mata_uang_inp") : "IDR"; ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Mata Uang *</label>
              <div class="col-sm-3">
                <select required class="form-control select2" name="mata_uang_inp">
                  <option value=""><?php echo lang('choose') ?></option>
                  <?php foreach($default_currency as $key => $val){
          $selected = ($key == $curval) ? "selected" : ""; 
          ?>
                  <option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $val ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <?php $curval = (isset($perencanaan['ppm_pagu_anggaran'])) ? $perencanaan['ppm_pagu_anggaran'] : set_value("pagu_anggaran_inp"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nilai Anggaran *</label>
              <div class="col-sm-4">
                <input type="text" class="form-control money" maxlength="30" required name="pagu_anggaran_inp"
                  value="<?php echo $curval ?>">
              </div>
            </div>


            <?php $curval = (isset($perencanaan['ppm_renc_pelaksanaan'])) ? substr($perencanaan['ppm_renc_pelaksanaan'],4) : ((set_value("rencana_kebutuhan_month_inp")) ? set_value("rencana_kebutuhan_month_inp") : date("m")); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Rencana Pelaksanaan Pengadaan *</label>
              <div class="col-sm-3">
                <?php echo month_select_box('rencana_pelaksanaan_kebutuhan_month_inp',$curval) ?>
                
              </div>
              <div class="col-sm-2">
                <?php $curval = (isset($perencanaan['ppm_renc_pelaksanaan'])) ? substr($perencanaan['ppm_renc_pelaksanaan'],0,4) : ((set_value("rencana_kebutuhan_year_inp")) ? set_value("rencana_kebutuhan_year_inp") : date("Y")); ?>
                <select class="form-control" name="rencana_kebutuhan_year_inp">
                  <?php for ($i=date("Y"); $i <= date("Y")+5; $i++) { 
                     $selected = ($i == $curval) ? "selected" : ""; 
                  ?>
                  <option <?php echo $selected ?>><?php echo $i ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <?php $curval = (isset($perencanaan['ppm_renc_kebutuhan'])) ? substr($perencanaan['ppm_renc_kebutuhan'],4) : ((set_value("rencana_pelaksanaan_kebutuhan_month_inp")) ? set_value("rencana_pelaksanaan_kebutuhan_month_inp") : date("m")); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Rencana Kebutuhan *</label>
              <div class="col-sm-3">

              <?php echo month_select_box('rencana_kebutuhan_month_inp',$curval) ?>

              </div>
              <div class="col-sm-2">
                <?php $curval = (isset($perencanaan['ppm_renc_kebutuhan'])) ? substr($perencanaan['ppm_renc_kebutuhan'],0,4) : ((set_value("rencana_pelaksanaan_kebutuhan_year_inp")) ? set_value("rencana_pelaksanaan_kebutuhan_year_inp") : date("Y")); ?>
                <select class="form-control" name="rencana_pelaksanaan_kebutuhan_year_inp"
                  value="<?php echo $curval ?>">
                  <?php for ($i=date("Y"); $i <= date("Y")+5; $i++) { 
                    $selected = ($val == $curval) ? "selected" : ""; 
                    ?>
                  <option <?php echo $selected ?>><?php echo $i ?></option>
                  <?php } ?>
                </select>
              </div>

            </div>



          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
        
      $(document.body).on("change", "#mata_anggaran_inp", function () {

        var id = $(this).val();
        var url = "<?php echo site_url('administration/data_anggaran') ?>";
        $.ajax({
          url: url + "?id=" + id,
          dataType: "json",
          success: function (data) {
            var mydata = data.rows[0];
            $("#mata_anggaran_code_inp").val(mydata.code_cc);
            $("#mata_anggaran_label_inp").val(mydata.name_cc);
            $("#sub_mata_anggaran_code_inp").val(mydata.subcode_cc);
            $("#sub_mata_anggaran_label_inp").val(mydata.subname_cc);
          }
        });

      });

    });
    </script>