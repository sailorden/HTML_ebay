<?php if ($html->shipping_image_1 OR $html->shipping_image_2 OR $html->shipping_image_3): ?>

<div class="shipping row">
	
  	<h3>Metodos de envío</h3>
  	
  	<?php if($html->shipping_image_1): ?>
  	
  		<div class="col-md-4">
  			<input hspace="html" dir="shipping" style="display: none;" name="shipping_image_1" id="shipping_image_1" type="file" class="jfilestyle shipping image"/>
	   		<div style="display: none;" class="buttons_interface image shipping shipping_image_1"><i class="fa fa-camera"></i></div>
	      	<a href="#"><img width="360" height="160" class="shipping_image_1" src="<?= base_url('/mobile_blue/shipping/'.$html->shipping_image_1) ?>" alt="<?= alt($html->shipping_image_1) ?>"/></a>
		</div> 
  	
  	<?php endif ?>
  	
  	<?php if($html->shipping_image_2): ?>
  	
  		<div class="col-md-4">
  			<input hspace="html" dir="shipping" style="display: none;" name="shipping_image_2" id="shipping_image_2" type="file" class="jfilestyle shipping image"/>
	   		<div style="display: none;" class="buttons_interface image shipping shipping_image_2"><i class="fa fa-camera"></i></div>
	      	<a href="#"><img width="360" height="160" class="shipping_image_2" src="<?= base_url('/mobile_blue/shipping/'.$html->shipping_image_2) ?>" alt="<?= alt($html->shipping_image_2) ?>"/></a>
		</div> 
  	
  	<?php endif ?>
  	
  	<?php if($html->shipping_image_3): ?>
  	
  		<div class="col-md-4">
  			<input hspace="html" dir="shipping" style="display: none;" name="shipping_image_3" id="shipping_image_3" type="file" class="jfilestyle shipping image"/>
	   		<div style="display: none;" class="buttons_interface image shipping shipping_image_3"><i class="fa fa-camera"></i></div>
	      	<a href="#"><img width="360" height="160" class="shipping_image_3" src="<?= base_url('/mobile_blue/shipping/'.$html->shipping_image_3) ?>" alt="<?= alt($html->shipping_image_3) ?>"/></a>
		</div>
  	
  	<?php endif ?>
	 
</div>

<?php endif ?>