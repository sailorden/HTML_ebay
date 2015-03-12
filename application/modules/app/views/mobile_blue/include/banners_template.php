<?php if ($html->banner_1): ?>
	
	<div class="side_banner">
	   <input hspace="html" dir="banners" style="display: none;" name="banner_1" id="banner_1" type="file" class="jfilestyle banner image"/>
	   <div style="display: none;" class="buttons_interface image banner banner_1"><i class="fa fa-camera"></i></div>
	   <div class="banner_img"><img width="270" height="327" class="banner_1" src="<?= base_url('/mobile_blue/banners/'.$html->banner_1) ?>" class="img-responsive" alt="<?= alt($html->banner_1) ?>"/></div>
	</div>
	
<?php endif ?>

<?php if ($html->banner_2): ?>
	
	<div class="side_banner">
		<input hspace="html" dir="banners" style="display: none;" name="banner_2" id="banner_2" type="file" class="jfilestyle banner banner_2 image"/>
	   <div style="display: none;" class="buttons_interface image banner banner_2"><i class="fa fa-camera"></i></div>
	   <div class="banner_img"><img width="270" height="210" class="banner_2" src="<?= base_url('/mobile_blue/banners/'.$html->banner_2) ?>" class="img-responsive" alt="<?= alt($html->banner_2) ?>"/></div>
	</div>
	
<?php endif ?>