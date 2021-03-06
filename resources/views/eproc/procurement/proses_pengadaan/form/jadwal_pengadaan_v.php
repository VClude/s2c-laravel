<?php $jadwal_tahap_2 = ($prep['ptp_submission_method'] == 2 && $activity_id >= 1112); ?>
<?php $prequalify = ((in_array($prep['ptp_prequalify'], array(1,2)) || $prep['ptp_prequalify'] == NULL) && $activity_id >= 1040);?>
<div class="row">
  <div class="col-lg-12">
    
  <?php if($prequalify){ ?>

      <div class="ibox float-e-margins" id="jadwal_pq">
        <div class="ibox-title">
          <h5>JADWAL PENGADAAN PRA KUALIFIKASI</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
          </div>
        </div>
        <div class="ibox-content">
          <div class="form-group">

            <?php $curval = $prep['ptp_reg_opening_date_pq']; ?>
            <label class="col-sm-2 control-label">Tanggal Pembukaan Pendaftaran Pra Kualifikasi</label>
            <div class="col-sm-4">
              <div class="input-group date">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input  type="text" name="tgl_pembukaan_pendaftaran_pq_inp" class="form-control datetimepicker" value="<?php echo $curval ?>">
              </div>
            </div>

            <?php $curval = $prep['ptp_reg_closing_date_pq']; ?>
            <label class="col-sm-2 control-label">Tanggal Penutupan Pendaftaran Pra Kualifikasi</label>
            <div class="col-sm-4">
              <div class="input-group date">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input  type="text" name="tgl_penutupan_pendaftaran_pq_inp" class="form-control datetimepicker" value="<?php echo $curval ?>">
              </div>
            </div>
          
          </div>
        </div>

      </div>

      <?php } ?>

    <div class="ibox float-e-margins" id="jadwal_1">
      <div class="ibox-title">
        <h5><?php echo isset($jdw1) ? $jdw1 : "JADWAL PENGADAAN"; ?> </h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">

          <label class="col-sm-2 control-label">Tanggal Pembukaan Pendaftaran</label>
          <div class="col-sm-4">
            <?php $curval = $prep['ptp_reg_opening_date']; ?>
            <div class="input-group date">
              <?php if(!$jadwal_tahap_2){ ?>
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <?php } ?>
              <input <?php echo ($jadwal_tahap_2) ? "disabled" : "" ?> type="text" name="tgl_pembukaan_pendaftaran_inp" class="form-control tgl_pembukaan_pendaftaran_inp" value="<?php echo $curval ?>">
            </div>
          </div>

          <?php $curval = $prep['ptp_quot_opening_date']; ?>
          <label class="col-sm-2 control-label">Tanggal Mulai Kirim Penawaran</label>
          <div class="col-sm-4">
            <div class="input-group date">
              <?php if(!$jadwal_tahap_2){ ?>
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <?php } ?>
              <input <?php echo ($jadwal_tahap_2) ? "disabled" : "" ?> type="text" name="tgl_mulai_penawaran_inp" class="form-control  tgl_mulai_penawaran_inp"  value="<?php echo $curval ?>" >
            </div>
          </div>

        </div>

        <div class="form-group">

          <?php $curval = $prep['ptp_reg_closing_date']; ?>
          <label class="col-sm-2 control-label">Tanggal Penutupan Pendaftaran</label>
          <div class="col-sm-4">

            <div class="input-group date">
              <?php if(!$jadwal_tahap_2){ ?>
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <?php } ?>
              <input <?php echo ($jadwal_tahap_2) ? "disabled" : "" ?> type="text" name="tgl_penutupan_pendaftaran_inp" class="form-control  tgl_penutupan_pendaftaran_inp" value="<?php echo $curval ?>"  >
            </div>

          </div>

          <?php $curval = $prep['ptp_quot_closing_date']; ?>
          <label class="col-sm-2 control-label">Tanggal Akhir Kirim Penawaran</label>
          <div class="col-sm-4">

            <div class="input-group date">
              <?php if(!$jadwal_tahap_2){ ?>
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <?php } ?>
              <input <?php echo ($jadwal_tahap_2) ? "disabled" : "" ?> type="text" name="tgl_akhir_penawaran_inp" class="form-control tgl_akhir_penawaran_inp" value="<?php echo $curval ?>" >
            </div>

          </div>

        </div>

        <div class="form-group">

          <?php $curval = $prep['ptp_prebid_date']; ?>
          <label class="col-sm-2 control-label">Tanggal Aanwijzing</label>
          <div class="col-sm-4">
            <div class="input-group date">
              <?php if(!$jadwal_tahap_2){ ?>
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <?php } ?>
              <input <?php echo ($jadwal_tahap_2) ? "disabled" : "" ?> type="text" name="tgl_aanwijzing_inp" class="form-control tgl_aanwijzing_inp" value="<?php echo $curval ?>"  >
            </div>
          </div>


          <?php $curval = $prep['ptp_doc_open_date']; ?>
          <label class="col-sm-2 control-label">Tanggal Pembukaan Dokumen Penawaran</label>
          <div class="col-sm-4">
            <div class="input-group date">
              <?php if(!$jadwal_tahap_2){ ?>
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <?php } ?>
              <input <?php echo ($jadwal_tahap_2) ? "disabled" : "" ?> type="text" name="tgl_pembukaan_dok_penawaran_inp" class="form-control tgl_pembukaan_dok_penawaran_inp" value="<?php echo $curval ?>" >
            </div>
          </div>

        </div>

        <div class="form-group" id="aanwijzing_close_cont">

          <?php $curval = $prep['ptp_prebid_closing_date']; ?>
            <label class="col-sm-2 control-label">Tanggal Selesai Aanwijzing</label>
            <div class="col-sm-4">
              <div class="input-group date">
                <?php if(!$jadwal_tahap_2){ ?>
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <?php } ?>
                <input <?php echo ($jadwal_tahap_2) ? "disabled" : "" ?> type="text" name="tgl_selesai_aanwijzing_inp" class="form-control tgl_selesai_aanwijzing_inp" value="<?php echo $curval ?>"  >
              </div>
            </div>

        </div>

        <div class="form-group">
          <?php $curval = $prep['ptp_prebid_location']; ?>
          <label class="col-sm-2 control-label">Lokasi Aanwijzing</label>
          <div class="col-sm-4">
            <textarea <?php echo ($jadwal_tahap_2) ? "disabled" : "" ?> class="form-control" id="lokasi_aanwijzing_inp" name="lokasi_aanwijzing_inp"><?php echo $curval ?></textarea>
          </div>

          <?php $curval = (!empty($prep['ptp_aanwijzing_online'])) ? "checked" : "checked"; ?>
          <label class="col-sm-2 control-label">Aanwijzing Online</label>
          <div class="col-sm-4 checkbox">
            <input type="checkbox"<?php echo ($jadwal_tahap_2) ? 'disabled' : ''; ?> name="aanwijzing_online_inp" <?php echo $curval ?> value="1">
          </div>
          <?php if($jadwal_tahap_2){ ?>
            <input type="hidden" name="aanwijzing_online_inp" <?php echo $curval ?> value="1">
          <?php } ?>

        </div>

      </div>
    </div>

    <?php if($jadwal_tahap_2){ ?>

    <div class="ibox float-e-margins">
      <div class="ibox-title">
      <h5><?php echo isset($jdw2)? $jdw2 : "JADWAL PENGADAAN TAHAP 2"; ?> </h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">
        <div class="form-group">
        
        <?php $curval = $prep['ptp_bid_opening2']; ?>
          <label class="col-sm-2 control-label">Tgl Mulai Kirim Penawaran Tahap 2 *</label>
          <div class="col-sm-4">
            <div class="input-group date">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input  type="text" name="tgl_pembukaan_penawaran_2_inp" class="form-control datetimepicker tgl_mulai_penawaran_inp_2" value="<?php echo $curval ?>" required>
            </div>
          </div>
          

          <?php $curval = $prep['ptp_tgl_aanwijzing2']; ?>
          <!-- <label class="col-sm-2 control-label">Tgl Aanwijzing Tahap 2</label>
          <div class="col-sm-4">
            <div class="input-group date">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input  type="text" name="tgl_aanwijzing_2_inp" class="form-control datetimepicker" value="<?php echo ''//$curval ?>">
            </div>
          </div> -->
          <input type="hidden" name="tgl_aanwijzing_2_inp" value="">

          
        </div>

        <div class="form-group">

          <?php $curval = $prep['ptp_bid_closing2']; ?>
          <label class="col-sm-2 control-label">Tgl Akhir Kirim Penawaran Tahap 2 *</label>
          <div class="col-sm-4">

            <div class="input-group date">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input  type="text" name="tgl_penutupan_penawaran_2_inp" class="form-control datetimepicker tgl_akhir_penawaran_inp_2" value="<?php echo $curval ?>" required>
            </div>

          </div>

          <?php $curval = $prep['ptp_lokasi_aanwijzing2']; ?>
          <!-- <label class="col-sm-2 control-label">Lokasi Aanwijzing Tahap 2</label>
          <div class="col-sm-4">
            <textarea required class="form-control" id="lokasi_aanwijzing_2_inp" name="lokasi_aanwijzing_2_inp"><?php echo ''//$curval ?></textarea>
          </div>         -->
          <input type="hidden" name="lokasi_aanwijzing_2_inp" value="">
          
        </div>


        <div class="form-group">
          
          <?php $curval = $prep['ptp_doc_open_date2']; ?>
          <label class="col-sm-2 control-label">Tgl Pembukaan Dokumen Penawaran Tahap 2 *</label>
          <div class="col-sm-4">
          
          <div class="input-group date">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input  type="text" name="tgl_pembukaan_dok_penawaran_2_inp" class="form-control datetimepicker tgl_pembukaan_dok_penawaran_inp_2" value="<?php echo $curval ?>" required>
            </div>

          </div>
        

          <?php $curval = (!empty($prep['ptp_aanwijzing_online2'])) ? "checked" : ""; ?>
          <!-- <label class="col-sm-2 control-label">Aanwijzing Online</label>
          <div class="col-sm-4 checkbox">
            <input type="checkbox" name="aanwijzing_online_2_inp" <?php echo ''//$curval ?> value="1">
          </div> -->
          <input type="hidden" name="aanwijzing_online_2_inp" value="0">
        </div>

      </div>

    </div>

    <?php } ?>
    

  </div>
