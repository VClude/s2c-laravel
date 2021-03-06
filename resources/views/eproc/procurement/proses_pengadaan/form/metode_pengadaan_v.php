<?php 
if($prep['ptp_prequalify'] == 2){ 
  include(VIEWPATH."procurement/proses_pengadaan/view/metode_pengadaan_v.php");
 } else { ?>
<div class="row" id="metode_pengadaan">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>METODE PENGADAAN</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <?php $curval = $prep['ptp_tender_method']; ?>
        <div class="form-group" id="metode_pengadaan_cont">
          <label class="col-sm-2 control-label">Metode Pengadaan *</label>
          <div class="col-sm-6">
           <select class="form-control" id="metode_pengadaan_inp" name="metode_pengadaan_inp" value="<?php echo $curval ?>" required>
            <?php if(strtolower($departement_pengadaan) !== 'pembelian'){//kalo departement pembelian jangan milih metode -START?>
              <option value=""><?php echo lang('choose') ?></option>
            <?php }//kalo departement pembelian jangan milih metode -END?>
            <?php foreach ($metode as $key => $value) { 
              $selected = ($curval == $key) ? "selected" : "";
              ?>
              <option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $value ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <?php if(strtolower($departement_pengadaan) !== 'pembelian'){//kalo departement pembelian jangan muncul kondisi -START?>

        <?php $curval = $prep['ptp_tender_condition']; ?>
        <div class="form-group" id="kondisi_pengadaan_cont">
          <label class="col-sm-2 control-label">Kondisi Pengadaan *</label>
          <div class="col-sm-6">
           <select class="form-control" id="kondisi_pengadaan_inp" name="kondisi_pengadaan_inp" value="<?php echo $curval ?>">
            <option value=""><?php echo lang('choose') ?></option>
            <?php foreach ($kondisi as $key => $value) { 
              $selected = ($curval == $key) ? "selected" : "";
              ?>
              <option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $value ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        
        <?php }else{ ?>

          <input type="hidden" name="kondisi_pengadaan_inp" value="">

        <?php }//kalo departement pembelian jangan muncul kondisi -END ?>

        <?php $curval = $prep['ptp_submission_method']; ?>
        <div class="form-group" id="sistem_sampul_cont">
            <label class="col-sm-2 control-label">Sistem Sampul *</label>
            <div class="col-sm-3">
            <select class="form-control" name="sistem_sampul_inp" id="sistem_sampul_inp" value="<?php echo $curval ?>">
            <?php if(strtolower($departement_pengadaan) !== 'pembelian'){//kalo departement pembelian jangan muncul sampul -START?>
              <option value=""><?php echo lang('choose') ?></option>
            <?php }//kalo departement pembelian jangan muncul sampul -END ?>
              <?php foreach ($sampul as $key => $value) { 
                $selected = ($curval == $key) ? "selected" : "";
                ?>
                <option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $value ?></option>
                <?php } ?>
              </select>
            </div>
          <div id="eacutionCont">
            <label class="col-sm-1 control-label">E-Auction</label>
            <div class="col-sm-1">
              <div class="checkbox">
                <?php $curval = (!empty($prep['ptp_eauction'])) ? "checked" : ""; ?>
                <input type="checkbox" name="eauction_inp" <?php echo $curval ?> value="1">
              </div>
            </div>
          </div>

          <?php if(strtolower($departement_pengadaan) !== 'pembelian'){//kalo departement pembelian jangan muncul pq -START ?>

           <!--  <label class="col-sm-2 control-label pq_cont">Pra Kualifikasi</label>
            <div class="col-sm-1 pq_cont">
              <div class="checkbox">
                <?php //$curval = (!empty($prep['ptp_prequalify'])) ? "checked" : ""; ?>
                <input type="checkbox" name="pq_inp" <?php //echo $curval ?> value="1">
              </div>
            </div> -->
            <input type="hidden" name="pq_inp" value="0">

          <?php }else{ ?>

            <input type="hidden" name="pq_inp" value="0">

          <?php }//kalo departement pembelian jangan muncul pq -END ?>
        </div>

        <?php $curval = $prep['evt_id']; ?>
        <div class="form-group" id="template_evaluasi_cont">
          <label class="col-sm-2 control-label">Template Evaluasi *</label>
          <div class="col-sm-6">
            <div class="input-group"> 
              <span class="input-group-btn">
                <button type="button" data-id="template_evaluasi_inp" data-url="<?php echo site_url(PROCUREMENT_TEMPLATE_EVALUASI_PATH.'/picker/'.$departement_pengadaan) ?>" class="btn btn-primary picker"><i class="fa fa-search"></i></button> 
              </span>
              <input type="hidden" class="form-control" id="template_evaluasi_inp" name="template_evaluasi_inp" value="<?php echo $curval ?>">
              <?php $curval = $prep['evt_description']; ?>
              <p id="template_evaluasi_label" style="margin-left: 20px" class="form-control-static"><?php echo $curval ?></p>
            </div>
          </div>
        </div>



        <div class="form-group" id="klasifikasi_peserta_cont">
          <label class="col-sm-2 control-label">Klasifikasi Peserta *</label>
          <div class="col-sm-4">
            <div class="checkbox">
              <label>
                <?php $curval = substr($prep['ptp_klasifikasi_peserta'], 0,1); ?>
                <input type="checkbox" id="klasifikasi_kecil_inp" <?php echo ($curval == 1) ? "checked" : "" ?> name="klasifikasi_kecil_inp" value="1"> Kecil
              </label>
              <label>
                <?php $curval = substr($prep['ptp_klasifikasi_peserta'], 1,1); ?>
                <input type="checkbox" id="klasifikasi_nonkecil_inp" <?php echo ($curval == 1) ? "checked" : "" ?> name="klasifikasi_nonkecil_inp" value="1"> Non Kecil
              </label>
            </div>
          </div>
        </div>

        <div class="form-group" id="quo_type_peserta_cont">
          <label class="col-sm-2 control-label">Tipe Penawaran *</label>
          <div class="col-sm-4">
            <div class="checkbox">
              <label>
                <input type="checkbox" id="quo_type_a_inp" disabled checked name="quo_type_a_inp" value="1"><abbr title="Spesifikasi dan jumlah barang harus sama dengan permintaan">A</abbr>
              </label>
              <label>
                <?php $curval = substr($prep['ptp_quo_type'], 1,1); ?>
                <input type="checkbox" id="quo_type_b_inp" <?php echo ($curval == 1) ? "checked" : "" ?> name="quo_type_b_inp" value="1"><abbr title="Spesifikasi barang boleh berbeda tapi jumlah barang harus sama dengan permintaan"> B</abbr>
              </label>  
              <label>
                <?php $curval = substr($prep['ptp_quo_type'], 2,1); ?>
                <input type="checkbox" id="quo_type_c_inp" <?php echo ($curval == 1) ? "checked" : "" ?> name="quo_type_c_inp" value="1"><abbr title="Spesifikasi dan jumlah barang boleh berbeda dari permintaan"> C</abbr>
              </label>
            </div>
          </div>
        </div>

        <?php $curval = $prep['ptp_inquiry_notes']; ?>
        <div class="form-group" id="keterangan_metode_cont">
          <label class="col-sm-2 control-label">Keterangan Tambahan</label>
          <div class="col-sm-6">
            <textarea class="form-control" name="keterangan_metode_inp" id="keterangan_metode_inp"><?php echo $curval ?></textarea>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  function check_metode(){

    var metode = parseInt($("#metode_pengadaan_cont select option:selected").val());
    var template_evaluasi = $("#template_evaluasi_cont");
    var klasifikasi_peserta = $("#klasifikasi_peserta_cont");
    var keterangan = $("#keterangan_metode_cont");
    var sampul = $("#sistem_sampul_cont");
    var kondisi_pengadaan = $("#kondisi_pengadaan_cont");
    var vendor = $("#vendor_container");
      //var panitia_pelelangan = $("#panitia_pelelangan_cont");
      if(metode == 0){
        template_evaluasi.show();
        klasifikasi_peserta.show();
        keterangan.show();
        sampul.show();
        kondisi_pengadaan.show();
        vendor.show();
        $("input[name='eauction_inp']").prop('checked',false);
        $('#eacutionCont').hide();
        //panitia_pelelangan.hide();
      } else if(metode == 1){
        template_evaluasi.show();
        klasifikasi_peserta.show();
        keterangan.show();
        sampul.show();
        kondisi_pengadaan.hide();
        vendor.show();
        $('#eacutionCont').show();
        //panitia_pelelangan.hide();
      } else if(metode == 2){
        template_evaluasi.show();
        klasifikasi_peserta.show();
        keterangan.show();
        kondisi_pengadaan.hide();
        sampul.show();
        vendor.hide();
        $('#eacutionCont').show();
        //panitia_pelelangan.show();
      } else {
        template_evaluasi.hide();
        klasifikasi_peserta.hide();
        keterangan.hide();
        sampul.hide();
        vendor.show();
        $('#eacutionCont').hide();
        //panitia_pelelangan.hide();
      }

      var ss = $("#sistem_sampul_inp option:selected").val();
      var mp = $("#metode_pengadaan_inp option:selected").val();
      let dataUrlss = $("[data-id='template_evaluasi_inp']").attr('data-url');

      var index = 0;
      index = dataUrlss.indexOf('?');
      if(index == -1){
          index = dataUrlss.indexOf('#');
      }
      if(index != -1){
          dataUrlss = dataUrlss.substring(0, index);
      }

      if (ss > 0 && mp != 0) {
        $("[data-id='template_evaluasi_inp']").attr('data-url', dataUrlss+'?not=lowestprice');
      }else{
        $("[data-id='template_evaluasi_inp']").attr('data-url', dataUrlss);
      }

      var kondisi_pengadaan = $('#kondisi_pengadaan_inp option:selected').val();
      if(mp == 2){
        $(".pq_cont").show();
      } else {
        $(".pq_cont").hide(); 
        $("input[name='pq_inp']").prop('checked',false);
      }

      if(mp == 1 || mp == 0){
        $("#sistem_sampul_inp option[value='2']").hide();
      }else{
        $("#sistem_sampul_inp option[value='2']").show();
      }

    }

    check_metode();

    $("#metode_pengadaan_inp").change(function(){
      check_metode();
    });

    $("#sistem_sampul_inp").change(function(){
      check_metode();
    });

    $('#kondisi_pengadaan_inp').change(function(event) {
      check_metode();
    });

  </script>

  <script type="text/javascript">

    function filtervendor(){
     var kecil = $("#klasifikasi_kecil_inp").prop("checked");
     var nonkecil = $("#klasifikasi_nonkecil_inp").prop("checked");
     var filtering = ["K","M","B"];
     var myfilter = "";
     var index = 0;
     if(!kecil){
      index = filtering.indexOf("K");
      if (index > -1) {
        myfilter += "";
        filtering.splice(index, 1);
      }
    } else {
      myfilter += "K_";
    }
    if(!nonkecil){
      index = filtering.indexOf("M");
      if (index > -1) {
        myfilter += "";
        filtering.splice(index, 1);
      }
      index = filtering.indexOf("B");
      if (index > -1) {
        myfilter += "";
        filtering.splice(index, 1);
      }
    } else {
      myfilter += "M_";
      myfilter += "B_";
    }

    var url = "<?php echo site_url('Procurement/set_session/klasifikasi') ?>";

    $.ajax({
      url : url+"/"+myfilter,
      success:function(data){
        $("#daftar_vendor").bootstrapTable('refresh');
      }
    });

  }

  $(document).ready(function(){

    window.setTimeout(function(){
      filtervendor();
      check_metode();
    },3000);


    $("#klasifikasi_kecil_inp,#klasifikasi_nonkecil_inp").click(function(){
      filtervendor();
    });

  });

</script>

<script type="text/javascript">

  $(document).ready(function(){

    function check_template_evaluasi(){
      var id = $("#template_evaluasi_inp").val();
      var url = "<?php echo site_url('Procurement/data_template_evaluasi') ?>";
      $.ajax({
        url : url+"?id="+id,
        dataType:"json",
        success:function(data){
          var mydata = data.rows[0];
          $("#template_evaluasi_label").html(mydata.evt_name);
        }
      });
    }

    $(document.body).on("change","#template_evaluasi_inp",function(){

      check_template_evaluasi();

    });

  });

</script>

<?php } ?>