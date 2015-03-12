<?php if ($menu): ?>
	
	<div class="menu_box">
	  	<div class="menu_head">
	  		<button id="name_menu"  class="buttons_interface text"><i class="fa fa-pencil"></i></button>
	  		<h3 id="text_name_menu" class="menu_head"><?= $html->name_menu ?></h3>
	  		
  		</div>
	     <ul class="nav">
	     	
	     	<?php foreach ($menu as $key => $value): ?>
				 
				 <li><a href="<?= $value->link_menu ?>"><?= $value->name_menu ?></a></li>
				 
			 <?php endforeach ?>
	     	
	   	 </ul>
	</div>
	
<?php endif ?>


