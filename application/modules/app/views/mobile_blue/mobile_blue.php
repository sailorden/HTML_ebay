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
		
		<div id="style_html">
		
			<?php $this->load->view('include/style_template') ?>
		
		</div>
		
		<title><?= $title; ?></title>
		
		<?php $this->load->view('css_module/css_module') ?>
		
	</head>
	
	<?php if(!$this->input->is_ajax_request()) : ?>
			 
	 	<?php $this->load->view('include/modal_form/modal_style') ?>
	 
	 <?php endif ?>
	
	
	<body class="bg-html">
		
		<div class="">
			
			<div class="container">
				
				<div class="row">
					
					<?php $this->load->view('include/top_template') ?>
					
					<div id="content_social" class="col-md-12 header_right content_social">
						
						<?php $this->load->view('include/social_template') ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="main">
			
	  		<div class="content_box">
	  			
	  			<div class="container">
	  				
					<div class="row">
						
						<div class="col-md-3">
							
							<div id="menu_left" class="menu_box content_menu">
						
								<?php $this->load->view('include/menu_template') ?>
							
							</div>
							
							<?php $this->load->view('include/banners_template') ?>
						
						</div>
						
						<div class="col-md-9">
							
			   				<div class="singel_right">
			   					
			   					<?php $this->load->view('include/carrusel_template') ?>
							
								<?php $this->load->view('include/description_template') ?>
			   					
		   					</div>
		   					
		   					<div class="sap_tabs">	
		   						
 								<div id="horizontalTab">
		   						
	   								<?php $this->load->view('include/tabs_template') ?>
	   						
	   							</div>
						
							</div>
					
						</div>
						
					</div>
					
				</div>
	  			
	  		</div>
	  		
	  		<div class="container">
	  			
	  			<?php $this->load->view('include/shipping_template') ?>
	  			
  			</div>
  			

  			<div class="footer">
  				
				<div class="container">
					
					<?php $this->load->view('include/footer_template') ?>
					
				</div>
					
			</div>
	  		
	  	</div>

		<!-- END PAGE CONTAINER -->
	</body>
	
</html>