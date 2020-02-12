<div class="wrapper wrapper-content animated fadeInRight">
	<form method="post" action="<?php echo site_url($controller_name . "/submit_aktivasi_suspend_vendor"); ?>" class="form-horizontal">

		<input type="hidden" name="id" value="<?php echo $id ?>">

		<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Aktivasi Suspend Vendor</h5>
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
								<p class="form-control-static" id="vendor_name_inp"><?php echo $curval ?></p>
							</div>
						</div>

						<?php $curval = $data["address_street"]; ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Alamat</label>
							<div class="col-sm-9">
								<p class="form-control-static" id="address_street_inp"><?php echo $curval ?></p>
							</div>
						</div>
						<?php $curval = date("d/m/Y H:i:s", strtotime($data["expiredfrom"])); ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Dari Tanggal</label>
							<div class="col-sm-9">
								<p class="form-control-static" id="expiredto_inp"><?php echo $curval ?></p>
							</div>
						</div>

						<?php $curval = date("d/m/Y H:i:s", strtotime($data["expiredto"])); ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Sampai Tanggal</label>
							<div class="col-sm-9">
								<p class="form-control-static" id="expiredto_inp"><?php echo $curval ?></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<?php

		// START LAMPIRAN

		if (isset($lampiran) && !empty($lampiran)) {

			// if(!empty($v['vsd_document'])){
		?>
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>LAMPIRAN</h5>
							<div class="ibox-tools">
								<a class="collapse-link">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="ibox-content">

							<table class="table table-bordered default">
								<thead>
									<tr>
										<th>No</th>
										<th>Deskripsi</th>
										<th>File</th>
									</tr>
								</thead>

								<tbody>
									<?php foreach ($lampiran as $k => $v) { ?>
										<tr>
											<td><?php echo $k + 1 ?></td>
											<td><?php echo $v['vsd_description'] ?></td>
											<td><a href="<?php echo site_url('log/download_attachment/' . $dir . '/' . $v['vsd_document']) ?>" target="_blank">
													<!-- ngambil file upload dari variabel $dir di controler vendor.php -->
													<?php echo $v['vsd_document'] ?>
												</a></td>
										</tr>

									<?php } ?>
								</tbody>
							</table>

						</div>

					</div>
				</div>
			</div>
		<?php }  //} 
		?>
		<?php $i = 0;
		// END LAMPIRAN

		include(VIEWPATH . "/comment_v.php") ?>

		<div class="row">
			<div class="col-md-12">
				<div style="margin-bottom: 60px;">
					<?php echo buttonsubmit('vendor/kinerja_vendor/aktivasi_suspend_vendor', lang('back'), lang('save')) ?>
				</div>
			</div>
		</div>

	</form>
</div>