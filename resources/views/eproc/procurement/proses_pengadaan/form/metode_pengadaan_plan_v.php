<div class="row" id="metode_pengadaan">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>METODE PENGADAAN</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <?php $curval = isset($perencanaan['ppm_tender_method']) ? $perencanaan['ppm_tender_method'] : set_value('metode_pengadaan_inp'); ?>
        <div class="form-group" id="metode_pengadaan_cont">
          <label class="col-sm-2 control-label">Metode Pengadaan *</label>
          <div class="col-sm-6">
           <select class="form-control" id="metode_pengadaan_inp" name="metode_pengadaan_inp" value="<?php echo $curval ?>" required>
              <option value=""><?php echo lang('choose') ?></option>
            <?php foreach ($metode_pengadaan as $key => $value) { 
              $selected = ($curval == $key) ? "selected" : "";
              ?>
              <option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $value ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
