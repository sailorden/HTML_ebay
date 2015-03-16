<?php if ($menu): ?>
	
  	<div class="menu_head">
  		<button id="name_menu" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> hspace="html" class="buttons_interface text"><i class="fa fa-pencil"></i></button>
  		<h3 id="text_name_menu" class="menu_head"><?= $html->name_menu ?></h3>
  		
	</div>
     <ul class="nav">
     	
     	<?php foreach ($menu as $key => $value): ?>
			 
			 <li>
			 	<a href="<?= $value->link_menu ?>"><?= $value->name_menu ?></a>
				<button id="name_submenu" hspace="tabs" dir="<?= 'id_tab.'.$value->id_tab ?>" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> class="buttons_interface menu edit">
					<i class="fa fa-pencil"></i></button>
				<button id="delete_menu" dir="<?= 'id_menu.'.$value->id_menu ?>" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> class="buttons_interface menu delete">
					<i class="fa fa-remove"></i></button>
		 	</li>
			 
		 <?php endforeach ?>
		 
		 <li class="button"><button id="add_menu" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> class="buttons_interface menu add"><i class="fa fa-plus"></i></button></li>
     	
   	 </ul>
	   	 
	
<?php endif ?>


