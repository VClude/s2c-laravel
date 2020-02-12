   <!-- hlmifzi -->
<div class="wrapper wrapper-content animated fadeInRight">
 <div class="row">
  <div class="col-md-12">
    <?php echo $this->session->flashdata('success');?>
  </div>
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Input Template RFQ</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#">Config option 1</a>
            </li>
            <li><a href="#">Config option 2</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="ibox-content" style="">
        <form class="form-horizontal" action="<?php echo site_url($controller_name."/submit_template");?>"  method="post" enctype="multipart/form-data" name="form1" id="form1">
          <div class="form-group">
            <label class="col-lg-1 control-label" style="margin-top: 10px;">Masukkan Header</label>

            <div class="col-lg-4" style="margin-top: 10px;">
              <input class="form-control" type="file" name="main_rfq_inp" id="main_rfq_inp" required="">
            </div>
      
        </div>
    
          <div class="form-group">
            <label class="col-lg-1 control-label" style="margin-top: 10px;">Masukkan item</label>

            <div class="col-lg-4" style="margin-top: 10px;">
              <input class="form-control" type="file" name="item_rfq_inp" id="item_rfq_inp" required="">
            </div>
           

          <div class="pull-left" style="margin-top: 10px;">
            <button type="submit" class="btn btn-outline btn-success" name="tombol" value="item"><i class="fa fa-send"></i> Kirim</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


</div>
</div>
</div>
