<div class="cont1 span_2_of_a1">
	<h1 id="text_name_product"><?= $html->name_product ?></h1>
	<?php if (!isset($downloadable_version)): ?>
		<button id="name_product" hspace="html" style="display: none;" class="buttons_interface text"><i class="fa fa-pencil"></i></button>
	<?php endif ?>
	
	
    <div class="price_single">
    	
    	<?php if ($html->old_price): ?>
			
			<span class="reducedfrom"><span id="text_old_price"><?= $html->old_price ?></span>€</span>
			<?php if (!isset($downloadable_version)): ?>
				<button id="old_price" style="display: none;" hspace="html" class="buttons_interface text"><i class="fa fa-pencil"></i></button>
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
    
    <div class="row animations">
    	<div class="col-md-6">
    		<?php if (!isset($downloadable_version)): ?>
				<input hspace="html" dir="image" style="display: none;" id="animation_1" type="file" class="jfilestyle animation image"/>
				<div style="display: none;" class="buttons_interface image animation animation_1"><i class="fa fa-camera"></i></div>
			<?php endif ?>
    		<img width="167" height="104" class="animation_1" src="<?= base_url('/mobile_blue/image/animado.jpg') ?>"/>
    	</div>
    	<div class="col-md-6">
    		<?php if (!isset($downloadable_version)): ?>
				<input hspace="html" dir="image" style="display: none;" id="animation_2" type="file" class="jfilestyle animation image"/>
				<div style="display: none;" class="buttons_interface image animation animation_2"><i class="fa fa-camera"></i></div>
			<?php endif ?>
    		<img width="167" height="104" class="animation_2" src="<?= base_url('/mobile_blue/image/animado.jpg') ?>"/>
    	</div>
    </div>
    
</div>

<div class="clearfix"> </div>