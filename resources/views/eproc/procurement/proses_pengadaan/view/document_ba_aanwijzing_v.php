<?php if(isset($document_ba_aanwijzing) && !empty($document_ba_aanwijzing)){ ?>
<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>LAMPIRAN BA AANWIJZING</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

       <table class="table table-bordered default">
        <thead>
          <tr>
            <th>No</th>
            <th>File Berita Acara</th>
          </tr>
        </thead>

        <tbody>
         <?php 
         $sisa = 5;
          foreach ($document_ba_aanwijzing as $k => $v) {
            if(!empty($v['file_name'])){
              ?>
              <tr>
                <td><?php echo $k+1 ?></td>
                <td><a href="<?php echo site_url('log/download_attachment/procurement/permintaan/'.$v['file_name']) ?>" target="_blank">
                <?php echo $v['file_name'] ?>
                </a></td>
              </tr>

              <?php } } ?>
            </tbody>
          </table>

        </div>

      </div>
    </div>
  </div>

<?php } ?>