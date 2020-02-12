
<div class="wrapper wrapper-content animated fadeInRight">
<script>console.log(<?php echo json_encode($config); ?>);</script>
  <form method="post" action="<?php echo site_url($controller_name."/submit_odoo_setting");?>"  class="form-horizontal">
    <div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Konfigurasi Odoo</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div> 
          <div class="ibox-content">
          <?php 
                $value = ($first == 'true') ? 1 : 0; ?>
          <input type="hidden" value='<?php echo $value ?>' required id="firsttime" name="firsttime">
          <?php 
                $value = isset($config[0]['id']) ? $config[0]['id'] : ''; ?>
          <input type="hidden" value='<?php echo $value ?>' id="id_odoo" name="id_odoo">
          <?php 
                $value = isset($config[0]['hostname']) ? $config[0]['hostname'] : ''; ?>
           <div class="form-group">
          </div>


          <div class="form-group">
          <label class="col-sm-3 control-label">Odoo Enable</label>
            <div class="col-sm-1">
            <?php $value = isset($config[0]['enabled']) ? $config[0]['enabled'] : 'f'; ?>
            <input type="checkbox" value='enabled' <?php echo ($value == 't') ? 'checked' : '' ?> name='odoo_enable' data-toggle="toggle">
            </div>
          
            <label class="col-sm-1 control-label">Metode</label>
            <div class="col-sm-3">
            <?php $value = isset($config[0]['method']) ? $config[0]['method'] : ''; ?>
            <select class="form-control" name="odoo_method" id="odoo_method">
                <option value='1' <?php echo ($value == 1) ? 'selected' : '' ?>>XMLRPC API</option>
                <option value='2' <?php echo ($value == 2) ? 'selected' : '' ?>>REST API</option>
              </select>
            </div>
          </div>
          <?php
                $value = isset($config[0]['hostname']) ? $config[0]['hostname'] : ''; ?>
           <div class="form-group">
            <label class="col-sm-3 control-label">Hostname</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" value='<?php echo $value ?>' required id="hostname_odoo" maxlength="100" name="hostname_odoo">
            </div>
          </div>
          
           <?php
                $value = isset($config[0]['port']) ? $config[0]['port'] : ''; ?>
           <div class="form-group">
            <label class="col-sm-3 control-label">Port</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" value='<?php echo $value ?>' required id="port_odoo" maxlength="100" name="port_odoo">
            </div>
          </div>

          <?php 
                $value = isset($config[0]['database']) ? $config[0]['database'] : ''; ?>
          
          <div class="form-group">
            <label class="col-sm-3 control-label">Database</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" value='<?php echo $value ?>' required id="database_odoo" maxlength="100" name="database_odoo">
            </div>
          </div>

          <?php $curval = 
                $value = isset($config[0]['username']) ? $config[0]['username'] : ''; ?>
          <div class="form-group">
            <label class="col-sm-3 control-label">Username</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" value='<?php echo $value ?>' required id="username_odoo" maxlength="100" name="username_odoo">
            </div>
          </div>

          <?php $curval = 
                $value = isset($config[0]['password']) ? $config[0]['password'] : ''; ?>
          <div class="form-group">
            <label class="col-sm-3 control-label">Password</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" value='<?php echo $value ?>' required id="password_odoo" maxlength="100" name="password_odoo">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-12">
      <div style="margin-bottom: 60px;">
        <?php echo buttonsubmit('home',lang('back'),lang('save')) ?>
      </div>
    </div>
  </div>

</form>
</div>

<script>

$( document ).ready(function() {
    let firsttime = <?php 
      echo json_encode($first) ?>;
    if(firsttime == 'false'){
      
    }
});
</script>