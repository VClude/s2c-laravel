<style>

	.barcode {
		border: 1px solid black;
		width: 420px;
		font-family: Arial;
		padding: 8px;
	}
	.head{
		border-bottom: 1px solid #000;
		height: 50px;
	}
	.head-title{
		float: left;
		width: 240px;
	}
	.icon{
		float: right;
		width: 100px;
	}
	.icon img{
		width: 100px;
	}
	.barcode_gen{
		width: 420px;
		padding-bottom: 8px;
	}
.body{
	padding-top: 8px;
	text-align: center;
	font-size: 11pt;
}
.barang{
	font-size: 10pt;
}
.subtitle{
	font-size: 10pt;
}
.title{
	font-weight: bold;
	font-style: italic;
	font-size: 14pt;
}
</style>

<div class="barcode">

	<div class="head">
		<div class="head-title">
			<div class="title">
				DO NOT REMOVE
			</div>
			<div class="subtitle">
				Property of ASDP Indonesian Ferry
			</div>
		</div>
		<div class="icon">
			<img src="<?php echo base_url('assets/img/logo.png') ?>">
		</div>
	</div>

	<div class="body">
	<img src="data:image/png;base64,<?php echo base64_encode($barcode_gen) ?>" class="barcode_gen">
		No Aset :<?php echo $barcode ?>
		<br/>
		<span class="barang"><?php echo $nama ?></span>
	</div>

</div>

<script type="text/javascript">
	
	window.print();

</script>