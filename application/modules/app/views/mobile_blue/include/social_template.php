<?php if ($social): ?>

 <ul class="social">
 	
 	<?php if ($social->social_facebook != NULL AND $social->social_facebook != ""): ?>
 		
 		<li><a target="_blank" href="<?= $social->social_facebook ?>"> <i class="fb"> </i> </a></li>
		 
	<?php endif ?>
	
	<?php if ($social->social_twitter != NULL AND $social->social_twitter != ""): ?>
		
		<li><a target="_blank" href="<?= $social->social_twitter ?>"><i class="tw"> </i> </a></li>
		 
	<?php endif ?>
	
	<?php if ($social->social_rss != NULL AND $social->social_rss != ""): ?>
		
		<li><a target="_blank" href="<?= $social->social_rss ?>"><i class="fb"> </i> </a></li>
		 
	<?php endif ?>
	
	<?php if ($social->social_plus != NULL AND $social->social_plus != ""): ?>
		
		<li><a target="_blank" href="<?= $social->social_plus ?>"><i class="fb"> </i> </a></li>
		 
	<?php endif ?>
	
	<?php if ($social->social_linkedin != NULL AND $social->social_linkedin != ""): ?>
		
		<li><a target="_blank" href="<?= $social->social_linkedin ?>"><i class="fb"> </i> </a></li>
		 
	<?php endif ?>
	
	<?php if ($social->social_youtube != NULL AND $social->social_youtube != ""): ?>
		
		<li><a target="_blank" href="<?= $social->social_youtube ?>"><i class="utube"> </i> </a></li>
		 
	<?php endif ?>
	
	<?php if ($social->social_skype != NULL AND $social->social_skype != ""): ?>
		
		<li><a target="_blank" href="<?= $social->social_skype ?>"><i class="fb"> </i> </a></li>
		 
	<?php endif ?>
	
	<?php if ($social->social_pinterest != NULL AND $social->social_pinterest != ""): ?>
		 
		 <li><a target="_blank" href="<?= $social->social_pinterest ?>"><i class="pin"> </i> </a></li>
		 
	<?php endif ?>
	
	<?php if ($social->social_instagram != NULL AND $social->social_instagram != ""): ?>
		 
		 <li><a target="_blank" href="<?= $social->social_instagram ?>"><i class="instagram"> </i> </a></li>
		 
	<?php endif ?>
	
 </ul>
 
 <?php endif ?>
 
 <?php if (!isset($downloadable_version)): ?>
 	<div dir="social_600_840" id="modal_form" <?php if(!isset($is_change)): ?>style="display: none;"<?php endif; ?> class="buttons_interface social modal_form"><i class="fa fa-pencil"></i></div>
 <?php endif ?>
	<div class="clearfix"></div>

 <?php if (!isset($downloadable_version)): ?>
 	
	<?php if(!$this->input->is_ajax_request()): ?>
		
		<?php $this->load->view('include/modal_form/modal_social') ?>
		
	<?php endif; ?>
	
 <?php endif ?>
