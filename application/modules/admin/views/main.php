<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/bootstrap.min.css') ?> ">
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/quill.snow.css') ?> ">

	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/font-awesome.min.css') ?>">

	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/modules/admin.css') ?> ">

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	

</head>
<body class="admin" style="background: #eeeeee;">

	<?php echo $header; ?>

	<?php echo $content; ?>

	<?php echo $pagination; ?>

</body>
</html>