<?php if ($tabs): ?>
	
	<div class="sap_tabs">	
 		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
 			<ul class="resp-tabs-list">
 				
	 			<?php foreach ($tabs as $key => $value): ?>
	 				
	 				<li class="resp-tab-item" aria-controls="tab_item-<?= $key ?>" role="tab"><span><?= $value->name_tab ?></span></li>
					 
				<?php endforeach ?>
			
			</ul>
			
			<div class="resp-tabs-container">
				
				<?php foreach ($tabs as $key => $value): ?>
	 				
	 				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-<?= $key ?>">
						<div class="facts">
						  	<ul class="tab_list">
						  		<li><a href="#"><?= $value->text_tab ?></a></li>
					  		</ul>           
				        </div>
				     </div>	
					 
				<?php endforeach ?>
			
			</div>
			
		</div>
	</div>	
	
<?php endif ?>