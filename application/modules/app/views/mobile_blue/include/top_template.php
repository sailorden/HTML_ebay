<?php if ($html->img_top_1_html): ?>
	
	<div class="col-md-4 header-top top_1">
		<form>
			<input name="img_top_1_html" id="img_top_1_html" type="file" class="jfilestyle top image" />
			<div style="display: none;" class="buttons_interface image top img_top_1_html"><i class="fa fa-pencil"></i></div>
		</form>
		<a href=""><img src="<?= base_url('/mobile_blue/top/'.$html->img_top_1_html) ?>" alt="<?= alt($html->img_top_1_html) ?>"/></a>
	</div>  
	
<?php endif ?>

<?php if ($html->img_top_2_html): ?>
	
	<div class="col-md-4 header-top top_2">
		<form>
			<input type="file" class="jfilestyle top" />
			<div id="img_top_2_html" style="display: none;" class="buttons_interface image top"><i class="fa fa-pencil"></i></div>
		</form>
		<a href=""><img src="<?= base_url('/mobile_blue/top/'.$html->img_top_2_html) ?>" alt="<?= alt($html->img_top_2_html) ?>"/></a>
	</div>  
	
<?php endif ?>

<?php if ($html->img_top_3_html): ?>
	
	<div class="col-md-4 header-top top_3">
		<form>
			<input type="file" class="jfilestyle top" />
			<div id="img_top_3_html" style="display: none;" class="buttons_interface image top"><i class="fa fa-pencil"></i></div>
		</form>
		<a href=""><img src="<?= base_url('/mobile_blue/top/'.$html->img_top_3_html) ?>" alt="<?= alt($html->img_top_3_html) ?>"/></a>
	</div>  
	
<?php endif ?>