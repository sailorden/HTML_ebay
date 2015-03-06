<?php if ($html->shipping_image_1 OR $html->shipping_image_2 OR $html->shipping_image_3): ?>

<div class="shipping row">
	
  	<h3>Metodos de envío</h3>
  	
  	<?php if($html->shipping_image_1): ?>
  	
  		<div class="col-md-4">
	      	<a href="#"><img src="<?= base_url('/mobile_blue/image/'.$html->shipping_image_1) ?>" alt="<?= alt($html->shipping_image_1) ?>"/></a>
		</div> 
  	
  	<?php endif ?>
  	
  	<?php if($html->shipping_image_2): ?>
  	
  		<div class="col-md-4">
	      	<a href="#"><img src="<?= base_url('/mobile_blue/image/'.$html->shipping_image_2) ?>" alt="<?= alt($html->shipping_image_2) ?>"/></a>
		</div> 
  	
  	<?php endif ?>
  	
  	<?php if($html->shipping_image_3): ?>
  	
  		<div class="col-md-4">
	      	<a href="#"><img src="<?= base_url('/mobile_blue/image/'.$html->shipping_image_3) ?>" alt="<?= alt($html->shipping_image_3) ?>"/></a>
		</div> 
  	
  	<?php endif ?>
	 
</div>

<?php endif ?>