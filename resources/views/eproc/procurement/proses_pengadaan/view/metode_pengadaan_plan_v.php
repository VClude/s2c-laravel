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

        <?php $curval = $perencanaan['ppm_tender_method']; ?>
        <div class="form-group" id="metode_pengadaan_cont">
          <label class="col-sm-2 control-label">Metode Pengadaan</label>
            <div class="col-sm-9">
                <p class="form-control-static" id="vendor_name_inp"><?php echo (is_null($curval)) ? "Belum Ditentukan" : $metode_pengadaan[$curval]; ?></p>
            </div>
        </div>

    </div>
  </div>
</div>
</div>