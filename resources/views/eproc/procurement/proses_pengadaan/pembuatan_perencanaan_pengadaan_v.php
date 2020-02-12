<div class="wrapper wrapper-content animated fadeInRight">
  <form method="post" action="<?php echo site_url($controller_name."/submit_pembuatan_perencanaan_pengadaan");?>"
    class="form-horizontal ajaxform">

<?php 

foreach ($content as $key => $value) {
	include($value['awc_type']."/".$value['awc_file'].".php");
}

?>

<?php 
    $i = 0;
    include(VIEWPATH."/comment_workflow_v.php") ?>

    <?php echo buttonsubmit('procurement/perencanaan_pengadaan/daftar_perencanaan_pengadaan',lang('back'),lang('save')) ?>

  </form>

</div>


<script type="text/javascript">
 
</script>