
    <div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>HEADLINE</h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
            </div>
          </div>
          <div class="ibox-content">

            <?php $curval = $perencanaan['ppm_planner']; ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">User *</label>
              <div class="col-sm-10">
               <input type="text" disabled class="form-control" name="user_inp" value="<?php echo $curval ?>">
             </div>
           </div>

           <?php $curval = $perencanaan["ppm_dept_name"]; ?>
           <div class="form-group">
            <label class="col-sm-2 control-label">Divisi/Departemen *</label>
            <div class="col-sm-10">
              <input type="text" disabled class="form-control" name="birounit_inp" value="<?php echo $curval ?>" maxlength="10">
            </div>
          </div>

          <?php $curval = $perencanaan["ppm_subject_of_work"]; ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Rencana Pekerjaan *</label>
            <div class="col-sm-10">
             <input type="text" disabled class="form-control" name="nama_rencana_pekerjaan_inp" value="<?php echo $curval ?>">
           </div>
         </div>

         <?php $curval = $perencanaan["ppm_scope_of_work"]; ?>
         <div class="form-group">
          <label class="col-sm-2 control-label">Deskripsi Rencana Pekerjaan *</label>
          <div class="col-sm-10">
           <textarea class="form-control" disabled name="deskripsi_rencana_pekerjaan_inp"><?php echo $curval ?></textarea>
         </div>
       </div>

      <?php $curval = (isset($perencanaan['ppm_mata_anggaran']) && isset($perencanaan['ppm_nama_mata_anggaran'])) ? $perencanaan["ppm_mata_anggaran"]." - ".$perencanaan["ppm_nama_mata_anggaran"] : ""; ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Mata Anggaran</label>
          <div class="col-sm-10">
            <p class="form-control-static" id="mata_anggaran"><?php echo $curval ?></p>
          </div>
        </div>

        <?php $curval = (isset($perencanaan['ppm_sub_mata_anggaran']) && isset($perencanaan['ppm_nama_sub_mata_anggaran'])) ? $perencanaan["ppm_sub_mata_anggaran"]." - ".$perencanaan["ppm_nama_sub_mata_anggaran"] : ""; ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Sub Mata Anggaran</label>
          <div class="col-sm-10">
            <p class="form-control-static" id="sub_mata_anggaran"><?php echo $curval ?></p>
          </div>
        </div>

    <?php $curval = $perencanaan["ppm_currency"]; ?>
    <div class="form-group">
      <label class="col-sm-2 control-label">Mata Uang *</label>
      <div class="col-sm-2">
        <p class="form-control-static" id="currency"><?php echo $curval ?></p>
      </div>
    </div>

    <?php $curval = inttomoney($perencanaan["ppm_pagu_anggaran"]); ?>
    <div class="form-group">
      <label class="col-sm-2 control-label">Nilai Anggaran *</label>
      <div class="col-sm-4">
       <input disabled type="text" class="form-control money" name="pagu_anggaran_inp" value="<?php echo $curval ?>">
     </div>
   </div>

     <?php $month = getmonthname(substr($perencanaan["ppm_renc_pelaksanaan"], 4, 2)); ?>
 <?php $year = substr($perencanaan["ppm_renc_pelaksanaan"], 0, 4); ?>
   <div class="form-group">
    <label class="col-sm-2 control-label">Rencana Pelaksanaan Pengadaan </label>
    <div class="col-sm-6">

    <p class="form-control-static"><?php echo $month ?> <?php echo $year ?></p>
     
    </div>
  </div>

  <?php $month = getmonthname(substr($perencanaan["ppm_renc_kebutuhan"], 4, 2)); ?>
 <?php $year = substr($perencanaan["ppm_renc_kebutuhan"], 0, 4); ?>
   <div class="form-group">
    <label class="col-sm-2 control-label">Rencana Kebutuhan </label>
    <div class="col-sm-6">

    <p class="form-control-static"><?php echo $month ?> <?php echo $year ?></p>
     
    </div>
  </div>


  <?php /*$curval = $perencanaan["ppm_swakelola"]; ?>
  <div class="form-group">
    <label class="col-sm-2 control-label">Swakelola *</label>
    <div class="col-sm-10">
      <div class="radio">
       <label>
         <?php $selected = (1 == $curval) ? "checked" : "";  ?>
         <input disabled type="radio" <?php echo $selected ?> name="swakelola_inp" value="1"> Ya
       </label>
       <label>
         <?php $selected = (0 == $curval) ? "checked" : "";  ?>
         <input disabled type="radio" <?php echo $selected ?> name="swakelola_inp" value="0"> Tidak
       </label>
     </div>
   </div>
 </div>*/ ?>

</div>
</div>
</div>
</div>