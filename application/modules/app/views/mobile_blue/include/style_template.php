<style>
		
	<?php if ($style): ?>
		
		<?php if ($style->primary_color): ?>
		
		 	h3.menu_head, ul.nav li:hover, .resp-tab-item:hover, .resp-tab-active{
				background: <?= '#'.$style->primary_color ?> !important;
			}
			
			.shipping h3 {
			  	background-color: <?= '#'.$style->primary_color ?> !important;
			}
			
			span.actual {
				color: <?= '#'.$style->primary_color ?> !important;
			}
		
		<?php endif ?>
		
		<?php if ($style->secondary_color): ?>
		 	
		 	ul.nav, ul.women_pagenation li.active a, ul.women_pagenation li a:hover, .contact-form input[type="submit"]:hover, .acount-btn:hover, 
		 		.login-right input[type="submit"]:hover, .register-but input[type="submit"]:hover{
				background: <?= '#'.$style->secondary_color ?> !important;
			}
		
		<?php endif ?>
	
		html,body{
			
			<?php if ($style->background_color): ?>
			
			 	background: <?= '#'.$style->background_color ?> !important;
			
			<?php endif ?>
			
			<?php if ($style->background_image): ?>
			
				background: url(../mobile_blue/images/<?=$style->background_image?>) repeat center top;
			
			<?php endif ?>
		}
		
		
		
	<?php endif ?>
	
</style>