<?php if ($tabs): ?>
	
	<ul id="list_tabs" class="resp-tabs-list">
		
		<?php foreach ($tabs as $key => $value): ?>
			
			<li id="tab-<?= $key ?>" class="resp-tab-item" aria-controls="tab_item-<?= $key ?>" role="tab">
				<span id="<?= 'text_name_tab.id_tab.'.$value->id_tab ?>"><?= $value->name_tab ?></span>
				<?php if (!isset($downloadable_version)): ?>
					<button id="name_tab" hspace="tabs" dir="<?= 'id_tab.'.$value->id_tab ?>" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> class="buttons_interface text">
						<i class="fa fa-pencil"></i></button>
					<button id="delete_tab" dir="<?= 'id_tab.'.$value->id_tab ?>" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> class="buttons_interface tab delete"><i class="fa fa-remove"></i></button>
				<?php endif ?>
			</li>
			 
		<?php endforeach ?>
	
	</ul>
	
	<?php if (count($tabs) < 5): ?>
		
		<?php if (!isset($downloadable_version)): ?>
			<button id="add_tab" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> class="buttons_interface tab add"><i class="fa fa-plus"></i></button>
		<?php endif ?>
			
	<?php endif ?>
	
	<div id="description_tabs" class="resp-tabs-container">
		
		<?php foreach ($tabs as $key => $value): ?>
			
			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-<?= $key ?>">
				<div class="facts">
				  	<ul class="tab_list">
				  		<li><p id="<?= 'dpro_text_tab.id_tab.'.$value->id_tab ?>"><?= $value->text_tab ?></p></li>
				  		<?php if (!isset($downloadable_version)): ?>
					  		<li>
					  			<button id="text_tab" hspace="tabs" dir="<?= 'id_tab.'.$value->id_tab ?>" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> class="buttons_interface textarea"><i class="fa fa-pencil"></i></button>
				  			</li>
			  			<?php endif ?>
			  		</ul>           
		        </div>
		     </div>	
			 
		<?php endforeach ?>
	
	</div>
	
<?php endif ?>