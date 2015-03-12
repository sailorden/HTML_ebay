<div class="cont1 span_2_of_a1">
	<h1 id="text_name_product"><?= $html->name_product ?></h1><button id="name_product"  class="buttons_interface text"><i class="fa fa-pencil"></i></button>
	
	
    <div class="price_single">
    	
    	<?php if ($html->old_price): ?>
			
			<span class="reducedfrom"><span id="text_old_price"><?= $html->old_price ?></span>€</span><button id="old_price"  class="buttons_interface text"><i class="fa fa-pencil"></i></button>
			
		<?php endif ?>
	  
	  <span class="actual"><span id="text_price"><?= $html->price ?></span>€</span><button id="price"  class="buttons_interface text" ><i class="fa fa-pencil"></i></button>
	</div>
	
	
	<p id="dpro_description_product" class="dpro quick_desc"><?= $html->description_product ?></p>
	
    <button id="description_product"  class="buttons_interface textarea"><i class="fa fa-pencil"></i></button>
    
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