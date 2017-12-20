<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/bootstrap.min.css') ?> ">

	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/modules/header.css') ?> ">
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/modules/main.css') ?> ">
	
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/font-awesome.min.css') ?>">

	<script type="text/javascript" src=" <?php echo base_url('assets/js/jquery.min.js') ?> "></script>
	<script type="text/javascript" src=" <?php echo base_url('assets/js/bootstrap.min.js') ?> "></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/normalize.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/flag.min.css') ?>">

	<script type="text/javascript" src="<?php echo base_url('assets/js/modules/main.js') ?>"></script>

</head>
<body style="background: #eeeeee;">

	<?php echo $header ?>
	<?php echo $banner ?>

	<div class="container-fluid" style="">
		<?php echo $about_radio ?>
		<?php echo $program ?>
	</div>

	<?php echo $footer; ?>

	<?php echo $radio_player ?>

	<?php echo $request_lagu ?>

</body>
</html>