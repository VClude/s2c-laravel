<?php if ( $permintaan["ptm_winner"] == 1): ?>
<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Pelaksana Pekerjaan</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>

      <div class="ibox-content">

        <div class="row">
          <div class="col-xs-4">
          </div>
          <div class="col-xs-4">
            <h2 align="center" style="color:#1B3B75;"><strong>
            <?php if (!empty($winners)){
              ?>

                <?php echo $winners[0]['vendor_name'] ?>
              
              <?php
            } else{?>
              Pemenang Belum Ditentukan
            <?php } ?>
            </strong></h2>
          </div>
          <div class="col-xs-4">
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php elseif ($permintaan["ptm_winner"] == 2) :
  include "item_rfq_multiwin_v.php";  
endif; ?>