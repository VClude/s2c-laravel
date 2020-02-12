<div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>A.2 Data Barang</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div>
          <div class="ibox-content">
              <!-- //hlmifzi -->
           <table class="table table-bordered">
          <thead>
            <tr>
            <th>No</th>
                <th>Jenis Komoditas</th>
                <th>Nama Barang</th>
                <th>Merk</th>
                <th>Sumber</th>
                <th>Tipe</th>
            </tr>
          </thead>

          <tbody>

          <?php 
              $i = 1;
              foreach($barang as $row) { if($row["catalog_type"] == "M") { ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row["product_description"]; ?></td>
                <td><?php echo $row["product_name"] ?></td>
                <td><?php echo $row["brand"] ?></td>
                <td><?php echo $row["source"] ?></td>
                <td><?php echo $row["catalog_type"] ?></td>
              </tr>
              <?php
              $i++;
            }
          }
          ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

