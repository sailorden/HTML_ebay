<!DOCTYPE html>

<html lang="<?= $lang;?>">
	<head>
		
		<?php
			
			$meta = array(
		        array('name' => 'robots', 'content' => $robots),
		        array('name' => 'description', 'content' => $description),
		        array('name' => 'keywords', 'content' => $keywords),
		        array('name' => 'title', 'content' => $title),
		        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		    );
			
		?>
		
		<?=  meta($meta); ?>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

		<title><?= $title; ?></title>
		
		<?php $this->load->view('css/css') ?>
		<?php $this->load->view('js/js') ?>

	</head>
	
	<body <?php if(isset($reference)): ?>id="<?= $reference ?>"<?php endif ?>>
		<!-- START PAGE CONTAINER -->
		<div class="body"></div>
		<div class="grad"></div>
		<?php $this->load->view('header') ?>
		<?php $this->load->view($view) ?>
		<!-- END PAGE CONTAINER -->
	</body>
	
</html>