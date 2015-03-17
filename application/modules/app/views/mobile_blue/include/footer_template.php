<?php if ($html -> title_footer_1): ?>
	
	<div class="footer-grid">
		<h3><?= $html -> title_footer_1 ?></h3>
		<p id="dpro_text_footer_1" class="dpro quick_desc"><?= $html -> text_footer_1 ?></p>
		<?php if (!isset($downloadable_version)): ?>
			<button id="text_footer_1" hspace="html" style="display: none;" class="buttons_interface textarea"><i class="fa fa-pencil"></i></button>
		<?php endif ?>
	</div>
	
<?php endif ?>

<?php if ($html -> title_footer_2): ?>
	
	<div class="footer-grid">
		<h3><?= $html -> title_footer_2 ?></h3>
		<p id="dpro_text_footer_2" class="dpro quick_desc"><?= $html -> text_footer_2 ?></p>
		<?php if (!isset($downloadable_version)): ?>
			<button id="text_footer_2" hspace="html" style="display: none;" class="buttons_interface textarea"><i class="fa fa-pencil"></i></button>
		<?php endif ?>
	</div>
	
	
<?php endif ?>