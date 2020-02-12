<div class="wrapper wrapper-content animated fadeInRight">
<form method="post" action="<?php echo site_url($controller_name."/submit_add_cost_center");?>"  class="form-horizontal">

  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Tambah Data Cost Center</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
          </div>
        </div> 
        <div class="ibox-content">

        <?php $curval = set_value("unit_kerja_inp"); ?>
              <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('unit_kerja') ?>Unit Kerja (*)</label>
                <div class="col-sm-10">
                  <select required class="form-control select2" style="width:100%;" name="unit_kerja_inp">
                    <option value=""><?php echo lang('choose') ?>(Kantor Cabang Sorong)-Unit Manajemen Pelayanan Kesehatan Rujukan Cabang Sorong</option>
                    <?php foreach($aset as $key => $val){
                      $selected = ($val['aset_id'] == $curval) ? "selected" : ""; 
                      ?>
                      <option <?php echo $selected ?> value="<?php echo $val['aset_id'] ?>"><?php echo $val['aset_id'] ?> (<?php echo $val['aset_id'] ?>)</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

         <?php $curval = set_value("kode_program_inp"); ?>
         <div class="form-group">
          <label class="col-sm-2 control-label">Kode Program (*)</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="kode_program_inp" maxlength="100" name="kode_program_inp" value="<?php echo $curval ?>">
          </div>
        </div>

        <?php $curval = set_value("nama_program_inp"); ?>
         <div class="form-group">
          <label class="col-sm-2 control-label">Nama Program (*)</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_program_inp" maxlength="255" name="nama_program_inp" value="<?php echo $curval ?>">
          </div>
        </div> 

        <?php $curval = set_value("alokasi_inp"); ?>
         <div class="form-group">
          <label class="col-sm-2 control-label">Alokasi (*)</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="alokasi_inp" maxlength="255" name="alokasi_inp" value="<?php echo $curval ?>">
          </div>
        </div>

 </div>
</div>
</div>
</div>

<div class="row">
  <div class="col-md-12">
    <div style="margin-bottom: 60px;">
      <?php echo buttonsubmit('aset/cost_center',lang('back'),lang('save')) ?>
    </div>
  </div>
</div>

</form>
</div>