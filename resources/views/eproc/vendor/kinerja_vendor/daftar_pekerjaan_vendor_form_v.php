<div class="wrapper wrapper-content animated fadeInRight">
	<form method="post" action="<?php echo site_url($controller_name . "/submit_daftar_pekerjaan"); ?>" class="form-horizontal">

		<input type="hidden" name="id" value="<?php echo $id ?>">

		<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Daftar Pekerjaan</h5>
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

						<?php $curval = date("d/m/Y H:i", strtotime($data["expiredfrom"])); ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Dari Tanggal</label>
							<div class="col-sm-9">
								<p class="form-control-static" id="dari_tgl_inp"><?php echo $curval ?></p>
							</div>
						</div>

						<?php $curval = date("d/m/Y H:i", strtotime($data["expiredto"])); ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Sampai Tanggal</label>
							<div class="col-sm-9">
								<p class="form-control-static" id="sampai_tgl_inp"><?php echo $curval ?></p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- START TABEL LAMPIRAN -->
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
								<?php

								// var_dump($lampiran);
								// die();
								//lampiran
								if (isset($lampiran) && !empty($lampiran)) {
									foreach ($lampiran as $k => $v) {
										if (!empty($v['vsd_document'])) {
											?>
											<tr>
												<td><?php echo $k + 1 ?></td>
												<td><?php echo $v['vsd_description'] ?></td>
												<td><a href="<?php echo site_url('log/download_attachment/' . $dir . '/' . $v['vsd_document']) ?>" target="_blank">
														<!-- ngambil file upload dari variabel $dir di controler vendor.php -->
														<?php echo $v['vsd_document'] ?>
													</a></td>
											</tr>

								<?php }
									}
								} ?>
							</tbody>
						</table>
						<!-- END TABEL LAMPIRAN -->
					</div>

				</div>
			</div>
		</div>



		<?php $i = 0;
		include(VIEWPATH . "/comment_workflow_v.php") ?>

		<div class="row">
			<div class="col-md-12">
				<div style="margin-bottom: 60px;">
					<?php echo buttonsubmit('vendor/daftar_pekerjaan', lang('back'), lang('save')) ?>
				</div>
			</div>
		</div>

	</form>
</div>