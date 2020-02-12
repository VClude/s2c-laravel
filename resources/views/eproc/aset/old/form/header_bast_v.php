<div class="row" ng-controller="form_header_bast">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>HEADER</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

                <div class="form-group">
          <label class="col-sm-2 control-label">No. Kontrak</label>
          <div class="col-sm-8">
            <p class="form-control-static">{{data.no_kontrak}}</p>
          </div>
          <div class="col-sm-2">
            <button type="button" data-id="no_kontrak" data-url="<?php echo site_url('contract/monitor_kontrak/picker') ?>" class="btn btn-primary picker">
              <i class="fa fa-search"></i>
            </button> 
            <input type="hidden" name="no_kontrak" ng-model="data.no_kontrak" value="1" id="no_kontrak">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">No. Progress</label>
          <div class="col-sm-10">
            <p class="form-control-static">{{data.no_bast}}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Vendor</label>
          <div class="col-sm-10">
            <p class="form-control-static">{{data.nama_vendor}}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Nomor</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" ng-model="data.no_bast" id="no_bast" name="no_bast"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Tanggal Barang Masuk</label>
          <div class="col-sm-3">
            <input type="date" class="form-control" ng-model="data.tgl_bast" id="tgl_bast" name="tgl_bast"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Keterangan</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="ket_bast" ng-model="data.ket_bast" name="ket_bast"></textarea>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  $(document).ready(function(){

    function check_contract(){
      var id = $("#no_kontrak").val();
      var url = "<?php echo site_url('procurement/data_perencanaan_pengadaan') ?>";
      $.ajax({
        url : url+"?id="+id,
        dataType:"json",
        success:function(data){
          var mydata = data.rows[0];
          $("#nama_pekerjaan").val(mydata.ppm_subject_of_work);
          $("#deskripsi_pekerjaan").val(mydata.ppm_scope_of_work);
          $("#mata_anggaran").text(mydata.ppm_mata_anggaran+" - "+mydata.ppm_nama_mata_anggaran);
          $("#sub_mata_anggaran").text(mydata.ppm_sub_mata_anggaran+" - "+mydata.ppm_nama_sub_mata_anggaran);
          $("#pagu_anggaran,#total_pagu").text(mydata.ppm_pagu_anggaran);
          $("#sisa_anggaran,#sisa_pagu").text(mydata.ppm_sisa_anggaran);
          $("#total_pagu_inp").val(moneytoint(mydata.ppm_pagu_anggaran));
          $("#total_sisa_inp").val(moneytoint(mydata.ppm_sisa_anggaran));
        }
      });
    }

    $(document.body).on("change","#no_kontrak",function(){

      check_contract();

    });

  });

</script>
