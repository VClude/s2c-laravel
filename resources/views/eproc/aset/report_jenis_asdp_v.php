   <!-- hlmifzi -->
<div class="wrapper wrapper-content animated fadeInRight">
 <div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Klasifikasi Laporan Per Jenis ASDP</h5>
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
        <form class="form-horizontal" action="<?php echo site_url($controller_name."/submit_report_jenis_asdp");?>" method="get">
          <div class="form-group">
            <label class="col-lg-2 control-label" style="margin-top: 10px;">Pilih Kantor</label>

            <div class="col-lg-4" style="margin-top: 10px;">
              <select class="form-control select2" style="width:100%;" name="id_district_inp" id="district">
                <option value="">Pilih</option>
                <?php
                foreach ($district as $dist) {
                  ?>
                  <option 
                  value="<?php echo $dist->district_id ?>"><?php echo $dist->district_name ?></option>
                  <?php
                }
                ?>
              </select>
            </div>
           

          <div class="pull-left" style="margin-top: 10px;">
            <button type="submit" class="btn btn-outline btn-success "><i class="fa fa-send"></i> Kirim</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php if (!empty($district_id))  { ?>

<div class="col-lg-12">
  <div class="ibox float-e-margins">
    <div class="ibox-title">
      <h5>Laporan Aset Per Jenis ASDP &nbsp;<?php echo $report_dist_dept; ?></h5> 
      <div class="ibox-tools">
       <a class="collapse-link">
          <a href="<?php echo site_url($controller_name."/report_aset_excel_jenis_asdp/".$district_id);?> " type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Export Laporan Excel" >
       <i class="fa fa-file-excel-o"></i> Export Report Excel</a>  
         <i class="fa fa-chevron-up"></i>
       </a></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li><a href="#">Config option 1</a>
          </li>
          <li><a href="#">Config option 2</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="ibox-content" style="overflow-x: auto">
     <table id="datatables-ss" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Jenis ASDP</th>
          <th>Jumlah Nilai Buku</th>
        </tr>
      </thead>
      <tbody>
       <?php 
       $no = 0;
       foreach ($t_report_dist_dept as $rpo) { $no++ ?>
       <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $rpo['jenis_asdp'] ?></td>
        <td>Rp <?php echo inttomoney($rpo['sum_nilai_buku'])  ?></td>
             </tr>
      <?php }?>   
    </tbody>

  </table>
</div>
</div>
</div>
<?php

} 
?>
</div>
</div>
</div>

<script>
 $(document).ready(function() {
  $('#datatables-ss').DataTable();
});
</script>