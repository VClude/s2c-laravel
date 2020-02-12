 <?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=report Aset.xls");
header("Pragma: no-cache");
header("Expires: 0");

?>
<?php 
      echo "<p align='center'>Laporan Aset ".$report_dist_dept."</p>";
      echo "<bt>";
  ?>
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

