<?php if(strtotime($prep["ptp_prebid_closing_date"]) >= date("Y-m-d H:i:s")){ ?>
<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>LAMPIRAN DOKUMEN BERITA ACARA AANWIJZING</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">
          <?php if(!empty($prep['ptp_aanwijzing_online'])){ ?>
          <div class="row">

            <div class="form-group">
             <label class="col-sm-2 control-label">BA Aanwijzing</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <a href="<?php echo site_url('Procurement/printBaAanwijzing/'.$permintaan['ptm_number']) ?>" target="_blank"><btn class="btn btn-primary">Download</btn></a>
                </div>
              </div>
            </div>

          </div>
        <?php } ?>
        <div class="row">

             <label class="col-sm-2 control-label">Upload BA Aanwijzing</label>


          <div class="col-sm-10">
             
            <div class="input-group"> 
              <span class="input-group-btn">
                <button type="button" data-id="aanwijzing_attachment_inp" data-folder="<?php echo $dir ?>" data-preview="aanwijzing_file" class="btn btn-primary upload">
                  <i class="fa fa-cloud-upload"></i>
                </button> 
                <button type="button" data-id="aanwijzing_attachment_inp" data-folder="<?php echo $dir ?>" data-preview="aanwijzing_file" class="btn btn-danger removefile">
                  <i class="fa fa-remove"></i>
                </button> 
              </span> 
              
              <input readonly type="text" class="form-control" id="aanwijzing_attachment_inp" name="aanwijzing_attachment_inp" value="">
              
              <span class="input-group-btn">  
                <button type="button" data-url="#" class="btn btn-primary preview_upload" id="aanwijzing_file">
                  <i class="fa fa-share"></i>
                </button> 
              </span> 
            </div>

          </div>

        </div>

       </div>

       </div>
     </div>
   </div>
<?php } ?>