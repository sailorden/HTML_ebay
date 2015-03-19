<div style="display: none" id="form-style" title="Estilo de la plantilla">
	<div id="modal_form_style" role="form">
		
		<div class="form-group">
			<label for="primary_color">Color primario:</label>
			#<input size="59" type="text" style="border-right:20px solid #<?= $style->primary_color ?>;" name="primary_color" id="primary_color" class="picker" value="<?= $style->primary_color ?>">
		</div>
		  
		<div class="form-group">
			<label for="secondary_color">Color secundario:</label>
			#<input size="59" type="text" style="border-right:20px solid #<?= $style->secondary_color ?>;" name="secondary_color" id="secondary_color" class="picker" value="<?= $style->secondary_color ?>">
		</div>
		  
		<div class="form-group">
			<label for="background_color">Color de fondo:</label>
			#<input size="59" type="text" style="border-right:20px solid #<?= $style->background_color ?>;" name="background_color" id="background_color" class="picker" value="<?= $style->background_color ?>">
		</div>
		  
		<div class="form-group image_modal_form">
		  	
		    <input accesskey="<?= $style->id_style ?>" hspace="style" dir="image" id="background_image" type="file" class="jfilestyle style image"/>
			<div class="buttons_interface style background_image"><i class="fa fa-camera"></i></div>
			
			<?php if($style->background_image != "") : ?>
			
			<a href=""><img width="300" height="300" class="background_image" src="<?= base_url('/mobile_blue/image/'.$style->background_image) ?>" alt="<?= alt($value->background_image) ?>"/></a>
			
			<?php else : ?>
				
			<a href=""><img width="" height="" class="background_image" src="<?= base_url('/mobile_blue/image/bg.jpg') ?>" alt="bg.jpg"/></a>
				
			<?php endif; ?>
			<button accesskey="<?= $style->id_style ?>" <?php if(!$style->background_image) : ?>style="display: none;"<?php endif; ?> hspace="style" dir="image" id="background_image" class="image_delete delete_background_image"><i class="fa fa-remove"></i></button>
				
			
	  	</div>
		
		<div class="form-group style">
			<button class="buttons_interface style" hspace="style"><i class="fa fa-save"></i></button>
		</div>
	  
	</div>
</div>


