<?php if ($html->img_top_1_html): ?>
	
	<div class="col-md-4 header-top top_1">
		<?php if (!isset($downloadable_version)): ?>
			<input hspace="html" dir="top" style="display: none;" id="img_top_1_html" type="file" class="jfilestyle top image"/>
			<div style="display: none;" class="buttons_interface image top img_top_1_html"><i class="fa fa-camera"></i></div>
		<?php endif ?>
		<a href=""><img width="390" height="160" class="img_top_1_html" src="<?= base_url('/mobile_blue/top/'.$html->img_top_1_html) ?>" alt="<?= alt($html->img_top_1_html) ?>"/></a>
	</div>  
	
<?php endif ?>

<?php if ($html->img_top_2_html): ?>
	
	<div class="col-md-4 header-top top_2">
		<?php if (!isset($downloadable_version)): ?>
			<input hspace="html" dir="top" style="display: none;" name="img_top_2_html" id="img_top_2_html" type="file" class="jfilestyle top image"/>
			<div id="img_top_2_html" style="display: none;" class="buttons_interface image top img_top_2_html"><i class="fa fa-camera"></i></div>
		<?php endif ?>
		<a href=""><img width="390" height="160" class="img_top_2_html" src="<?= base_url('/mobile_blue/top/'.$html->img_top_2_html) ?>" alt="<?= alt($html->img_top_2_html) ?>"/></a>
	</div>  
	
<?php endif ?>

<?php if ($html->img_top_3_html): ?>
	
	<div class="col-md-4 header-top top_3">
		<?php if (!isset($downloadable_version)): ?>
			<input hspace="html" dir="top" style="display: none;" name="img_top_3_html" id="img_top_3_html" type="file" class="jfilestyle top image"/>
			<div id="img_top_3_html" style="display: none;" class="buttons_interface image top img_top_3_html"><i class="fa fa-camera"></i></div>
		<?php endif ?>
		<a href=""><img width="390" height="160" class="img_top_3_html" src="<?= base_url('/mobile_blue/top/'.$html->img_top_3_html) ?>" alt="<?= alt($html->img_top_3_html) ?>"/></a>
	</div>  
<?php endif ?>

<?php if (!isset($downloadable_version)): ?>
	<input id="folder_template" type="hidden" value="<?= $folder_template ?>"/>
	<input id="id_html" type="hidden" value="<?= $id_html ?>"/>
<?php endif ?>