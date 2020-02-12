<div class="wrapper wrapper-content animated fadeInRight">

	<form method="post" action="<?php echo site_url($submit_url);?>"  class="form-horizontal ajaxform">

		<input type="hidden" name="id" value="<?php echo $id ?>">

		<?php 

		foreach ($content as $key => $value) {
			include($value['awc_type']."/".$value['awc_file'].".php");
		}

		?>

		<?php if(isset($readonly)){
			$back = buttonback($back_url,lang('back'));
		} else {
			$i = 0;
			include(VIEWPATH."/comment_workflow_attachment_v.php");
			$back = buttonsubmit($back_url,lang('back'),lang('save'));
		}
		echo $back; ?>

	</form>
</div>

<script type="text/javascript">localStorage.setItem('dialogshow', "");</script>

