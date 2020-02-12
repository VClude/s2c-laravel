<div class="wrapper wrapper-content animated fadeInRight">
  <form method="post" action="<?php echo site_url($controller_name."/submit_edit_position");?>"  class="form-horizontal">

    <input type="hidden" name="id" value="<?php echo $id ?>">

    <div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Ubah Posisi</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div> 
          <div class="ibox-content">

            <?php $curval = $data["pos_name"]; ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Posisi</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="pos_name_inp" maxlength="255" name="pos_name_inp" value="<?php echo $curval ?>">
              </div>
            </div>

            <?php $curval = $data["job_title"]; ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Jabatan</label>
              <div class="col-sm-5">
               <select required class="form-control select2" name="job_title_inp">
                <option value="">Pilih</option>
                <?php 
                foreach($jobtitle as $key => $val){
                  $selected = ($val['job_title'] == $curval) ? "selected" : ""; 
                  ?>
                  <option <?php echo $selected ?> value="<?php echo $val['job_title'] ?>"><?php echo $val['job_title'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <?php $curval = $data["dept_id"]; ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Departemen</label>
              <div class="col-sm-5">
               <select required class="form-control select2" name="dept_id_inp" id="dept_id_inp">
                </select>
              </div>
            </div>

            <?php $curval = $data["district_id"]; ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Kantor</label>
              <div class="col-sm-5">
               <select required class="form-control select2" name="district_id_inp">
                <option value="">Pilih</option>
                <?php 
                foreach($district as $key => $val){
                  $selected = ($val['district_id'] == $curval) ? "selected" : ""; 
                  ?>
                  <option <?php echo $selected ?> value="<?php echo $val['district_id'] ?>"><?php echo $val['district_name'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div style="margin-bottom: 60px;">
          <?php echo buttonsubmit('administration/admin_tools/position',lang('back'),lang('save')) ?>
        </div>
      </div>
    </div>

  </form>
</div>

<script type="text/javascript">

var url = "<?php echo site_url('administration/getDepDivDir'); ?>";
var curval = "<?php echo $data["dept_id"]; ?>";
var arr = {
  'results': [
    {
      'text': 'Direktorat',
      'children': []
    },
    {
      'text': 'Divisi',
      'children': []
    },
    {
      'text': 'Departemen',
      'children': []
    }
  ]
};

$.ajax({
  url: url,
  success: function(ret){
    ret = JSON.parse(ret);
    $.each(ret, function(index, value){
      if(value.is_dir == 1){
        arr.results[0].children.push({'id':value.dept_id, 'text': value.dept_name});
      }else if(value.is_div == 1){
        arr.results[1].children.push({'id':value.dept_id, 'text': value.dept_name});
      }else if(value.is_dept == 1){
        arr.results[2].children.push({'id':value.dept_id, 'text': value.dept_name});
      }else{
        arr.results[2].children.push({'id':value.dept_id, 'text': value.dept_name});
      }
    });
    $('#dept_id_inp').select2({
      data: arr.results
    });
    $("#dept_id_inp").val(curval).trigger('change')
  }
});

</script>