<div class="wrapper wrapper-content animated fadeInRight">
  <form method="post" action="<?php echo site_url($controller_name . "/submit_add_delegasi_tugas"); ?>" class="form-horizontal">

    <div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Tambah User Pengganti</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div>
          <div class="ibox-content">

            <?php $curval = set_value("tgl_mulai"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal mulai *</label>
              <div class="col-sm-3">
                <div class='input-group date' id='datetimepicker1'>
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar glyphicon1"></span>
                  </span>
                  <input required type="text" class="form-control tgl_mulai_inp" id="tgl_mulai_inp" maxlength="50" name="tgl_mulai_inp" value="<?php echo $curval ?>">
                </div>
              </div>
            </div>

            <?php $curval = set_value("tgl_berakhir"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Akhir *</label>
              <div class="col-sm-3">
                <div class='input-group date' id='datetimepicker2'>
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar glyphicon2"></span>
                  </span>
                  <input required type="text" class="form-control tgl_berakhir_inp" id="tgl_berakhir_inp" maxlength="255" name="tgl_berakhir_inp" value="<?php echo $curval ?>">
                </div>
              </div>
            </div>

            <?php $curval = set_value("dari"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Dari *</label>
              <div class="col-sm-4">
                <select required class="form-control select2" name="dari_inp" id="dari">
                  <option value="">Pilih user yang ingin delegasi</option>
                  <?php
                  foreach ($employee1 as $key => $val) {
                    $selected = ($val['id'] == $curval) ? "selected" : "";
                    ?>
                    <option <?php echo $selected ?> value="<?php echo $val['id'] ?>"><?php echo $val['fullname'] . " - " . $val['dept_name'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <?php $curval = set_value("kepada"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Kepada *</label>
              <div class="col-sm-4">
                <select required class="form-control select2" name="kepada_inp" id="kepada">
                  <option value="">Pilih user untuk didelegasi</option>
                  <?php
                  foreach ($employee as $key => $val) {
                    $selected = ($val['id'] == $curval) ? "selected" : "";
                    ?>
                    <option <?php echo $selected ?> value="<?php echo $val['id'] ?>"><?php echo $val['fullname'] . " - " . $val['dept_name']  ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <?php $curval = set_value("keterangan"); ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Alasan *</label>
              <div class="col-sm-6">
                <textarea required type="text" class="form-control" id="keterangan_inp" name="keterangan_inp" value="<?php echo $curval ?>" height="200px"> </textarea>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div style="margin-bottom: 60px;">
          <?php echo buttonsubmit('administration/master_data/delegasi_tugas', lang('back'), lang('save')) ?>
        </div>
      </div>
    </div>

  </form>
</div>

<script type="text/javascript">
  $(document).ready(function() {

    $('#tgl_mulai_inp').datetimepicker({
      format: "YYYY-MM-DD"
    })
    $('#tgl_berakhir_inp').datetimepicker({
      format: "YYYY-MM-DD"
    })


    $('.glyphicon1').click(function() {
      $("#datetimepicker1").datetimepicker({
        format: "YYYY-MM-DD"
      });
    });

    $('.glyphicon2').click(function() {
      $("#datetimepicker2").datetimepicker({
        format: "YYYY-MM-DD"
      });
    });


    $('.tgl_mulai_inp').on("dp.change", function(e) {

      // $('.tgl_berakhir_inp').data("DateTimePicker").minDate(e.date.add(1, 'day'));
			$('.tgl_berakhir_inp').data("DateTimePicker").minDate(e.date);
    });

    $('#kepada').change(function() {
      if ($('#kepada').val() == $('#dari').val()) {
        alert("User Pengganti tidak boleh sama")
        $('#kepada').val("")
      }
    })
  })
</script>