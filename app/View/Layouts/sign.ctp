<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Admin Eic panel">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<?php echo $this->fetch('meta'); ?>
	<title>Admin | secure</title>
	<?php echo $this->Html->css('bootstrap'); ?>
	<?php echo $this->Html->css('bootstrap-responsive'); ?>
	<?php echo $this->Html->css('style'); ?>
	<?php echo $this->fetch('css'); ?>
	<!--[if IE 8]>
	<link href="css/ie8.css" rel="stylesheet">
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="login">
				 <?php echo $this->Session->flash(); ?>
                 <?php echo $this->fetch('content'); ?>
				</div>
			</div>
		</div>
	</div>
    <?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'); ?>
	<?php echo $this->Html->script('bootstrap'); ?>
	<?php echo $this->fetch('script'); ?>
</body>
</html>