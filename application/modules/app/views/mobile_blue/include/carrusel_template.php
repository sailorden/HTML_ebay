

<div id="etalage_carrusel" class="labout span_1_of_a1">
	<!-- start product_slider -->
	
	<?php if ($carrusel): ?>
		
		<ul id="etalage">
		
		<?php foreach ($carrusel as $key => $value): ?>
			
			<li>
				<img class="etalage_thumb_image" src="<?= base_url('/mobile_blue/carrusel/'.$value->image_carrusel) ?>" class="img-responsive" />
				<img class="etalage_source_image" src="<?= base_url('/mobile_blue/carrusel/'.$value->image_carrusel) ?>" class="img-responsive" />
			</li>
			
		<?php endforeach ?>
		
		</ul>
		
	<?php endif ?>
	
	<!-- end product_slider -->
</div>