<?php if ($tabs): ?>
	
	<div class="sap_tabs">	
 		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
 			<ul class="resp-tabs-list">
 				
	 			<?php foreach ($tabs as $key => $value): ?>
	 				
	 				<li class="resp-tab-item" aria-controls="tab_item-<?= $key ?>" role="tab">
	 					<span id="text_name_tab"><?= $value->name_tab ?></span>
	 					<button id="name_tab" hspace="tabs" dir="<?= 'id_tab.'.$value->id_tab ?>" style="display: none;" class="buttons_interface text"><i class="fa fa-pencil"></i></button>
 					</li>
					 
				<?php endforeach ?>
				
				<li class="resp-tab-item resp-tab-active plus" role="tab">
 					<button id="name_tab" style=" relative; display: none;" class="buttons_interface tab"><i class="fa fa-plus"></i></button>
				</li>
			
			</ul>
			
			<div class="resp-tabs-container">
				
				<?php foreach ($tabs as $key => $value): ?>
	 				
	 				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-<?= $key ?>">
						<div class="facts">
						  	<ul class="tab_list">
						  		<li><p id="dpro_text_tab"><?= $value->text_tab ?></p></li>
						  		<li><button id="text_tab" hspace="tabs" dir="<?= 'id_tab.'.$value->id_tab ?>" style="display: none;" class="buttons_interface textarea"><i class="fa fa-pencil"></i></button></li>
					  		</ul>           
				        </div>
				     </div>	
					 
				<?php endforeach ?>
			
			</div>
			
		</div>
	</div>	
	
<?php endif ?>