<div class="cont1 span_2_of_a1">
	<h1 id="text_name_product"><?= $html->name_product ?></h1>
	<?php if (!isset($downloadable_version)): ?>
		<button id="name_product" hspace="html" style="display: none;" class="buttons_interface text"><i class="fa fa-pencil"></i></button>
	<?php endif ?>
	
	
    <div class="price_single">
    	
    	<?php if ($html->old_price): ?>
			
			<span class="reducedfrom"><span id="text_old_price"><?= $html->old_price ?></span>€</span>
			<?php if (!isset($downloadable_version)): ?>
				<button id="old_price" hspace="html" class="buttons_interface text"><i class="fa fa-pencil"></i></button>
			<?php endif ?>
			
		<?php endif ?>
	  
	  <span class="actual"><span id="text_price"><?= $html->price ?></span>€</span>
	  <?php if (!isset($downloadable_version)): ?>
	  		<button hspace="html" style="display: none;" id="price"  class="buttons_interface text" ><i class="fa fa-pencil"></i></button>
	  <?php endif ?>
	</div>
	
	
	<p id="dpro_description_product" class="dpro quick_desc"><?= $html->description_product ?></p>
	<?php if (!isset($downloadable_version)): ?>
    	<button id="description_product" hspace="html" style="display: none;" class="buttons_interface textarea"><i class="fa fa-pencil"></i></button>
    <?php endif ?>
    
    <div class="row">
    	<div class="col-md-6">
    		<img src="<?= base_url('/mobile_blue/image/animado.gif') ?>"/>
    	</div>
    	<div class="col-md-6">
    		<img src="<?= base_url('/mobile_blue/image/animado.gif') ?>"/>
    	</div>
    </div>
    
</div>

<div class="clearfix"> </div>