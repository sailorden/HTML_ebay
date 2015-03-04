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
		
		<?php $this->load->view('css_module/css_module') ?>
		

	</head>
	
	<body class="bg-html">
		
		<div class="">
			
			<div class="container">
				
				<div class="row">
					
					<?php $this->load->view('include/top_template') ?>
					
					<?php $this->load->view('include/social_template') ?>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="main">
			
	  		<div class="content_box">
	  			
	  			<div class="container">
	  				
					<div class="row">
						
						<?php $this->load->view('include/menu_template') ?>
						
					</div>
					
				</div>
	  			
	  		</div>
	  		
	  	</div>

		<!-- END PAGE CONTAINER -->
	</body>
	
</html>