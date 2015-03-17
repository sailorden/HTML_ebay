<?php foreach ($menu as $key => $value): ?>
	
	<div style="display: none;" id="form-menu<?= $value->id_menu ?>" role="form">
		
		<div id="modal_form_menu<?= $value->id_menu ?>" title="Editar Menú">
	
			<div class="form-group">
			    <label for="name_menu">Nombre</label>
			    <input size="59" type="text" name="name_menu" id="name_menu" value="<?= $value->name_menu ?>">
			</div>
			
			<div class="form-group">
			    <label for="social_rss">Link</label>
			    <input size="59" type="text" name="link_menu" id="link_menu" value="<?= $value->link_menu ?>">
			</div>
			
			<div class="form-group image_modal_form">
		  	
			    <input accesskey="<?= $value->id_menu ?>" hspace="menu" dir="image" id="icono_menu" type="file" class="jfilestyle menu image"/>
				<div class="buttons_interface menu icono_menu"><i class="fa fa-camera"></i></div>
				<a href="">
				<?php if($value->icono_menu == NULL OR $value->icono_menu == ""): ?> 
					
					<img width="40" height="40" class="icono_menu" src="<?= base_url('/mobile_blue/image/icono_example.jpg') ?>" alt="<?= alt($value->icono_menu) ?>"/>
				
				<?php else: ?> 
					
					<img width="40" height="40" class="icono_menu" src="<?= base_url('/mobile_blue/image/'.$value->icono_menu) ?>" alt="<?= alt($value->icono_menu) ?>"/>
					
				<?php endif; ?> 
				</a>
			
		  	</div>
			
			<button accesskey="<?= $value->id_menu ?>" class="buttons_interface each" hspace="menu"><i class="fa fa-save"></i></button>
		
		</div>
		
	</div>
	
<?php endforeach ?>