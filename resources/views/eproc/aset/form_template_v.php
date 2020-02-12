<div class="wrapper wrapper-content animated fadeInRight">

	<form method="post" action="<?php echo site_url($submit_url);?>"  class="form-horizontal ajaxform" novalidate>

		<input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="hidden" name="action" value="<?php echo $action ?>">

		<?php 

		foreach ($content as $key => $value) {
			$type = ($readonly) ? "view" : $value['awc_type'];
			include($type."/".$value['awc_file'].".php");
		}

		?>

		<?php if($readonly){
			$i = 0;
			include(VIEWPATH."/comment_view_attachment_v.php");
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

