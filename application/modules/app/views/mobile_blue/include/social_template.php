<div class="col-md-12 header_right">
	
	<?php if ($social): ?>
	
	 <ul class="social">
	 	
	 	<?php if ($social->social_facebook != NULL AND $social->social_facebook != ""): ?>
	 		
	 		<li><a target="_blank" href="<?= $social->social_facebook ?>"> <i class="fb"> </i> </a></li>
			 
		<?php endif ?>
		
		<?php if ($social->social_twitter != NULL AND $social->social_twitter != ""): ?>
			
			<li><a target="_blank" href="<?= $social->social_twitter ?>"><i class="tw"> </i> </a></li>
			 
		<?php endif ?>
		
		<?php if ($social->social_youtube != NULL AND $social->social_youtube != ""): ?>
			
			<li><a target="_blank" href="<?= $social->social_youtube ?>"><i class="utube"> </i> </a></li>
			 
		<?php endif ?>
		
		<?php if ($social->social_pinterest != NULL AND $social->social_pinterest != ""): ?>
			 
			 <li><a target="_blank" href="<?= $social->social_pinterest ?>"><i class="pin"> </i> </a></li>
			 
		<?php endif ?>
		
		<?php if ($social->social_instagram != NULL AND $social->social_instagram != ""): ?>
			 
			 <li><a target="_blank" href="<?= $social->social_instagram ?>"><i class="instagram"> </i> </a></li>
			 
		<?php endif ?>
		
	 </ul>
	 
	 <?php endif ?>
	 
	 <div style="background-color: white;font-size: 1.3em;left: 179px;opacity: 0.7;padding: 5px 10px;position: absolute;top: -9%; cursor: pointer;" class="floating_buttons"><i class="fa fa-pencil"></i></div>
	<div class="clearfix"></div>
</div>

