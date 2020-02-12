<div class="wrapper wrapper-content animated fadeInRight">
  <form method="post" action="<?php echo site_url($controller_name."/submit_add_umur_ekonomis");?>"  class="form-horizontal">

    <div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
          <h5>Tambah Umur Ekonomis</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div> 
          <div class="ibox-content">

           <?php $curval = set_value("name"); ?>
           <div class="form-group">
            <label class="col-sm-2 control-label">Jenis Aset</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="name" maxlength="40" name="name" value="<?php echo $curval ?>">
            </div>
          </div>

          <?php $curval = set_value("tahun"); ?>
          <div class="form-group">
          <label class="col-sm-2 control-label">Tahun</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="tahun" maxlength="2" name="tahun" value="<?php echo $curval ?>">
            </div>
          </div>  

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div style="margin-bottom: 60px;">
        <?php echo buttonsubmit('aset/umur_ekonomis',lang('back'),lang('save')) ?>
      </div>
    </div>
  </div>

</form>
</div>