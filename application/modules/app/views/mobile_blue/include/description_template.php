<div class="cont1 span_2_of_a1">
	<div id=""><h1 id="text_name_product"><?= $html->name_product ?></h1><button id="name_product"  class="toggle_text buttons_toggle"><i class="fa fa-pencil"></i></button></div>
	
	
    <div class="price_single">
    	
    	<?php if ($html->old_price): ?>
			
			<span id="text_old_price" class="reducedfrom"><?= $html->old_price ?>€</span><button id="old_price"  class="toggle_text buttons_toggle"><i class="fa fa-pencil"></i></button>
			
		<?php endif ?>
	  
	  <span id="text_price" class="actual"><?= $html->price ?>€</span><button id="price"  class="toggle_text buttons_toggle" ><i class="fa fa-pencil"></i></button>
	</div>
	
	
	<p id="dpro_description_product" class="dpro quick_desc"><?= $html->description_product ?></p>
	
    <button id="description_product"  class="toggle buttons_toggle"><i class="fa fa-pencil"></i></button>
    
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