   <!-- hlmifzi -->
<div class="wrapper wrapper-content animated fadeInRight">
 <div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Klasifikasi Laporan</h5>
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
        <form class="form-horizontal" action="<?php echo site_url($controller_name."/submit_report");?>" method="get">
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
            <label class="col-lg-2 control-label" style="margin-top: 10px;">Pilih Divisi</label>

            <div class="col-lg-4" style="margin-top: 10px;">
              <select class="form-control select2" style="width:100%;" name="id_dept_inp" id="dept">
               <option value="">Pilih</option>
               <?php
               foreach ($dept as $dep) {
                ?>
                <!--di sini kita tambahkan class berisi id provinsi-->
                <option  
                class="<?php echo $dep->dept_id ?>" value="<?php echo $dep->dept_id ?>"><?php echo $dep->dept_name ?></option>
                <?php
              }
              ?>
            </select>
          </div>

            <label class="col-lg-2 control-label" style="margin-top: 10px;">Pilih Jenis ASDP</label>

            <div class="col-lg-4" style="margin-top: 10px;">
              <select class="form-control select2" style="width:100%;" name="id_jenis_asdp_inp" id="dept">
               <option value="">Pilih</option>


               <?php
               foreach ($jenis_asdp as $ja) {
                ?>
                <!--di sini kita tambahkan class berisi id provinsi-->
                <option  
                class="<?php echo $ja->id ?>" value="<?php echo $ja->id ?>"><?php echo $ja->jenis ?></option>
                <?php
              }
              ?>
            </select>
          </div>

            <label class="col-lg-2 control-label" style="margin-top: 10px;">Pilih Kapal</label>

            <div class="col-lg-4" style="margin-top: 10px;">
              <select class="form-control select2" style="width:100%;" name="id_ship" id="ship">
               <option value="">Pilih</option>    


               <?php
               foreach ($kapal as $kap) {
                ?>
                <!--di sini kita tambahkan class berisi id provinsi-->
                <option  
                class="<?php echo $kap->id_ship ?>" value="<?php echo $kap->id_ship ?>"><?php echo $kap->name_ship ?></option>
                <?php
              }
              ?>
            </select>
          </div>

          <div class="pull-right" style="margin-top: 10px;">
            <button type="submit" class="btn btn-outline btn-success "><i class="fa fa-send"></i> Kirim</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php if (!empty($district_id) || !empty($dept_id) || !empty($jenis_asdp_id) || !empty($kapal_id))  { ?>

<div class="col-lg-12">
  <div class="ibox float-e-margins">
    <div class="ibox-title">
      <h5>Laporan Aset&nbsp;<?php echo $report_dist_dept; ?></h5> 
      <div class="ibox-tools">
        <a class="collapse-link">
           <a href="<?php echo site_url($controller_name."/report_aset_excel/".$district_id."/".$dept_id."/".$jenis_asdp_id."/".$kapal_id);?> " type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Export Laporan Excel" >
        <i class="fa fa-file-excel-o"></i> Export Report Excel</a>  
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
    <div class="ibox-content" style="overflow-x: auto">
     <table id="datatables-ss" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Barcode</th>
          <th>Nama</th>
          <th>Pemegang</th>
          <th>Jenis ASDP</th>
          <th>Harga Perolehan</th>
          <th>Umur Ekonomis</th>

          <th>Akumulasi Penyusutan</th>
          <th>Beban Penyusutan</th>
          <th>Nilai Buku</th>

          <th>Kantor</th>
          <th>Gudang</th>
          <th>Kapal</th>
          <th>Departemen</th>
          <th>Departemen Asal</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
       <?php 
       $no = 0;
       foreach ($t_report_dist_dept as $rpo) { $no++ ?>
       <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $rpo['barcode'] ?></td>
        <td><?php echo $rpo['nama_barang'] ?></td>
        <td><?php echo $rpo['pemegang']  ?></td>
        <td><?php echo $rpo['jenis_asdp_view']  ?></td>
        <td><?php echo inttomoney($rpo['harga_perolehan'] ) ?></td>
        <td><?php echo $rpo['nama_umur_ekonomis']  ?></td>

        <td><?php echo inttomoney($rpo['beban_penyusutan'] ) ?></td>
        <td><?php echo inttomoney($rpo['akumulasi_penyusutan'] ) ?></td>
        <td><?php echo inttomoney($rpo['nilai_buku'] ) ?></td>

        <td><?php echo $rpo['nama_kantor']  ?></td>
        <td><?php echo $rpo['nama_gudang']  ?></td>
        <td><?php echo $rpo['kapal']  ?></td>
        <td><?php echo $rpo['nama_dept']  ?></td>
        <td><?php echo $rpo['dept_asal']  ?></td>
        <td>

          <?php 
          $status =$rpo['status'];
          $lbl_status = "<span class='label label-success'>Aktif</span> ";
          if(empty($status)){
            $lbl_status = "<span class='label label-danger'>Tidak Aktif</span> ";
          }
          if(!empty($status_hapus)){
            $lbl_status = "<span class='label label-danger'>Terhapus</span> ";
          }

          echo $lbl_status;

          ?>

        </td>
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