</div>

<script type="text/javascript">

  $(document).ready(function(){
  if($('input[name=aanwijzing_online_inp]:checked').length > 0){

  }else{

    $('#aanwijzing_close_cont').css('display','none');
    
  }

  $('input[name=aanwijzing_online_inp]').change(function(){
    var checked = $(this).attr('checked');
    if(checked !== undefined){
      $('#aanwijzing_close_cont').css('display','');
    }else{
      $('#aanwijzing_close_cont').css('display','none');
    }
  });
  // var date1 = '2015-08-20 09:38:20';
  // var date2 = '2015-08-20 08:00:00';
  // var date1Updated = new Date(date1.replace(/-/g,'/'));  
  // var date2Updated = new Date(date2.replace(/-/g,'/'));
  // console.log(date1Updated > date2Updated);

  // $('#tgl_penutupan_pendaftaran_inp').change(function(){
  //   alert('hello')
  // })

  // $('.datetimepicker').click(function(){

  //     var tgl_pembukaan_pendaftaran_inp = $('[name=tgl_pembukaan_pendaftaran_inp]');
  //     var tgl_penutupan_pendaftaran_inp = $('[name=tgl_penutupan_pendaftaran_inp]');
  //     var tgl_aanwijzing_inp = $('[name=tgl_aanwijzing_inp]');
  //     var tgl_mulai_penawaran_inp = $('[name=tgl_mulai_penawaran_inp]');
  //     var tgl_akhir_penawaran_inp = $('[name=tgl_akhir_penawaran_inp]');
  //     var tgl_pembukaan_dok_penawaran_inp = $('[name=tgl_pembukaan_dok_penawaran_inp]');

  //   if (tgl_pembukaan_pendaftaran_inp.val() != "") {
  //     tgl_penutupan_pendaftaran_inp.attr('readonly', false);
  //   }

  //   // alert($('[name=tgl_pembukaan_pendaftaran_inp]').val());
  //    if ( convert_date(tgl_pembukaan_pendaftaran_inp.val()) > convert_date(tgl_penutupan_pendaftaran_inp.val()) ) {
  //     alert('Tanggal penutupan pendaftaran tidak boleh lebih dari tanggal pembukaan pendaftaran');
  //     tgl_aanwijzing_inp.attr('readonly', true);
  //     tgl_aanwijzing_inp.val('');
  //    } else if(convert_date(tgl_pembukaan_pendaftaran_inp.val()) < convert_date(tgl_penutupan_pendaftaran_inp.val())) {
  //     tgl_aanwijzing_inp.attr('readonly', false);
  //    }

  //    if ( convert_date(tgl_penutupan_pendaftaran_inp.val()) > convert_date(tgl_aanwijzing_inp.val()) ) {
  //     alert('Tanggal aanwijzing tidak boleh lebih dari tanggal penutupan pendaftaran')
  //     tgl_mulai_penawaran_inp.attr('readonly', true);
  //     tgl_mulai_penawaran_inp.val('');
  //    } else if( convert_date(tgl_penutupan_pendaftaran_inp.val()) < convert_date(tgl_aanwijzing_inp.val()) ) {
  //     tgl_mulai_penawaran_inp.attr('readonly', false);
  //    }

  //    if ( convert_date(tgl_aanwijzing_inp.val()) > convert_date(tgl_mulai_penawaran_inp.val()) ) {
  //     alert('Tanggal mulai kirim penawaran tidak boleh lebih dari tanggal aanwijzing')
  //     tgl_akhir_penawaran_inp.attr('readonly', true);
  //     tgl_akhir_penawaran_inp.val('');
  //    } else if( convert_date(tgl_aanwijzing_inp.val()) < convert_date(tgl_mulai_penawaran_inp.val()) ) {
  //     tgl_akhir_penawaran_inp.attr('readonly', false);
  //    }

  //    if ( convert_date(tgl_mulai_penawaran_inp.val()) > convert_date(tgl_akhir_penawaran_inp.val()) ) {
  //     alert('Tanggal akhir kirim penawaran tidak boleh lebih dari tanggal awal kirim penawaran')
  //     tgl_pembukaan_dok_penawaran_inp.attr('readonly', true);
  //     tgl_pembukaan_dok_penawaran_inp.val('');
  //    } else if(convert_date(tgl_mulai_penawaran_inp.val()) < convert_date(tgl_akhir_penawaran_inp.val())) {
  //     tgl_pembukaan_dok_penawaran_inp.attr('readonly', false);
  //    }

  //    if ( convert_date(tgl_akhir_penawaran_inp.val()) > convert_date(tgl_pembukaan_dok_penawaran_inp.val()) ) {
  //     alert('Tanggal pembukaan dokumen tidak boleh lebih dari tanggal akhir kirim penawaran')
  //    } 


  // })

  // function convert_date(date){
  //   return new Date(date.replace(/-/g,'/'));
  // }




  $('.tgl_pembukaan_pendaftaran_inp').datetimepicker({format:"YYYY-MM-DD HH:mm:ss"})
  $('.tgl_penutupan_pendaftaran_inp').datetimepicker({format:"YYYY-MM-DD HH:mm:ss"})
  $('.tgl_aanwijzing_inp').datetimepicker({format:"YYYY-MM-DD HH:mm:ss"})
  $('.tgl_selesai_aanwijzing_inp').datetimepicker({format:"YYYY-MM-DD HH:mm:ss"})
  $('.tgl_mulai_penawaran_inp').datetimepicker({format:"YYYY-MM-DD HH:mm:ss"})
  $('.tgl_akhir_penawaran_inp').datetimepicker({format:"YYYY-MM-DD HH:mm:ss"})
  $('.tgl_pembukaan_dok_penawaran_inp').datetimepicker({format:"YYYY-MM-DD HH:mm:ss"})
  $('.tgl_mulai_penawaran_inp_2').datetimepicker({format:"YYYY-MM-DD HH:mm:ss"})
  $('.tgl_akhir_penawaran_inp_2').datetimepicker({format:"YYYY-MM-DD HH:mm:ss"})
  $('.tgl_pembukaan_dok_penawaran_inp_2').datetimepicker({format:"YYYY-MM-DD HH:mm:ss"})

  $('.tgl_pembukaan_pendaftaran_inp').on("dp.change",function (e) {
            $('.tgl_penutupan_pendaftaran_inp').data("DateTimePicker").minDate(e.date);
  });

  $('.tgl_penutupan_pendaftaran_inp').on("dp.change",function (e) {
            $('.tgl_aanwijzing_inp').data("DateTimePicker").minDate(e.date);
  });

  $('.tgl_aanwijzing_inp').on("dp.change",function (e) {
            $('.tgl_selesai_aanwijzing_inp').data("DateTimePicker").minDate(e.date);
  });

  $('.tgl_selesai_aanwijzing_inp').on("dp.change",function (e) {
            $('.tgl_mulai_penawaran_inp').data("DateTimePicker").minDate(e.date);
  });

  $('.tgl_mulai_penawaran_inp').on("dp.change",function (e) {
            $('.tgl_akhir_penawaran_inp').data("DateTimePicker").minDate(e.date);
  });

  $('.tgl_akhir_penawaran_inp').on("dp.change",function (e) {
            $('.tgl_pembukaan_dok_penawaran_inp').data("DateTimePicker").minDate(e.date);
  });

  $('.tgl_mulai_penawaran_inp_2').on("dp.change",function (e) {
            $('.tgl_akhir_penawaran_inp_2').data("DateTimePicker").minDate(e.date);
  });

  $('.tgl_akhir_penawaran_inp_2').on("dp.change",function (e) {
            $('.tgl_pembukaan_dok_penawaran_inp_2').data("DateTimePicker").minDate(e.date);
  });

  

  // $('.tgl_akhir_penawaran_inp').on("dp.change",function (j) {
  //           $('.tgl_pembukaan_dok_penawaran_inp').data("DateTimePicker").minDate(j.date);
  // });
        
      

 

  // $(this).click(function(){
  //   var tgl_pembukaan_pendaftaran_inp = $('[name=tgl_pembukaan_pendaftaran_inp]').val();

  //   console.log(tgl_pembukaan_pendaftaran_inp);
  //   $('.tgl_penutupan_pendaftaran_inp').datetimepicker({
  //     format:"YYYY-MM-DD HH:mm:ss",
  //     startDate: "2018-07-04 17:13:11"
  //   });
  // })

   function prevDate($name){
    return $("[name="+$name+"]").val()
  }

  // $('.tgl_penutupan_pendaftaran_inp').click(function(){
  //   var tgl_pembukaan_pendaftaran_inp = $('[name=tgl_pembukaan_pendaftaran_inp]').val();

  //   console.log(tgl_pembukaan_pendaftaran_inp);
  //   $('.tgl_penutupan_pendaftaran_inp').datetimepicker({
  //     format:"YYYY-MM-DD HH:mm:ss",
  //     startDate: tgl_pembukaan_pendaftaran_inp
  //   });
  // })
  <?php if($activity_id == 1040){ ?>
    $('#jadwal_pq').hide();
    
    // <?php //if($prequalify){ ?>
    //   $('#jadwal_pq').show();
    //   $('#jadwal_1').hide();
    // <?php //} ?>

    $('#pq_inp').on('click', function(){
      if ($(this).is(':checked')){
      $('#jadwal_pq').show();
      $('#jadwal_1').hide();
      // console.log('ok');
      }else{
      $('#jadwal_pq').hide();
      $('#jadwal_1').show();
      }
    });
    
  <?php } ?>

  })

</script>