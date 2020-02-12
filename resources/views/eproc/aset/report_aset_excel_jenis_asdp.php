 <?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=report Aset Jenis ASDP.xls");
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

