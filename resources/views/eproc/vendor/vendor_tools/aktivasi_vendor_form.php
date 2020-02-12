<div class="wrapper wrapper-content animated fadeInRight">
	<form method="post" action="<?php echo site_url($controller_name."/submit_edit_aktivasi_vendor");?>" class="form-horizontal">

		<input type="hidden" name="id" value="<?php echo $id ?>">

		<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Aktifkan Vendor</h5>
						<div class="ibox-tools">
							<a class="collapse-link">
								<i class="fa fa-chevron-up"></i>
							</a>
						</div>
					</div>

					<div class="ibox-content">

						<?php $curval = $data["vendor_name"]; ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Vendor</label>
							<div class="col-sm-9">
								<p class="form-control-static" id="vendor_name_inp"><a href="<?php echo site_url('vendor/daftar_vendor/lihat_detail_vendor/'.$data['vendor_id']) ?>" target="_blank"><?php echo $curval ?></a></p>
							</div>
						</div>

						<?php $curval = $data["address_street"]; ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Alamat</label>
							<div class="col-sm-9">
								<p class="form-control-static" id="address_street_inp"><?php echo $curval ?></p>
							</div>
						</div>

						<?php $curval = $data["reg_isactivate"]; ?>
						<div class="form-group">
							<label class="col-md-3 control-label">Status</label>
							<div class="col-md-2">
								<select class="form-control" name="reg_isactivate_inp">
									<option value="" readonly>--Pilih--</option>
									<?php $pilihan=array(
										'0' => 'Non Aktif',
										'1' => 'Aktif',
										);
									foreach($pilihan as $key => $val){
										$selected = ($key == $curval) ? "selected" : ""; 
										?>
										<option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $val ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<?php $curval = ""; ?>
						<div class="form-group">
							<label class="col-md-3 control-label">Kantor Daftar</label>
							<div class="col-md-6">
								<select class="form-control" name="district_inp">
									<option value="" readonly>--Pilih--</option>
									<?php 
									foreach($district as $key => $val){
										$selected = ($val['district_id'] == $curval) ? "selected" : ""; 
										?>
										<option <?php echo $selected ?> value="<?php echo $val['district_id'] ?>"><?php echo $val['district_name'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>



						</div>
					</div>
					<!-- SECTION: START LAMPIRAN -->
					<div class="row">
						<div class="col-lg-12">
							<center>
							<a class="btn btn-primary tambah_dok">Tambah Lampiran</a>
							<br>
							<br>
							</center>
						</div>

						</div>
<div id="lampiran_container">

<?php for ($k = 0; $k <= 4; $k++) { 
$show = ($k == 0) ? "" : "display:none;";
?>

<div class="row lampiran" style="<?php echo $show ?>" data-no="<?php echo $k ?>">
  <div class="col-lg-12">
	<div class="ibox float-e-margins">
	  <div class="ibox-title">
		<h5>LAMPIRAN DOKUMEN #<?php echo $k ?></h5>
		<div class="ibox-tools">

		  <?php if($k > 0){ ?>
		  <a class="tutup" data-no="<?php echo $k ?>">
			<i class="fa fa-times"></i>
		  </a>
		  <?php } ?>

		  <a class="collapse-link">
			<i class="fa fa-chevron-up"></i>
		  </a>

		</div>
	  </div>
	  <div class="ibox-content">

		<?php $curval = set_value("doc_category_inp[$k]"); ?>
		<div class="form-group">
		  <?php $curval = set_value("doc_attachment_inp[$k]"); ?>
		  <label class="col-sm-1 control-label"><?php echo lang('attachment') ?></label>
		  <div class="col-sm-6">
			<div class="input-group">
			  <span class="input-group-btn">
				<button type="button" data-id="doc_attachment_inp_<?php echo $k ?>"
				  data-folder="<?php echo $dir ?>" data-preview="preview_file_<?php echo $k ?>"
				  class="btn btn-primary upload">
				  <i class="fa fa-cloud-upload"></i>
				</button>
				<button type="button" data-id="doc_attachment_inp_<?php echo $k ?>"
				  data-folder="<?php echo $dir ?>" data-preview="preview_file_<?php echo $k ?>"
				  class="btn btn-danger removefile">
				  <i class="fa fa-remove"></i>
				</button>
			  </span>
			  <input readonly type="text" class="form-control" id="doc_attachment_inp_<?php echo $k ?>"
				name="doc_attachment_inp[<?php echo $k ?>]" value="<?php echo $curval ?>">
			  <span class="input-group-btn">
				<button type="button" data-url="<?php echo INTRANET_UPLOAD_FOLDER."/$dir/$curval" ?>"
				  class="btn btn-primary preview_upload" id="preview_file_<?php echo $k ?>">
				  <i class="fa fa-share"></i>
				</button>
			  </span>
			</div>
		  </div>
		</div>

		<?php $curval = set_value("doc_desc_inp[$k]"); ?>
		<div class="form-group">
		  <label class="col-sm-1 control-label"><?php echo lang('description') ?></label>
		  <div class="col-sm-11">
			<textarea class="form-control" maxlength="1000"
			  name="doc_desc_inp[<?php echo $k ?>]"><?php echo $curval ?></textarea>
		  </div>
		</div>

	  </div>
	</div>
  </div>
</div>

<?php } ?>

</div>
<!-- SECTION: END OF LAMPIRAN -->

				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
				<?php 
$i = 0;
include(VIEWPATH."/comment_vendor_v.php") ?>

					<div style="margin-bottom: 60px;">
						<?php echo buttonsubmit('vendor/vendor_tools/aktivasi_vendor',lang('back'),lang('save')) ?>
					</div>
				</div>
			</div>

		</form>
	</div>

	<script type="text/javascript">
  $(document).ready(function(){

    $(document.body).on("change","#mata_anggaran_inp",function(){

    });

    $(".tambah_dok").click(function(){

      var total = parseInt($("div.lampiran:visible").length);
      var find = parseInt($("div.lampiran:hidden").attr("data-no"));

      if(total == 4){
        $(".tambah_dok").hide();
      }
      $("div.lampiran[data-no='"+find+"']").show();
      return false;

    });

    $(".tutup").click(function(){

      $(".tambah_dok").show();
      var no = parseInt($(this).attr("data-no"));
      $("div.lampiran[data-no='"+no+"']").hide();

      return false;

    });

  });
</script>