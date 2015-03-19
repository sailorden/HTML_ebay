
	<div id="modal_form_carrusel" role="form">
		
		<div class="form-group">
		<?php foreach ($carrusel as $key => $value): ?>
			
			<div class="col-sm-6">
				<img class="<?= 'image_carrusel_'.$value->id_carrusel ?>" width="509" height="509" src="<?= base_url('/mobile_blue/carrusel/'.$value->image_carrusel) ?>" alt="<?= alt($value->image_carrusel) ?>"/>
				<button accesskey="<?= 'id_carrusel.'.$value->id_carrusel ?>" dir="<?= $value->id_carrusel ?>" id="image_carrusel" class="buttons_interface carrusel delete images_delete" hspace="carrusel"><i class="fa fa-remove"></i></button>
			</div>

			
		<?php endforeach ?>
		</div>

		<div class="form-group buttons">
			<div class="buttons_interface carrusel add ">
				<input accesskey="<?= $id_html ?>" hspace="carrusel" dir="carrusel" id="image_carrusel" type="file" class="jfilestyle carrusel add images"/>
				<div class="image_carrusel"><i class="fa fa-camera"></i></div>
			</div>
			<button class="buttons_interface carrusel save" hspace="carrusel"><i class="fa fa-save"></i></button>
		</div>
	  
	</div>


